<?php
namespace IT_class;
use Collage_Name\Collage;

class IT extends Collage {
  private $name;

  function name1($name){
    $this->name = $name;
  }
  public function it_info(){
    echo "Class {$this->name} branch have a dress code {$this->Dress_Code} in which total no of student is {$this->Student_Count}";
}
}

?>