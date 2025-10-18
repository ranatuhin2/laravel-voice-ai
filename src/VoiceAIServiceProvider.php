<?php

namespace RanaTuhin\VoiceAI;

use Illuminate\Support\ServiceProvider;

class VoiceAIServiceProvider extends ServiceProvider
{
     /**
      * Bootstrap any package services.
      */
     public function boot(): void
     {
          // Publish config
          $this->publishes([
               __DIR__ . '/../config/voiceai.php' => config_path('voiceai.php'),
          ], 'config');
     }

     /**
      * Register any package services.
      */
     public function register(): void
     {
          // Merge package config with app config
          $this->mergeConfigFrom(
               __DIR__ . '/../config/voiceai.php',
               'voiceai'
          );

          // Bind the main service class
          $this->app->singleton('voiceai', function ($app) {
               return new Services\VoiceService();
          });
     }
}
