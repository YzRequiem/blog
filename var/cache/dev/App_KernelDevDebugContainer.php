<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXxm5AgK\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXxm5AgK/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXxm5AgK.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXxm5AgK\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXxm5AgK\App_KernelDevDebugContainer([
    'container.build_hash' => 'Xxm5AgK',
    'container.build_id' => '2f27bae4',
    'container.build_time' => 1647008680,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXxm5AgK');
