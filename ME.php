<?php
namespace ME_class;
use Collage_Name\Collage;

class ME extends Collage {
  private $name;

  function name1($name){
    $this->name = $name;
  }
  public function me_info(){
    echo "Class {$this->name} branch have a dress code {$this->Dress_Code} in which total no of student is {$this->Student_Count}";
}
}

?>