<?php


class NoEnergyJediState extends JediState
{

    public function run()
    {
        echo "The jedi tries to run without energy but fails";
    }

    public function attack()
    {
        echo "The jedi tries to fight without energy and dies in the process";
        $this->jedi->setState(new DeadJediState($this->jedi));
    }

    public function rest()
    {
        echo "The jedi rests and partialy restores his energy";
        $this->jedi->setState(new PartialEnergyJediState($this->jedi));
    }
}