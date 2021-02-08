<?php
    require_once('./dbconfig.php');
    // $sql = "INSERT INTO board (name, pass, content) VALUES('$_POST[name]', '$_POST[pass]', '$_POST[content]')";
    $sql = "INSERT INTO board_test (name, content) VALUES('$_POST[name]', $_POST[content]')";
    $conn->query($sql);

    echo "<script>alert('글이 등록되었습니다.');";
    echo "location.href='./list.php';</script>";
?>