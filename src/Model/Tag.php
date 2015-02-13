<?php

namespace Mulgrew\Model;

use DateTimeInterface;

class Tag
{
    /**
     * User Identifier
     * @var integer
     */
    protected $id;
    
    /**
     * The name/value of the tag
     * @var string
     */
    protected $name;

    /**
     * When the tag was created.
     * @var DateTimeInterface
     */
    protected $created;

    /**
     * Gets the User Identifier.
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Gets the The name/value of the tag.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the The name/value of the tag.
     *
     * @param string $name the name
     *
     * @return self
     */
    protected function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets the When the tag was created.
     *
     * @return DateTimeInterface
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Sets the When the tag was created.
     *
     * @param DateTimeInterface $created the created
     *
     * @return self
     */
    protected function setCreated(DateTimeInterface $created)
    {
        $this->created = $created;

        return $this;
    }
}