<?php

class ValidActivity
{
    public function exec()
    {
        return [
            'id' => 'required',
            'name' => 'required'
        ];
    }
}