<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

// Recursos REST agrupados bajo /api. Agrega aquí los nuevos modelos y controladores.
$routes->group('api', static function ($routes) {
    $options = ['only' => ['index', 'show', 'create', 'update', 'delete'], 'placeholder' => '(:num)'];

    $routes->resource('usuarios', ['controller' => 'UsuarioController'] + $options);
    $routes->resource('categorias', ['controller' => 'CategoriaController'] + $options);
    $routes->resource('clientes', ['controller' => 'ClientesController'] + $options);
    $routes->resource('detalle-entradas-inventario', ['controller' => 'DetalleEntradaInventarioController'] + $options);
    $routes->resource('detalle-repuestos-ot', ['controller' => 'DetalleRepuestoOtController'] + $options);
    $routes->resource('detalle-trabajos-realizados', ['controller' => 'DetalleTrabajoRealizadoController'] + $options);
    $routes->resource('detalle-ventas', ['controller' => 'DetalleVentaController'] + $options);
    $routes->resource('entradas-inventario', ['controller' => 'EntradasInventarioController'] + $options);
    $routes->resource('facturas', ['controller' => 'FacturasController'] + $options);
    $routes->resource('movimientos-inventario', ['controller' => 'MovimientoInventarioController'] + $options);
    $routes->resource('ordenes-trabajo', ['controller' => 'OrdenesTrabajoController'] + $options);
    $routes->resource('proveedores', ['controller' => 'ProveedoresController'] + $options);
    $routes->resource('repuestos', ['controller' => 'RepuestoController'] + $options);
    $routes->resource('roles', ['controller' => 'RolesController'] + $options);
    $routes->resource('vehiculos', ['controller' => 'VehiculoController'] + $options);
    $routes->resource('ventas', ['controller' => 'VentasController'] + $options);
});
