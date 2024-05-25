<?php

namespace EmbedMedia\Services;

class VideoEmbedder
{
    public function __construct(
       private VideoPlatformResolver $resolver,
    ) {
    }

    public function embedVideo(string $url): ?string
    {
        $platform = $this->resolver->resolve($url);

        if (null === $platform) {
            return null;
        }

        return $platform->generate($url);
    }

    public function test(string $url): string
    {
       $platform = $this->resolver->resolve($url);

       return $platform->generate($url);
    }
}