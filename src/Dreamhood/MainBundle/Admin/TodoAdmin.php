<?php

namespace Dreamhood\MainBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class TodoAdmin extends Admin
{
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name', 'text')
            ->addIdentifier('description', 'text')
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Create / Edit')
            ->add('name', 'text')
            ->add('description', 'textarea')
            ->end();
    }

    public function getExportFormats()
    {
        return array();
    }
} 