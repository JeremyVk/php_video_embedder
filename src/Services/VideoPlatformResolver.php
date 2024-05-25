<?php

namespace EmbedMedia\Services;

use EmbedMedia\Services\Platforms\InstagramVideo;
use EmbedMedia\Services\Platforms\PlatformVideoInterface;
use EmbedMedia\Services\Platforms\TiktokVideo;
use EmbedMedia\Services\Platforms\YoutubeVideo;

class VideoPlatformResolver
{
    public function resolve(string $url): ?PlatformVideoInterface
    {
        if (str_contains($url, 'youtube')) {
            return new YoutubeVideo();
        }

        if (str_contains($url, 'tiktok')) {
            return new TiktokVideo();
        }

        if (str_contains($url, 'instagram')) {
            return new InstagramVideo();
        }

        return null;
    }
}