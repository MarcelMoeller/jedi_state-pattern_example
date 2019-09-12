<?php


class Jedi
{

    protected $state;

    public function __construct()
    {
        $this->state = new FullEnergyJediState($this);
    }

    public function setState(JediState $state) {
        $this->state = $state;
    }

    public function run() {
        $this->state->run();
    }

    public function rest() {
        $this->state->rest();
    }

    public function attack() {
        $this->state->attack();
    }

    public function showState() {
        echo "<strong>State:</strong> ";
        $this->state->showState();
    }
}