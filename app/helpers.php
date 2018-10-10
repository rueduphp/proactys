<?php
/**
 * @return bool
 */
function isProd(): bool
{
    return env('APP_ENV') === 'production';
}

/**
 * @param null|string $namespace
 * @return \App\Models\Cache
 */
function store(?string $namespace = null)
{
    $store = new \App\Models\Cache;

    if (null !== $namespace) {
        return $store->setNamespace($namespace);
    }

    return $store;
}
