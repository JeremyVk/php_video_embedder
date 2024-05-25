<?php

namespace tests\Services\EmbedVideo;

use AbstractEmbedVideoTest;

class InstagramEmbedVideoTest extends AbstractEmbedVideoTest
{
    public function testEmbedVideoWithSimpleUrl()
    {
        $url = "https://www.instagram.com/reel/C4st4BFOB3o/";
        $embedCode = $this->embedVideo->embedVideo($url);

        $expectedCode = "<blockquote class='instagram-media' data-instgrm-permalink='https://www.instagram.com/reel/C4st4BFOB3o/?utm_source=ig_embed&amp;utm_campaign=loading' data-instgrm-version='14' style='width:100%; height: 100%'></blockquote>
                <script async src='//www.instagram.com/embed.js'></script>";

        $this->assertEquals($expectedCode, $embedCode);
    }
}