<?php
class MyModuleDocModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();


        $openapi = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'openapi.json');
        $html = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'api.html');
        http_response_code(200);

        echo str_replace('[[APIDOCS]]', $openapi, $html);

        // echo $html;
        exit;
    }
}
