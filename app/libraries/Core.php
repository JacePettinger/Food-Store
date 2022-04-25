<?php
class Core
{
    protected $currentController = "Pages";
    protected $currentMethod = "index";
    protected $params = [];

    public function __construct()
    {
        $urlArr = $this->getUrl();
        // Get the controller
        if (isset($urlArr[0]) && file_exists('../app/controllers/' . ucwords($urlArr[0]) . ".php")) {
            $this->currentController = ucwords($urlArr[0]); // if controller found, use that
            unset($urlArr[0]);
        }
        require_once("../app/controllers/" . $this->currentController . ".php");
        $this->currentController = new $this->currentController; // else, use default "Pages"

        // Get the method
        if (isset($urlArr[1]) && method_exists($this->currentController, $urlArr[1])) {
            $this->currentMethod = $urlArr[1];
            unset($urlArr[1]);
        }

        // Get the parameters
        $this->params = $urlArr ? array_values($urlArr) : [];
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    public function getUrl()
    {
        if (isset($_GET["url"])) {
            $url = rtrim($_GET["url"], "/");
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode("/", $url);
            return $url;
        }
    }
}
