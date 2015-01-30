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
    protected $password;
}