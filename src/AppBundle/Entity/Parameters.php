<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parameters
 *
 * @ORM\Table(name="parameters")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ParametersRepository")
 */
class Parameters {
  /**
   * @var int
   *
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @var float
   *
   * @ORM\Column(name="latitude", type="float", nullable=true)
   */
  private $latitude;

  /**
   * @var float
   *
   * @ORM\Column(name="longitude", type="float", nullable=true)
   */
  private $longitude;

  /**
   * @var float
   *
   * @ORM\Column(name="zoom", type="float", nullable=true)
   */
  private $zoom;


  /**
   * Get id
   *
   * @return int
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Set latitude
   *
   * @param float $latitude
   *
   * @return Parameters
   */
  public function setLatitude($latitude) {
    $this->latitude = $latitude;

    return $this;
  }

  /**
   * Get latitude
   *
   * @return float
   */
  public function getLatitude() {
    return $this->latitude;
  }

  /**
   * Set longitude
   *
   * @param float $longitude
   *
   * @return Parameters
   */
  public function setLongitude($longitude) {
    $this->longitude = $longitude;

    return $this;
  }

  /**
   * Get longitude
   *
   * @return float
   */
  public function getLongitude() {
    return $this->longitude;
  }

  /**
   * Set zoom
   *
   * @param float $zoom
   *
   * @return Parameters
   */
  public function setZoom($zoom) {
    $this->zoom = $zoom;

    return $this;
  }

  /**
   * Get zoom
   *
   * @return float
   */
  public function getZoom() {
    return $this->zoom;
  }

  /**
   * @return array
   */
  public function toArray() {
    return get_object_vars($this);
  }
}
