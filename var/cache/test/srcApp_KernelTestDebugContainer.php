<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXuQgT13\srcApp_KernelTestDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXuQgT13/srcApp_KernelTestDebugContainer.php') {
    touch(__DIR__.'/ContainerXuQgT13.legacy');

    return;
}

if (!\class_exists(srcApp_KernelTestDebugContainer::class, false)) {
    \class_alias(\ContainerXuQgT13\srcApp_KernelTestDebugContainer::class, srcApp_KernelTestDebugContainer::class, false);
}

return new \ContainerXuQgT13\srcApp_KernelTestDebugContainer([
    'container.build_hash' => 'XuQgT13',
    'container.build_id' => '129fce08',
    'container.build_time' => 1585846044,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXuQgT13');
