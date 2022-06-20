<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

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

        return $this->render('products/index.html.twig', array(
            'albums' => $albums,
        ));
    }

/**
   * @Route("/products/album/{id}", name="album_show")
   */
  public function showOneAlbum(album $album)
  {
    return $this->render('products/show.html.twig', array(
      'album' => $album,
    ));
  }

  
   /**
     * @Route("/products/new",methods={"GET","POST"}, name="album_new")
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


}
