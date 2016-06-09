<?php

namespace DemacMedia\Bundle\CustomFRContactUsBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use DemacMedia\Bundle\CustomFRContactUsBundle\DependencyInjection\Compiler\ContactRequestFormPass;

class DemacMediaCustomFRContactUsBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new ContactRequestFormPass());
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'OroCRMContactUsBundle';
    }
}
