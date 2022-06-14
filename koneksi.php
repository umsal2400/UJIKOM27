 <?php 
    class koneksi {
        public function get_koneksi() {
            $conn = mysqli_connect("localhost", "root", "", "praujikom27");

            if(mysqli_connect_errno()) {
                echo "Gagal Koneksi ke Database: " . mysqli_connect_error();
            }
            return $conn;
        }
    }
    $konek = new koneksi();
    $koneksi = $konek->get_koneksi();
?>