<?php


class PartialEnergyJediState extends JediState
{

    public function run()
    {
        echo "The jedi runs really slow and needs to rest.<br/>";
        $this->jedi->setState(new NoEnergyJediState($this->jedi));
    }

    public function attack()
    {
        echo "The jedi makes a really weak attack and needs to rest.<br/>";
        $this->jedi->setState(new NoEnergyJediState($this->jedi));
    }

    public function rest()
    {
        echo "The jedi rest and gains alot of energy back.<br/>";
        $this->jedi->setState(new FullEnergyJediState($this->jedi));
    }
}