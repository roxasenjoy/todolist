<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPN7oVKv\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPN7oVKv/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPN7oVKv.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPN7oVKv\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerPN7oVKv\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'PN7oVKv',
    'container.build_id' => '3d623c2e',
    'container.build_time' => 1585515615,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPN7oVKv');
