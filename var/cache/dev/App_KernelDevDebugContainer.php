<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOAoRK0x\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOAoRK0x/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOAoRK0x.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOAoRK0x\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerOAoRK0x\App_KernelDevDebugContainer([
    'container.build_hash' => 'OAoRK0x',
    'container.build_id' => 'c84be1b5',
    'container.build_time' => 1656082836,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOAoRK0x');
