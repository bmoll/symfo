<?php

namespace Chipin\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

use Chipin\DBBundle\Entity\Frontuser;
use Chipin\DBBundle\Entity\Usersaddress;
use Chipin\DBBundle\Entity\Usersaccount;
use Chipin\DBBundle\Entity\Usersstatus;

class FrontusersController extends DefaultController
{

    public function indexAction()
    {
    	$this->_site['sideMenuConfigActiveItem'] = 'frontUsers/list';

        return $this->render('ChipinAdminBundle:Default:baseFrame.html.twig', array('site' => $this->_site));
    }

    public function listAction()
    {
    	$this->_site['sideMenuConfigActiveItem'] = 'frontUsers/list';

        $orm = $this->getDoctrine();
        $repoFrontUsers = $orm->getRepository('ChipinDBBundle:Frontuser');

        $frontUsersList = $repoFrontUsers->findBy(array(), array('datecreated' => 'DESC'));
        
        $this->_site['users'] = $frontUsersList;

        return $this->render('ChipinAdminBundle:Default:frontUsersList.html.twig', array('site' => $this->_site));
    }

    public function editAction($parameter = null, Request $request)
    {
    	$this->_site['sideMenuConfigActiveItem'] = 'frontUsers/add';

        $orm = $this->getDoctrine()->getManager();
        $repoUsersStatus = $orm->getRepository('ChipinDBBundle:Usersstatus');
        $repoFrontUsers = $orm->getRepository('ChipinDBBundle:Frontuser');
        $repoUsersAddresses = $orm->getRepository('ChipinDBBundle:Usersaddress');
        $repoUsersAccounts = $orm->getRepository('ChipinDBBundle:Usersaccount');

        $usersStatusList = $repoUsersStatus->findAll();
        $this->_site['usersStatuses'] = $usersStatusList;

        $this->_site['editableUser'] = null;
        $this->_site['editableAddress'] = null;
        $this->_site['editableAccount'] = null;

        $addingNewAddress = true;
        $addingNewAccount = true;

        if($parameter == 'new') {
            $this->_site['editableUser'] = new Frontuser();
            $this->_site['editableAddress'] = new Usersaddress();
            $this->_site['editableAccount'] = new Usersaccount();
        }
        elseif($parameter !== 'null') {
            $this->_site['editableUser'] = $repoFrontUsers->find($parameter);
            if(!$this->_site['editableUser']) {
                // nie znaleziono
            }
            else {

                $this->_site['editableAddress'] = $repoUsersAddresses->findOneByUserid($this->_site['editableUser']->getId());

                //ie('<pre>'.print_r($this->_site['editableAddress'],true).'</pre>');
                if(empty($this->_site['editableAddress'])) {
                    $this->_site['editableAddress'] = new Usersaddress();
                }
                else {
                    $addingNewAddress = false;
                }

                $this->_site['editableAccount'] = $repoUsersAccounts->findOneByUserid($this->_site['editableUser']->getId());
                if(empty($this->_site['editableAccount'])) {
                    $this->_site['editableAccount'] = new Usersaccount(); 
                }
                else {
                    $addingNewAccount = false;
                }
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
            $this->_site['editableUser']->setEmail($postData->get('newFrontUser_email'));
            $this->_site['editableUser']->setUsersstatusid($repoUsersStatus->find($postData->get('newFrontUser_status'))); //!
            if($parameter == 'new' || $postData->get('newFrontUser_password') !== '') {
                $this->_site['editableUser']->setPassword(md5($postData->get('newFrontUser_password')));
            }
            $this->_site['editableUser']->setForename($postData->get('newFrontUser_forename'));
            $this->_site['editableUser']->setSurname($postData->get('newFrontUser_surname'));
            $this->_site['editableUser']->setNickname($postData->get('newFrontUser_nickname'));
            if($parameter == 'new') $orm->persist($this->_site['editableUser']);

            // usersAddress
            if($postData->get('newUsersAddress_switch') == true) {

                $this->_site['editableAddress']->setUserid($this->_site['editableUser']);
                $this->_site['editableAddress']->setStatus(1); // 1=main
                $this->_site['editableAddress']->setCountry($postData->get('newUsersAddress_country'));
                $this->_site['editableAddress']->setCity($postData->get('newUsersAddress_city'));
                $this->_site['editableAddress']->setPostalcode($postData->get('newUsersAddress_postalCode'));
                $this->_site['editableAddress']->setStreet($postData->get('newUsersAddress_street'));
                $this->_site['editableAddress']->setHouseno($postData->get('newUsersAddress_houseNo'));
                $this->_site['editableAddress']->setApartmentno($postData->get('newUsersAddress_apartmentNo'));
                $this->_site['editableAddress']->setPhoneno($postData->get('newUsersAddress_phoneNo'));
                if($addingNewAddress) $orm->persist($this->_site['editableAddress']);
            }

            // usersAccount
            if($postData->get('newUsersAddress_switch') == true) {
                $this->_site['editableAccount']->setUserid($this->_site['editableUser']);
                $this->_site['editableAccount']->setStatus(1); // 1=main
                $this->_site['editableAccount']->setBank($postData->get('newUsersAccount_bank'));
                $this->_site['editableAccount']->setNumber($postData->get('newUsersAccount_number'));
                $this->_site['editableAccount']->setAddressid($this->_site['editableAddress']);
                if($addingNewAccount) $orm->persist($this->_site['editableAccount']);
            }

            $orm->flush();

            if($parameter == 'new') {
                return $this->redirect($this->generateUrl('chipin_admin_frontUsersList'));
            }
            else {
                return $this->redirect($this->generateUrl('chipin_admin_frontUsersEdit', array('parameter' => $this->_site['editableUser']->getId())));
            }

        }

        if($parameter != 'new' && $parameter !== null) {
            return $this->render('ChipinAdminBundle:Default:frontUsersEdit.html.twig', array('site' => $this->_site));
        }


        return $this->render('ChipinAdminBundle:Default:frontUsersEdit.html.twig', array('site' => $this->_site));
    }


}
