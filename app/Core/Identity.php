<?php

namespace App\Core;


/**
 *
 * TODO: implement encrypt/decrypt cookie
 */
class Identity
{
    /**
     * Sart session
     */
    public static function getUser()
    {
        session_start();
    }

}
