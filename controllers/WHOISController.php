<?php

namespace WHOIS\Controllers;

use WHOIS\Services\WHMCSAPIService;

require_once "configs" . DIRECTORY_SEPARATOR . "common.php";

class WHOISController
{

    public function getWHOISDetails($domainName)
    {
        return (new WHMCSAPIService)->getWHOISDetails($domainName);
    }

    public function handleClientArea($vars)
    {
        $moduleLink = $vars['modulelink'];
        $breadCrumb = [$moduleLink => BRAND_NAME];
        $templateFile = 'templates/client/layout';
        $requireLogin = false;

        if (!empty($_POST[''])) {

        }

        return [
            'pagetitle' => BRAND_NAME,
            'breadcrumb' => $breadCrumb,
            'templatefile' => $templateFile,
            'requirelogin' => $requireLogin, # accepts true/false
            'forcessl' => false, # accepts true/false
            'vars' => $variables
        ];
    }
}