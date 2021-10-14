<?php
namespace utils;

class ClassLoader extends AbstractClassLoader{      

        public function __construct($file_root){
                parent::__construct($file_root);
        }

        public function getFilename(string $classname): string{
            $result="";
            $result = str_replace("\\",DIRECTORY_SEPARATOR,$classname);
            $result = $result.".php";
            return $result;
        }

        public function makePath(string $filename): string{
            return $this->prefix.DIRECTORY_SEPARATOR.$filename;
        }

        public function loadClass(string $classname){
           $var = $this->getFilename($classname) ;
           $full_path=$this->makePath($var);

           if(file_exists($full_path)){
               require_once $full_path;
           }
        }
    }