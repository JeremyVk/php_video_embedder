# Php video embedder

This library simply return HTML embed code, just by passing the video url.

## Requirements
This library required php >= 8.1 version

## Getting started

Just run 
```sh
composer require jeremy_vk/php_video_embedder
```

## How to use it

Simply instance the `EmbedMedia\Services\VideoEmbedder` class
```
$videoEmbedder = new EmbedMedia\Services\VideoEmbedder(new EmbedMedia\Services\VideoPlatformResolver());
```

Or use the dependency injection
```
public function __construct (private VideoEmbedder $videoEmbedder){}
```

Here is an example of how to use the VideoEmbedder to embed video
```
$videoURL = "https://www.youtube.com/watch?v=dQw4w9WgXcQ55";
$embedCode = $videoEmbedder->embedVideo($videoURL);
echo $embedCode;
```

Should return 
```
<iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ55" frameborder="0" allowfullscreen style="width: 100%; height: 100%"></iframe>
```
Three platforms are configured:

- Tiktok
- Youtube
- Instagram

### If you want to contribute to this project, like add a new platform, you can open an issue to talk about it, or just open a pull request