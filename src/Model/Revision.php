<?php

namespace Mulgrew\Model;

use DateTimeInterface;

/**
 * @Entity
 * @Table(name="revision")
 */
class Revision
{
    /**
     * Revision Identifier.
     *
     * @Id
     * @Column(type="integer")
     *
     * @var integer
     */
    protected $id;

    /**
     * The user who created the revision.
     *
     * @var Mulgrew\Model\User
     */
    protected $user;

    /**
     * Opcodes to get to the previous revision.
     *
     * @Column(type="text")
     *
     * @var string|null
     */
    protected $opcodes;

    /**
     * The date and time the revision was created.
     *
     * @var DateTimeInterface
     */
    protected $datetime;
}
