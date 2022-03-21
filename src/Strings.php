<?php

namespace Khumam\Strings;

class Strings
{
    /**
     * clean
     *
     * @param  mixed $string
     * @param  mixed $patern
     * @return string
     */
    public static function clean(string $string, string $patern = '/[^a-z0-9\.]/i',): string
    {
        return preg_replace($patern, '', $string);
    }

    /**
     * lower
     *
     * @param  mixed $string
     * @return string
     */
    public static function lower(string $string): string
    {
        return strtolower($string);
    }

    /**
     * upper
     *
     * @param  mixed $string
     * @return string
     */
    public static function upper(string $string): string
    {
        return strtoupper($string);
    }

    /**
     * length
     *
     * @param  mixed $string
     * @return string
     */
    public static function length(string $string): string|int
    {
        return strlen($string);
    }

    /**
     * wordLength
     *
     * @param  mixed $text
     * @return string
     */
    public static function wordLength(string $text): string|int
    {
        return str_word_count($text);
    }

    /**
     * isContainNumber
     *
     * @param  mixed $string
     * @return bool
     */
    public static function isContainNumber(string $string): bool
    {
        return preg_match('~[0-9]+~', $string) ? true : false;
    }
}
