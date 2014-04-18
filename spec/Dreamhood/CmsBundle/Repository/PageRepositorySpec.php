<?php

namespace spec\Dreamhood\CmsBundle\Repository;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PageRepositorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Dreamhood\CmsBundle\Repository\PageRepository');
    }
}
