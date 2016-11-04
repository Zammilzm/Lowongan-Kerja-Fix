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
                    DAFTARKAN <span style="color:#004d40;">PERUSAHAANMU</span>
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
                        <input id="disabled" type="text" class="validate">
                        <label for="disabled" style="color:#004d40;">ID USER</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="disabled" type="text" class="validate">
                        <label for="disabled" style="color:#004d40;">Username</label>
                    </div>
                </div>
                <div class="row">
                    <form action="#">
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>UPLOAD CV ANDA</span>
                                <input type="file" multiple>
                            </div>
                        </div>
                    </form>
                    
                </div>
                <div class="row">
                    <button class="btn waves-effect waves-light" type="submit" name="action" >
                        <a href="carikerja.php" style="color:white;">
                            SUBMIT
                        </a>
                        <i class="material-icons right">send</i>
                    </button>

                </div>
            </form>
            <div class="row  col s6 offset-s2">
                <a href="daftar.php" style="font-size:15px; clear:both;">
                    BELUM PUNYA ID DAN USERNAME ?? SILAHKAN DAFTAR
                </a>
            </div>
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