<?php

class Page {
    public static function part($component) {
        $file = __DIR__ . '/views/components/' . str_replace('/', DIRECTORY_SEPARATOR, $component) . '.php';
        
        if (file_exists($file)) {
            include $file;
        } else {
            echo "Компонент '$component' не найден.";
        }
    }
}

