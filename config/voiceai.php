<?php

return [

     /*
    |--------------------------------------------------------------------------
    | Default Language
    |--------------------------------------------------------------------------
    |
    | This language will be used for Text-to-Speech and Speech-to-Text
    | processing. You can override it when calling the methods.
    |
    */

     'language' => 'en-US',

     /*
    |--------------------------------------------------------------------------
    | Default Voice
    |--------------------------------------------------------------------------
    |
    | The voice used for Text-to-Speech. Can be 'male' or 'female' or other
    | voices depending on the AI provider you integrate.
    |
    */

     'voice' => 'female',

     /*
    |--------------------------------------------------------------------------
    | AI Provider
    |--------------------------------------------------------------------------
    |
    | Specify the AI provider you want to use for STT/TTS processing. For
    | example, 'openai', 'google', or 'elevenlabs'.
    |
    */

     'provider' => 'openai',

     /*
    |--------------------------------------------------------------------------
    | API Key
    |--------------------------------------------------------------------------
    |
    | Provide your API key for the AI provider. You can also set this in your
    | .env file as VOICEAI_API_KEY.
    |
    */

     'api_key' => env('VOICEAI_API_KEY', ''),
];
