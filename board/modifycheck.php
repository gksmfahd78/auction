<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <?php
    require_once('./dbconfig.php');
    if($_GET[mode] != "modify")
    {
  ?>

  <form method="post" action="<?=$_SERVER[PHP_SELF]?>?id=<?=$_GET[id]?>&mode=modify">
    <table border=1>
      <tr>
        <td>비밀번호</td>
        <td><input type="password" name="pass" /></td>
        <td><input type="submit" value="확인" /></td>
      </tr>
    </table>
  </form>

  <?php
  exit;
}

$sql="SELECT pass FROM board WHERE id='$_GET[id]'";
$result=$conn->query($sql);
$row=$result->fetch_array();
if($row[pass] == $_POST[pass])

{
echo "<script>alert('수정 페이지로 이동합니다');";
echo "location.href='./modify.php?id=$_GET[id]'</script>";
}else{
echo "<script>alert('비정상적인 요청입니다');";
echo "location.href='./list.php'</script>";
}
?>
</body>
</html>