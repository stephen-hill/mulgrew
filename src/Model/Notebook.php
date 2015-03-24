<?php

namespace Mulgrew\Model;

use Doctrine\Common\Collections\Collection;

/**
 * @Entity
 */
class Notebook
{
    /**
     * @Id
     *
     * @var int
     */
    protected $id;

    /**
     * @Column(type="string", length=256, unique=true)
     *
     * @var string
     */
    protected $title;

    /**
     * @var Collection
     */
    protected $notes;

    /**
     * Gets the value of id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Gets the value of title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the value of title.
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
     * Gets the value of notes.
     *
     * @return Collection
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Sets the value of notes.
     *
     * @param Collection $notes the notes
     *
     * @return self
     */
    public function setNotes(Collection $notes)
    {
        $this->notes = $notes;

        return $this;
    }
}
