<?php
/**
 * Created by PhpStorm.
 * User: dmburu
 * Date: 22/10/2019
 * Time: 16:04
 */

namespace ACME;


class KindleAdapter implements BookInterface
{
    private  $kindle;
    public function __construct(Kindle $kindle)
    {
        $this->kindle = $kindle;
    }

    public function open()
    {
       return $this->kindle->turnOn();
    }

    public function turn()
    {
        return $this->kindle->pressNextButton();
    }
}