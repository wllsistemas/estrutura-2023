<?php

require_once 'Http.php';

Http::get('/produto', 'ProdutoController@show');
Http::get('/produto/find/{id}', 'ProdutoController@find');
Http::post('/produto/add', 'ProdutoController@add');
Http::post('/produto/add-json', 'ProdutoController@addJson');
Http::put('/produto/edit', 'ProdutoController@edit');
Http::delete('/produto/delete/{id}', 'ProdutoController@delete');
