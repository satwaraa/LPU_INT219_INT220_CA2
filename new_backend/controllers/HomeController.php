<?php

namespace App\Controllers;

class HomeController {
    public function index() {
        return [
            'status' => 'success',
            'message' => 'Fitness API is running'
        ];
    }
    
    public function status() {
        return [
            'status' => 'success',
            'message' => 'Server is running',
            'timestamp' => date('Y-m-d H:i:s')
        ];
    }

    public function plans(): array {
        return [
            '1 month' => '1000',
            '3 month' => '2500',
            '6 month' => '4000',
            '12 month' => '6500',
        ];
    }
}