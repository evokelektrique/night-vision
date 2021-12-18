<?php

namespace NightVision\Interfaces;

interface EndpointApi {
   public function get(): array;
   public function request(): array;
}
