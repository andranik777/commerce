<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHqirQCj\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHqirQCj/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerHqirQCj.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerHqirQCj\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerHqirQCj\App_KernelProdContainer([
    'container.build_hash' => 'HqirQCj',
    'container.build_id' => '64097e68',
    'container.build_time' => 1645271523,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHqirQCj');