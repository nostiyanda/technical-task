<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<form action="" method="post" align="center">

<div class="box">
<p><label>Enter Available No. Of Breads</label><input type="number" name="breads" required /><br /></p>
<p><label>Enter Available No. of Vadas</label><input type="number" name="vadas"  required /><br /></p>
<p><label>Enter Abailable No. Of Samosas</label><input type="number" name="samosas" required /><br /></p>
<p><label>Enter Price Of Vada Pav</label><br><input type="number" name="pvada"  required /><br /></p>
<p><label>Enter Price Of Samosa Pav</label><br><input type="number" name="psamosa" required /><br /></p>

<input type="submit" name="submit"/>
</div>

<div class="box">
<p>Maximum Profit Possible Is</p>
<?php

if(isset($_POST['submit'])){

    $vada  =$_POST['vadas'];
    $samosa=$_POST['samosas'];
    $bread =$_POST['breads'];
    $pvada =$_POST['pvada'];
    $psamosa=$_POST['psamosa'];
    $b = floor($bread/2);
    $profit=0;
   while($b!=0){
    if($pvada > $psamosa || $samosa==0 ){
        while($b >0 && $vada > 0){
            $profit = $pvada + $profit;
            $b--;
            $vada--;
            //echo "b in 1 if -$b<br>";
        }
    }
    if($pvada < $psamosa || $vada==0){
        while($b > 0 && $samosa >0){
            $profit = $psamosa + $profit;
            $b--;
            $samosa--;
            //echo "b in 1 if -$b<br>";
        }
    }
   }
    echo $profit;   
}

?>

</div>

</form>
</body>
</html>
