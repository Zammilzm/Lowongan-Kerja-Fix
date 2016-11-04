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
						<li><a href="daftarkanperusahaan.php" class="waves-effect active" ><i class="material-icons">language</i>DAFTARKAN PERUSAHAAN</a></li>
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
							<a href="daftarpelamarkerja.php" class="waves-effect" ><i class="material-icons">note_add</i>DAFTAR PELAMAR</a>
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
					DAFTARKAN <span style="color:#004d40;">PERUSAHAANMU</span>
				</h3>
			</div>
		</div>
		<div class="row">
			<form class="col s6 offset-s2">
				<div class="row">
					<div class="input-field col s12">
						<i class="material-icons prefix">account_circle</i>
						<input id="disabled" type="text" class="validate">
						<label for="disabled" style="color:#004d40;">Nama Perusahaan</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<i class="material-icons prefix">account_circle</i>
						<input id="disabled" type="text" class="validate">
						<label for="disabled" style="color:#004d40;">Nama Pemilik</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<i class="material-icons prefix">list</i>
						<input id="password" type="text" class="validate">
						<label for="password" style="color:#004d40;">Alamat</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<i class="material-icons prefix">email</i>
						<input id="email" type="email" class="validate">
						<label for="email" style="color:#004d40;">Email</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<i class="material-icons prefix">accessibility</i>
						<select>
							<option value="" disabled selected>Bidang Perusahaan</option>
							<option value="1">Telekomunikasi</option>
							<option value="2">Transportasi</option>
							<option value="3">Industri</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<i class="material-icons prefix">account_balance</i>
						<select>
							<option value="" disabled selected>Jenis Perusahaan</option>
							<option value="1">PT(Perseroan Terbatas)</option>
							<option value="2">Firma</option>
							<option value="3">CV</option>
							<option value="3">BUMN</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<i class="material-icons prefix">speaker_notes</i>
						<textarea id="textarea1" class="materialize-textarea"></textarea>
						<label for="textarea1" style="color:#004d40;">Deskripsi Perusahaan</label>
					</div>
				</div>
				<div class="row">
					<form action="#">
						<div class="file-field input-field">
							<div class="btn">
								<span>LAMPIRKAN DATA LENGKAP PERUSAHAAN</span>
								<input type="file" multiple>
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text" placeholder="LAMPIRKAN DATA DIRI/CV ANDA DISINI">
							</div>
						</div>
					</form>

				</div>
			</form>
			<form class="col s2 offset-s2" style="text-align:center;">
				<div class="row"></div><div class="row"></div><div class="row"></div><div class="row"></div><div class="row"></div><div class="row"></div><div class="row"></div><div class="row"></div><div class="row"></div><div class="row"></div><div class="row"></div>
				<div class="row">
					<button class="btn waves-effect waves-light" type="submit" name="action" >SIMPAN
						<i class="material-icons right">send</i>
					</button>
				</div>
			</form>
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