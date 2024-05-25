<?php

namespace EmbedMedia\Services\Platforms;

class TiktokVideo implements PlatformVideoInterface
{
    public function generate(string $url): string
    {
        $videoId = $this->extractTiktokVideoId($url);

        if (str_contains($url, 'embed')) {
            return "<iframe src='$url' frameborder='0' allowfullscreen style='width: 100%; height: 100%'></iframe>";
        }

        return "<blockquote class='tiktok-embed' cite='$url' data-video-id='$videoId'><section></section></blockquote>
                <script async src='https://www.tiktok.com/embed.js'></script>";
    }

    private function extractTiktokVideoId(string $url)
    {
        $parts = explode('/video/', $url);
        if (count($parts) > 1) {
            return $parts[1];
        }
        return null;
    }
}