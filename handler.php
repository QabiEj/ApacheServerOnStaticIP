<?php
ini_set('allow_url_fopen', 1);

switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {
    case '/':
        require 'index.php';
        break;
    case '/index':
        require 'index.php';
        break;
    case '/index.php':
        require 'index.php';
        break;
    case '/classes/Cart.php':
        require __DIR__.'/classes/Cart.php';
        break;
    case '/classes/CRUD.php':
        require __DIR__.'/classes/CRUD.php';
        break;
    case '/classes/Database.php':
        require __DIR__.'/classes/Database.php';
        break;
    case '/dashboard/categories/create.php':
        require __DIR__.'/dashboard/categories/create.php';
        break;
    case '/dashboard/categories/edit.php':
        require __DIR__.'/dashboard/categories/edit.php';
        break;
    case '/dashboard/categories/index.php':
        require __DIR__.'/dashboard/categories/index.php';
        break;
    case '/dashboard/includes/footer.php':
        require __DIR__.'/dashboard/includes/footer.php';
        break;
    case '/dashboard/includes/header.php':
        require __DIR__.'/dashboard/includes/header.php';
        break;
    case '/dashboard/orders/index.php':
        require __DIR__.'/dashboard/orders/index.php';
        break;
    case '/dashboard/products/create.php':
        require __DIR__.'/dashboard/products/create.php';
        break;
    case '/dashboard/products/edit.php':
        require __DIR__.'/dashboard/products/edit.php';
        break;
    case '/dashboard/products/index.php':
        require __DIR__.'/dashboard/products/index.php';
        break;
    case '/dashboard/promotions/create.php':
        require __DIR__.'/dashboard/promotions/create.php';
        break;
    case '/dashboard/promotions/edit.php':
        require __DIR__.'/dashboard/promotions/edit.php';
        break;
    case '/dashboard/promotions/index.php':
        require __DIR__.'/dashboard/promotions/index.php';
        break;
    case '/includes/footer.php':
        require __DIR__.'/includes/footer.php';
        break;
    case '/includes/header.php':
        require __DIR__.'/includes/header.php';
        break;
    case '/cancel.php':
        require 'cancel.php';
        break;
    case '/cart.php':
        require 'cart.php';
        break;
    case '/charge.php':
        require 'charge.php';
        break;
    case '/checkout.php':
        require 'checkout.php';
        break;
    case '/config.php':
        require 'config.php';
        break;
    case '/login.php':
        require 'login.php';
        break;
    case '/register.php':
        require 'register.php';
        break;
    case '/shop.php':
        require 'shop.php';
        break;
    case '/success.php':
        require 'success.php';
        break;
    case '/view-product.php':
        require 'view-product.php';
        break;
    default:
        http_response_code(404);
        echo @parse_url($_SERVER['REQUEST_URI'])['path'];
        exit('Not Found');
}

