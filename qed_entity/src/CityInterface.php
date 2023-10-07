<?php

namespace Drupal\qed_entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\user\EntityOwnerInterface;
use Drupal\Core\Entity\EntityChangedInterface;

/**
 * Provides an interface defining a City entity.
 *
 * We have this interface so we can join the other interfaces it extends.
 *
 * @ingroup qed_entity
 */
interface CityInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

}