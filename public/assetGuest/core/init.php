<?php

    //koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "porfolio");

    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result) ) {
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data)
    {
        global $conn;

        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $pesan = htmlspecialchars($data["pesan"]);
        $created_at = date("Y-m-d H:i:s"); 

        $query = "INSERT INTO kritik_saran VALUES ('', '$nama', '$email', '$pesan', '$created_at')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

?>