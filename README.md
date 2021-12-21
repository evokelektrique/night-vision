# NightVision

## APIs

List of supported services or APIs with their examples.

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
//    [5] => 218.252.244.104:80
//    [6] => 47.74.152.29:8888
//    ...
// )
```
