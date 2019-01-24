<?php

if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

function whois_config()
{
    return [
        "name" => "WHOIS for Clients",
        "description" => "WHOIS for Client Area",
        "version" => "1.0",
        "author" => "Jarvys"
    ];
}

function whois_activate()
{
    return true;
}

function whois_deactivate()
{
    return true;
}

function whois_upgrade()
{
    return true;
}

function whois_clientarea($vars)
{
    return "HELLO FRIEND";
}

function whois_output($vars)
{
    echo "HELLO ADMIN";
}