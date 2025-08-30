<?php 
namespace classes;




    //Класс imageUpload
    class imageUpload{
        //Переменные
        public  $new_name, $getimagesize, $id_foto, $id_cons; 
        //Функция __construct()
        public function __construct(){
            //Если файл загружен, то...
            if($_FILES['file']['tmp_name']){		
	        //Записываем в $this->getimagesize размеры, тип файла и высоту/ширину загруженного файла с помощью функции getimagesize()		
                $this->getimagesize = getimagesize($_FILES['file']['tmp_name']);
            }
            //Записываем в $time текущее время
            $time = time();
            //Записываем $time в $this->new_name + .jpeg и получаем новое название файла
            $this->new_name = 'avatar_'.$_SESSION['user'].'.jpeg';
            $_SESSION['avatar'] = "avatar";
            //Записываем $time в $this->id_foto и получаем идентификатор фото
           // $this->id_foto = $time;
        }
        //Функция fileSize()
        private function fileSize(){
            //Если размер файла больше максимального, то...
            if($_FILES['file']['size'] > 2*1024*1024){
                //Возвращаем false
                return false;
            }
            //Иначе...
            else{
                //Возвращаем true
                return true;
            };
        }
        //Функция errors()
        public function errors(){  
            //Все виды ошибок:
            if($_FILES['file']['error'] == 1){return "Размер принятого файла превысил максимально допустимый размер, который задан директивой конфигурационного файла вашего сервера. Возможно вы можете загрузить этот файл уменьшев его размер.";}      
            elseif($_FILES['file']['error'] == 2){return "Размер загружаемого файла превысил значение, указанное в HTML-форме. ";}      
            elseif($_FILES['file']['error'] == 3){return "Загружаемый файл был получен только частично.";} 
            elseif($_FILES['file']['error'] == 4){return "Файл не был загружен.";} 
            elseif($_FILES['file']['error'] != 0){return "Фаил не загружен код ошибки".$_FILES['file']['error'];}              
            elseif(false == $this->fileSize()){return "Объём загружаемого файла не должен привышать 6 мб";}
            else{return false;}    
        }
        //Фунция resize
        private function resize($size, $new_name){    
            //Если изображение .jpeg, то...
            if($this->getimagesize['2'] == 2){
                //Создаём новое изображение из .jpeg файла
                $image = imagecreatefromjpeg($_FILES['file']['tmp_name']);
            }    
            //Если изображение .png, то...
	        elseif($this->getimagesize['2'] == 3){
                //Создаём новое изображение из .png файла
                $image = imagecreatefrompng($_FILES['file']['tmp_name']);
            }		
            //Если изображение .gif, то...
	        elseif($this->getimagesize['2'] == 1){
                //Создаём новое изображение из .gif файла (из первого кадра)
                $image = imagecreatefromgif($_FILES['file']['tmp_name']);
            }      
            //Записываем в $size_1 высоту(height) в пикселах
            $size_1 = $this->getimagesize['1'];
            //Записываем в $size_0 ширину(width) в пикселах	
            $size_0 = $this->getimagesize['0'];
            //Если высота(height) больше ширины(width), то...
            if($size_1 > $size_0){    
                //Записываем в $new_size['1'] округленные значения	
                $new_size['1'] = round($size_1/$res = $size_0/$size);     
                //Записываем в $new_size['0'] переменную $size	        
                $new_size['0'] = $size;            
            }       
            //Если высота(height) меньше ширины(width), то...
            if($size_1 < $size_0 || $size_1 == $size_0){     
               //Записываем в $new_size['0'] округленные значения	       
               @$new_size['0'] = round($size_0/$res = $size_1/$size);  
               //Записываем в $new_size['1'] переменную $size
               $new_size['1'] = $size;                  
            }  
            //Создаём черное изображение заданного размера  и запиываем его в $image_new                
            $image_new = imagecreatetruecolor($size, $size);   
            //Копируем загруженное изображение в $image_new
            @imagecopyresampled($image_new, $image, 0, 0, 0, 0, $new_size['0'], $new_size['1'],  $size_0,  $size_1);
            //Создаём новое изображение
            imagejpeg($image_new, 'i/'.$new_name);
            //Удаляем изображение imagejpeg
            imagedestroy($image_new);
            //Возвращаем true
            
            return true;
        }
        //Функция upload()
        public function upload(){
            //Проверка на ошибки, если код ошибки 0 то $error = false 
         //   $result = array();      
	    $error = $this->errors();
            //Если ошибок нет, то... 
            if(false == $error){  
                
                $this->resize(100, $this->new_name);
   
               // $result = $this->id_foto;
     
            // было    return $result." <br /> Фаил успешно загружен"; 
           return "<div><img id ='i' class='' src='i/avatar_".$_SESSION['user'].".jpeg' /></div>";
           
           
           
            } 
        
            else{ 
                            
             return $error;                 
            }
        }
        //--------------------------------------------------------------------------
        public function delete(){
            unlink('i/avatar_'.$_SESSION['user'].'.jpeg');
        }
        //--------------------------------------------------------------------------
    }
    //Создаем объект класса imageUpload
    //////////$obj = new imageUpload;
    //Объявляем функцию upload()
   //////////// $result =  $obj->upload();   
    //Выводим результат
    
    
 //  echo $result;  
    //КУДАТО НАДО УБРАТЬ И ВЫВОДИТЬ ЧЕРЕЗ КОНСТАНТУ КАК ВЕЗДЕ !
?>