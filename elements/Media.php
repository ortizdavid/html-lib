<?php
namespace elements;

require_once 'Help.php';

/**
 *
 * @author Ortiz David
 * <br>Email: ortizaad1994@gmail.com <br>Tel: +244936166699
 * @copyright 2020
 * @name Media
 * @desc Classe Responsavel pela Criação de Formulario e seus elementos
 * <br> Elementos: video, audio, image, figurre, svg, etc
 *        
 */
class Media
{
    
    use Help;

    
    /**
     */
    public function __construct()
    {}
    
    
    /**
     *  TAG: <img>
     * */
    public static function progress(bool $ret=false, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $retorno = "<progress {$strProp} ></progress>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    /**
     *  TAG: <img>
     * */
    public static function marquee(string $direction, $conteudo, bool $ret=false, string $behavior='', array $propriedades=null)
    {
        $conteudo = self::getConteudo($conteudo);
        $strProp = self::getStrProp($propriedades);
        $retorno = "<marquee behavior='{$behavior}' direction='{$direction}' {$strProp}>{$conteudo}</marquee>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    
    /**
     *  TAG: <img>
     * */
    public static function object(string $data, string $type, $conteudo, bool $ret=false, array $propriedades=null)
    {
        $conteudo = self::getConteudo($conteudo);
        $strProp = self::getStrProp($propriedades);
        $retorno = "<object data='{$data}' type='{$type}' {$strProp} >{$conteudo}</object>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    
    
    /**
     *  TAG: <img>
     * */
    public static function figure(bool $ret=false, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $retorno = "<figure {$strProp} >";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    
    /**
     *  TAG: <img>
     * */
    public static function svg($width, $height, string $xmlns, bool $ret=false, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $retorno =  "<svg width={$width} height={$height} xmlns='{$xmlns}' {$strProp} >";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    
    /**
     *  TAG: <img>
     * */
    public static function picture(bool $ret=false, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $retorno =  "<picture {$strProp} >";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    
    /**
     *  TAG: <img>
     * */
    public static function img(string $src, string $alt, bool $ret=false, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $retorno =  "<img src='{$src}' alt='{$alt}' {$strProp} >";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    /**
     *  TAG: <img>
     * */
    public static function video(string $src, $width, $height, bool $ret=false, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $retorno =  "<video src='{$src}' width='{$width}' heiht='{$height}' controls {$strProp} ></video>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    /**
     *  TAG: <img>
     * */
    public static function audio(string $src, bool $ret=false, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $retorno =  "<audio src='{$src}' controls {$strProp} ></audio>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    /**
     *  TAG: <img>
     * */
    public static function source(string $src, string $type, bool $ret=false, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $retorno =  "<source src='{$src}' type='{$type}' {$strProp} >";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    
    
    /**
     *  TAG: <img>
     * */
    public static function embed(string $src, string $type, bool $ret=false, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $retorno =  "<embed src='{$src}' type='{$type}' {$strProp} >";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    
    /**
     *  TAG: <i></i>
     * */
    public static function icon($conteudo='', bool $ret=false,  array $propriedades=null)
    {
        $conteudo = self::getConteudo($conteudo);
        $strProp = self::getStrProp($propriedades);
        $retorno =  "<i{$strProp} ></i>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    /**
     *  TAG: <img>
     * */
    public static function area(string $shape, string $text, bool $ret=false, array $propriedades=null)
    {
        $text = utf8_encode($text);
        $strProp = self::getStrProp($propriedades);
        $retorno =  "<area shape='{$shape}' alt='{$text}'  {$strProp} >";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    /**
     *  TAG: <img>
     * */
    public static function map(string $name, bool $ret=false, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $retorno =  "<map name='{$name}'  {$strProp} >";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    
}

