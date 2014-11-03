<?php

namespace Iboved\Model;

class Contact
{
    public function getData()
    {
        $data = "Contuct us: ourmail@gmail.com";
        return $data;
    }

    public function getDataId($id)
    {
        $data = "{$id} - contact: ourmail@gmail.com";
        return $data;
    }
}