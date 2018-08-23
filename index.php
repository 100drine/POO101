<?php
class strUtils{
    private $_str;
    public function __construct($Salut){
    $this->_str = $Salut;
    }
    public function getStr(){
        return $this->_str;
    }
    public function bold(){
        $this->_str = "<strong>" . $this->_str . "</strong>";
    }
    public function italic(){
        $this->_str = '<i>'. $this->_str . "</i>";
    }
    public function underline(){
        $this->_str ='<u>'. $this->_str . "</u>";
    }
    public function capitalize(){
        $this->_str = strtoupper($this->_str);
        
    }
    public function uglify(){
        $this->bold();
        $this->italic();
        $this->underline();
    }

}


$monobj = new strUtils('Mon texte en gras');
$monobj->bold();
echo $monobj-> getStr();
$obj2 = new strUtils('Mon texte en italique');
$obj2->italic();
echo $obj2-> getStr();
$obj3 = new strUtils('Mon texte souligné');
$obj3->underline();
echo $obj3-> getStr();
$obj4 = new strUtils ('Mon texte en majuscules');
$obj4->capitalize();
echo $obj4->getStr();
$obj5 = new strUtils ('Mon texte en unglify');
$obj5->uglify();
echo $obj5->getStr();

?>