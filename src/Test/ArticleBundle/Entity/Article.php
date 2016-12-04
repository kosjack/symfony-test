<?php
/**
 * Created by PhpStorm.
 * User: Антон
 * Date: 02.12.2016
 * Time: 17:47
 */

namespace Test\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */

// New Comment
class Article
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @ORM\ManyToOne(targetEntity="Category",inversedBy="articles")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    protected $category;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Article
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set category
     *
     * @param \Test\ArticleBundle\Entity\Category $category
     *
     * @return Article
     */
    public function setCategory(\Test\ArticleBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Test\ArticleBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }
}
