<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
include_once '../config/database.php';
include_once '../class/Pegawai.php';
$database = new Database();
$db = $database->getKoneksi();
$peg = new Pegawai($db);
$stmt = $peg->bacaPegawai();
$jumlahPeg = $stmt->rowCount();
echo json_encode($jumlahPeg);
if($jumlahPeg > 0)
{
$pegArr = array();
$pegArr["body"] = array();
$pegArr["jumlahPeg"] = $jumlahPeg;
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
extract($row);
$e = array(
"id" => $id,
"nama" => $nama,
"email" => $email,
"umur" => $umur,
"jabatan" => $jabatan,
"created" => $created
);
array_push($pegArr["body"], $e);
}
echo json_encode($pegArr);
}
else{
http_response_code(404);
echo json_encode(
array("message" => "Rekaman tidak.")
);
}
?>