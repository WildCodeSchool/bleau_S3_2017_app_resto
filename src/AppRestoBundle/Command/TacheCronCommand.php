<?php

namespace AppRestoBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class TacheCronCommand extends ContainerAwareCommand {

    protected function configure()
    {
        $this
            ->setName('appresto:send')
            ->setDescription('Send newsletter each week.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em = $this->getContainer()->get('doctrine')->getEntityManager();

        $weekStart = new \DateTime("next Monday");
        $week = $em->getRepository('AppRestoBundle:Week')->findOneBy(array(
            'start_week' => $weekStart
        ));
        $days = $week->getDays();
        $daysWeeks = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi'];

        $message = \Swift_Message::newInstance()
            ->setSubject('Menu de la semaine')
            ->setFrom($this->getContainer()->getParameter('mailer_user'));
        $followers = $em->getRepository('AppRestoBundle:Follower')->findAll();
        foreach($followers as $follower){
            $url_unscribe = $this->getContainer()->get('router')->generate('app_resto_delete', array(
                'id' => $follower->getId()
            ), UrlGeneratorInterface::ABSOLUTE_URL);
            $message->setBody(
                $this->getContainer()->get('templating')->render('Emails/registration.html.twig', array(
                        'week' => $week,
                        'url_unscribe' => $url_unscribe,
                        'days' => $days,
                        'daysWeeks' => $daysWeeks,
                    )
                ),
                'text/html'
            );
            $message->setTo($follower->getMail());
            $this->getContainer()->get('mailer')->send($message);
        }

        $output->writeln(sprintf('Newsletter send'));
    }
}