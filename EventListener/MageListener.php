<?php

namespace Astrus\MagentoBundle\EventListener;

use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
 

class MageListener
{
   
    /**
     * @param GetResponseEvent $event
     */
    public function onKernelRequestInitApp(GetResponseEvent $event)
    {
        if (HttpKernelInterface::MASTER_REQUEST === $event->getRequestType()) {
              \Mage::app();
        }
    }
 

    /**
     * @param EventInterface $event
     */
     public function onKernelResponse(FilterResponseEvent $event)
     {
         $event->getRequest()->getSession()->save();
     }
}
