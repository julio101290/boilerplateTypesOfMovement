<?php

$routes->group('admin', function ($routes) {


    $routes->post('tiposMovimientoInventario/getTiposMovimientoInventarioAjax'
                    , 'Tipos_movimientos_inventarioController::getTiposMovimientoAjax'
                
                    );

    $routes->resource('storages', [
        'filter' => 'permission:storages-permission',
        'controller' => 'storagesController',
        'except' => 'show',
        'namespace' => 'julio101290\boilerplatetypesofmovement\Controllers',
    ]);


    $routes->resource('tipos_movimientos_inventario', [
        'filter' => 'permission:tipos_movimientos_inventario-permission',
        'controller' => 'tipos_movimientos_inventarioController',
        'except' => 'show',
        'namespace' => 'julio101290\boilerplatetypesofmovement\Controllers',
    ]);

    $routes->post('tipos_movimientos_inventario/save', 'Tipos_movimientos_inventarioController::save');
    $routes->post('tipos_movimientos_inventario/getTipos_movimientos_inventario', 'Tipos_movimientos_inventarioController::getTipos_movimientos_inventario');

   


});
