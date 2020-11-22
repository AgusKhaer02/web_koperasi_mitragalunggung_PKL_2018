<?php
session_start();
if (isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"]){
    include 'Koneksi.php';
    $no_anggota = rand(1111111,9999999);
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $JK = $_POST['jk'];
    $tempat = $_POST['tempat'];
    $tanggal = $_POST['tanggal'];
    $email = $_POST['email'];
    $no_telp = $_POST['no_telp'];
    $jurusan = $_POST['jurusan'];
    $password = $_POST['pass'];
    $status = $_POST['status'];
    $activate = md5(uniqid(rand()));
    $searchemail = mysqli_query($conn,"SELECT email FROM anggota where email='$email'");
    if ($numrows =mysqli_num_rows($searchemail) > 0){
        echo "
        <script>
        alert('Email telah digunakan,silahkan coba lagi');
        document.location.href = '../Halaman/Register.php';
        </script>
        ";
    }
    else{
                if (isset($_FILES['foto'])){
                    $filename = $_FILES['foto']['name'];
                    $foto = uniqid().'-'.$filename;
                    $filesize = $_FILES['foto']['size'];
                    $fileerror = $_FILES['foto']['error'];
                        if ($filesize > 0 || $fileerror == 0){
                        $move = move_uploaded_file($_FILES['foto']['tmp_name'], "Gambar_user/".$foto); 
                        }
                        else{
                            if($JK == "L"){
                                $foto = "male.png";
                            }
                            elseif($JK == "P"){
                                $foto = "female.png";
                            }
                        }
                }
                try{
                include('../phpmailer/class.phpmailer.php');
                include('../phpmailer/class.smtp.php');
                $mail = new PHPMailer();
                
                $mail->Host     = "ssl://smtp.gmail.com"; 
                $mail->Mailer   = "smtp";
                $mail->SMTPAuth = true;
                
                $mail->Username = "aguskkhaer@gmail.com"; 
                $mail->Password = "chroniclefm14022";
                $webmaster_email = "aguskkhaer@gmail.com";
                $email2 = $email;
                $name = $nama; 

                $mail->From = $webmaster_email;
                $mail->FromName = "Agus Kurniadin Khaer";
                $mail->AddAddress($email,$name);
                $mail->AddReplyTo($webmaster_email,"Agus Kurniadin Khaer");
                $mail->WordWrap = 50; 
                //$mail->AddAttachment("module.txt"); // attachment
                //$mail->AddAttachment("new.jpg"); // attachment
                $mail->IsHTML(true); 
                $mail->Subject = "Aktivasi Akun Anda";
                $mail->Body = "Klik link di bawah ini untuk aktivasi akun anda <br/><br/> localhost/koperasimitragalunggung.com/aktivasi.php?activate=$activate"; 
                $mail->AltBody = "This is the body when user views in plain text format"; 
                if(!$mail->Send())
                {
                echo "Mailer Error: " . $mail->ErrorInfo;
                }  
                else{
                    #empty
                }
                }catch(exception $e){

                }
                $query = "INSERT INTO anggota SET No_anggota='$no_anggota',Nama='$nama',Alamat='$alamat',JK='$JK',TTL='$tanggal',tempat_lahir='$tempat',Email='$email',No_telp='$no_telp',Jurusan='$jurusan',Password='$password',foto='$foto',status='$status',activated='N',activation_code='$activate'";
                mysqli_query($conn,$query)or die(mysqli_error($conn));
                echo "<script>
                alert('Silahkan cek email anda untuk melakukan verifikasi akun anda');
                document.location.href = '../index.php';
                </script>
                ";
    }
}elseif($_POST["captcha"] == "")
{
    echo "<script>
    alert('Anda belum memasukan captcha,silahkan masukan terlebih dahulu');
    document.location.href = '../Halaman/Register.php';
    </script>
    ";
}
else{
    echo "<script>
    alert('Captcha yang anda masukan salah silahkan coba lagi');
    document.location.href = '../Halaman/Register.php';
    </script>
    ";
}
?>