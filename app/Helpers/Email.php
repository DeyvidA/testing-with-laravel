<?php

namespace App\Helpers;

use Symfony\Component\VarDumper\Caster\FiberCaster;

class Email
{
    public static function validate($email)
    {
        return (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}
