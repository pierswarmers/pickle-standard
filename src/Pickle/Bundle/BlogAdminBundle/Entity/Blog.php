<?php

/*
 * This file is part of the PickleBlogBundle package.
 *
 * (c) Piers Warmers hello@pierswarmers.com
 *
 * For the full copyright and license information, please views the LICENSE
 * file that was distributed with this source code.
 */

namespace Pickle\Bundle\BlogAdminBundle\Entity;

use Pickle\Bundle\BlogBundle\Entity\Blog as BaseBlog;
use Doctrine\ORM\Mapping as ORM;

/**
 * Simply extends the base blog abject.
 *
 * @ORM\MappedSuperclass
 * @ORM\Table(name="pickle_blog")
 *
 */
class Blog extends BaseBlog
{

}