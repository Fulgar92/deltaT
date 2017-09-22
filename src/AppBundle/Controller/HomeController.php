<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller {
  /**
   * @Route("/login")
   * @Template()
   */
  public function loginAction() {
    return [];
  }

  /**
   * @Route("/user")
   * @Template()
   */
  public function userAction() {
    return [];
  }
}
