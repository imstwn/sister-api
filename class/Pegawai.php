<?php
class Pegawai{
// var koneksi
private $konek;
// Tabel
private $tabel = "pegawai";
// Properti 
public $id;
public $nama;
public $email;
public $umur;
public $jabatan;
public $created;
// koneksi ke DB
public function __construct($db){
$this->konek = $db;
}
// Baca semaua rekaman
public function bacaPegawai(){
$sql = "SELECT * FROM " . $this->tabel ;
$stmt = $this->konek->prepare($sql);
$stmt->execute();
return $stmt;
}
// Menambahkan rekaman
public function tambahPegawai(){
$sql = "INSERT INTO ". $this->tabel ." SET
nama = :nama, 
email = :email, 
umur = :umur, 
jabatan = :jabatan, 
created = :created";
$stmt = $this->konek->prepare($sql);
// sanitasi
$this->nama =htmlspecialchars(strip_tags($this->nama));
$this->email =htmlspecialchars(strip_tags($this->email));
$this->umur =htmlspecialchars(strip_tags($this->umur));
$this->jabatan=htmlspecialchars(strip_tags($this->jabatan));
$this->created=htmlspecialchars(strip_tags($this->created));
// bind data
$stmt->bindParam(":nama", $this->nama);
$stmt->bindParam(":email", $this->email);
$stmt->bindParam(":umur", $this->umur);
$stmt->bindParam(":jabatan", $this->jabatan);
$stmt->bindParam(":created", $this->created);
if($stmt->execute()){
return true;
}
return false;
}
// Baca satu rekaman
public function bacaSatuPegawai(){
$sql = "SELECT * FROM ". $this->tabel ." WHERE id = ? LIMIT 0,1";
$stmt = $this->konek->prepare($sql);
$stmt->bindParam(1, $this->id);
$stmt->execute();
$dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
$this->nama = $dataRow['nama'];
$this->email = $dataRow['email'];
$this->umur = $dataRow['umur'];
$this->jabatan = $dataRow['jabatan'];
$this->created = $dataRow['created'];
} 
// Mengubah Rekaman
public function ubahPegawai(){
$sql = "UPDATE ". $this->tabel ." SET nama= :nama, email= :email, 
umur= :umur, jabatan= :jabatan, 
created= :created WHERE id= :id";
$stmt = $this->konek->prepare($sql);
$this->nama =htmlspecialchars(strip_tags($this->nama));
$this->email =htmlspecialchars(strip_tags($this->email));
$this->umur =htmlspecialchars(strip_tags($this->umur));
$this->jabatan=htmlspecialchars(strip_tags($this->jabatan));
$this->created=htmlspecialchars(strip_tags($this->created));
$this->id =htmlspecialchars(strip_tags($this->id));
// bind data
$stmt->bindParam(":nama", $this->nama);
$stmt->bindParam(":email", $this->email);
$stmt->bindParam(":umur", $this->umur);
$stmt->bindParam(":jabatan", $this->jabatan);
$stmt->bindParam(":created", $this->created);
$stmt->bindParam(":id",$this->id);
if($stmt->execute()){
return true;
}
return false;
}
// Menghapus 1 rekaman
function hapusPegawai(){
$sql = "DELETE FROM " . $this->tabel . " WHERE id = ?";
$stmt = $this->konek->prepare($sql);
$this->id=htmlspecialchars(strip_tags($this->id));
$stmt->bindParam(1, $this->id);
if($stmt->execute()){
return true;
}
return false;
}
}
?>