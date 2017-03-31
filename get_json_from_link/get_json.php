<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$konten = file_get_contents('http://api.kalau.web.id/api/absen?nip=14650015&tgs=2016-01-01&tge=2016-10-30');
$data = json_decode($konten);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Get Json From URL</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
<table border="1" width="100%">
	<tr>
		<th>ID</th>
		<th>NIP</th>
		<th>Latitude</th>
		<th>Longitude</th>
		<th>Presensi</th>
		<th>Photo</th>
		<th>Macaddress</th>
		<th>Created</th>
	</tr>
	<tbody>
		<?php
			for ($i=0; $i <2 ; $i++) { 
				echo "<tr>
				<td> ".$data->presensi->data_absensi_mobile[$i]->id."</td>
				<td> ".$data->presensi->data_absensi_mobile[$i]->nip."</td>
				<td> ".$data->presensi->data_absensi_mobile[$i]->latitude."</td>
				<td> ".$data->presensi->data_absensi_mobile[$i]->longitude."</td>
				<td> ".$data->presensi->data_absensi_mobile[$i]->presensi_ke."</td>
				<td> ".$data->presensi->data_absensi_mobile[$i]->photo."</td>
				<td> ".$data->presensi->data_absensi_mobile[$i]->macaddress."</td>
				<td> ".$data->presensi->data_absensi_mobile[$i]->created_at."</td>
				</td>";
			}
		?>
		<table border="2" width="100%">
			<tr>
				<td>Finger ID</td>
				<td>NIP</td>
				<td>Tag Date</td>
				<td>Finger IP</td>
			</tr>
			<tbody>
				<?php
				for ($j=0; $j <1 ; $j++) { 
				echo "<tr>
				<td> ".$data->presensi->data_absensi_finger[$j]->finger_id."</td>
				<td> ".$data->presensi->data_absensi_finger[$j]->nip."</td>
				<td> ".$data->presensi->data_absensi_finger[$j]->tag_date."</td>
				<td> ".$data->presensi->data_absensi_finger[$j]->finger_ip."</td>
				</td>";
			}
		?>
		<br><br>
			</tbody>
		</table>
	</tbody>	
</table>
</body>
</html>
