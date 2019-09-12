<?php


class DeadJediState implements JediState
{

    public function run()
    {
        echo "Cant run because the Jedi is dead";
    }

    public function attack()
    {
        echo "Cant attack because the Jedi is dead";
    }

    public function rest()
    {
        echo "Cant rest because the Jedi is dead";
    }
}