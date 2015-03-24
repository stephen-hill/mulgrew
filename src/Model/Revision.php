<?php

namespace Mulgrew\Model;

use DateTimeInterface;

class Revision
{
    /**
     * Revision Identifier.
     *
     * @column(type="string", length="40", )
     *
     * @var integer
     */
    protected $id;

    /**
     * The page.
     *
     * @var Mulgrew\Model\Page
     * @ManyToOne(targetEntity="Mulgrew\Model\Page", inversedBy="revisions")
     */
    protected $page;

    /**
     * The user who created the revision.
     *
     * @var Mulgrew\Model\User
     */
    protected $user;

    /**
     * Opcodes to get to the previous revision.
     *
     * @var string|null
     */
    protected $opcodes;

    /**
     * Optional comment for this revision.
     *
     * @var string
     */
    protected $comment;

    /**
     * The date and time the revision was created.
     *
     * @var DateTimeInterface
     */
    protected $datetime;
}
