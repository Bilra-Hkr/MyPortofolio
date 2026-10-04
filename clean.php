<?php
// Script untuk menghapus semua file temporary .in.* di folder flutter/img/
$dir = __DIR__ . '/flutter/img/';
if (is_dir($dir)) {
    $files = glob($dir . '.in.*');
    foreach ($files as $file) {
        if (is_file($file)) {
            unlink($file);
            echo "Berhasil menghapus: " . basename($file) . "<br>";
        }
    }
    echo "Pembersihan selesai.";
} else {
    echo "Folder tidak ditemukan.";
}
?>