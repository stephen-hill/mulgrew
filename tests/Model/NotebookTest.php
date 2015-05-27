<?php

use Mulgrew\Model\Note;
use Mulgrew\Model\Notebook;

class NotebookTest extends PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $notebook = new Notebook();

        $this->assertInstanceOf(Notebook::Class, $notebook);
    }

    public function testTitle()
    {
        $notebook = new Notebook();
        $notebook->setTitle('Example Notebook');

        $this->assertSame('Example Notebook', $notebook->getTitle());
    }

    public function testNotes()
    {
        $notebook = new Notebook();
        $noteA = new Note();
        $noteB = new Note();

        $noteA->setTitle('Note A');
        $noteB->setTitle('Note B');

        $notebook->getNotes()->add($noteA);
        $notebook->getNotes()->add($noteB);

        $this->assertSame(2, $notebook->getNotes()->count());
    }
}
