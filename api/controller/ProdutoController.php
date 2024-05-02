<?php

require_once './core/Request.php';
require_once './core/Response.php';
require_once './model/ProdutoModel.php';

class ProdutoController
{
    public function show(Request $request, Response $response)
    {
        try {
            $data = ProdutoModel::show();

            if ($data) :
                $response::json([
                    'status' => 'success',
                    'dados' => $data
                ], 200);
            else :
                $response::json([
                    'status' => 'error',
                    'dados' => []
                ], 404);
            endif;
        } catch (\Exception $e) {
            $response::json([
                'status' => 'error',
                'msg' => $e->getMessage()
            ], 500);
        }
    }

    public function find(Request $request, Response $response, array $url)
    {
        try {
            $data = ProdutoModel::find($url[0]);

            if ($data) :
                $response::json([
                    'status' => 'success',
                    'dados' => $data
                ], 200);
            else :
                $response::json([
                    'status' => 'error',
                    'msg' => 'Not found'
                ], 404);
            endif;
        } catch (\Exception $e) {
            $response::json([
                'status' => 'error',
                'msg' => $e->getMessage()
            ], 500);
        }
    }

    public function add(Request $request, Response $response)
    {
        try {
            $data = $request->body();

            $success = ProdutoModel::insert($data);

            if ($success) :
                $data['id'] = ProdutoModel::lastInsertId();

                $response::json([
                    'status' => 'success',
                    'dados' => $data
                ], 201);
            else :
                $response::json([
                    'status' => 'error',
                    'msg' => 'Not found'
                ], 500);
            endif;
        } catch (\Exception $e) {
            $response::json([
                'status' => 'error',
                'msg' => $e->getMessage()
            ], 500);
        }
    }

    public function addJson(Request $request, Response $response)
    {
        // NÃO IMPLEMENTADO
        print_r($request->bodyJson());
    }

    public function edit(Request $request, Response $response)
    {
        try {
            $data = $request->body();

            $success = ProdutoModel::update($data);

            if ($success) :
                $response::json([
                    'status' => 'success',
                    'dados' => $data
                ], 202);
            else :
                $response::json([
                    'status' => 'error',
                    'msg' => 'Not found'
                ], 404);
            endif;
        } catch (\Exception $e) {
            $response::json([
                'status' => 'error',
                'msg' => $e->getMessage()
            ], 500);
        }
    }

    public function delete(Request $request, Response $response, array $url)
    {
        try {
            $data = ProdutoModel::delete($url[0]);

            if ($data) :
                $response::json([
                    'status' => 'success',
                ], 200);
            else :
                $response::json([
                    'status' => 'error',
                    'msg' => 'Not found'
                ], 404);
            endif;
        } catch (\Exception $e) {
            $response::json([
                'status' => 'error',
                'msg' => $e->getMessage()
            ], 500);
        }
    }
}
