<?php

namespace Pickle\Sandbox\Bundle\BlogBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SandboxBlogBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'PickleBlogBundle';
    }
}
