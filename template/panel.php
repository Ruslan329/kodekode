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
    11
<?php  
            require_once 'navbaradmin.php';
            
            echo RESULTPAGENAME;
            
?>
</div>
 

11








     <script type="text/javascript">
 

/*alert(jQuery.fn.jquery);*/

</script>
    </body>
</html>


