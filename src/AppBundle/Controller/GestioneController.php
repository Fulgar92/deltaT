<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Parameters;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GestioneController extends Controller {
  /**
   * @Route("/gestione")
   * @Template()
   */
  public function gestioneAction() {
    return [];
  }

  /**
   * @Route("/gestione/core")
   * @Template()
   */
  public function coreAction() {
    return [];
  }

  /**
   * @Route("/gestione/base")
   * @Template()
   */
  public function basesAction() {
    return [];
  }

  /**
   * @Route("/gestione/parameters")
   * @Template()
   */
  public function parametersAction() {
    return [];
  }

  /**
   * @Route("/gestione/setParameters")
   */
  public function setParametersAction(Request $request) {
    $latitude = $request->get('latitude');
    $longitude = $request->get('longitude');
    $zoom = $request->get('zoom');

    $em = $this->getDoctrine()->getManager();
    $parameters = $em->getRepository('AppBundle:Parameters')
      ->findOneBy(array('id' => 1));

    if (is_null($parameters)) {
      $parameters = new Parameters();
      $em->persist($parameters);
    }

    $parameters->setLatitude($latitude);
    $parameters->setLongitude($longitude);
    $parameters->setZoom($zoom);

    $em->flush();

    return new Response();
  }

  /**
   * @Route("/gestione/getParameters")
   */
  public function getParametersAction(Request $request) {
    $field = $request->get('field');

    if (is_null($field)) {
      $field = 'Latitude';
    }

    $em = $this->getDoctrine()->getManager();
    $parameters = $em->getRepository('AppBundle:Parameters')
      ->findOneBy(array('id' => 1));

    if (is_null($parameters)) {
      throw new \Exception('Errore voluto');
    }
    else {
      $get = 'get' . $field;
      $value = $parameters->$get();
      return new Response($value);
    }
  }
}
