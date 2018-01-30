<?php

namespace MyTest\libs;


use Psr\Log\LogLevel;

class Test
{

    public static function getName()
    {
        return "test";
    }

    public static function getDebug()
    {
        return LogLevel::DEBUG;
    }
}