<?php

abstract class JediState {

    /** @var Jedi $jedi */
    protected $jedi;

    public function __construct($jedi)
    {
        $this->jedi = $jedi;
    }

    abstract public function run();

    abstract public function attack();

    abstract public function rest();
}