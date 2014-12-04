<?php

namespace OSEF\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use OSEF\CommonBundle\Traits\DoctrineBehaviors as OSEFDB;

/**
 * Comment
 *
 * @ORM\Table(name="comment")
 * @ORM\Entity(repositoryClass="OSEF\AppBundle\Entity\CommentRepository")
 */
class Comment
{
    use OSEFDB\Id;

    /**
     * @var string
     */
    private $content;

    /**
     * Set content
     *
     * @param string $content
     * @return Comment
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }
}
