<?php
session_start();

// Simple router logic
$page = $_GET['page'] ?? 'splash';

switch ($page) {
    case 'login':
        require __DIR__ . '/login.php';
        break;
    case 'dashboard':
        require __DIR__ . '/dashboard.php';
        break;
    case 'settings':
        require __DIR__ . '/settings.php';
        break;
    default:
        require __DIR__ . '/splash.php';
        break;
} 