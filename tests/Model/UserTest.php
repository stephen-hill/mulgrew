<?php

use Mulgrew\Model\User;

class UserTest extends PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $user = new User();

        $this->assertInstanceOf(User::Class, $user);
    }

    public function testProperties()
    {
        $user = new User();
        $user->setEmail('wiki@example.com');

        $this->assertSame('wiki@example.com', $user->getEmail());
    }

    public function testPassword()
    {
        $user = new User();
        $user->setPassword('qUI&Jjt^I5J&p0Kk');

        $this->assertTrue($user->isPasswordMatch('qUI&Jjt^I5J&p0Kk'));
    }
}
