<?php
/**
 * Created by PhpStorm.
 * User: Razor
 * Date: 03/12/14
 * Time: 11:35
 */

namespace OSEF\AppBundle\Manager;

use OSEF\AppBundle\Entity\ArticleRepository;
use OSEF\CommonBundle\Doctrine\BaseManager;

class ArticleManager extends BaseManager
{
    /**
     * @return ArticleRepository
     */
    public function getRepository()
    {
        parent::getRepository();
    }
} 