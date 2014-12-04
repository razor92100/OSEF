<?php
/**
 * Created by PhpStorm.
 * User: Razor
 * Date: 02/12/14
 * Time: 18:19
 */
namespace OSEF\CommonBundle\Traits\DoctrineBehaviors;

trait Id
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
} 