<?php namespace myLib;


class Config
{
    private static $attributes = [];

    public static function get($var, $default = null)
    {
        return self::$attributes[$var] ?? $default;
    }

    public static function setArray($params)
    {
        self::$attributes = array_merge(self::$attributes, $params);
    }


}