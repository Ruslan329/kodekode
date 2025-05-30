<html>
    <head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<script src="bootstrap/js/bootstrap.bundle.min.js"></script> 

<link rel="stylesheet" href="/template/css/style.css">  
<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css"> 

  
</head>
    <body style="margin: 0px; padding: 0px;">
        <?php  
            require_once 'navbaradmin.php';
?>
        
        
        <?php
echo "<form action='' method='POST'>
<input type='hidden'  name='action' value = 'classes/AdminPage/upPage' required>
<input type='hidden'  name='pageid' value = '".RESULTUP['id']."' required>
Заголовок:<input type='text' name='uppage' value='".RESULTUP['page']."' required>
Категория:<input type='text' name='uppagecat' value='".RESULTUP['author']."' required>
Текст:<textarea rows='5' cols='45' name='uptext'>".RESULTUP['text']."</textarea><br>   
Ключевые Слова:<input type='text' name='upkey' value='".RESULTUP['keywords']."' required>    
Описание:<input type='text' name='updesc' value='".RESULTUP['descr']."' required>   
Название:<input type='text' name='uptitle' value='".RESULTUP['title']."' required>    
<button style='width: 150px;' type='submit'>Изменить</button>
</form>";
        ?>
        
    </body>
</html>
