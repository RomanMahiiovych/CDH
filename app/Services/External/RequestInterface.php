<?php

namespace App\Services\External;

interface RequestInterface
{
    public function url(string $path): string;
    public function query(array $extra = []): array;
}
