<?php
/**
 * @return bool
 */
function isProd(): bool
{
    return env('APP_ENV') === 'production';
}