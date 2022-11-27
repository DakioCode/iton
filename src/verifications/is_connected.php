<?php

function isConnectedVerification(): bool
{
    if (!isset($_SESSION["username"])) return false;

    return true;
}
