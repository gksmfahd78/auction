<!DOCTYPE html>

<html>

  <head>
    <meta charset="utf-8">
    <title>중고 경매</title>
    <link rel="stylesheet" href="./css/board.css">
  </head>
  <body>

    <?php
    require_once('./dbconfig.php');

    $pageNum = 4;
    $sql = "SELECT * FROM board_test ORDER BY id DESC";
    $result = $conn->query($sql);
    $pageTotal = mysqli_num_rows($result);

    $start = $_GET['start'];
    if(!$start) $start=0;
    $sql = "SELECT * FROM board_test ORDER BY id DESC limit $start, $pageNum";
    $result = $conn->query($sql);
    ?>

    <div class="form">        
        <div class="tab-content">
          <div id="table">   
            <h1>중고 경매</h1>
            
            <form action="./insert.php" method="post">
            
              <!-- <div class="top-row">
                <div class="field-wrap">
              
                  <input type="email"placeholder="이메일" name="name" required />
                </div>
            
                <div class="field-wrap">
                  <input type="password"placeholder="비밀번호"  name="pass" required/>
                </div>
              </div> -->

              <div class="field-wrap">
                <input type="email"placeholder="이메일" name="name" required/>
              </div>

              <div class="field-wrap">
                <input type="number"placeholder="가격" name="content" required/>
              </div>
              
              <button type="submit" class="add-to-cart"/>확인</button>
            </form>
        </div>
      </div> 
    </div>

    <center>
      <?php

        while($row=$result->fetch_array()){
          echo "<table width=600 border=1><tr>";
          echo "<td>No. $row[id]</td>";
          $nm = substr($row[name], 0, 3); 
          echo "<td>$nm";
            for($i =0; $i < strlen($row[name]) - 3; $i=$i+1) {
              echo "*";
            }
          echo "</td>";
          echo "<td>$row[wdate]</td>";
          //echo "<td><a href='modifycheck.php?id=$row[id]'>수정</a></td>";
          //echo "<td><a href='delete.php?id=$row[id]'>삭제</a></td></tr>";
          echo "<tr><td colspan=5>$row[content] 원</td>";
          echo "</tr></table>";
          echo "<br />";
        }

        $pages = $pageTotal / $pageNum;

        for($i=0; $i<$pages; $i++){
          $nextPage = $pageNum * $i;
          echo "<a href=$_SERVER[PHP_SELF]?start=$nextPage>[$i]</a>";
        }
      ?>
      <center>
  </body>
</html>