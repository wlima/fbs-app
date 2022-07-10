<?php

if(!function_exists('checkUserId')){
    function checkUserId()
    {
        return session()->has('user_id') && !is_null(session()->get('user_id'));
    }
}
