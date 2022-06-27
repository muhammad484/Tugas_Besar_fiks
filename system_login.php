<?php
    session_start();
    require "fungsi.php";
//    $koneksi = mysqli_connect("localhost","root","","login");
    if (isset($_POST['login_mhs'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa WHERE username = '$username'");

        //cek username
        if (mysqli_num_rows($sql) === 1) {

            $row = mysqli_fetch_assoc($sql);

            //cek password
            if ($password == $row['password']) {

                $_SESSION["login"] = True;
                header('location:admin.php');
                exit();
            }
            else{
            ?>
            <script language="JavaScript">
                alert('Oops ! Login Failed. Username & Password tidak sesuai ...');
                document.location='login.php';
            </script>
            <?php
            }
        }else{
            ?>
            <script language="JavaScript">
                alert('Oops ! Login Failed. Username & Password tidak sesuai ...');
                document.location='login.php';
            </script>
            <?php
        }
    }else{
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = mysqli_query($koneksi, "SELECT * FROM tb_dosen WHERE username = '$username'");

        //cek username
        if (mysqli_num_rows($sql) === 1) {

            $row = mysqli_fetch_assoc($sql);

            //cek password
            if ($password == $row['password']) {

                $_SESSION["login"] = True;
                header('location:../login_dosen/admin.php');
                exit();
            }
            else{
            ?>
            <script language="JavaScript">
                alert('Oops ! Login Failed. Username & Password tidak sesuai ...');
                document.location='login.php';
            </script>
            <?php
            }
        }else{
            ?>
            <script language="JavaScript">
                alert('Oops ! Login Failed. Username & Password tidak sesuai ...');
                document.location='login.php';
            </script>
            <?php
        }
    }
?>