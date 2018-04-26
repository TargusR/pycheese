<?php

/*
:: Attendee.php ::
- :: User
- RequestedAt (date)
- Event Edition (method)
- First Name (String)
- Last Name (String)
- Birthdate (Date)
- Age (method)
- Country (String) [Get country list]
- Region (String)
- City (String)
- Contact Number (String)
- Badge Tag (String)
- is Ready (Bool)
- Badge number (String)
- Access Level (int) -> (string access parser) (0, 1, 2, 3, 4, 5, ...)
- Access Label (string) [Or days label]
- Shirts available (int)
- :: Shirts (multiple)
- :: Payments (multiple)
- :: Dealer (single)
- :: Content (multiple))
*/ 

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="attendees")
 */
class Attendee
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
  private $firstName;

  /**
   * @Assert\NotBlank()
   * @Assert\Type("string")
   * @ORM\Column(type="string")
   */
  private $lastName;

  /**
   * @Assert\Date()
   * @ORM\Column(type="datetime")
   */
  private $birthdate;

  /**
   * @Assert\NotBlank()
   * @Assert\Type("string")
   * @ORM\Column(type="string")
   */
  private $country;

  /**
   * @Assert\NotBlank()
   * @Assert\Type("string")
   * @ORM\Column(type="string")
   */
  private $region;

  /**
   * @Assert\NotBlank()
   * @Assert\Type("string")
   * @ORM\Column(type="string")
   */
  private $city;

  /**
   * @Assert\NotBlank()
   * @Assert\Type("string")
   * @ORM\Column(type="string")
   */
  private $contactNumber;

  /**
   * @Assert\NotBlank()
   * @Assert\Type("string")
   * @ORM\Column(type="string")
   */
  private $badgeTag = "Furrito Perez";

  /**
   * @Assert\Type("bool")
   * @ORM\Column(type="bool")
   */
  private $isReady = false;

  /**
   * @ORM\Column(type="string")
   */
  private $badgeNumber;

  /**
   * @Assert\Type("int")
   * @ORM\Column(type="int")
   */
  private $accessLevel = 0;

  /**
   * @Assert\Type("string")
   * @ORM\Column(type="string")
   */
  private $accessLabel;

  /**
   * @Assert\Type("int")
   * @ORM\Column(type="int")
   */
  private $shirtsAvailable = 0;

  // TODO
  // private $shirts;
  // private $payments;
  // private $dealer;
  // private $contents;

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

  public function getFirstName()
  {
    return $this->firstName;
  }

  public function setFirstName($firstName)
  {
    $this->firstName = $firstName;
  }

  public function getLastName()
  {
    return $this->lastName;
  }

  public function setLastName($lastName)
  {
    $this->lastName = $lastName;
  }

  public function getBirthdate()
  {
    return $this->birthdate;
  }

  public function setBirthdate($birthdate)
  {
    $this->birthdate = $birthdate;
  }

  public function getAge()
  {
    $today = date_create();
    $birthdate = $this->birthdate
    return $today->diff($birthdate)->y;
  }

  public function getCountry()
  {
    return $this->country;
  }

  public function setCountry($country)
  {
    $this->country = $country;
  }

  public function getRegion()
  {
    return $this->region;
  }

  public function setRegion($region)
  {
    $this->region = $region;
  }

  public function getCity()
  {
    return $this->city;
  }

  public function setCity($city)
  {
    $this->city = $city;
  }

  public function getContactNumber()
  {
    return $this->contactNumber;
  }

  public function setContactNumber($contactNumber)
  {
    $this->contactNumber = $contactNumber;
  }

  public function getBadgeTag()
  {
    return $this->badgeTag;
  }

  public function setBadgeTag($badgeTag)
  {
    $this->badgeTag = $badgeTag;
  }

  public function getIsReady()
  {
    return $this->isReady;
  }

  public function setIsReady($isReady)
  {
    $this->isReady = $isReady;
  }

  public function getBadgeNumber()
  {
    return $this->badgeNumber;
  }

  public function setBadgeNumber($badgeNumber)
  {
    $this->badgeNumber = $badgeNumber;
  }

  public function getAccessLevel()
  {
    return $this->accessLevel;
  }

  public function setAccessLevel($accessLevel)
  {
    $this->accessLevel = $accessLevel;
  }

  public function getAccessLabel()
  {
    return $this->accessLabel;
  }

  public function setAccessLabel($accessLabel)
  {
    $this->accessLabel = $accessLabel;
  }

  public function getShirtsAvailable()
  {
    return $this->shirtsAvailable;
  }

  public function setShirtsAvailable($shirtsAvailable)
  {
    $this->shirtsAvailable = $shirtsAvailable;
  }
}