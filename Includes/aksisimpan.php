<?php
date_default_timezone_set('Asia/Jakarta');
$date = date("Y-m-d H:i:s");
session_start();
include 'Koneksi.php';
$carimember = mysqli_query($conn,"SELECT nama FROM anggota WHERE status='member' and nama='$_POST[member]'");
$jumlah_member = mysqli_num_rows($carimember);
if ($jumlah_member <= 0){
    echo "
    <script>
    alert('Nama member yang anda masukan tidak terdaftar pada database kami,mohon masukan nama member dengan benar');
    document.location.href = '../menuutama.php?leftindex=Simpan';
    </script>
    ";
}else{
    $tambahsaldo = mysqli_query($conn,"SELECT saldo FROM saldo WHERE no_user='$_SESSION[No_anggota]' and member='$_POST[member]' ORDER BY tanggal DESC LIMIT 1");
    while ($array = mysqli_fetch_assoc($tambahsaldo))
    {
        $saldosebelumnya = $array['saldo'];
    }
    if (isset($saldosebelumnya)){
        if($numrowssaldo = mysqli_num_rows($tambahsaldo) > 0){
            $tambah = $_POST['total'] + $saldosebelumnya;
        }else{
            $tambah = $_POST['total'];
        }
    }
    $random = rand(11111111,99999999);
    $user = $_SESSION['nama_user'];
    $member = $_POST['member'];
    $pokok = $_POST['pokok'];
    $wajib = $_POST['wajib'];
    $sukarela = $_POST['sukarela'];
    $total = $_POST['total'];
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
            $email = $_SESSION['email_user'];
            $name = $_SESSION['nama_user']; 


            $mail->From = $webmaster_email;
            $mail->FromName = "Agus Kurniadin Khaer";
            $mail->AddAddress($email,$name);
            $mail->AddReplyTo($webmaster_email,"Agus Kurniadin Khaer");
            $mail->WordWrap = 50; 
            //$mail->AddAttachment("module.txt"); // attachment
            //$mail->AddAttachment("new.jpg"); // attachment
            $mail->IsHTML(true); 
            $mail->Subject = "Simpan sukses";
            $mail->Body = "uang anda berhasil tersimpan oleh member $member dengan simpanan pokok sebesar Rp$pokok,simpanan wajib sebesar Rp$wajib,dan simpanan sukarela sebesar Rp$sukarela,total dari keseluruhan adalah Rp$total, Terima kasih telah menggunakan jasa web kami"; 
            $mail->AltBody = "This is the body when user views in plain text format"; 
            if(!$mail->Send())
            {
            echo "Mailer Error: " . $mail->ErrorInfo;
            $query = "INSERT INTO simpan SET user='$user',member='$member',simpanan_pokok='$pokok',simpanan_wajib='$wajib',simpanan_sukarela='$sukarela',total='$total'";
            mysqli_query($conn,$query);
            echo "
            <script>
            document.location.href = '../menuutama.php?leftindex=HasilSimpan';
            </script>
            ";
            }
            else
            {
            #----empty
            }
    #-------------------save to database
        if (isset($saldosebelumnya)){
            $query = "INSERT INTO simpan SET no_simpan='$random',no_user='$_SESSION[No_anggota]',user='$user',member='$member',tanggal_simpanan='$date',simpanan_pokok='$pokok',simpanan_wajib='$wajib',simpanan_sukarela='$sukarela',total='$total';";
            $query .= "INSERT INTO saldo SET no_user='$_SESSION[No_anggota]',nama_user='$_SESSION[nama_user]',member='$member',saldo='$tambah',tanggal='$date';";
            mysqli_multi_query($conn,$query) or die(mysqli_error($conn));
        }else{
            $query = "INSERT INTO simpan SET no_simpan='$random',no_user='$_SESSION[No_anggota]',user='$user',member='$member',tanggal_simpanan='$date',simpanan_pokok='$pokok',simpanan_wajib='$wajib',simpanan_sukarela='$sukarela',total='$total';";
            $query .= "INSERT INTO saldo SET no_user='$_SESSION[No_anggota]',nama_user='$_SESSION[nama_user]',member='$member',saldo='$total',tanggal='$date';";
            mysqli_multi_query($conn,$query) or die(mysqli_error($conn));
        }
    echo "
    <script>
    document.location.href = '../menuutama.php?leftindex=HasilSimpan';
    </script>
    ";
}
?>