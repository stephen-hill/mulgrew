<?php

namespace Mulgrew\Model;

use Doctrine\Common\Collections\Collection;

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
     * The current text of the page
     * @var string
     */
    protected $text;

    /**
     * Collection of all revisions
     * @var Collection
     * @OneToMany(targetEntity="Mulgrew\Model\Revision", mappedBy="page")
     */
    protected $revisions;
}