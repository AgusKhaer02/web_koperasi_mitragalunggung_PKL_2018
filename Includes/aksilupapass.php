<?php
include 'Koneksi.php';
if (isset($_POST['email']))
{
$email2 = $_POST['email'];
}
$querycari = "SELECT * FROM anggota where email='$email2'";
$aksicari = mysqli_query($conn,$querycari);
$numrows = mysqli_num_rows($aksicari);
if ($numrows > 0){
    $randomcode = rand(1111,9999);
    $verifycode = "UPDATE anggota SET verifycode='$randomcode' WHERE email='$email2'";
    $aksiubah = mysqli_query($conn,$verifycode);
    #-------send notification through gmail
        include('../phpmailer/class.phpmailer.php');
        include('../phpmailer/class.smtp.php');
        $mail = new PHPMailer();

        $mail->Host     = "ssl://smtp.gmail.com"; 
        $mail->Mailer   = "smtp";
        $mail->SMTPAuth = true;

        $mail->Username = "aguskkhaer@gmail.com"; 
        $mail->Password = "chroniclefm14022";
        $webmaster_email = "aguskkhaer@gmail.com";
        $email = $email2;
        $name = ""; 


        $mail->From = $webmaster_email;
        $mail->FromName = "Agus Kurniadin Khaer";
        $mail->AddAddress($email,$name);
        $mail->AddReplyTo($webmaster_email,"Agus Kurniadin Khaer");
        $mail->WordWrap = 50; 
        //$mail->AddAttachment("module.txt"); // attachment
        //$mail->AddAttachment("new.jpg"); // attachment
        $mail->IsHTML(true); 
        $mail->Subject = "Lupa Password";
        $mail->Body = "Kode verifikasi anda : $randomcode"; 
        $mail->AltBody = "This is the body when user views in plain text format"; 
        if(!$mail->Send())
        {
        echo "Mailer Error: " . $mail->ErrorInfo;
        }
        else
        {
        #----empty
        } 
    echo "<script>
    document.location.href = '../Halaman/inputverifikasi.php';
    </script>
    ";     
}else{
    echo "
    <script>
    alert('Email tidak ditemukan');
    document.location.href = '../Halaman/lupapass.php';
    </script>
    ";
}
?>