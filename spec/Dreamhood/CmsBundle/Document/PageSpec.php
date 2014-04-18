<?php

namespace spec\Dreamhood\CmsBundle\Document;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PageSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Dreamhood\CmsBundle\Document\Page');
    }

    function its_title_is_null_by_default()
    {
        $this->getTitle()->shouldReturn(null);
    }

    function its_id_is_null_by_default()
    {
        $this->getId()->shouldReturn(null);
    }

    function its_parent_is_null_by_default()
    {
        $this->getParent()->shouldReturn(null);
    }

    function its_content_is_null_by_default()
    {
        $this->getContent()->shouldReturn(null);
    }
}
