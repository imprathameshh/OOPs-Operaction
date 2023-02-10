<?php 
namespace Collage_Name;

include "IT.php";
include "ME.php";

use IT_class ;
use ME_class as me;

  class Collage{

    public $Dress_Code;
    protected $Student_Count;

    function set_dresscode($dresscode){
      $this->Dress_Code = $dresscode;
    }
    function set_studentcount($studentcount){
      $this->Student_Count = $studentcount;
    }
  }

if ($_SERVER ["REQUEST_METHOD"]==="GET"){

    $it = new IT_class\IT();
    $it->name1($_GET["it_class"]);
    $it->set_dresscode($_GET["it_dress"]);    
    $it->set_studentcount($_GET["it_count"]);
    $it->it_info();

    echo "<br><br>";

    $it = new me\ME();
    $it->name1($_GET["me_class"]);
    $it->set_dresscode($_GET["me_dress"]);    
    $it->set_studentcount($_GET["me_count"]);
    $it->me_info();
  }
