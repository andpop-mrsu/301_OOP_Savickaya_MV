<?php

namespace App;

class Truncater
{
    private array $options;
    private static array $defaultOptions = [
        'length' => 50,
        'separator' => '...',
    ];

    public function __construct(array $options = [])
    {
        $this->options = array_merge(self::$defaultOptions, $options);
    }

    public function truncate(string $text, array $customOptions = []): string
    {
        $options = array_merge($this->options, $customOptions);
        $length = $options['length'];
        $separator = $options['separator'];

        if ($length < 0) {
            return '';
        }

        return mb_strlen($text) > $length
            ? mb_substr($text, 0, $length) . $separator
            : $text;
    }
}
