<?php
/**
 * Created by PhpStorm .
 * User: trungphuna .
 * Date: 3/16/21 .
 * Time: 12:06 AM .
 */

if (!function_exists('get_data_user')) {
    function get_data_user($type, $field = 'id')
    {
        return Auth::guard($type)->user() ? Auth::guard($type)->user()->$field : '';
    }
}
