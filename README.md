# Youtube Player Actions

## Install

In your main sovereign bot install, run this:
```
composer require sovereignbot/youtube-player
```

Add the youtube-player service provider to your config file:
```
$config['serviceProviders'] = [
    ... 
    Sovereign\Service\YoutubePlayerServiceProvider::class
];
```
And Restart Sovereign!
