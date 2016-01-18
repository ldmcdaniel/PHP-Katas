<?php


namespace Acme;


class Player
{
    public $name;

    public $score;

    public function __construct($name, $score)
    {
        $this->name = $name;
        $this->score = $score;

        $this->beConstructedWith($this->john, $this->jane);
    }
}
