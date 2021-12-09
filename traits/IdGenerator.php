<?php


trait IdGenerator
{

    protected function genProductId()
    {
        $output = uniqid();
        return $output;
    }

    protected  function genUserId()
    {
        $prefix = "aaa";
        $output = $prefix;
        $chars = range('a', 'z');
        $digits = range(0, 9);
        $parts = array_merge($chars, $digits);
        for ($i = 0; $i < 5; $i++) {
            $output .= $parts[mt_rand(0, count($parts) - 1)];
        }
        return $output;
    }
}
