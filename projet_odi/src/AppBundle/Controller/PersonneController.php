<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Personne;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Identification;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Personne controller.
 *
 */
class PersonneController extends Controller
{
    /**
     * Lists all personne entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $personnes = $em->getRepository('AppBundle:Personne')->findAll();

        return $this->render('personne/index.html.twig', array(
            'personnes' => $personnes,
        ));
    }

    /**
     * Creates a new personne entity.
     *
     */
    public function newAction(Request $request)
    {
        $personne = new Personne();
        $form = $this->createForm('AppBundle\Form\Type\PersonneType', $personne, ["method" => 'POST']);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($personne);
            $em->flush($personne);

            return $this->redirectToRoute('personne_show', array('id' => $personne->getIdPersonne()));
        }

        return $this->render('personne/new.html.twig', array(
            'personne' => $personne,
            'form' => $form->createView(),
        ));
    }

    /**
     * Vérifie l'identification
     *
     */

     public function identificationAction(Request $request)
     {
         $identification = new Identification();
         $form = $this->createForm('AppBundle\Form\Type\IdentificationType', $identification, ["method" => 'POST']);
         $form->handleRequest($request);
         $em = $this->getDoctrine()->getManager();
         $personnes = $em->getRepository('AppBundle:Personne')->findAll();
         if ($form->isSubmitted() && $form->isValid()) {
              foreach($personnes as $p)
              {
                  if ($p->getPseudoPersonne() == $identification->getPseudo() &&
                     $p->getMdpPersonne() == $identification->getMdp())
                     {
                     	/*on recupere la session*/ 
                     	$session = $request->getSession();
                     	
                     	/*on cree et assigne les attributs de la session*/
                     	$session->set('id_personne', $p->getIdPersonne());
                     	$session->set('pseudo_personne', $p->getPseudoPersonne());
                     	$session->set('type_personne', $p->getTypePersonne());
                     	
                     	/*Si un client se connecte*/
                     	if( strcmp($session->get('type_personne'),"Client") == 0 )
                     	  return $this->redirectToRoute('liste_paniers_client');
                     	else
                     	  return $this->redirectToRoute('listMagasinierProduit');
                     }
              }
          }
         return $this->render('usersidentification.html.twig', array(
             'identification' => $identification,
             'form' => $form->createView(),
         ));
     }

    /**
     * Finds and displays a personne entity.
     *
     */
    public function showAction(Personne $personne)
    {
        $deleteForm = $this->createDeleteForm($personne);

        return $this->render('personne/show.html.twig', array(
            'personne' => $personne,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing personne entity.
     *
     */
    public function editAction(Request $request, Personne $personne)
    {
        $deleteForm = $this->createDeleteForm($personne);
        $editForm = $this->createForm('AppBundle\Form\Type\PersonneType', $personne, ["method" => 'POST']);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('personne_edit', array('id' => $personne->getIdPersonne()));
        }

        return $this->render('personne/edit.html.twig', array(
            'personne' => $personne,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a personne entity.
     *
     */
    public function deleteAction(Request $request, Personne $personne)
    {
        $form = $this->createDeleteForm($personne);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($personne);
            $em->flush($personne);
        }

        return $this->redirectToRoute('personne_index');
    }

    /**
     * Creates a form to delete a personne entity.
     *
     * @param Personne $personne The personne entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Personne $personne)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('personne_delete', array('id' => $personne->getIdPersonne())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
