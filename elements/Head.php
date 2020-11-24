<?php
namespace elements;

require_once 'Help.php';

/**
 *
 * @author Ortiz David
 * <br>Email: ortizaad1994@gmail.com <br>Tel: +244936166699
 * @copyright 2020
 * @name Head
 * @desc Classe Responsavel pelas componentes do cabeçalho
 * <br> Elementos: title, link, style, script
 *        
 */
class Head
{

    use Help;
    
    /**
     */
    public function __construct()
    {}
    
    
    public static function base(string $href, bool $ret=false, string $target='')
    {  
        $retorno =  "<base href='{$href}' target='{$target}' >";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    
    public static function title(string $text, bool $ret=false, array $propriedades=null)
    {
        $text = utf8_encode($text);
        $strProp = self::getStrProp($propriedades);
        $retorno = "<title {$strProp} >{$text}</title>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
      
    public static function meta(string $content, bool $ret=false, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $retorno = "<meta content='{$content}' {$strProp} >";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    
    public static function link(string $href, bool $ret=false, string $rel='stylesheet', array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $retorno = "<link rel='{$rel}' href='{$href}' {$strProp} >";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    
    public static function script(string $src, bool $ret=false, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $retorno = "<script src='{$src}' {$strProp} ></script>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    
    public static function style(bool $ret=false, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $retorno = "<style type='text/css' {$strProp} >";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    public static function endStyle(bool $ret=false)
    {
        $retorno = "</style>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    
}

