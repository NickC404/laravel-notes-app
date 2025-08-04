<?php

namespace App\Services\Sharing;

interface SharingService
{
    public function share(string $title, string $content): void;
}
