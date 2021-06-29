<?php
    function est_vide($val){
        //$val==null equivalent a is_null($val)
        return empty($val);
    }
    function est_numerique($val){
        return is_numeric($val);
    }

    function est_email($val){
        return filter_var($val, FILTER_VALIDATE);
    }
    
     
    function valide_email($val,array &$array_error,string $key,$sms="Ce champ est obligatoire"){
        if(est_vide($val)){
            $array_error[$key]=$sms;
        }elseif(!est_numerique($val)){
            $array_error[$key]="Le nombre doit etre un numerique";
        }
    }







    function valide_number($val,array &$array_error,string $key,$sms="Ce champ est obligatoire"){
        if(est_vide($val)){
            $array_error[$key]=$sms;
        }elseif(!est_numerique($val)){
            $array_error[$key]="Le nombre doit etre un numerique";
        }
    }
    function valide_form(array $array_error):bool{
        return count($array_error)==0;
    }



?>