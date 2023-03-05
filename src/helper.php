<?php

use Doctrine\SqlFormatter\SqlFormatter;

if (!function_exists('dds')) {
    function dds($sqls)
    {
        ds($sqls);
        die();
    }
}

if (!function_exists('ds')) {
    function ds($sqls)
    {
        if(!is_array($sqls))
            $sqls = [$sqls];

        $length = count($sqls);

        foreach ($sqls as $sql) {

            if($length > 1 && !str_ends_with($sql, ';'))
                $sql = "{$sql};";

            echo (new SqlFormatter())->format($sql);
        }
    }
}
