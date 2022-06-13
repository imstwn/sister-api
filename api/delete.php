<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers,Authorization, X-Requested-With");
include_once '../config/database.php';
include_once '../class/Pegawai.php';
$database = new Database();
$db = $database->getKoneksi();
$peg = new Pegawai($db);
$data = json_decode(file_get_contents("php://input"));
$peg->id = $data->id;
if($peg->hapusPegawai()){
echo json_encode("Telah terhapus satu rekaman.");
} else{
echo json_encode("Data tidak ditemukan");
}
?>