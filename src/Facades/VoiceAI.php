<?php

namespace RanaTuhin\VoiceAI\Facades;

use Illuminate\Support\Facades\Facade;

class VoiceAI extends Facade
{
     protected static function getFacadeAccessor()
     {
          return 'voiceai';
     }
}
