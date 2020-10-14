<?php

namespace HD\GrumPhpExtraTask;

use GrumPHP\Extension\ExtensionInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class ExtensionLoader implements ExtensionInterface
{
    public function load(ContainerBuilder $container): void
    {
        $container->register('task.php_cs', Task\PhpCs::class)
            ->addArgument(new Reference('process_builder'))
            ->addArgument(new Reference('formatter.phpcs'))
            ->addTag('grumphp.task', ['task' => 'php_cs']);

        $container->register('task.es_lint', Task\EsLint::class)
            ->addArgument(new Reference('process_builder'))
            ->addArgument(new Reference('formatter.raw_process'))
            ->addTag('grumphp.task', ['task' => 'es_lint']);

        $container->register('task.jscs', Task\Jscs::class)
            ->addArgument(new Reference('process_builder'))
            ->addArgument(new Reference('formatter.raw_process'))
            ->addTag('grumphp.task', ['task' => 'jscs']);

        $container->register('task.composer_validate', Task\Composer::class)
            ->addArgument(new Reference('process_builder'))
            ->addArgument(new Reference('formatter.raw_process'))
            ->addArgument(new Reference('grumphp.util.filesystem'))
            ->addTag('grumphp.task', ['task' => 'composer_validate']);

        $container->register('task.php_compatibility', Task\PhpCompatibility::class)
            ->addArgument(new Reference('process_builder'))
            ->addArgument(new Reference('formatter.phpcs'))
            ->addTag('grumphp.task', ['task' => 'php_compatibility']);

        $container->register('task.php_stan', Task\PhpStan::class)
            ->addArgument(new Reference('process_builder'))
            ->addArgument(new Reference('formatter.raw_process'))
            ->addTag('grumphp.task', ['task' => 'php_stan']);
    }
}