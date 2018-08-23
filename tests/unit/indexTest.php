<?php
include "index.php";
class indexTest extends \PHPUnit\Framework\TestCase{

   public function testtexteenbold (){
    $strUtils = new strUtils('salut'); 
    $strUtils->bold();
    $this->assertEquals('<strong>salut</strong>', $strUtils->getStr());
   } 

   public function testtexteenitalique (){
       $strUtils = new strUtils('Bonjour');
       $strUtils->italic();
       $this->assertEquals('<i>Bonjour</i>',$strUtils->getStr());
   }

   public function testtextesouligne (){
       $strUtils = new strUtils('Hello');
       $strUtils->underline();
       $this->assertEquals('<u>Hello</u>',$strUtils->getStr());
   }

   public function testencapitale (){
       $strUtils = new strUtils('Coucou');
       $strUtils -> capitalize();
       $this->assertEquals('COUCOU',$strUtils->getStr());
   }

   public function testbolditaliquesouligne (){
       $strUtils = new strUtils('Tcho');
       $strUtils -> uglify();
       $this->assertEquals('<u><i><strong>Tcho</strong></i></u>',$strUtils->getStr());
   }
}

?>