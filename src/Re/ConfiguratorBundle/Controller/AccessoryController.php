<?php

namespace Re\ConfiguratorBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Re\ConfiguratorBundle\Entity\Accessory;
use Re\ConfiguratorBundle\Form\AccessoryType;

/**
 * Accessory controller.
 *
 */
class AccessoryController extends Controller
{

    /**
     * Lists all Accessory entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ReConfiguratorBundle:Accessory')->findAll();

        return $this->render('ReConfiguratorBundle:Accessory:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Accessory entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Accessory();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('accessory_show', array('id' => $entity->getId())));
        }

        return $this->render('ReConfiguratorBundle:Accessory:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Accessory entity.
     *
     * @param Accessory $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Accessory $entity)
    {
        $form = $this->createForm(new AccessoryType(), $entity, array(
            'action' => $this->generateUrl('accessory_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Accessory entity.
     *
     */
    public function newAction()
    {
        $entity = new Accessory();
        $form   = $this->createCreateForm($entity);

        return $this->render('ReConfiguratorBundle:Accessory:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Accessory entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ReConfiguratorBundle:Accessory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Accessory entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ReConfiguratorBundle:Accessory:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Accessory entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ReConfiguratorBundle:Accessory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Accessory entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ReConfiguratorBundle:Accessory:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Accessory entity.
    *
    * @param Accessory $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Accessory $entity)
    {
        $form = $this->createForm(new AccessoryType(), $entity, array(
            'action' => $this->generateUrl('accessory_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Accessory entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ReConfiguratorBundle:Accessory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Accessory entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('accessory_edit', array('id' => $id)));
        }

        return $this->render('ReConfiguratorBundle:Accessory:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Accessory entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ReConfiguratorBundle:Accessory')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Accessory entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('accessory'));
    }

    /**
     * Creates a form to delete a Accessory entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('accessory_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
