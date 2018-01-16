<?php
namespace APP\Models;

use ActiveRecord\Model;

class Model_home extends Model {
    //put your code here
    
    
      static $table_name = "tblkunden"; 
  
   
  
   

  static function listar()
   {
       $data = Model_home::all();
       return $data;
   }
   
   static function createit($data){
   
   $data = Model_home::create($data);
   
   }
   

}
