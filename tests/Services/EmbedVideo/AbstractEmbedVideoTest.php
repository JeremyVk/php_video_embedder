<?php

use EmbedMedia\Services\VideoEmbedder;
use EmbedMedia\Services\VideoPlatformResolver;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

abstract class AbstractEmbedVideoTest extends TestCase
{
    protected MockObject|VideoPlatformResolver $videoPlatformResolver;
    protected VideoEmbedder $embedVideo;
    public function setUp(): void
    {
        $this->videoPlatformResolver = new VideoPlatformResolver();
        $this->embedVideo = new VideoEmbedder($this->videoPlatformResolver);
    }
}