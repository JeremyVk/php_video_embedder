<?php

namespace tests\Services\EmbedVideo;

use AbstractEmbedVideoTest;

class TiktokEmbedVideoTest extends AbstractEmbedVideoTest
{
    public function testEmbedVideoWithSimpleUrl()
    {
        $url = "https://www.tiktok.com/@oceandreaa/video/7372954659004222752";
        $embedCode = $this->embedVideo->embedVideo($url);

        $expectedCode = "<blockquote class='tiktok-embed' cite='https://www.tiktok.com/@oceandreaa/video/7372954659004222752' data-video-id='7372954659004222752'><section></section></blockquote>
                <script async src='https://www.tiktok.com/embed.js'></script>";

        $this->assertEquals($expectedCode, $embedCode);
    }
}