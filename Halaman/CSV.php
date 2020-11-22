<?php
class csv extends mysqli
{
    private $state_csv = false;
    public function __construct()
    {
        parent:: __construct("localhost","root","","db_koperasi_stmik");
        if ($this->connect_error)
        {
            echo "Gagal terkoneksi dengan database". $this->connect_error;
        }
    }
    public function pinjam_import ($file)
    {
        $file = fopen($file ,'r');
        while ($row = fgetcsv($file)){
            $value = "'". Implode("','", $row) ."'";
            $q = "INSERT INTO pinjam VALUES (".$value.")";
            if ($this->query($q)){
                $this->state_csv = true;
            }
            else
            {
                $this->state_csv = false;
            }

            if ($this->state_csv){
                echo "Data telah berhasil import ke dalam database";
            }else{
                echo "Ada kesalahan dalam import";
            }
        }
    }
    public function pinjam_export ()
    {
        $this->state_csv = false;
        $q  = "SELECT * FROM pinjam";
        $run = $this->query($q);
        if($run->num_rows > 0)
        {
            $fn = "Pinjam-". uniqid() .".csv";
            $file = fopen("csv/".$fn, "w");
            while ($row = $run->fetch_array(MYSQLI_NUM)){
                if (fputcsv($file,$row))
                {
                    $this->state_csv = true;
                }
                else{
                    $this->state_csv = false;
                }
            }
                if ($this->state_csv) {
                    echo "<script>
                    alert('Data berhasil di ekspor');
                    </script>";
                }else{
                    echo "<script>
                    alert('Data gagal di ekspor');
                    </script>";
                    
                }
                fclose($file);
        }else{
            echo "
            <script>
            alert('Data tidak ditemukan');
            </script>
            ";
        }
    }
    public function simpan_import ($file)
    {
        $file = fopen($file ,'r');
        while ($row = fgetcsv($file)){
            $value = "'". Implode("','", $row) ."'";
            $q = "INSERT INTO simpan VALUES (".$value.")";
            if ($this->query($q)){
                $this->state_csv = true;
            }
            else
            {
                $this->state_csv = false;
            }

            if ($this->state_csv){
                echo "Data telah berhasil import ke dalam database";
            }else{
                echo "Ada kesalahan dalam import";
            }
        }
    }
    public function simpan_export()
    {
        $this->state_csv = false;
        $q  = "SELECT * FROM simpan";
        $run = $this->query($q);
        if($run->num_rows > 0)
        {
            $fn = "Simpan-". uniqid() .".csv";
            $file = fopen("csv/".$fn, "w");
            while ($row = $run->fetch_array(MYSQLI_NUM)){
                if (fputcsv($file,$row))
                {
                    $this->state_csv = true;
                }
                else{
                    $this->state_csv = false;
                }
            }
                if ($this->state_csv) {
                    echo "<script>
                    alert('Data berhasil di ekspor');
                    </script>";
                }else{
                    echo "<script>
                    alert('Data gagal di ekspor');
                    </script>";
                    
                }
                fclose($file);
        }else{
            echo "
            <script>
            alert('Data tidak ditemukan');
            </script>
            ";
        }
    }
}
?>