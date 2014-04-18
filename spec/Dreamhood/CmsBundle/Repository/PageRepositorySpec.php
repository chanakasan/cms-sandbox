<?php

namespace spec\Dreamhood\CmsBundle\Repository;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PageRepositorySpec extends ObjectBehavior
{
    public function let($dm, $classMetadata)
    {
        $dm->beADoubleOf('Doctrine\Common\Persistence\ObjectRepository');
        $classMetadata->beADoubleOf('Doctrine\ODM\PHPCR\Mapping\ClassMetadata');

        $this->beConstructedWith($dm, $classMetadata);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Dreamhood\CmsBundle\Repository\PageRepository');
    }

    function it_implements_phpcr_document_repository_class()
    {
        $this->shouldHaveType('Doctrine\ODM\PHPCR\DocumentRepository');
    }
}
