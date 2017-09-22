<?php

namespace AppBundle\Controller;

use AppBundle\Entity\requestInfoCore;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Core;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller {
  /**
   * @Route("/")
   * @Template()
   */
  public function indexAction() {
    return [];
  }

  /**
   * @Route("/infoCore")
   */
  public function infoCoreAction() {
    return new Response();
  }

  /**
   * @Route("/addRequestInfoCore")
   */
  public function requestInfoCoreAction(Request $request) {
    $infoCore = $request->get('infoCore');
    $update = $request->get('update');
    $em = $this->getDoctrine()->getManager();

    $info = $em->getRepository('AppBundle:requestInfoCore')
      ->findOneBy(array('idCore' => $infoCore['id'], 'isCompleted' => FALSE));

    $date = new \DateTime();
    if (is_null($update) || $update == "") {
      if (is_null($info)) {
        $requestInfoCore = new requestInfoCore();

        $requestInfoCore->setIdCore($infoCore['id']);
        $requestInfoCore->setRequestDate($date);
        $requestInfoCore->setIsCompleted(FALSE);
        $requestInfoCore->setName($infoCore['name']);

        $em->persist($requestInfoCore);
        $em->flush();
      }
    }
    else {
      $info->setIsCompleted('1');
      $info->setCompletedDate($date);
      $em->flush();
    }

    return new Response();
  }

  /**
   * @Route("/addCore")
   */
  // Funzione per l'aggiunta e l'aggiornamento dei core
  function addCoreAction(Request $request) {
    $infoCore = $request->get('infoCore');

    $em = $this->getDoctrine()->getManager();
    if ($infoCore['get_owner_details'] == "") {
      $infoCore['get_owner_details']['uname'] = 'UNASSIGNED';
    }

    $searchCore = $em->getRepository('AppBundle:Core')
      ->findOneBy(array('idCore' => $infoCore['id']));
    if (is_null($searchCore)) {
      $core = new Core();
      $core->setIdCore($infoCore['id']);
      $core->setName($infoCore['name']);
      $core->setLatitude($infoCore['latitude']);
      $core->setLongitude($infoCore['longitude']);
      $core->setCreatorName($infoCore['get_creator_details']['uname']);
    }
    else {
      $core = $searchCore;
    }
    $date = new \DateTime();
    $core->setControllingFactionId($infoCore['controlling_faction_id']);
    $core->setPoweringBaseId($infoCore['powering_base_id']);
    $core->setLevelId($infoCore['level_id'] - 1);
    $core->setOwnerName($infoCore['get_owner_details']['uname']);
    $core->setIsDeleted($infoCore['is_deleted']);
    $core->setUpdateDate($date);

    $em->persist($core);
    $em->flush();

    return new Response();
  }


  /**
   * @Route("/getRequestInfoCore")
   */
  function getRequestInfoCoreAction() {
    $info = $this->getDoctrine()
      ->getRepository('AppBundle:requestInfoCore')
      ->findBy(['isCompleted' => FALSE]);

    /** @var requestInfoCore $core */
    foreach ($info as $k => $core) {
      $info[$k] = $core->toArray();
    }

    return new JsonResponse($info);
  }

  /**
   * @Route("/getInfoCore")
   */
  function getInfoCoreAction(Request $request) {
    $idCore = $request->get('idCore');

    if (is_null($idCore)) {
      $idCore = 313279;
    }

    $info = $this->getDoctrine()
      ->getRepository('AppBundle:Core')
      ->findOneBy(['idCore' => $idCore]);

    if (is_null($info)) {
      throw new \Exception('Errore voluto');
    }
    else {
      $info = $info->toArray();
      return new JsonResponse($info);
    }
  }
}