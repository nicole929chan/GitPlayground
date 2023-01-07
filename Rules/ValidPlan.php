<?php

class ValidPlan
{
    public function exec()
    {
        return [
            'slug' => 'required',
            'user_id' => 'required'
        ];
    }
}