<?php
/**
 * Created by PhpStorm.
 * User: Razor
 * Date: 02/12/14
 * Time: 17:03
 */
namespace OSEF\AppBundle\Listener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use OSEF\AppBundle\Entity\Article;

class ArticleListener
{
    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        if ($entity instanceof Article) {
            $entity->setCreatedAt(new \DateTime());
            $entity->setUpdatedAt(new \DateTime());
        }
    }

    public function preUpdate(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        if ($entity instanceof Article) {
            $entity->setUpdatedAt(new \DateTime());
        }
    }
} 