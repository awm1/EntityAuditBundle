<?php

declare(strict_types=1);

namespace Sonata\EntityAuditBundle\Tests\Fixtures\Relation;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class ManyToManyMultipleRelationshipCustomIdNamedEntity extends ManyToManyMultipleRelationshipEntity
{
    /**
     * @var int|null
     */
    #[ORM\Id]
    #[ORM\Column(name: 'strange_owned_id_name', type: Types::INTEGER)]
    #[ORM\GeneratedValue]
    protected $id;
}
