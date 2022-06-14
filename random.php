<?php 

	$comb = "0123456789";
	$shfl = str_shuffle($comb);
	$pwd1 = substr($shfl, 0, 8);
	$pwd2 = substr($shfl, 0, 8);
	echo $pwd1.''.$pwd2;

?>
<!-- Record -->
 INSERT INTO `mahasiswa` (`nim`,`ktp`,`nama`,`email`,`tmplahir`,`tgllahir`,`alamat`) VALUES
 ('5199999991','7819402578194025','Ilsa Palastri','ilsa@gmail.com','Padang','1999-06-12','Kulon Progo'),
 ('5199999992','2651948326519483','Kenari Thamrin','kenari@gmail.com','Bukittinggi','1998-01-03','Sleman'),
 ('5199999993','9601743596017435','Kadir Tarihoran','kadir@gmail.com','Jakarta','1999-05-02','Jl. Kaliurang No. 2'),
 ('5199999994','5341867953418679','Ibrahim Megantara','ibrahim@gmail.com','Jambi','1998-02-23','Sleman'),
 ('5199999995','4290738542907385','Enteng Januar','jan@gmail.com','Ternate','1997-11-14','Godean'),
 ('5199999996','9016273590162735','Lidya Pertiwi','lidya@gmail.com','Semarang','1998-12-25','Bantul'),
 ('5199999997','3217609832176098','Capa Mangunsong','capa@gmail.com','Bandung','1998-09-30','Sinduadi'),
 ('5199999998','8370245983702459','Upik Mandala','upiek@gmail.com','Cirebon','1999-07-28','Mraen')