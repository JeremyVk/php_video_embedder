<?php

namespace EmbedMedia\Services\Platforms;

interface PlatformVideoInterface
{
    public function generate(string $url): string;
}