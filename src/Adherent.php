<?php
declare(strict_types=1);

namespace Tests\src;

class Adherent {

    private $identifiant;


    public function __construct(string $nom, string $prenom, string $dateNaissance){
        $modification = $this->concatenation($nom, $prenom, $dateNaissance);
        $modification = $this->suppressionAccent($modification);
        $modification = $this->capitalisation($modification);        
        $this->setIdentifiant($modification);
    }

    public function getIdentifiant(){
        return $this->identifiant;
    }

    public function setIdentifiant($string){
        $this->identifiant = $string;
    }


    public function concatenation(string $nom, string $prenom, string $dateNaissance): string
    {
        return $nom." ".$prenom." ".$dateNaissance;
    }

    public function suppressionAccent($str, $charset='utf-8' ) : string {
        $unwanted_array = array('Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
        'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
        'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
        'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
        'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y' );
        $str = strtr( $str, $unwanted_array );
        return $str;
    }

    public function capitalisation($str){
        return  strtolower($str);
    }
    
}
