<?php

/**
 * Created by PhpStorm.
 * User: gang-yeongjin
 * Date: 2017. 3. 19.
 * Time: AM 6:53
 */
class application
{
    private $urlController = null;

    private $menuId = null;

    public function __construct()
    {
        $this->splitUrl();

        if(!$this->urlController){

        }
    }

    private function splitUrl()
    {
        if (isset($_GET['url'])) {
            $url = trim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);

            $this->urlController = isset($url[0]) ? $url[0] : null;
            $this->menuId = isset($url[1]) ? $url[1] : null;

            unset($url[0], $url[1]);
        }
    }
}