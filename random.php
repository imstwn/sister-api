<?php 

	$comb = "0123456789";
	$shfl = str_shuffle($comb);
	$pwd1 = substr($shfl, 0, 8);
	$pwd2 = substr($shfl, 0, 8);
	echo $pwd1.''.$pwd2;

?>
<!-- Record -->
<!-- INSERT INTO `mahasiswa` (`ktp`,`nama`,`email`,`tmplahir`,`tgllahir`) VALUES
 ('7819402578194025','Ilsa Palastri','@gmail.com','Padang','199-06-12'),
 ('2651948326519483','Kenari Thamrin','@gmail.com','Bukittinggi','199-01-03'),
 ('9601743596017435','Kadir Tarihoran','@gmail.com','Jakarta','199-05-02'),
 ('5341867953418679','Ibrahim Megantara','@gmail.com','Jambi','199-02-23'),
 ('4290738542907385','Enteng Januar','@gmail.com','Ternate','199-11-14'),
 ('9016273590162735','Lidya Pertiwi','@gmail.com','Semarang','199-12-25'),
 ('3217609832176098','Capa Mangunsong','@gmail.com','Bandung','199-09-30'),
 ('8370245983702459','Upik Mandala','@gmail.com','Cirebon','199-07-28') -->