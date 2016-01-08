<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RomanNumeralsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('RomanNumerals');
    }
}
