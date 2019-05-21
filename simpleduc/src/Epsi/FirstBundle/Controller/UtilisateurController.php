<?php

namespace Epsi\FirstBundle\Controller;

use Epsi\FirstBundle\Entity\Utilisateur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class UtilisateurController extends Controller {

    public function utilisateurAction(Request $request) {
        $utilisateur = new Utilisateur ();
        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $utilisateur);
        $formBuilder
                ->add('nom', TextType::class)
                ->add('prenom', TextType::class)
                ->add('login', TextType::class)
                ->add('password', TextType::class)
                ->add('CodePostal', TextType::class)
                ->add('Ville', TextType::class)
                ->add('Adresse', TextType::class)
                ->add('Envoyer', SubmitType::class)
        ;
        $form = $formBuilder->getForm();

        return $this->render('EpsiFirstBundle:Default:utilisateur.html.twig', array('form' => $form->createView())
        );
    }

}

?>
