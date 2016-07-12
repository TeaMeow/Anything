<?php
class Anything
{
    public static function generate($length, $source='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVEXYZ1234567890')
    {
        $x     = 0;
        $i     = 0;
        $final = '';

        $sourceLength = mb_strlen($source, 'utf8') - 1;

        while ($i <= ($length - 1))
        {
            $final .= mb_substr($source, rand(0, $sourceLength), 1, CODE_CHARSET);

            $i++;
        }

        return $final;
    }

    public static function ggidv8()
    {
        $basic = 'abcdefghijklmnopqrstuvwxyz0123456789';
        $hex   = sprintf('%06X', mt_rand(0, 0xFFFFFF));

        return self::generate(8, $basic)  . '-' .
               self::generate(4, $basic)  . '-' .
               self::generate(4, $basic)  . '-' .
               self::generate(4, $basic)  . '-' .
               self::generate(12, $basic) . '-' .
               $hex;
    }
}
?>