<?php

namespace Ens\JobeetBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class JobeetCleanupCommand extends ContainerAwareCommand {

protected function configure()
    {
        $this
        ->setName('SendNews')
        ->setDescription('Send newsletter each week.')
        ;
    }

protected function execute(InputInterface $input, OutputInterface $output)
    {
        $days = $input->getArgument('days');

        $em = $this->getContainer()->get('doctrine')->getEntityManager();
        $nb = $em->getRepository('EnsJobeetBundle:Job')->cleanup($days);

        $output->writeln(sprintf('Removed %d stale jobs', $nb));
    }
}