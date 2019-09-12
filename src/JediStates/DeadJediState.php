<?php


class DeadJediState extends JediState
{

    public function run()
    {
        echo "Cant run because the Jedi is dead.<br/>";
    }

    public function attack()
    {
        echo "Cant attack because the Jedi is dead.<br/>";
    }

    public function rest()
    {
        echo "Cant rest because the Jedi is dead.<br/>";
    }

    public function showState()
    {
        echo "The jedi is dead.<br/>";
    }
}