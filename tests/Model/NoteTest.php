<?php

use Mulgrew\Model\Note;

class NoteTest extends PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $note = new Note();

        $this->assertInstanceOf(Note::Class, $note);
    }

    public function testProperties()
    {
        $note = new Note();
        $note->setTitle('Example Note');
        $note->setText('Lorem ipsum dolor sit amet...');

        $this->assertSame('Example Note', $note->getTitle());
        $this->assertSame('Lorem ipsum dolor sit amet...', $note->getText());
    }
}
