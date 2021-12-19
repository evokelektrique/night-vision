<?php

namespace NightVision\Endpoint;
use NightVision\Interfaces;

/**
 * Proxyscrape.com API Handler Endpoint
 */
final class ProxyScrape implements Interfaces\EndpointApi {

   private $options;

   public function __construct(array $options) {
      $this->options = $options;
   }

   public function get(): array {
      return [];
   }

   public function request(): array {
      $url = $this->generate_request_url($this->options);
      return [];
   }

   private function generate_request_url($options) {
      // '?request=displayproxies&protocol=http&timeout=10000&country=all&ssl=all&anonymity=all'
   }
}
