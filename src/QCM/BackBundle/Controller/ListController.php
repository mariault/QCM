<?php

namespace QCM\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use QCM\BackBundle\Entity\SectionTest;
use QCM\BackBundle\Entity\Test;
use QCM\BackBundle\Entity\Theme;

class ListController extends Controller
{
    public function indexAction(request $request)
    {
        //Lecture du repo Test
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository('QCMBackBundle:Test');
        $list = $rep->findall(); 
       
        return $this->render('QCMBackBundle:Default:list.html.twig',array('list'=>$list));
        
    }
public function ajouterAction(request $request)
        {
        $ajouter = new Test(); 
        $em = $this->getDoctrine()->getManager();
        $add = $this->createFormBuilder($ajouter);        
        $add->add('libelle', 'text');
        $add->add('description', 'text');
        $add->add('duree', 'number');
        $add->add('seuil', 'text');
        $add->add('valider','submit');
        $form = $add->getForm();
        $form->handleRequest($this->get('request'));
        
        if ($form->isValid()){               
        $ajouter->setlibelle($form->get('libelle')->getData());
        $ajouter->setdescription($form->get('description')->getData());
        $ajouter->setduree($form->get('duree')->getData());
        $ajouter->setseuil($form->get('seuil')->getData());         
        $em->persist($ajouter);
        $em->flush();
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository('QCMBackBundle:Test');
        $list = $rep->findall(); 
        return $this->render('QCMBackBundle:Default:list.html.twig',array('form'=>$form->createView(),'list'=>$list));
        
        }
        return $this->render('QCMBackBundle:Default:add.html.twig',array('form'=>$form->createView()));
        }
    
    
    }







