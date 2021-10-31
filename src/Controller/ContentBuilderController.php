<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;

class ContentBuilderController extends BaseController
{
    /**
     * @Route("/content_builder/text", name="content_builder_text")
     */
    public function textBuilder()
    {
        return $this->render('content_builder/text.html.twig', [
            'controller_name' => 'ContentBuilderController',
        ]);
    }

    /**
     * @Route("/content_builder/slider", name="content_builder_slider")
     */
    public function sliderBuilder()
    {
        return $this->render('content_builder/slider.html.twig', [
            'controller_name' => 'ContentBuilderController',
        ]);
    }

    /**
     * @Route("/content_builder/slide", name="content_builder_slide")
     */
    public function slideBuilder()
    {
        return $this->render('content_builder/slide.html.twig', [
            'controller_name' => 'ContentBuilderController',
        ]);
    }


    /**
     * @Route("/content_builder/user", name="content_builder_user")
     */
    public function userBuilder() {

        return $this->render('content_builder/user.html.twig', [
            'controller_name' => 'ContentBuilderController'
        ]);
    }

    /**
     * @Route("/content_builder/order", name="content_builder_order")
     */
    public function orderBuilder() {

        return $this->render('content_builder/order.html.twig', [
            'controller_name' => 'ContentBuilderController'
        ]);
    }



}
