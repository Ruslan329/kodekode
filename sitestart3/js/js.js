$(document).ready(function(){
   // alert(jQuery.fn.jquery);
            //$('.img2').src = 'image.jpg?anti_cache=' + (new Date()).getTime();
        // var images = $('.img2').attr(src);
       // alert(";;;;");
      //  var img = images+".jpeg?anti_cache=" + Math.random();
      //  $('.img2').html("<div><img id ='i' class='' src='answer/classes/imageUpload/i/"+img+"?version=1234434343' /></div>");


    
$('#image').css('opacity',0);   
//$('#imageUploadBlock').css('display', 'block');
       ///////////////////////////////////
//$('#fileInput').html("<input  type='file' style='opacity: 0; position: absolute; margin-top: -53px;' id='image' name='file' />");




//$('#buttonBlock').html("<div class='buttonImageUploadLogoElement' style='text-align: center;' id='uploadImage'>Логотип сайта</div>");
//$('$fileInput').html("<input  type='file' style='position: absolute; margin-top: -53px;' id='image' name='file' />");
    ////////////////////////////////////////////////////////////////
$('#image').change(function () {  
   var action = $('#action').val();
   var ajax = $('#ajax').val();
   var file = $('#image').get(0).files[0];
   var data = new FormData(); 
   data.append('action', action);
   data.append('ajax', ajax); 
   data.append('file', file);
  
   $.ajax({
       url: '',
       data: data,
       type: 'POST',
       cache: false,
       contentType: false,
       processData: false, 
               // dataType: 'json',
       beforeSend: function () {
          $('.res').html("<img class='' src='img/loading.gif' />").show(); 
       },
       success: function (data) {
$('#buttonBlock').html("<div class='buttonImageUploadLogoElement' style='text-align: center;' id='delitImage'>Удалить фото</div>");
$('.res').html(data);
 $('#fileInput').remove();      
       }
    
    });
    return false;
});



$("#delitImage").on("click", function() { 
  //  alert('test');
   var action = "classes/imageUpload/delete";
   var ajax = "ajax";
   $.ajax({
       url: '',
       type: 'POST',
       data:{action: action, ajax: ajax},
       beforeSend: function () {
          $('.res').html("<img class='' src='img/loading.gif' />").show(); 
       },
       success: function (data) {
$('#buttonBlock').html("<div class='buttonImageUploadLogoElement' style='text-align: center;' id='uploadImage'>Загрузить логотип</div>");
$('.res').html(data);
 $('#fileInput').html("<input  type='file' style='opacity: 0; position: absolute; margin-top: -53px;' id='image' name='file' />");      
       }
    
    });
    return false;
});   
    








});
