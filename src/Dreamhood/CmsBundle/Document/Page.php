<?php

namespace Dreamhood\CmsBundle\Document;

use Doctrine\ODM\PHPCR\Mapping\Annotations as PHPCR;

/**
 * @PHPCR\Document(referenceable=true, repositoryClass="Dreamhood\CmsBundle\Repository\PageRepository")
 */
class Page
{
    function __toString()
    {
        return $this->getTitle() ? : 'New Page';
    }

    /**
     * @PHPCR\Id
     */
    protected $id;

    /**
     * @PHPCR\NodeName
     */
    protected $title;

    /**
     * @PHPCR\ParentDocument
     */
    protected $parent;

    /**
     * @PHPCR\String(nullable=true)
     */
    protected $content;

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $parent
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    }

    /**
     * @return mixed
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }
}
