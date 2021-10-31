<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController
{
    /**
     * @Route("/{page_name}", name="base", defaults={"page_name" = "homepage"})
     */
    public function index($page_name) {

        $url = "http://system.dev/api/page/".$page_name;

       $content = json_decode($this->getContent('test', $url, 'test'), true);

       echo '<pre>';
       var_dump($content);

        return $this->render('base/index.html.twig', [
            'controller_name' => 'BaseController',
            'content' => $content
        ]);
    }

    public function getNavigation() {

    }

    private function getContent($page_name, $url, $params) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }

}
