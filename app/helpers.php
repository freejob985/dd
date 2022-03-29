<?php

use Hamcrest\Type\IsInteger;
use Illuminate\Support\Facades\DB;

function info_user($id)
{
    $int_value = (int) $id;
    $user = DB::table('users')->find($int_value);
    $first_name = $user->first_name;
    $last_name = $user->last_name;
    $full_name = $first_name . " " . $last_name;
    echo $full_name;
}

function info_img($id)
{
    $int_value = (int) $id;
    $user = DB::table('users')->find($int_value);
    $img_path = $user->img_path;
    return $img_path;
}

