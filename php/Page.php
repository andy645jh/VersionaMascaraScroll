<?php
    class Page{

        public $header = ''; 

        public function _construct(){
            echo "hola";
        }

        public function addHeader($lang,$charset,$title){
            $this->header = "<!DOCTYPE html>
            <html lang='$lang'>
                <head><meta charset='$charset' />
                    <title>$title</title>
             </head>
             <body> </body></html>";
        }

        public function display(){
            echo $this->header ;
        }
    }
    
?>