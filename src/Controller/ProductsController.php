<?php

namespace App\Controller;

use Symfony\Component\Routing\RouteCollection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;
use Symfony\Component\Form\Form;
use App\Form\AlbumType;
use App\Entity\Shirt;
use App\Entity\Album;

class ProductsController extends AbstractController
{

    /**
     * @Route("/products", name="app_products")
     */
    public function index(): Response
    {
        return $this->render('products/index.html.twig', [
            'controller_name' => 'ProductsController',
        ]);
    }

      /**
     * @Route("/products/album",name="album_index")
     */
    public function ShowAllAlbum()
    {
     
        $em = $this->getDoctrine()->getManager();

        $albums = $em->getRepository(Album::class)->findAll();
        
        return $this->render('products/product.html.twig', array( 
            'albums' => $albums,
        ));
    }
    /**
     * @Route("/products/album/new",methods={"GET","POST"}, name="album_new")
     */
  public function newAlbum(Request $request)
  {
    $album = new Album();
    $form = $this->createForm('App\Form\AlbumType', $album);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->persist($album);
      $em->flush();
      return $this->redirectToRoute('album_index');
    }

    return $this->render('products/new.html.twig',array(
        'album' => $album, 'form' => $form->createView()));
  }
 
 
 /**
   * @Route("/products/album/{id}", methods={"GET"}, name="album_show")
   */
  public function showOneAlbum(Album $album)
  {


    return $this->render('products/show.html.twig', array(
      'album' => $album
    ));
  }
 /**
   * @Route("/products/album/delete/{id}", name="album_delete")
   */
  public function deleteAlbum($id)
  {
    $em = $this->getDoctrine()->getManager();
    $album = $em->getRepository('App\Entity\Album')->find($id);
    $em->remove($album);
    $em->flush();
    
    return $this->redirectToRoute('album_index');
  }

  /**
   * @Route("/products/album/edit/{id}", methods={"POST","GET"},name="album_edit")
   */
  public function albumEdit(Request $request, Album $album)
  {
    $editForm = $this->createForm(AlbumType::class, $album);
    $editForm->handleRequest($request);
    if ($editForm->isSubmitted() && $editForm->isValid()) {
      $this->getDoctrine()->getManager()->flush();
      return $this->redirectToRoute('album_edit', array('id' => $album->getId()));
    }
    return $this->render('products/edit_album.html.twig', array(
      'album' => $album,
      'edit_form' => $editForm->createView(),
    ));
  }

     /**
     * @Route("/products/shirt",name="shirt_index")
     */
    public function ShowAllShirt()
    {
        $em = $this->getDoctrine()->getManager();

        $shirts = $em->getRepository(Shirt::class)->findAll();

        return $this->render('products/shirt.html.twig', array(
            'shirts' => $shirts,
        ));
    }
      /**
     * @Route("/products/shirt/new",methods={"GET","POST"}, name="shirt_new")
     */
  public function newShirt(Request $request)
  {
    $shirt = new Shirt();
    $form = $this->createForm('App\Form\ShirtType', $shirt);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->persist($shirt);
      $em->flush();
      return $this->redirectToRoute('shirt_index');
    }

    return $this->render('products/shirt_new.html.twig',array(
        'shirt' => $shirt, 'form' => $form->createView()));
  }
   
     /**
     * @Route("/products/shirt/{id}",name="shirt_show")
     */
    public function ShowOneShirt(shirt $shirt)
    {
      return $this->render('products/shirt_show.html.twig', array(
        'shirt' => $shirt,
      ));
    }


  /**
   * @Route("/products/shirt/edit/{id}", methods={"POST","GET"},name="shirt_edit")
   */
  public function shirtEdit(Request $request, shirt $shirt)
  {
    $editForm = $this->createForm('App\Form\ShirtType', $shirt);
    $editForm->handleRequest($request);
    if ($editForm->isSubmitted() && $editForm->isValid()) {
      $this->getDoctrine()->getManager()->flush();
      return $this->redirectToRoute('shirt_edit', array('id' => $shirt->getId()));
    }
    return $this->render('products/edit_shirt.html.twig', array(
      'shirt' => $shirt,
      'edit_form' => $editForm->createView(),
    ));
  }

  /**
   * @Route("/products/shirt/delete/{id}", name="shirt_delete")
   */
  public function deleteShirt($id)
  {
    $em = $this->getDoctrine()->getManager();
    $shirt = $em->getRepository('App\Entity\Shirt')->find($id);
    $em->remove($shirt);
    $em->flush();
    
    return $this->redirectToRoute('shirt_index');
  }
  

}
