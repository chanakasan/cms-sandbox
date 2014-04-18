<?php

namespace Dreamhood\CmsBundle\DataFixtures\PHPCR;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Dreamhood\CmsBundle\Document\Page;

class LoadPageData extends AbstractFixture implements OrderedFixtureInterface
{
    function load(ObjectManager $dm)
    {
        $parent = $dm->find(null, '/cms/content/pages');

        foreach(array('Home', 'About', 'Contact') as $title)
        {
            $page = new Page();
            $page->setParent($parent);
            $page->setTitle($title);
            $page->setContent('This is the content of '.strtolower($title).' page');
            $dm->persist($page);
        }
        $dm->flush();
    }

    function getOrder()
    {
        return 50;
    }

} 