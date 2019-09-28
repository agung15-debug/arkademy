<?php
function getDataJSON($name, $age, $address, $hobbies, $is_married, $list_school, $skills, $interest_in_coding){
	$data = array(
		'name' => $name,
		'age' => $age,
		'address' => $address,
		'hobbies' => $hobbies,
		'is_married' => $is_married,
		'school' => $list_school,
		'skills' => $skills,
		'interest_in_coding' => $interest_in_coding 
	);
	return json_encode($data);
}
$nama = "Agung Prayogi";
$umur = "18 Tahun";
$alamat = "Bengkulu";
$hoby = array("Baca Buku","Marketing","Koding", "Editing");
$menikah = false;
$sekolah = array(
	'highSchool' => "SMAN 4 Rejang Lebong <br>" , 
	'yearIn' => "2016",
	'yearOut' => "2019", 
	'major' => "null"
	);
$kemampuan = array("Full Stack Web Developer");
$minat = true;
echo getDataJSON($nama, $umur,$alamat,$hoby,$menikah, $sekolah,$kemampuan, $minat);
?>
