<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1GlXv1P\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1GlXv1P/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container1GlXv1P.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container1GlXv1P\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container1GlXv1P\App_KernelDevDebugContainer([
    'container.build_hash' => '1GlXv1P',
    'container.build_id' => 'db020579',
    'container.build_time' => 1655726291,
], __DIR__.\DIRECTORY_SEPARATOR.'Container1GlXv1P');
