<?php

/*
:: Feature.php ::
- Name [Playera extra]
- Cost (Decimal)
- Valid Until (Date)
- Description (Text)
- Shirts to add (Int)
- Is unlimited (Bool)
- Inventory (Int)
- Is hidden (Bool)
*/ 

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="available_features")
 */
class Feature
{
  /**
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   * @ORM\Column(type="integer")
   */
  private $id;

  /**
   * @Assert\NotBlank()
   * @Assert\Type("string")
   * @ORM\Column(type="string")
   */
  private $name;

  /**
   * @Assert\NotBlank()
   * @Assert\Type("decimal")
   * @ORM\Column(type="decimal")
   */
  private $cost;

  /**
   * @Assert\NotBlank()
   * @Assert\Date()
   * @ORM\Column(type="date")
   */
  private $validUntil;

  /**
   * @ORM\Column(type="text")
   */
  private $description;

  /**
   * @Assert\Type("int")
   * @ORM\Column(type="int")
   */
  private $shirtsToAdd = 0;

  /**
   * @Assert\Type("bool")
   * @ORM\Column(type="bool")
   */
  private $isUnlimited = false;

  /**
   * @Assert\Type("int")
   * @Assert\GreaterThanOrEqual(0)
   * @ORM\Column(type="int")
   */
  private $inventory = 0;

  /**
   * @Assert\Type("bool")
   * @ORM\Column(type="bool")
   */
  private $isHidden = false;

  public function getId()
  {
    return $this->id;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getCost()
  {
    return $this->cost;
  }

  public function setCost($cost)
  {
    $this->cost = $cost;
  }

  public function getValidUntil()
  {
    return $this->validUntil;
  }

  public function setValidUntil($validUntil)
  {
    $this->validUntil = $validUntil;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getShirtsToAdd()
  {
    return $this->shirtsToAdd;
  }

  public function setShirtsToAdd($shirtsToAdd)
  {
    $this->shirtsToAdd = $shirtsToAdd;
  }

  public function getIsUnlimited()
  {
    return $this->isUnlimited;
  }

  public function setIsUnlimited($isUnlimited)
  {
    $this->isUnlimited = $isUnlimited;
  }

  public function getInventory()
  {
    return $this->inventory;
  }

  public function setInventory($inventory)
  {
    $this->inventory = $inventory;
  }

  public function getIsHidden()
  {
    return $this->isHidden;
  }

  public function setIsHidden($isHidden)
  {
    $this->isHidden = $isHidden;
  }
}