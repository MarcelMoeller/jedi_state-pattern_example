<?php


class PartialEnergyJediState extends JediState
{

    public function run()
    {
        echo "The jedi runs really slow and needs to rest.";
        $this->jedi->setState(new NoEnergyJediState());
    }

    public function attack()
    {
        echo "The jedi makes a really weak attack and needs to rest.";
        $this->jedi->setState(new NoEnergyJediState());
    }

    public function rest()
    {
        echo "The jedi rest and gains alot of energy back.";
        $this->jedi->setState(new FullEnergyJediState());
    }
}