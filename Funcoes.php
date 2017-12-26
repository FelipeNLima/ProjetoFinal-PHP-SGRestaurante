<?php

class funcoes {
    
    public function TratarCaracter($vlr, $tipo) {
        switch ($tipo)
        {
            case 1: $rst = utf8_decode($vlr);                break;
            case 2: $rst = htmlentities($vlr, ENT_QUOTES, "ISO-8859-1");                break;
            
        }
        return $rst;
    }
    
    public function DataAtual($tipo) {
        switch ($tipo){
            case 1: $rst = date("Y-m-d"); break;
            case 2: $rst = date("Y-m-d H:i:s"); break;
            case 3: $rst = date("d/m/Y"); break;
        }
        return $rst;
    }
}
