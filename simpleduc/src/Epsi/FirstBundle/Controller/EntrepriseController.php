<?php

namespace Epsi\FirstBundle\Controller;

use Epsi\FirstBundle\Entity\Entreprise;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class EntrepriseController extends Controller {

    public function entrepriseAction(Request $request) {
        $entreprise = new Entreprise ();
        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $entreprise);
        $formBuilder
                ->add('nom', TextType::class)
                ->add('CodePostal', TextType::class)
                ->add('Ville', TextType::class)
                ->add('Adresse', TextType::class)
                ->add('NumTel', TextType::class)
                ->add('Envoyer', SubmitType::class)
        ;
        $form = $formBuilder->getForm();

        return $this->render('EpsiFirstBundle:Default:entreprise.html.twig', array('form' => $form->createView())
        );
    }

}

?>
