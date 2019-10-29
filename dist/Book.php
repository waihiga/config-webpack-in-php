<?php
/**
 * Created by PhpStorm.
 * User: dmburu
 * Date: 22/10/2019
 * Time: 15:26
 */

namespace ACME;


class Book implements BookInterface
{
    public function open()
    {
        var_dump('opening the paper book');
    }

    public function turn()
    {
        var_dump('turning the paper book');
    }
}