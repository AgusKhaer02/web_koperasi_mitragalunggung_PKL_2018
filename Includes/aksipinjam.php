<?php
error_reporting(0);
session_start();
include 'Koneksi.php';
$carimember = mysqli_query($conn,"SELECT nama FROM anggota WHERE status='member' and nama='$_POST[member]'");
$jumlah_member = mysqli_num_rows($carimember);
if ($jumlah_member <= 0){
    echo "
    <script>
    alert('Nama member yang anda masukan tidak terdaftar pada database kami,mohon masukan nama member dengan benar');
    document.location.href = '../menuutama.php?leftindex=Pinjam';
    </script>
    ";
}else{
    $querysaldo = mysqli_query($conn,"SELECT saldo FROM saldo WHERE no_user='$_SESSION[No_anggota]' and member='$_POST[member]' ORDER BY tanggal DESC LIMIT 1") or die(mysqli_error($conn));
    if ($ada = mysqli_num_rows($querysaldo) > 0){
        while ($saldo2 = mysqli_fetch_assoc($querysaldo)){
        $saldo = $saldo2['saldo'];
        }
    if ($_POST['member'] == ''){
        echo "
        <script>
        alert('Silahkan pilih member terlebih dahulu');
        document.location.href = '../menuutama.php?leftindex=Pinjam';
        </script>
        ";
    }
    else {
        $jumlah = $_POST['jumlah'];
        if ($saldo > $jumlah){
            $sisa_saldo = ($saldo-$jumlah);
            $random = rand(11111111,99999999);
            date_default_timezone_set('Asia/Jakarta');
            $jumlah = $_POST['jumlah'];
            $sisa = $jumlah - $saldo;
            $date = date('Y-m-d H:i:s');
            $member =$_POST['member'];
            $bunga = $_POST['bunga'];
            $tenor = $_POST['tenor'];
            $biaya_admin = $_POST['biaya_admin'];
            $total = $_POST['total'];
            $ket = $_POST['ket'];

            #------email notification
            try {
            include('../phpmailer/class.phpmailer.php');
            include('../phpmailer/class.smtp.php');
            $mail = new PHPMailer();
            
            $mail->Host     = "ssl://smtp.gmail.com"; 
            $mail->Mailer   = "smtp";
            $mail->SMTPAuth = true;
            
            $mail->Username = "aguskkhaer@gmail.com"; 
            $mail->Password = "========";
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
            $mail->Subject = "Pinjam sukses";
            $mail->Body = "Uang berhasil di pinjam sebesar $jumlah Kepada $member,dengan bunga $bunga%,tenor $tenor, Biaya Administrasi $biaya_admin,total $total"; 
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
            $query = "INSERT INTO saldo SET no_user='$_SESSION[No_anggota]',nama_user='$_SESSION[nama_user]',member='$member',saldo='$sisa_saldo',tanggal='$date';";
            $query .= "INSERT INTO pinjam SET no_pinjam='$random',no_user='$_SESSION[No_anggota]',user='$_SESSION[nama_user]',member='$member',jumlah_pinjaman='$jumlah',tanggal_pinjaman='$date',bunga_pertahun='$bunga',tenor='$tenor',biaya_administrasi='$biaya_admin',total='$total',keterangan='$ket';";
            mysqli_multi_query($conn,$query);
            header("location:../menuutama.php?leftindex=HasilPinjam");
            }else{
                echo "
                <script>
                alert('Transaksi gagal,peminjaman kurang dari saldo member yang bersangkutan');
                document.location.href = '../menuutama.php?leftindex=Pinjam';
                </script>
                ";
            }
        }
    }else{
            echo "
            <script>
            alert('Transaksi gagal,anda belum memiliki saldo pada member yang bersangkutan');
            document.location.href = '../menuutama.php?leftindex=Pinjam';
            </script>
            ";
        }
}
?>