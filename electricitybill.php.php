<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>DRAWING A CHESS BOARD USIMNG NESTED FOR LOOP</h1>
    <?php
         echo "<table width='400px' cellspacing= '0px' border='1px'>";
           for($row=1; $row <= 8; $row++)
           {
              echo "<tr>";
              for($col=1; $col <= 8; $col++)
              {
                      $total = $row + $col;
                      if($total % 2 ==0)
                      {
                          echo "<td height= 35px width =30px bgcolor = #ffffff></td>";
                      }else{
                          echo "<td height= 35px width =30px bgcolor = #000000></td>";
                      }
                }
              echo "</tr>";
           }
        echo "</table>";
    ?>
</body>
</html>