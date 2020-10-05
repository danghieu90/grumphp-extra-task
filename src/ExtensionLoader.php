<?php

namespace HD\GrumPhpExtraTask;

use GrumPHP\Extension\ExtensionInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
use HD\GrumPhpExtraTask\Task\PhpCs;
use HD\GrumPhpExtraTask\Task\PhpMd;

class ExtensionLoader implements ExtensionInterface
{
    public function load(ContainerBuilder $container): void
    {
        $container->register('task.php_cs', PhpCs::class)
            ->addArgument(new Reference('process_builder'))
            ->addArgument(new Reference('formatter.phpcs'))
            ->addTag('grumphp.task', ['task' => 'php_cs']);

        $container->register('task.php_md', PhpMd::class)
            ->addArgument(new Reference('process_builder'))
            ->addArgument(new Reference('formatter.raw_process'))
            ->addTag('grumphp.task', ['task' => 'php_md']);
    }
}