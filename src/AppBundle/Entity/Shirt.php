<?php

/*
:: Shirt.php ::
- :: Attendee (Single)
- Size (String)
- Desing (String)
- Color (String)
*/ 

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="shirts")
 */
class Shirt
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
  private $size;

  /**
   * @Assert\NotBlank()
   * @Assert\Type("string")
   * @ORM\Column(type="string")
   */
  private $desing;

  /**
   * @Assert\NotBlank()
   * @Assert\Type("string")
   * @ORM\Column(type="string")
   */
  private $color = "any";

  // TODO
  // private $attendee;

  public function getId()
  {
    return $this->id;
  }

  public function getSize()
  {
    return $this->size;
  }

  public function setSize($size)
  {
    $this->size = $size;
  }

  public function getDesign()
  {
    return $this->design;
  }

  public function setDesign($design)
  {
    $this->design = $design;
  }

  public function getColor()
  {
    return $this->color;
  }

  public function setColor($color)
  {
    $this->color = $color;
  }
}