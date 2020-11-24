<?php
namespace symbols;

require_once 'MathSymbol.php';
require_once 'GreekSymbol.php';
require_once 'OtherSymbol.php';
require_once 'ISO88591Symbol.php';


/**
 * @author Ortiz David
 * <br>Email: ortizaad1994@gmail.com <br>Tel: +244936166699
 * @copyright 2020
 * @name Symbol
 * @desc Contém todos os simbolos: Matematicos, Gregos e Outros      
 */
class Symbol implements OtherSymbol, MathSymbol, GreekSymbol, ISO88591Symbol
{  
    
    public function __construct(){}
    
}




