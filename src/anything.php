<?php
class Anything
{
    static function generate($length)
    {
        return substr('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', mt_rand(0, 50), 1) . substr(md5(time()), 1);
    }
}
?>