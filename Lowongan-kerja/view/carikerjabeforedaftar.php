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
                    CARI <span style="color:#004d40;">KERJA</span>
                </h3>
            </div>
        </div>
        <div class="row">
            <form class="col s10 offset-s2">
                <div class="row">
                    <div class="input-field col s5">
                        <i class="material-icons prefix">account_balance</i>
                        <select>
                            <option value="" disabled selected>JENIS PERUSAHAAN</option>
                            <option value="1">Telekomunikasi</option>
                            <option value="2">Transportasi</option>
                            <option value="3">Bank</option>
                            <option value="3">BUMN</option>
                        </select>
                    </div>
                    <div class="input-field col s5">
                        <i class="material-icons prefix">accessibility</i>
                        <select>
                            <option value="" disabled selected>POSISI</option>
                            <option value="1">Office Boy</option>
                            <option value="2">Sekretaris</option>
                            <option value="3">Head-Office</option>
                        </select>
                    </div>
                    <div class="input-field col s2">
                        <button class="btn waves-effect waves-light" type="submit" name="action" >CARI
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="row">
            <table class="col s10 offset-s2 striped">
                <thead>
                    <tr>
                        <th data-field="id">JENIS PERUSAHAAN</th>
                        <th data-field="name">POSISI</th>
                        <th data-field="price">NAMA PERUSAHAAN</th>
                        <th data-field="klik"> DETAIL
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Telekomunikasi</td>
                        <td>Sekretaris</td>
                        <td>JOHN COMPANY</td>
                        <td>
                            <a href="detailcariperusahaansebelumdaftar.php">
                                Klik Untuk Selengkapnya
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Telekomunikasi</td>
                        <td>Sekretaris</td>
                        <td>JOHN COMPANY</td>
                        <td>
                            <a href="detailcariperusahaansebelumdaftar.php">
                                Klik Untuk Selengkapnya
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Telekomunikasi</td>
                        <td>Sekretaris</td>
                        <td>JOHN COMPANY</td>
                        <td>
                            <a href="detailcariperusahaansebelumdaftar.php">
                                Klik Untuk Selengkapnya
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
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