 
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE_NINJA</title>
</head>
<body>
<form action="" method="post">
  <div class="nombre">
    <p> Cricket Balls To Overs</p>
    <label for="">Number </label><input type="text" name="value" placeholder="entrer de nombre svp"/>
    <input type="submit" value="OK" name="btnok">
  </div>
  <br>
  <br>
  </form>
  
<?php
if ( isset ($_POST['btnok'])) {
  $value=$_POST['value'];
 
   
  if($value=="")
  {
    echo 'Veillez renseigner tous les champs svp';
  }else
  {
 
    function total_overs($balls) {

      if ($balls % 6 == 0) {
        $ball=$balls / 6;
        echo $ball;
      } else {
        
        $mod = ($balls % 6 / 10);
        
        $mod1 = floor($balls / 6);

        $ball=(($balls % 6) / 10) + $balls;
        echo $mod1." overs and ".$mod ."balls were bowled by the bowler."; 
      }
  }
 total_overs($value);  
}
}
?>
 

</body>
</html> 
