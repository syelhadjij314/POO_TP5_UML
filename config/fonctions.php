<?php

use App\Core\Role;
function dd($data){
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}
function cacheNav(array $roles){
    foreach ($roles as $role) {
        if (Role::getRole()==$role) {
            return "d-none";
        }
    }
    return "";
}