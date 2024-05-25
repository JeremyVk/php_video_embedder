<?php

namespace EmbedMedia\Services\Platforms;

class InstagramVideo implements PlatformVideoInterface
{
    public function generate(string $url): string
    {
        return "<blockquote class='instagram-media' data-instgrm-permalink='$url?utm_source=ig_embed&amp;utm_campaign=loading' data-instgrm-version='14' style='width:100%; height: 100%'></blockquote>
                <script async src='//www.instagram.com/embed.js'></script>";
    }
}