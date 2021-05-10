<?php
namespace cloudapi;

class HttpClient
{
    private static $connectTimeout = 30000; //30 second
    private static $readTimeout = 80000; //80 second

    public static function execute($request)
    {
        return HttpUtil::send($request, self::$readTimeout, self::$connectTimeout);
    }
}
