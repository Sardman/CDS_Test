<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEgBjoUp\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEgBjoUp/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEgBjoUp.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEgBjoUp\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerEgBjoUp\App_KernelDevDebugContainer([
    'container.build_hash' => 'EgBjoUp',
    'container.build_id' => 'ee8541c4',
    'container.build_time' => 1698844757,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEgBjoUp');
