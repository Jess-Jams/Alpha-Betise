<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCN2IP5b\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCN2IP5b/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCN2IP5b.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCN2IP5b\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCN2IP5b\App_KernelDevDebugContainer([
    'container.build_hash' => 'CN2IP5b',
    'container.build_id' => 'afb88709',
    'container.build_time' => 1664285771,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCN2IP5b');
