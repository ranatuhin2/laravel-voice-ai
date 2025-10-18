<p align="center">
  <img src="https://github.com/ranatuhin2/laravel-voice-ai/blob/main/resources/icon.png" width="800" alt="Laravel Voice AI">
</p>

# Laravel Voice AI

**AI Voice / Speech Processing package for Laravel**  
Simulate **Speech-to-Text (STT)** and **Text-to-Speech (TTS)** operations, with optional AI provider integration.

---

## Installation

Install via Composer:

```bash
composer require rana-tuhin/laravel-voice-ai:@dev
```

Laravel will **auto-discover** the package.

---

## Publish Configuration

To customize default settings, publish the package config:

```bash
php artisan vendor:publish --tag=config
```

This will create `config/voiceai.php` in your Laravel project.

---

## Usage

### **Using the Facade**

```php
use VoiceAI;

// Convert audio file to text
$text = VoiceAI::speechToText('storage/audio/sample.wav');

// Convert text to audio
$audioFile = VoiceAI::textToSpeech('Hello world!', 'en-US', 'female');
```

---

### **Using the Service Class Directly**

```php
use RanaTuhin\VoiceAI\Services\VoiceService;

// Initialize service
$voice = new VoiceService();

// Convert audio to text
$text = $voice->speechToText('storage/audio/sample.wav');
echo $text; 
// Output: [Simulated] Transcribed text from audio file: storage/audio/sample.wav

// Convert text to audio
$audioFile = $voice->textToSpeech('Hello world!', 'en-US', 'female');
echo $audioFile; 
// Output: [Simulated] Audio file for 'Hello world!' in en-US (female)
```

---

### **Class & Method Reference**

| Class | Method | Description | Parameters | Returns |
|-------|--------|-------------|------------|---------|
| `VoiceService` | `speechToText(string $audioFilePath)` | Converts audio file to text (simulated) | `$audioFilePath` – path to audio file | `string` |
| `VoiceService` | `textToSpeech(string $text, string $language = 'en-US', string $voice = 'female')` | Converts text to audio file (simulated) | `$text`, `$language`, `$voice` | `string` |
| `VoiceAI` (Facade) | `speechToText(string $audioFilePath)` | Same as `VoiceService::speechToText` | - | `string` |
| `VoiceAI` (Facade) | `textToSpeech(string $text, string $language = 'en-US', string $voice = 'female')` | Same as `VoiceService::textToSpeech` | - | `string` |

---
