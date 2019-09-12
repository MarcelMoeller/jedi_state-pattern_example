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
        echo "Rest in peace little jedi.<br/>";
    }

    public function showState()
    {
        echo "The jedi is dead.<br/>";
    }
}