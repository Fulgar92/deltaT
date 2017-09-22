<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Core
 *
 * @ORM\Table(name="core")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CoreRepository")
 */
class Core {
  /**
   * @var int
   *
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @var string
   *
   * @ORM\Column(name="id_core", type="string", length=255)
   */
  private $idCore;

  /**
   * @var string
   *
   * @ORM\Column(name="name", type="string", length=255)
   */
  private $name;

  /**
   * @var int
   *
   * @ORM\Column(name="controlling_faction_id", type="integer")
   */
  private $controllingFactionId;

  /**
   * @var string
   *
   * @ORM\Column(name="creator_name", type="string")
   */
  private $creatorName;

  /**
   * @var bool
   *
   * @ORM\Column(name="is_deleted", type="boolean")
   */
  private $isDeleted;

  /**
   * @var int
   *
   * @ORM\Column(name="level_id", type="integer")
   */
  private $levelId;

  /**
   * @var int
   *
   * @ORM\Column(name="owner_name", type="string")
   */
  private $ownerName;

  /**
   * @var string
   *
   * @ORM\Column(name="powering_base_id", type="string")
   */
  private $poweringBaseId;

  /**
   * @var float
   *
   * @ORM\Column(name="latitude", type="float")
   */
  private $latitude;

  /**
   * @var float
   *
   * @ORM\Column(name="longitude", type="float")
   */
  private $longitude;

  /**
   * @var \DateTime
   *
   * @ORM\Column(name="update_date", type="datetime")
   */
  private $updateDate;

  /**
   * Get id
   *
   * @return int
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Set name
   *
   * @param string $name
   *
   * @return Core
   */
  public function setName($name) {
    $this->name = $name;

    return $this;
  }

  /**
   * Get name
   *
   * @return string
   */
  public function getName() {
    return $this->name;
  }

  /**
   * Set controllingFactionId
   *
   * @param integer $controllingFactionId
   *
   * @return Core
   */
  public function setControllingFactionId($controllingFactionId) {
    $this->controllingFactionId = $controllingFactionId;

    return $this;
  }

  /**
   * Get controllingFactionId
   *
   * @return int
   */
  public function getControllingFactionId() {
    return $this->controllingFactionId;
  }

  /**
   * Set creatorId
   *
   * @param integer $creatorId
   *
   * @return Core
   */
  public function setCreatorId($creatorId) {
    $this->creatorId = $creatorId;

    return $this;
  }

  /**
   * Get creatorId
   *
   * @return int
   */
  public function getCreatorId() {
    return $this->creatorId;
  }

  /**
   * Set isDeleted
   *
   * @param boolean $isDeleted
   *
   * @return Core
   */
  public function setIsDeleted($isDeleted) {
    $this->isDeleted = $isDeleted;

    return $this;
  }

  /**
   * Get isDeleted
   *
   * @return bool
   */
  public function getIsDeleted() {
    return $this->isDeleted;
  }

  /**
   * Set levelId
   *
   * @param integer $levelId
   *
   * @return Core
   */
  public function setLevelId($levelId) {
    $this->levelId = $levelId;

    return $this;
  }

  /**
   * Get levelId
   *
   * @return int
   */
  public function getLevelId() {
    return $this->levelId;
  }

  /**
   * Set ownerId
   *
   * @param integer $ownerName
   *
   * @return Core
   */
  public function setOwnerName($ownerName) {
    $this->ownerName = $ownerName;

    return $this;
  }

  /**
   * Set poweringBaseId
   *
   * @param integer $poweringBaseId
   *
   * @return Core
   */
  public function setPoweringBaseId($poweringBaseId) {
    $this->poweringBaseId = $poweringBaseId;

    return $this;
  }

  /**
   * Get poweringBaseId
   *
   * @return int
   */
  public function getPoweringBaseId() {
    return $this->poweringBaseId;
  }

  /**
   * Set latitude
   *
   * @param float $latitude
   *
   * @return Core
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
   * @return Core
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
   * Set idCore
   *
   * @param string $idCore
   *
   * @return Core
   */
  public function setIdCore($idCore) {
    $this->idCore = $idCore;

    return $this;
  }

  /**
   * Get idCore
   *
   * @return string
   */
  public function getIdCore() {
    return $this->idCore;
  }

  /**
   * Get ownerName
   *
   * @return string
   */
  public function getOwnerName() {
    return $this->ownerName;
  }

  /**
   * Set creatorName
   *
   * @param string $creatorName
   *
   * @return Core
   */
  public function setCreatorName($creatorName) {
    $this->creatorName = $creatorName;

    return $this;
  }

  /**
   * Get creatorName
   *
   * @return string
   */
  public function getCreatorName() {
    return $this->creatorName;
  }

  /**
   * @return array
   */
  public function toArray() {
    return get_object_vars($this);
  }

    /**
     * Set updateDate
     *
     * @param \DateTime $updateDate
     *
     * @return Core
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    /**
     * Get updateDate
     *
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }
}
