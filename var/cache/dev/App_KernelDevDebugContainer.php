<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJ0bFZ2r\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJ0bFZ2r/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJ0bFZ2r.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJ0bFZ2r\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJ0bFZ2r\App_KernelDevDebugContainer([
    'container.build_hash' => 'J0bFZ2r',
    'container.build_id' => 'a78937a8',
    'container.build_time' => 1699635135,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJ0bFZ2r');