<!DOCTYPE html>
<html>
<head>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="../asset/css/styleuser.css"  media="screen,projection"/>
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Home User</title>
</head>
<body style="background-color:#cfd8dc;">
	<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
		<ul id="slide-out" class="side-nav fixed">
		<li>
			<div class="userView">
				<div class="background">
					<img src="../images/angga.jpg">
				</div>
				<a href="#!user"><img class="circle" src="../images/man.png"></a>
				<a href="#!name"><span class="white-text name">Zammil</span></a>
				<a href="#!email"><span class="white-text email">Madridzammil@gmail.com</span></a>
			</div>
		</li>
		<li><a href="User.php" class="waves-effect" ><i class="material-icons">home</i>HOME</a></li>
		<li><div class="divider"></div></li>
		<li><a href="profileuser.php" class="waves-effect" ><i class="material-icons">face</i>PROFIL</a></li>
		<li><div class="divider"></div></li>
		<ul class="collapsible collapsible-accordion">
			<li>
				<a class="collapsible-header">CARI KERJA
					<i class="material-icons">assignment</i>
					<i class="material-icons right">fast_forward</i>
				</a>
				<div class="collapsible-body">
					<ul>
						<li>
							<a href="carikerja.php" class="waves-effect" ><i class="material-icons">search</i>CARI KERJA</a>
						</li>
						<li>
							<div class="divider"></div>
						</li>
						<li>
							<a href="daftarpengajuankerja.php" class="waves-effect" ><i class="material-icons">shop</i>DAFTAR PENGAJUAN KERJA</a>
						</li>
					</ul>
				</div>
			</li>
		</ul>
		<div class="divider"></div>
		<ul class="collapsible collapsible-accordion">
			<li>
				<a class="collapsible-header">LOWONGAN KERJA
					<i class="material-icons">assignment</i>
					<i class="material-icons right">fast_forward</i>
				</a>
				<div class="collapsible-body">
					<ul>
						<li><a href="daftarkanperusahaan.php" class="waves-effect" ><i class="material-icons">language</i>DAFTARKAN PERUSAHAAN</a></li>
						<li>
							<div class="divider"></div>
						</li>
						<li>
							<a href="buatlowongan.php" class="waves-effect" ><i class="material-icons">work</i>BUAT LOWONGAN</a>
						</li>
						<li>
							<div class="divider"></div>
						</li>
						<li>
							<a href="daftarperusahaanuser.php" class="waves-effect" ><i class="material-icons">home</i>PERUSAHAAN ANDA</a>
						</li>
						<li>
							<div class="divider"></div>
						</li>
						<li>
							<a href="daftarpelamarkerja.php" class="waves-effect active" ><i class="material-icons">note_add</i>DAFTAR PELAMAR</a>
						</li>
					</ul>
				</div>
			</li>
		</ul>
		<li><div class="divider"></div></li>
		<li><a href="home.php" class="waves-effect" ><i class="material-icons">power_settings_new</i>LOG OUT</a></li>
	</ul>
	<div class="container">
		<div class="row">
			<div class="col s10 offset-s2">
				<h3 class="welcome-user" style="text-decoration:underline; text-align:center;">
					DAFTAR <span style="color:#004d40;">PELAMAR KERJA</span>
				</h3>
			</div>
		</div>
		<div class="row">
			<table class="col s10 offset-s2 striped">
				<thead>
					<tr>
						<th data-field="id">ID USER</th>
						<th data-field="name">Nama User</th>
						<th data-field="name">Posisi</th>
						<th data-field="id">Perusahaan</th>
						<th data-field="id">CV</th>
						<th data-field="name">AKSI</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>01</td>
						<td>Zammil</td>
						<td>Sekretaris</td>
						<td>Wyatt Company</td>
						<td>
							<a href="#">
								Klik Untuk Download
							</a>
						</td>
						<td>
							<a href="editperusahaanuser.php" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="TERIMA">
									<i class="material-icons">event_available</i>
							</a>
							<a href="#" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="TOLAK">
									<i class="material-icons">block</i>
							</a>
						</td>
					</tr>
					<tr>
						<td>02</td>
						<td>Ratu Dyana</td>
						<td>Head-officer</td>
						<td>Wyatt Company</td>
						<td>
							<a href="#">
								Klik Untuk Download
							</a>
						</td>
						<td>
							<a href="editperusahaanuser.php" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="TERIMA">
									<i class="material-icons">event_available</i>
							</a>
							<a href="#" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="TOLAK">
									<i class="material-icons">block</i>
							</a>
						</td>
					</tr>
					<tr>
						<td>03</td>
						<td>DEDE</td>
						<td>Pembantu</td>
						<td>Wyatt Company</td>
						<td>
							<a href="#">
								Klik Untuk Download
							</a>
						</td>
						<td>
							<a href="editperusahaanuser.php" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="TERIMA">
									<i class="material-icons">event_available</i>
							</a>
							<a href="#" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="TOLAK">
									<i class="material-icons">block</i>
							</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<!-- 	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script> -->
	<script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<script type="text/javascript">
		$( document ).ready(function(){$(".button-collapse").sideNav();});

		$(document).ready(function() {
			$('select').material_select();
		});
	</script>
</body>
</html>