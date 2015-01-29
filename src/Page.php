<?php

namespace Wiki;

class Page
{
    /**
     * Page Identifier
     * @var integer
     */
    protected $id;

    /**
     * Case-sensetive Title
     * @var string
     */
    protected $title;

    /**
     * The revision that represents the current state of the page
     * @var Wiki\Revision
     */
    protected $latestRevision;
}