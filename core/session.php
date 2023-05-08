<?php


class Session
{

    public function saveFlashData($key, $value)
    {
        $_SESSION['flash_data'][$key] = $value;
    }

    public function getFlashData($key)
    {
        $value = $_SESSION['flash_data'][$key];
        unset($_SESSION['flash_data'][$key]);
        return $value;
    }
}
