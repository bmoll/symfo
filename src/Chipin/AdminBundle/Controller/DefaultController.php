<?php

namespace Chipin\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
//use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    protected $_site = array(
        'sideMenuConfigActiveItem' => 'homepage'

        );

    //protected $_orm = $this->getDoctrine();

    public function indexAction()
    {
    	$this->_site['sideMenuConfigActiveItem'] = 'homepage';

        return $this->render('ChipinAdminBundle:Default:baseFrame.html.twig', array('site' => $this->_site));
    }



    public function settingsAction()
    {
    	$this->_site['sideMenuConfigActiveItem'] = 'settings';

        return $this->render('ChipinAdminBundle:Default:baseFrame.html.twig', array('site' => $this->_site));
    }
}
