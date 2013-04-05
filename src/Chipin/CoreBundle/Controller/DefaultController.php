<?php

namespace Chipin\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Chipin\CoreBundle\Entity\FrontUser;


class DefaultController extends Controller
{
    public function indexAction($name)
    {
    	

    	$user = new FrontUser();

    	$user->setEmail('asd@asd.pl');
    	$user->setUsersStatusID('2');
    	$user->setForename('Molęda');
    	$user->setSurname('Bartosz');
    	$user->setNickname('bmol');
    	$user->setPassword('124easda24re');
  //   	$user->setDateCreated(new DateTime('now'));
  //   	$user->setDateEdited(new DateTime('now'));
  //   	$user->setDateRegistered(new DateTime('now'));
  //   	$user->setDateActivate(new DateTime('now'));
		// $user->setDateDeleted(new DateTime('now'));


    	$IDsAllowedChars = '23456789abcdefghjkmnprstuvwxyz'; // 30 znakow

		$model = $this->getDoctrine()->getManager();
		$model->persist($user);
		//$model->flush();

        return $this->render('ChipinCoreBundle:Default:index.html.twig', array('name' => $name));
    }


}
