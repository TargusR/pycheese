<?php

/*
:: Content.php ::
- :: Attendee (single)
- RequestedAt (date)
- Event Edition (method)
- Title
- Application Description (Text) [Describes activities for staff evaluation, not posted public. Mandatory ]
- Type
  - Panel
  - taller
  - Meeting
- Budget for Materials (Decimal)
- Duration (int) [Time blocks: Hours]
- Capacity (int)
- Is accepted (Bool)
- Content code (String)[Samples: PN001, WK001, MT001]
- Room (string)
- Date asigned (Date)
- Public Description (Text) [Describes activities to attendees, publicly; only used once accepted]
*/ 

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="content_applications")
 */
class Content
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
}