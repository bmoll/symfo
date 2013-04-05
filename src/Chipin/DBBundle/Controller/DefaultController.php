<?php

namespace Chipin\DBBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

use Chipin\DBBundle\Entity\Frontuser;
use Chipin\DBBundle\Entity\Usersstatus;

class DefaultController extends Controller
{
    public function indexAction()
    {
		$model = $this->getDoctrine()->getManager();
		$status = $model->getRepository('ChipinDBBundle:Usersstatus')->find(2);




		$newestUser = new Frontuser();


    	$newestUser->setEmail('asd@asd.pl');
    	$newestUser->setUsersstatusid($status);
    	// $user->setForename('Molęda');
    	// $user->setSurname('Bartosz');
    	// $user->setNickname('bmol');
    	// $user->setPassword('124easda24re');

    	//$currentDate = new DateTime('now');



    	

		
		$model->persist($newestUser);
		$model->flush();

		return new Response('<pre>'.print_r($newestUser,true).'</pre>');

        //return $this->render('ChipinDBBundle:Default:index.html.twig', array('user' => $newestUser));
    }
}
