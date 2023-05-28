<?php
    $koneksi = mysqli_connect("localhost","root","","project_individu");


    function query($query){
        global $koneksi;
        $result = mysqli_query($koneksi,$query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result) ){
            $rows[] = $row;
        }
        return $rows;
    }

    function tambahJenis($query){
        global $koneksi;
        $id_jenis_buku = $_POST['id_jenis_buku'];
        $jenis_buku = $_POST['jenis_buku'];

        $query = "INSERT INTO jenis_buku VALUES 
                ('$id_jenis_buku','$jenis_buku')";
        mysqli_query($koneksi, $query);
        return mysqli_affected_rows($koneksi);
    }
    function editJenis($query){
        global $koneksi;
        $id= $query['id_jenis_buku'];
        $id_jenis_buku = $_POST['id_jenis_buku'];
        $jenis_buku = $_POST['jenis_buku'];

        $query = "UPDATE jenis_buku SET 
        id_jenis_buku = '$id_jenis_buku',
        jenis_buku = '$jenis_buku'
        WHERE id_jenis_buku = '$id'";
        mysqli_query($koneksi, $query);
        return mysqli_affected_rows($koneksi);  

    }
    function hapusJenis($id){
        global $koneksi;
        mysqli_query($koneksi, "DELETE FROM jenis_buku WHERE id_jenis_buku = '$id'");
        return mysqli_affected_rows($koneksi);
        
    }
    function tambahPenerbit($query){
        global $koneksi;
        $id_penerbit = $_POST['id_penerbit'];
        $nama_penerbit = $_POST['nama_penerbit'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];

        $query = "INSERT INTO penerbit VALUES 
                ('$id_penerbit','$nama_penerbit','$email','$alamat')";
                mysqli_query($koneksi,$query);
                return mysqli_affected_rows($koneksi);
    }
    function editPenerbit($query){
        global $koneksi;
        $id= $query['id_penerbit'];
        $id_penerbit = $_POST['id_penerbit'];
        $nama_penerbit = $_POST['nama_penerbit'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];

        $query = "UPDATE penerbit SET 
        id_penerbit = '$id_penerbit',
        nama_penerbit = '$nama_penerbit',
        email = '$email',
        alamat = '$alamat'
        WHERE id_penerbit = '$id'";
        mysqli_query($koneksi, $query);
        return mysqli_affected_rows($koneksi);  
    }
    function hapusPenerbit($id){
        global $koneksi;
        mysqli_query($koneksi, "DELETE FROM penerbit WHERE id_penerbit = '$id'");
        return mysqli_affected_rows($koneksi);
    }
    function tambahDaftar($query){
        global $koneksi;
        $id_jenis = $_POST['id_jenis'];
        $id_penerbit = $_POST['id_penerbit'];
        $judul = $_POST['judul'];
        $pengarang = $_POST['pengarang'];
        $tahun = $_POST['tahun'];

        $query = "INSERT INTO buku VALUES 
                ('','$id_jenis','$id_penerbit','$judul','$pengarang','$tahun')";
                mysqli_query($koneksi, $query);
                return mysqli_affected_rows($koneksi);
    }
    function editDaftar($query){
        global $koneksi;
        $id= $query['id_buku'];
        $id_buku = $_POST['id_buku'];
        $id_jenis = $_POST['id_jenis'];
        $id_penerbit = $_POST['id_penerbit'];
        $judul = $_POST['judul'];
        $pengarang = $_POST['pengarang'];
        $tahun = $_POST['tahun'];

        $query = "UPDATE buku SET 
        id_buku = '$id_buku',
        id_jenis = '$id_jenis',
        id_penerbit = '$id_penerbit',
        judul = '$judul',
        pengarang = '$pengarang',
        tahun = '$tahun'
        WHERE id_buku = '$id'";
        mysqli_query($koneksi, $query);
        return mysqli_affected_rows($koneksi);  
    }
    function hapusDaftar($id){
        global $koneksi;
        mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku = '$id'");
        return mysqli_affected_rows($koneksi);
    }
?>