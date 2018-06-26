<?php

namespace Engine;

class Cms
{
    /**
     * @var \Engine\DI\DI
     */
    private $di;

    /**
     * Cms constructor.
     * @param $di
     */
    public function __construct($di)
    {
        $this->di = $di;
    }

    /**
     * Run Cms
     */
    public function run()
    {
        echo 'Hello Cms';
    }

}