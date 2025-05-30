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



//print_r(RESULTAPAGEADMIN);

//foreach(RESULTCATEGORIES as $key => $items){
//  foreach($items as $k => $value1){
//
//echo $items['cat']."<br>";
//
//
//  }
//} 
foreach(RESULTAPAGEADMIN
        as $key => $items){
 echo "

           <form action='' method='POST'>
  <input type='hidden'  name='action' value = '' required>
<input type='hidden'  name='idpage' value = '".$items['id']."' required>
  <button style='width: 150px;' type='submit'>изменить</button>
</form>

<a href='/uppage/".$items['id']."'>Изменить страницу</a>

".

"<form action='' method='POST'>
  <input type='hidden'  name='action' value = 'classes/AdminPage/delPage' required>
<input type='hidden'  name='delpageid' value = '".$items['id']."' required>
Заголовок:<input type='text' name='delpage' value='".$items['page']."' required>
Категория:<input type='text' name='delpagecat' value='".$items['author']."' required>
  <button style='width: 150px;' type='submit'>удалить</button>
</form><hr style='border: 3px solid blue;'>";
} 

//"<form action='' method='POST'>
//  <input type='hidden'  name='action' value = 'classes/AdminPage/delPage' required>
//<input type='hidden'  name='delpageid' value = '".$items['id']."' required>
//Заголовок:<input type='text' name='delpage' value='".$items['page']."' required>
//Категория:<input type='text' name='delpagecat' value='".$items['author']."' required>
//Текст:<textarea rows='5' cols='45' name='text'>".$items['text']."</textarea>   
//Ключевые Слова:<input type='text' name='delpagecat' value='".$items['keywords']."' required>    
//Описание:<input type='text' name='delpagecat' value='".$items['descr']."' required>   
//Название:<input type='text' name='delpagecat' value='".$items['title']."' required>    
//  <button style='width: 150px;' type='submit'>удалить</button>
//</form><hr style='border: 4px solid blue;'>";


        ?>
    </body>
</html>


