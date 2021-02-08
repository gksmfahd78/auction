<?php
    require_once('./dbconfig.php'); 
    function get_client_ip() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
            $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }

    // $sql = "INSERT INTO board (name, pass, content) VALUES('$_POST[name]', '$_POST[pass]', '$_POST[content]')";
    $sql = "INSERT INTO board_test (email, price, ip) VALUES('$_POST[email]', '$_POST[price]', '".get_client_ip(). "')";
    $conn->query($sql);

    echo "<script>alert('글이 등록되었습니다.');";
    echo "location.href='./list.php';</script>";
?>