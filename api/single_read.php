<?php
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	header("Access-Control-Allow-Methods: POST");
	header("Access-Control-Max-Age: 3600");
	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, 
	Authorization, X-Requested-With");
	include_once '../config/database.php';
	include_once '../class/Pegawai.php';
	$database = new Database();
	$db = $database->getKoneksi();
	$peg = new Pegawai($db);
	$peg->id = isset($_GET['id']) ? $_GET['id'] : die();
	$peg->bacaSatuPegawai();
	if($peg->nama != null){
	// membuat array
		$pegArr = array(
		"id" => $peg->id,
		"nama" => $peg->nama,
		"email" => $peg->email,
		"umur" => $peg->umur,
		"jabatan" => $peg->jabatan,
		"created" => $peg->created
		);
		http_response_code(200);
		echo json_encode($pegArr);
	}
	else{
		http_response_code(404);
		echo json_encode("Pegawai tidak ditemukan.");
	}
?>