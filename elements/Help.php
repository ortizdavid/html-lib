<?php
namespace elements;
/**
 *
 * @author Ortiz David
 * <br>Email: ortizaad1994@gmail.com <br>Tel: +244936166699
 * @copyright 2020
 * @name Help
 * @desc Responsavel pelos metodos comuns nas outras classes, abrir e fechar tags
 * <br> Elementos: getProps e Conteudo
 *        
 */
trait Help
{
    
    
    public static function start(string $tag, bool $ret=false, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $retorno = "<{$tag}  {$strProp}>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    
    public static function end(string $tag, bool $ret=false)
    {
        echo "</{$tag}>";
        $retorno = "</{$tag}>";
        if($ret == false)  echo $retorno;
        if($ret == true) return $retorno;
    }
    
    
    public static function getStrProp(array $propriedades=null) : string
    {
        $strProp = "";
        if(!is_null($propriedades)){
            foreach ($propriedades as $prop => $valor)
                $strProp .= (is_int($prop)) ? " {$valor} " : " {$prop} = '$valor' ";
        }
        return $strProp;
    }
    
    
    public static function getConteudo($conteudo)
    {
        //$conteudo = (is_string($conteudo)) ? utf8_encode($conteudo) : $conteudo;
        $conteudo = (is_string($conteudo)) ? $conteudo : $conteudo;
        return $conteudo;
    }
    
    
}

