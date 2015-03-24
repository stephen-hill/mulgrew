<?php

namespace Mulgrew\Model;

use Doctrine\Common\Collections\Collection;

class Note
{
    /**
     * Identifier.
     *
     * @var integer
     */
    protected $id;

    /**
     * Case-sensetive Title.
     *
     * @var string
     */
    protected $title;

    /**
     * The current text of the page.
     *
     * @var string
     */
    protected $text;

    /**
     * Collection of all revisions.
     *
     * @var Collection
     * @OneToMany(targetEntity="Mulgrew\Model\Revision", mappedBy="note")
     */
    protected $revisions;

    /**
     * Gets the Case-sensetive Title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the Case-sensetive Title.
     *
     * @param string $title the title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Gets the The current text of the page.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets the The current text of the page.
     *
     * @param string $text the text
     *
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Gets the Identifier.
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
