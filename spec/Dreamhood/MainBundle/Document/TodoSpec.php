<?php

namespace spec\Dreamhood\MainBundle\Document;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TodoSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Dreamhood\MainBundle\Document\Todo');
    }
}
