<?php

namespace App\Services\External;

class RequestHelper implements RequestInterface
{
    public function __construct(
        private readonly string $accessToken,
        private readonly string $uri,
    ) {}

    public function url(string $path): string
    {
        return "$this->uri/$path";
    }

    public function query(array $extra = []): array
    {
        return [
            'access_token' => $this->accessToken,
            ...$extra,
        ];
    }
}
