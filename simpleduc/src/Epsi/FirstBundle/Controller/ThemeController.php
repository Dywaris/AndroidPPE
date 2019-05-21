<?php

namespace Epsi\FirstBundle\Controller;

use Epsi\FirstBundle\Entity\Theme;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class ThemeController extends Controller {

    public function themeAction(Request $request) {
        $theme = new Theme();
        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $theme);
        $formBuilder
                ->add('libelle', TextType::class)
                ->add('Envoyer', SubmitType::class)
        ;
        $msg='';
        $form = $formBuilder->getForm();
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $msg = 'Envoyé';
                $em = $this->getDoctrine()->getManager();
                $em->persist($theme);
                $em->flush();
            } else {
                $msg = 'Problème';
            }
        }
        return $this->render('EpsiFirstBundle:Default:theme.html.twig', ['form' => $form->createView(), 'message' => $msg]
        );
    }

}
