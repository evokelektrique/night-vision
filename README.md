<div align="center">
   <br>
   <img src="./night-vision.png" alt="Night Vision" />
   <br>
   <br>
   <h3>NightVision</h3>
   <p>(Under development)</p>
</div>

List of supported services or APIs with their examples:

### ProxyScrape

Scrape websites without limits

```php
// Fetching HTTP proxies
$options = [
   "timeout" => 1000,
   "protocol" => "http",
   "country" => "all",
   "ssl" => "all",
   "anonymity" => "all"
];

$endpoint = new ProxyScrape($options);
$list = $endpoint->get();
// Array
// (
//    [0] => 112.6.117.178:8085
//    [1] => 176.9.63.62:3128
//    [2] => 185.61.152.137:8080
//    [3] => 213.230.69.193:3128
//    [4] => 92.204.251.199:1080
//    ...
// )
```

## Why?

Well this repo is the re implementation of my personal PHP class that I used to scrape various websites, because they didn't provide a valid and updated APIs for their services and the only option to get data from those services was to get it done via scraping the pages and to bypass the limits I had to use proxies, **NightVision** provides free and new proxy lists from many sources.

The reason I named this library **NightVision** is because for decades, the U.S. military has prided itself on "owning the night" thanks to its unmatched night-vision technology.

![image](https://user-images.githubusercontent.com/53313989/146945825-f2fadd44-f4b9-4096-a2f4-bfa9d9408219.png)
<a href="https://45-9mm-5-56mm.tumblr.com/post/160959109744/night-time-is-the-right-time-andrew">Source</a>
