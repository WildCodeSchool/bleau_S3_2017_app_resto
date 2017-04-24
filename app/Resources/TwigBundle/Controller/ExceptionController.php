<?php

namespace AppRestoBundle\Controller

class ExceptionController extends controller
{
    public function _construct(Twig_Environment $twig, $debug)
    {
        return new Responce showAction(Request $request, FlattenException $exception, DebugLoggerInterface $logger = null)
    }
}
