<?php

namespace tests\Services\EmbedVideo;

use AbstractEmbedVideoTest;

class YoutubeEmbedVideoTest extends AbstractEmbedVideoTest
{
    public function testEmbedVideoWithSimpleUrl()
    {
        $url = "https://www.youtube.com/watch?v=UTX0I4UoVPo&ab_channel=MikeCodeur";
        $embedCode = $this->embedVideo->embedVideo($url);

        $expectedCode = '<iframe src="https://www.youtube.com/embed/UTX0I4UoVPo" frameborder="0" allowfullscreen style="width: 100%; height: 100%"></iframe>';
        $this->assertEquals($expectedCode,$embedCode);
    }

    public function testWithEmbedUrl()
    {
        $url = "https://www.youtube.com/embed/JRA91H1XUiU?si=Bwx_QJwZjLNx-_Iv";
        $embedCode = $this->embedVideo->embedVideo($url);

        $expectedCode = '<iframe src="https://www.youtube.com/embed/JRA91H1XUiU" frameborder="0" allowfullscreen style="width: 100%; height: 100%"></iframe>';
        $this->assertEquals($expectedCode,$embedCode);
    }

    public function testWithShortUrl()
    {
        $url = "https://www.youtube.com/shorts/NHiztRy77Ys";
        $embedCode = $this->embedVideo->embedVideo($url);

        $expectedCode = '<iframe src="https://www.youtube.com/embed/NHiztRy77Ys" frameborder="0" allowfullscreen style="width: 100%; height: 100%"></iframe>';
        $this->assertEquals($expectedCode,$embedCode);
    }

    public function testEmbedVideoWithPerfectEmbedUrlShouldReturnIframeWithTheOriginalUrl()
    {
        $url = "https://www.youtube.com/embed/NHiztRy77Ys788";
        $embedCode = $this->embedVideo->embedVideo($url);

        $expectedCode = '<iframe src="https://www.youtube.com/embed/NHiztRy77Ys788" frameborder="0" allowfullscreen style="width: 100%; height: 100%"></iframe>';
        $this->assertEquals($expectedCode,$embedCode);
    }
}