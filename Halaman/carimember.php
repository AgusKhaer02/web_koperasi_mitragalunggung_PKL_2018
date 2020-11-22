<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'db_koperasi_stmik';
//menghubungkan ke database
$db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
$searchterm = $_GET['term'];
$query = $db->query($conn,"SELECT No_anggota,nama FROM anggota WHERE nama LIKE '%".$searchterm."%' ORDER BY nama ASC");
while ($row=$query->fetch_assoc()){
    $data[] = $row['nama'];
}
echo json_encode($data);
?>