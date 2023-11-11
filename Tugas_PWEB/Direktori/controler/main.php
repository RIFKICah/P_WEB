<?php

class Main {
    static function route() {
        $route = isset($_GET['route']) ? $_GET['route'] : 'home';

        switch ($route) {
            case 'admin':
                // Tampilkan halaman admin
                admin();
                break;
            case 'dashboard':
                // Tampilkan dashboard
                dashboard();
                break;
            case 'login':
                // Tampilkan halaman login
                customer_login();
                break;
            case 'register':
                // Tampilkan halaman registrasi
                customer_register();
                break;
            case 'profile':
                // Tampilkan halaman profil
                customer_profile();
                break;
            case 'item':
                // Tampilkan halaman daftar item atau detail item
                item1();
                break;
            case 'cart':
                // Tampilkan halaman keranjang belanja
                Cart();
                break;
            case 'order':
                // Tampilkan halaman daftar pesanan atau detail pesanan
                order1();
                break;
            case 'contact':
                // Tampilkan halaman kontak
                Contact();
                break;
            case 'logout':
                // Lakukan proses logout
                logout();
                break;
            default:
                // Tampilkan halaman utama
                Home();
                break;
        }
    }
}
