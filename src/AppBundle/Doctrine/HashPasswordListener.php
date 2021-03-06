<?php

namespace AppBundle\Doctrine;

use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\LifecycleEventArgs;
use AppBundle\Entity\User;
// use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface as UserPasswordEncoder;

class HashPasswordListener implements EventSubscriber
{
  private $passwordEncoder;

  public function __construct(UserPasswordEncoder $passwordEncoder)
  {
    $this->passwordEncoder = $passwordEncoder;
  }

  /**
   * @param User $entity
   */
  public function encodePassword(User $entity)
  {
    if (!$entity->getPlainPassword()) {
      return null;
    }

    $encoded = $this->passwordEncoder->encodePassword(
      $entity,
      $entity->getPlainPassword()
    );

    $entity->setPassword($encoded);
  }

  public function prePersist(LifecycleEventArgs $args)
  {
    $entity = $args->getEntity();
    if (!$entity instanceof User) {
      return null;
    }

    $this->encodePassword($entity);
  }

  public function preUpdate(LifecycleEventArgs $args)
  {
    $entity = $args->getEntity();
    if (!$entity instanceof User) {
      return null;
    }

    $this->encodePassword($entity);

    // necessary to force the update to see the change
    $em = $args->getEntityManager();
    $meta = $em->getClassMetadata(get_class($entity));
    $em->getUnitOfWork()->recomputeSingleEntityChangeSet($meta, $entity);
  }

  public function getSubscribedEvents()
  {
    return ['prePersist', 'preUpdate'];
  }
}