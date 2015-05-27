<?php

namespace Mulgrew\Model;

use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table(name="notebook")
 */
class Notebook
{
    /**
     * @Id
     * @Column(type="integer")
     *
     * @var int
     */
    protected $id;

    /**
     * @Column(type="string", length=128, unique=true)
     *
     * @var string
     */
    protected $title;

    /**
     * @OneToMany(targetEntity="Mulgrew\Model\Note", mappedBy="notebook")
     * @var Collection
     */
    protected $notes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->setNotes(new ArrayCollection());
    }

    /**
     * Get the identifier of this Notebook.
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
    protected function setNotes(Collection $notes)
    {
        $this->notes = $notes;

        return $this;
    }
}
