<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
        require_once('./dbconfig.php');
     ?>
    <form method="post" action="./update.php?id=<?=$_GET[id]?>">
      <table width=600 border=1>
        <tr>
          <td>가격을 적어주세요.</td>
        </tr>
        <tr>
          <td><input type="text" name="content"/></td>
        </tr>
          <tr>
          <td align=right><input type="submit" value="확 인" /></td>
        </tr>
      </table>
    </form>
  </body>
</html>