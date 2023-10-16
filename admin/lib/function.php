<?php
function is_username($username)
{
    $partten = "/^[A-Za-z0-9_\.]{6,32}$/";
    if (!preg_match($partten, $_POST['username'], $matchs)) {
        return false;
    } else {
        return true;
    }
}

function is_password($password)
{
    $partten = "/^([A-Z]){1}([\w_\.!@#$%^&()]+){5,31}$/";
    if (!preg_match($partten, $_POST['password'], $matchs)) {
        return false;
    } else {
        return true;
    }
}

function form_error($label_field)
{
    global $error;
    if (!empty($error[$label_field])) {
        return $error[$label_field];
    }
}

function set_value($label_field) {
    global $$label_field;
    if (!empty($$label_field)) {
        return $$label_field;
    }
}

function show_array($data) {
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}