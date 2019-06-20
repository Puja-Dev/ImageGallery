<?php



    $fullpath=$_SERVER['DOCUMENT_ROOT']."imagegallery/viratkohli/".$_GET['name'];
    
    if($fd=fopen($fullpath,"r"))
    {
        $fsize=filesize($fullpath);
        $path_parts=pathinfo($fullpath);
        
        
        
        
        header("content-disposition:attachment;filename=\" ".$path_parts["basename"]."\"");
        header("content-length:$fsize");
        header("cache-control:private");  //by default (cache-control:private)
        
        
           
           while(!feof($fd))
           {
            
                $buffer=fread($fd,$fsize);
                echo $buffer;
           }
           
           fclose($fd);
           exit;
        
        
    }





?>