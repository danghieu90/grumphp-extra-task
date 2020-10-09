<?php

namespace HD\GrumPhpExtraTask;

use GrumPHP\Extension\ExtensionInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
use HD\GrumPhpExtraTask\Task\PhpCs;
use HD\GrumPhpExtraTask\Task\EsLint;
use HD\GrumPhpExtraTask\Task\Jscs;
use HD\GrumPhpExtraTask\Task\Composer;
use HD\GrumPhpExtraTask\Task\PhpCompatibility;

class ExtensionLoader implements ExtensionInterface
{
    public function load(ContainerBuilder $container): void
    {
        $container->register('task.php_cs', PhpCs::class)
            ->addArgument(new Reference('process_builder'))
            ->addArgument(new Reference('formatter.phpcs'))
            ->addTag('grumphp.task', ['task' => 'php_cs']);

        $container->register('task.es_lint', EsLint::class)
            ->addArgument(new Reference('process_builder'))
            ->addArgument(new Reference('formatter.raw_process'))
            ->addTag('grumphp.task', ['task' => 'es_lint']);

        $container->register('task.jscs', Jscs::class)
            ->addArgument(new Reference('process_builder'))
            ->addArgument(new Reference('formatter.raw_process'))
            ->addTag('grumphp.task', ['task' => 'jscs']);

        $container->register('task.composer_validate', Composer::class)
            ->addArgument(new Reference('process_builder'))
            ->addArgument(new Reference('formatter.raw_process'))
            ->addArgument(new Reference('grumphp.util.filesystem'))
            ->addTag('grumphp.task', ['task' => 'composer_validate']);

        $container->register('task.php_compatibility', PhpCompatibility::class)
            ->addArgument(new Reference('process_builder'))
            ->addArgument(new Reference('formatter.phpcs'))
            ->addTag('grumphp.task', ['task' => 'php_compatibility']);
    }
}