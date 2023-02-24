<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mime\Address;

use Doctrine\Common\Annotations\AnnotationReader;

class TestController extends AbstractController
{

    public function __construct()
    {
    }

    /**
     * @Route("/api/test", name="debugTest", methods={"GET"})
     */
    public function debugTest(): Response
    {
        return new Response(json_encode('Ok'), 200);
    }

}