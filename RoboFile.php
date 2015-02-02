<?php
/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see http://robo.li/
 */
class RoboFile extends \Robo\Tasks
{
    function phpunit()
    {
        $this->taskWatch()
        ->monitor(['src', 'tests'], function() {
             $this->taskExec('phpunit')->run();
        })->run();
    }
}