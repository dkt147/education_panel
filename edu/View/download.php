<?php

if (isset($_GET['file_id'])) {
    echo $fid = $_GET['file_id'];
    $conn = mysqli_connect("localhost", "root",  "", "education");
    // fetch file to download from database
    echo $sql = "SELECT * FROM books WHERE id=$fid";
    $result = mysqli_query($conn, $sql);
    if ($result = mysqli_query($conn, $sql)) {
        // Fetch one and one row
        $i = 0;
        while ($row = mysqli_fetch_assoc($result)) {


            echo $row['Book'];
            $res = $row['Book'];
        }
    }

    echo $fileName = basename($res);
    echo $filePath = 'image/' . $fileName;
    // Define headers
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=$fileName");
    header("Content-Type: application/zip");
    header("Content-Transfer-Encoding: binary");

    // Read the file
    readfile($filePath);
    exit;
}
