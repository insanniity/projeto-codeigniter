<?php

function calculate_promotion($value, $discount)
{
    if($discount == 0){
        return $value;
    }

    // round to 2 decimal places
    return round($value - ($value * $discount) / 100, 2);
}

function normalize_price($price)
{
    // return value with comma and 2 decimal places
    return number_format($price, 2, ',', '.');
}

function prefixed_product_file_name($file_name)
{
    // create a prefix of 'rest' with the restaurant id in the session.
    $prefix = 'rest_'. str_pad(session()->user['id_restaurant'], 5, '0', STR_PAD_LEFT);
    return $prefix . '_' . $file_name;
}

function stock_movement_select_filter($filter, $option)
{
    if($filter == $option){
        return 'selected';
    } else {
        return '';
    }
}

function set_selected($value, $selected)
{
    if($value == $selected){
        return "selected";
    } else {
        return "";
    }
}

function menu_is_available($roles)
{
    $roles = explode(',', $roles);
    $user_roles = json_decode(session()->user['roles']);
    foreach($user_roles as $role){
        if(in_array($role, $roles)){
            return true;
        }
    }
    return false;
}