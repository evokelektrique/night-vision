<?php

use PHPUnit\Framework\TestCase;
use \NightVision\Endpoint;

final class ProxyScrapeTest extends TestCase {
   private $endpoint;

   protected function setUp(): void {
      $this->endpoint = new Endpoint\ProxyScrape();
   }

   public function testGet(): void {
      $this->assertEquals($this->endpoint->get(), []);
   }
}
