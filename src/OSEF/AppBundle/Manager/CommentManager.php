<?php
/**
 * Created by PhpStorm.
 * User: Razor
 * Date: 04/12/14
 * Time: 21:40
 */

namespace OSEF\AppBundle\Manager;

use OSEF\AppBundle\Entity\CommentRepository;
use OSEF\CommonBundle\Doctrine\BaseManager;

class CommentManager extends BaseManager
{
    /**
     * @return CommentRepository
     */
    public function getRepository()
    {
        parent::getRepository();
    }
} 