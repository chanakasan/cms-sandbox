<?php

namespace Dreamhood\MainBundle\DataFixtures\MongoDB;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Dreamhood\MainBundle\Document\Todo;

class LoadTodoData extends AbstractFixture implements OrderedFixtureInterface
{
    function load(ObjectManager $dm)
    {
        foreach(array('First', 'Second', 'Third', 'Fourth') as $name)
        {
            $todo = new Todo();
            $todo->setName($name);
            $todo->setDescription('Must do this '.strtolower($name));

            $dm->persist($todo);
        }

        $dm->flush();
    }

    function getOrder()
    {
        return 10;
    }
} 