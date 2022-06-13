<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
include_once '../config/database.php';
include_once '../class/Pegawai.php';
$database = new Database();
$db = $database->getKoneksi();
$peg = new Pegawai($db);
$data = json_decode(file_get_contents("php://input"));
$peg->id = $data->id;
//Mengubah isi rek pagawai
$peg->nama = $data->nama;
$peg->email = $data->email;
$peg->umur = $data->umur;
$peg->jabatan = $data->jabatan;
$peg->created = date('Y-m-d H:i:s');
if($peg->ubahPegawai()){
echo json_encode("Pegawai talah updated.");
} else{
echo json_encode("Data tidak ditemuakan");
}
?>
