<?php
    $con = mysqli_connect("localhost","root","","torang_pe_toko");

    if (mysqli_connect_errno()) {
        echo "gagal masuk cs" . mysqli_connect_error();
        exit();
    }
?>