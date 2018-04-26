<?php

/*
:: Dealer.php ::
- :: Attendee (single)
- RequestedAt (date)
- Event Edition (method)
- Custom Name (String)
- Type (String)
  - Artists/Illustration
  - Maker/Props/Fursuits
  - Other
- Description (Text)
- Sample Pictures (Files array?)
- Is accepted (Bool)
- Table number (String)[Sample: TB001] 
- Is payment validated (Bool)
*/ 

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="dealer_applications")
 */
class Dealer
{
  /**
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   * @ORM\Column(type="integer")
   */
  private $id;

  /**
   * @Assert\Date()
   * @ORM\Column(type="datetime")
   */
  private $requestedAt;

  /**
   * @Assert\NotBlank()
   * @Assert\Type("string")
   * @ORM\Column(type="string")
   */
  private $customName;

  /**
   * @Assert\NotBlank()
   * @Assert\Type("string")
   * @ORM\Column(type="string")
   */
  private $type = "Artist/Illustration";

  /**
   * @ORM\Column(type="text")
   */
  private $description;

  /**
   * @Assert\Type("bool")
   * @ORM\Column(type="bool")
   */
  private $isAcepted = false;

  /**
   * @Assert\Type("string")
   * @ORM\Column(type="string")
   */
  private $tableNumber = "";

  /**
   * @Assert\Type("bool")
   * @ORM\Column(type="bool")
   */
  private $isPaymentValidated = false;

  // TODO
  // private $samplePictures;
  // private $attendee;

  public function getId()
  {
    return $this->id;
  }

  public function getRequestedAt()
  {
    return $this->requestedAt;
  }

  public function setRequestedAt()
  {
    $this->requestedAt = date_create();
  }

  public function getEventEdition()
  {
    return date_format($this->requestedAt, 'Y');
  }

  public function getCustomName()
  {
    return $this->customName;
  }

  public function setCustomName($customName)
  {
    $this->customName = $customName;
  }

  public function getType()
  {
    return $this->type;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getIsAccepted()
  {
    return $this->isAcepted;
  }

  public function setIsAccepted($isAcepted)
  {
    $this->isAcepted = $isAcepted;
  }

  public function getTableNumber()
  {
    return $this->tableNumber;
  }

  public function setTableNumber($tableNumber)
  {
    $this->tableNumber = $tableNumber;
  }

  public function getIsPaymentValidated()
  {
    return $this->isPaymentValidated;
  }

  public function setIsPaymentValidated($isPaymentValidated)
  {
    $this->isPaymentValidated = $isPaymentValidated;
  }
}