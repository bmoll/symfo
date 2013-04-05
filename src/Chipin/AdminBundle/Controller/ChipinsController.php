<?php

namespace Chipin\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

use Chipin\DBBundle\Entity\Chip;
//use Chipin\DBBundle\Entity\Usersaddress;
use Chipin\DBBundle\Entity\Currency;
use Chipin\DBBundle\Entity\Chipsstatus;

class ChipinsController extends DefaultController
{


    public function indexAction()
    {
    	$this->_site['sideMenuConfigActiveItem'] = 'chipIns/list';

        return $this->render('ChipinAdminBundle:Default:baseFrame.html.twig', array('_site' => $this->_site));
    }

    public function listAction()
    {
    	$this->_site['sideMenuConfigActiveItem'] = 'chipIns/list';
        $orm = $this->getDoctrine();
        $repoChipIns = $orm->getRepository('ChipinDBBundle:Chip');
        $chipInsList = $repoChipIns->findAll();
        
        $this->_site['chipins'] = $chipInsList;

        //die('<pre>'.print_r($frontUsersList,true).'</pre>');


        return $this->render('ChipinAdminBundle:Default:chipsList.html.twig', array('site' => $this->_site));
    }


    public function editAction($parameter = null, Request $request)
    {
    	$this->_site['sideMenuConfigActiveItem'] = 'chipIns/add';

        $orm = $this->getDoctrine()->getManager();
        $repoChipsStatus = $orm->getRepository('ChipinDBBundle:Chipsstatus');
        $repoCurrency = $orm->getRepository('ChipinDBBundle:Currency');
        $repoChip = $orm->getRepository('ChipinDBBundle:Chip');

        $chipsStatusList = $repoChipsStatus->findAll();
        $this->_site['chipsStatuses'] = $chipsStatusList;

        $currencyList = $repoCurrency->findAll();
        $this->_site['currencies'] = $currencyList;

        $this->_site['editableChip'] = null;


        if($parameter == 'new') {
            $this->_site['editableChip'] = new Chip();
        }
        elseif($parameter !== 'null') {
            $this->_site['editableChip'] = $repoFrontUsers->find($parameter);
            if(!$this->_site['editableChip']) {
                // nie znaleziono
            }
            else {

            }
        }
        else {
            // totalny blad.
        }

        if($request->isMethod('POST')) {
            // jezeli ponizsze warunki sa spelnione:
            // ...
            // zacznij analizowac dane
            $postData = $this->get('request')->request;

            // frontUser
            $this->_site['editableChip']->setSubject($postData->get('newChip_subject'));
            $this->_site['editableChip']->setChipsstatusid($repoChipsStatus->find($postData->get('newChip_status'))); 
            $this->_site['editableChip']->setNuclearsum($postData->get('newChip_nuclearSum'));
            $this->_site['editableChip']->setCurrencyid($repoCurrency->find($postData->get('newChip_currency'))); 
            $this->_site['editableChip']->setVisibility($postData->get('newChip_visibility'));

            if($parameter == 'new') $orm->persist($this->_site['editableChip']);

            $orm->flush();

            if($parameter == 'new') {
                return $this->redirect($this->generateUrl('chipin_admin_chipsList'));
            }
            else {
                return $this->redirect($this->generateUrl('chipin_admin_chipsEdit', array('parameter' => $this->_site['editableChip']->getId())));
            }

        }

        if($parameter != 'new' && $parameter !== null) {
            return $this->render('ChipinAdminBundle:Default:chipsEdit.html.twig', array('site' => $this->_site));
        }


        return $this->render('ChipinAdminBundle:Default:chipsEdit.html.twig', array('site' => $this->_site));
    

    }


}
