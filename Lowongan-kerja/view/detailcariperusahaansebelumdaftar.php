<!DOCTYPE html>
<html lang="en">

<head>
    <title>LOWONGAN KERJA</title>

    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../asset/css/style.css">
    <link href="../css/creative.min.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../asset/css/styleuser.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Pendaftaran Member</title>
</head>
<body style="background-color:#e6e6e6;">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li><a href="home.php" class="font-rob">Home</a></li>
                <li><a href="login.php" class="font-rob">Login</a></li>
                <li><a href="daftar.php" class="font-rob">Daftar</a></li> 
                <li class="active"><a href="carikerjabeforedaftar.php" class="font-rob">Cari kerja</a></li>
            </ul>
        </div>
    </nav>
<div class="container" style="position:absolute; top:10%;">
        <div class="row">
            <div class="col s10 offset-s2">
                <h3 class="welcome-user" style="text-decoration:underline; text-align:center;">
                    DETAIL <span style="color:#004d40;">PERUSAHAAN</span>
                </h3>
            </div>
        </div>
        <div class="row">
            <form class="col s6 offset-s2">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input disabled value="JOHN COMPANY" id="disabled" type="text" class="validate">
                        <label for="disabled" style="color:#004d40;">Nama Perusahaan</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input disabled value="JOHN O'CONNOR" id="disabled" type="text" class="validate">
                        <label for="disabled" style="color:#004d40;">Nama Pemilik</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">list</i>
                        <input disabled value="JALAN PB SUDIRMAN" id="password" type="text" class="validate">
                        <label for="password" style="color:#004d40;">Alamat</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">email</i>
                        <input disabled value="JOHN@COMPANY.COM" id="email" type="email" class="validate">
                        <label for="email" style="color:#004d40;">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">accessibility</i>
                        <select>
                            <option disabled value="TELEOMUNIKASI" disabled selected>TELEOMUNIKASI</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_balance</i>
                        <select>
                            <option disabled value="BUMN" disabled selected>BUMN</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">speaker_notes</i>
                        <textarea disabled value="Perusahaan terbaik" id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1" style="color:#004d40;">Deskripsi Perusahaan</label>
                    </div>
                </div>
                <div class="row">
                    <form action="#">
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>DOWNLOAD DATA LENGKAP PERUSAHAAN</span>
                                <input type="file" multiple>
                            </div>
                        </div>
                    </form>

                </div>
            </form>
            <form class="col s2 offset-s2" style="text-align:center;">
                <div class="row"></div><div class="row"></div><div class="row"></div><div class="row"></div><div class="row"></div><div class="row"></div><div class="row"></div><div class="row"></div><div class="row"></div><div class="row"></div><div class="row"></div>
                <div class="row">
                    <button class="btn waves-effect waves-light" type="submit" name="action" >
                    <a href="pengajuanlamaransebelumdaftar.php" style="color:white;">
                            AJUKAN
                        </a>
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!--    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script> -->
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