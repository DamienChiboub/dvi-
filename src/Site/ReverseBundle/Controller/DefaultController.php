<?php

namespace Site\ReverseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($url)
    {
        return $this->render('SiteReverseBundle:Default:index.html.twig', array('url' => $url));
    }
}
