<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * requestInfoCore
 *
 * @ORM\Table(name="request_info_core")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\requestInfoCoreRepository")
 */
class requestInfoCore {
  /**
   * @var int
   *
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @var int
   *
   * @ORM\Column(name="id_core", type="integer")
   */
  private $idCore;

  /**
   * @var string
   *
   * @ORM\Column(name="name", type="string", length=255)
   */
  private $name;

  /**
   * @var \DateTime
   *
   * @ORM\Column(name="request_date", type="datetime")
   */
  private $requestDate;

  /**
   * @var bool
   *
   * @ORM\Column(name="is_completed", type="boolean", nullable=true)
   */
  private $isCompleted;

  /**
   * @var \DateTime
   *
   * @ORM\Column(name="completed_date", type="datetime", nullable=true)
   */
  private $completedDate;


  /**
   * Get id
   *
   * @return int
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Set idCore
   *
   * @param integer $idCore
   *
   * @return requestInfoCore
   */
  public function setIdCore($idCore) {
    $this->idCore = $idCore;

    return $this;
  }

  /**
   * Get idCore
   *
   * @return int
   */
  public function getIdCore() {
    return $this->idCore;
  }

  /**
   * Set requestDate
   *
   * @param \DateTime $requestDate
   *
   * @return requestInfoCore
   */
  public function setRequestDate($requestDate) {
    $this->requestDate = $requestDate;

    return $this;
  }

  /**
   * Get requestDate
   *
   * @return \DateTime
   */
  public function getRequestDate() {
    return $this->requestDate;
  }

  /**
   * Set isCompleted
   *
   * @param boolean $isCompleted
   *
   * @return requestInfoCore
   */
  public function setIsCompleted($isCompleted) {
    $this->isCompleted = $isCompleted;

    return $this;
  }

  /**
   * Get isCompleted
   *
   * @return bool
   */
  public function getIsCompleted() {
    return $this->isCompleted;
  }

  /**
   * Set completedDate
   *
   * @param \DateTime $completedDate
   *
   * @return requestInfoCore
   */
  public function setCompletedDate($completedDate) {
    $this->completedDate = $completedDate;

    return $this;
  }

  /**
   * Get completedDate
   *
   * @return \DateTime
   */
  public function getCompletedDate() {
    return $this->completedDate;
  }

  /**
   * @return array
   */
  public function toArray() {
    return get_object_vars($this);
  }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return requestInfoCore
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
