<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\EventListener;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use Symfony\component\EventDispatcher\EventSubscriberInterface;

/**
 * Description of RegistrationListener
 *
 * @author mounb
 */
class RegistrationListener implements EventSubscriberInterface{
    public static function getSubscribedEvents(){
        return array(
            FOSUserEvents::REGISTRATION_SUCCESS => 'onRegistrationSuccess');
    }
    public function onRegistrationSuccess(FormEvent $event) {
        $roles = array('ROLE_INSCRIT');
        $user = $event->getForm()->getData();
        $user->setRoles($roles);
        
    }  
}