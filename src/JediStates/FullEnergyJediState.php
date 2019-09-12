<?php

class FullEnergyJediState extends JediState {

    public function run()
    {
        echo "The jedi runs with full speed.<br/>";
        $this->jedi->setState(new PartialEnergyJediState($this->jedi));
    }

    public function attack()
    {
        echo "The jedi attacks with full power.<br/>";
        $this->jedi->setState(new PartialEnergyJediState($this->jedi));
    }

    public function rest()
    {
        echo "There is no need for the jedi to rest.<br/>";
    }
}