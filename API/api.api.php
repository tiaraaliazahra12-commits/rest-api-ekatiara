<?php
header("Content-Type: application/json; charset=UTF-8");

$data = [
    [
        "id" => 1,
        "nama" => "Gina (2023020000)",
        "mata_kuliah" => "Project Web",
        "nilai" => 50,
        "keterangan" => "Tidak Lulus"
    ],
    [
        "id" => 2,
        "nama" => "Tiara (2023020359)",
        "mata_kuliah" => "Project Web",
        "nilai" => 90,
        "keterangan" => "Lulus"
    ],
    [
        "id" => 3,
        "nama" => "Eka (2023020354)",
        "mata_kuliah" => "Project Web",
        "nilai" => 90,
        "keterangan" => "Lulus"
    ]
];

$response = [
    "status" => "success",
    "total" => count($data),
    "data" => $data
];

echo json_encode($response, JSON_PRETTY_PRINT);