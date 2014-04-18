<?php

namespace Dreamhood\CmsBundle\Admin;

use Sonata\DoctrinePHPCRAdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class PageAdmin extends Admin
{
    private $parent_node = '/cms/content/pages';

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title', 'text')
            ->addIdentifier('content', 'text')
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Create / Edit')
            ->add('title', 'text')
            ->add('content', 'textarea')
            ->end();
    }

    public function prePersist($document)
    {
        $parent = $this->getModelManager()->find(null, $this->parent_node);
        $document->setParent($parent);
    }

    public function getExportFormats()
    {
        return array();
    }
}