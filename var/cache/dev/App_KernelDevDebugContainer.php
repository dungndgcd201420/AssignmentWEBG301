<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXdVkzEv\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXdVkzEv/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXdVkzEv.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXdVkzEv\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXdVkzEv\App_KernelDevDebugContainer([
    'container.build_hash' => 'XdVkzEv',
    'container.build_id' => 'c38b604e',
    'container.build_time' => 1656053493,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXdVkzEv');
