<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQOxxw80\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQOxxw80/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQOxxw80.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQOxxw80\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQOxxw80\App_KernelDevDebugContainer([
    'container.build_hash' => 'QOxxw80',
    'container.build_id' => '669312c6',
    'container.build_time' => 1664998090,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQOxxw80');
