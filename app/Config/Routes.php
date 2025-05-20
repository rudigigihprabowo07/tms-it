<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->resource('asset-type', ['controller' => 'AssetTypeController']);
$routes->resource('category-asset', ['controller' => 'CategoryAssetController']);
$routes->resource('brand-asset', ['controller' => 'BrandAssetController']);
$routes->resource('standard-asset',['controller' => 'StandardAssetController']);
$routes->resource('rekanan', ['controller' => 'RekananController']);
$routes->resource('asset-location', ['controller' => 'AssetLocationController']);
$routes->resource('company-name', ['controller' => 'CompanyController']);
$routes->resource('departement', ['controller' => 'DepartementController']);
