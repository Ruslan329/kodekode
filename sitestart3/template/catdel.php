<?php   if(!isset($_SESSION['admin'])){   header('Location: http://sitestart/admin'); die();} ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<script src="bootstrap/js/bootstrap.bundle.min.js"></script> 

<link rel="stylesheet" href="template/css/style.css">  
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 

    <meta name="keywords" content="ключевые слова через запятую">
    <meta name="description" content="описание страницы">  
</head>
    <body style="margin: 0px; padding: 0px;">
        
<div class="container-fluid">
<?php  
            require_once 'navbaradmin.php';
?>
</div>
<?php  





//foreach(RESULTCATEGORIES as $key => $items){
//  foreach($items as $k => $value1){
//
//echo $items['cat']."<br>";
//
//
//  }
//} 
foreach(RESULTCATEGORIESID as $key => $items){
 echo "
       <h3>".$items['cat']."</3> 
           <form action='' method='POST'>
  <input type='hidden'  name='action' value = 'classes/Admin/upCat' required>
<input type='hidden'  name='idcat' value = '".$items['id']."' required>
      <input type='text' name='addcat' value='".$items['cat']."' required>
  <button style='width: 150px;' type='submit'>изменить</button>
</form>".




"<form action='' method='POST'>
  <input type='hidden'  name='action' value = 'classes/Admin/delCat' required>
<input type='hidden'  name='delcat' value = '".$items['id']."' required>
  <button style='width: 150px;' type='submit'>удалить</button>
</form>";
} 




        ?>
    </body>
</html>


