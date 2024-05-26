<?php

namespace EmbedMedia\Services\Platforms;

class YoutubeVideo implements PlatformVideoInterface
{
    public function generate(string $url): string
    {
        $embedUrl = $url;
        if (str_contains($url, 'watch?v=')) {
            $embedUrl = str_replace('watch?v=', 'embed/', $url);
        }

        if (str_contains($url, 'shorts')) {
            $embedUrl = str_replace('shorts', 'embed', $url);
        }

        if (str_contains($url, 'embed') && str_contains($url, '?')) {
            $embedUrl = strstr($url, '?', true);
        }

        if (str_contains($url, "&ab_channel")) {
            $embedUrl = strstr($embedUrl, '&ab_channel', true);
        }

        return "<iframe src=\"$embedUrl\" frameborder=\"0\" allowfullscreen style=\"width: 100%; height: 100%\"></iframe>";
    }
}