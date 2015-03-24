<?php

use Mulgrew\Model\Notebook;

class NotebookTest extends PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $notebook = new Notebook();

        $this->assertInstanceOf(Notebook::Class, $notebook);
    }

    public function testProperties()
    {
        $notebook = new Notebook();
        $notebook->setTitle('Example Notebook');

        $this->assertSame('Example Notebook', $notebook->getTitle());
    }
}
