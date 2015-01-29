<?php

namespace Wiki;

use DateTime;

class Revision
{
    /**
     * Revision Identifier
     * @var integer
     */
    protected $id;

    /**
     * The page
     * @var Wiki\Page
     */
    protected $page;

    /**
     * The user who created the revision
     * @var Wiki\User
     */
    protected $user;

    /**
     * The text contents of this revision
     * @var string
     */
    protected $text;

    /**
     * Optional comment for this revision
     * @var string
     */
    protected $comment;

    /**
     * The date and time the revision was created.
     * @var DateTime
     */
    protected $datetime;
}