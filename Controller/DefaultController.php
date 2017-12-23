<?php

namespace CRS\StripeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CRSStripeBundle:Default:index.html.twig');
    }
}
