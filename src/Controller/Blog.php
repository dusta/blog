<?php

namespace Dusta\Blog\Controller;

use Dframe\Router\Response;

/**
 * Class Blog
 *
 * @package Dusta\Blog\Controller
 */
class Blog extends \Dusta\Blog\Controller\Controller
{
    // public function init($type = 'docs')
    // {
    //     if (method_exists($this, $_GET['action']) and $_GET['action'] != 'start') { // Skip dynamic page if method in controller exist
    //         return;
    //     }
    //     $smartyConfig = Config::load('view/smarty');
    //     $view = $this->loadView('Index');

    //     $parser = new \Dusta\RST\Parser;
    //     $parser->registerDirective(new \Libs\Extensions\Dusta\RST\HTML\Directives\Center);
    //     $parser->registerDirective(new \Libs\Extensions\Dusta\RST\HTML\Directives\Router);
    //     $parser->registerDirective(new \Libs\Extensions\Dusta\RST\HTML\Directives\Code);
    //     $parser->registerDirective(new \Libs\Extensions\Dusta\RST\HTML\Directives\CustomLi);
    //     $parser->registerDirective(new \Libs\Extensions\Dusta\RST\HTML\Directives\IconFa);
    //     $parser->registerDirective(new \Libs\Extensions\Dusta\RST\HTML\Directives\AdvancedTable);


    //     if (isset($type)) {
    //         $type = htmlspecialchars($type);
    //     }

    //     $this->baseClass->version = $_GET['version'] ?? '';
    //     $this->baseClass->module = $_GET['module'] ?? '';

    //     $pathDocs = $type . '/' . $this->baseClass->module;


    //     $action = htmlspecialchars($_GET['action'] ?? 'index');

    //     if (strpos($action, ',') !== false) {
    //         $actualLink = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    //         $actualLink = str_replace(',', '/', $actualLink);
    //         header("HTTP/1.1 301 Moved Permanently");
    //         header('Location: ' . $actualLink);
    //         return;
    //     }

    //     $rstMapConfig = Config::load('rstMap');
    //     $get = $pathDocs . '/' . $this->baseClass->lang . '/' . $this->baseClass->version . '/' . $action . '.rst';
    //     $header = explode('/', $action);

    //     $view->assign('header', ucfirst($header[0]));

    //     $rst = file_get_contents(APP_DIR.'View/' . $get);
    //     $parser = $parser->parse($rst);

    //     $document = array();
    //     foreach ($parser->headerNodes as $node) {
    //         $document[] = $node->render();
    //     }

    //     $view->assign('head', $document);
    //     $view->assign($header[0], $parser->render());

    //     $patchController = $smartyConfig->get('setTemplateDir', APP_DIR.'View/templates') . '/' . $pathDocs . '/' . $action . $smartyConfig->get('fileExtension', '.html.php');
    //     if (file_exists($patchController)) {
    //         $view->render($pathDocs . '/' . htmlspecialchars($action));
    //         return;
    //     }

    //     return Response::redirect('error/404', 404);
    // }

    public function test()
    {
        $TestModel = $this->loadModel('Test', 'Dusta\Blog');
        echo 'wii';
    }
}