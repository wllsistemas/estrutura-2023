<?php

require_once 'Request.php';
require_once 'Response.php';

class Core
{
    public static function dispatch(array $routes)
    {
        $route_existe = false;
        $url = '/';

        isset($_GET['url']) && $url .= $_GET['url'];

        $url !== '/' && $url = rtrim($url, '/');

        foreach ($routes as $route) :
            $regex = '#^' . preg_replace('/{id}/', '([\w-]+)', $route['path']) . '$#';

            if (preg_match($regex, $url, $matches)) :
                $route_existe = true;
                array_shift($matches);

                if ($route['method'] !== Request::method()) :
                    Response::json([
                        'status' => 'error',
                        'message' => 'method não aceito.'
                    ], 405);
                    return;
                endif;

                [$controller, $action] = explode('@', $route['action']);

                require_once "./controller/$controller.php";

                if (!class_exists($controller)) :
                    Response::json([
                        'status' => 'error',
                        'message' => "class [$controller] não existe."
                    ], 500);
                    return;
                endif;

                $controller = new $controller();

                if (!method_exists($controller, $action)) {
                    Response::json([
                        'status' => 'error',
                        'message' => "action [$action] não existe."
                    ], 500);
                    return;
                }

                $controller->$action(new Request, new Response, $matches);
            endif;
        endforeach;

        if (!$route_existe) :
            Response::json([
                'status' => 'error',
                'message' => 'rota não existe.'
            ], 404);
            return;
        endif;
    }
}
