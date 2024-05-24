<?php
if (!defined('_PS_VERSION_'))
    exit;

class MyModule extends Module
{
    public function __construct()
    {
        $this->name = 'mymodule';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Your Name';
        $this->need_instance = 0;
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('My Module');
        $this->description = $this->l('This is a simple JSON API module.');
    }

    public function install()
    {
        return parent::install() && $this->registerHook('header');
    }

    public function hookHeader($params)
    {
        // Code to add custom header if needed
    }
}
