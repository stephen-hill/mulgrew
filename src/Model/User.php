<?php

namespace Wiki\Model;

class User
{
    /**
     * User Identifier
     * @var integer
     */
    protected $id;

    /**
     * User's email address
     * @var string
     */
    protected $email;

    /**
     * User's hashed password
     * @var string
     */
    private $password;

    /**
     * Sets the User's hashed password.
     *
     * @param string $password the password
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $this->hash($password);

        return $this;
    }

    public function isPasswordMatch($password)
    {
        return $this->hash($password) === $this->password;
    }
    
    protected function hash($password)
    {
        return hash_pbkdf2('sha256', $password, $this->email, 256E3, 0, true);
    }

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
     * Gets the User's email address.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the User's email address.
     *
     * @param string $email the email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}