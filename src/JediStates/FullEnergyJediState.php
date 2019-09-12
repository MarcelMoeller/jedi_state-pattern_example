<?php

class FullEnergyJediState extends JediState {

    public function run()
    {
        echo "The jedi runs with full speed.";
        $this->jedi->setState(new PartialEnergyJediState());
    }

    public function attack()
    {
        echo "The jedi attacks with full power.";
        $this->jedi->setState(new PartialEnergyJediState());
    }

    public function rest()
    {
        echo "There is no need for the jedi to rest";
    }
}