<?php
/**
 * Created by PhpStorm.
 * User: dmburu
 * Date: 22/10/2019
 * Time: 15:42
 */

namespace ACME;


class Kindle implements eReadingInterface
{
    public function turnOn()
    {
        var_dump('turn the kendle on');
    }

    public function pressNextButton()
    {
      var_dump('press the next button on the kendle');
    }
}