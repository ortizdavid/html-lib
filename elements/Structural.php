<?php
namespace elements;

require_once 'Help.php';

/**
 *
 * @author Ortiz David
 * <br>Email: ortizaad1994@gmail.com <br>Tel: +244936166699
 * @copyright 2020
 * @name Strutural
 * @desc Classe Responsavel pelos elementos de Criação da estrutura da página
 * <br> Elementos: html, head, body, div, ifrmae, section, etc        
 */
class Structural
{
    
    use Help;

    /**
     */
    public function __construct()
    {}
    
    
    public static function html(bool $ret=false, string $lang='pt-Br')
    {
        $retorno = "<!DOCTYPE html><html lang='{$lang}'>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    
    public static function head(bool $ret=false, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $retorno = "<head {$strProp}>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
 
    
    public static function body(bool $ret=false, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $retorno = "<body {$strProp}>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    
    public static function main(bool $ret=false, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $retorno = "<main {$strProp}>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    
    public static function div(bool $ret=false, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $retorno = "<div {$strProp}>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    
    public static function aside(bool $ret=false, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $retorno = "<aside {$strProp}>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    public static function article(bool $ret=false, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $retorno =  "<article {$strProp}>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    public static function footer(bool $ret=false, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $retorno = "<footer {$strProp}>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    
    public static function nav(bool $ret=false, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $retorno = "<nav {$strProp}>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    
    public static function section(bool $ret=false, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $retorno = "<section {$strProp}>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    public static function iframe(string $src, bool $ret=false, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $retorno = "<iframe src='{$src}'  {$strProp}>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    
    /**
     *  TAG: <p></p>
     * */
    public static function paragraph($conteudo, bool $ret=false, array $propriedades=null)
    {
        $conteudo = self::getConteudo($conteudo);
        $strProp = self::getStrProp($propriedades);
        $retorno = "<p {$strProp} >{$conteudo}</p>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    
    
    /**
     *  TAGs: <h1></h1> ... <h6></h6>
     * */
    public static function heading(int $num, $conteudo, bool $ret=false, array $propriedades=null)
    {
        if($num < 1) $num = 1;
        if($num > 6) $num = 6;
        $conteudo = self::getConteudo($conteudo);
        $strProp = self::getStrProp($propriedades);
        $retorno = "<h{$num} {$strProp}>{$conteudo}</h$num>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    
    public static function endHtml(bool $ret=false)
    {
        $retorno = "</html>";   
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    public static function endHead(bool $ret=false)
    {
        $retorno = "</head>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    public static function endBody(bool $ret=false)
    {
        $retorno = "</body>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    public static function endMain(bool $ret=false)
    {
        $retorno = "</main>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    public static function endFooter(bool $ret=false)
    {
        $retorno = "</footer>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    public static function endNav(bool $ret=false)
    {
        $retorno = "</nav>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    public static function endSection(bool $ret=false)
    {
        $retorno = "</section>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    public static function endAside(bool $ret=false)
    {
        $retorno = "</aside>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    
    public static function endArticle(bool $ret=false)
    {
        $retorno = "</article>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    
    public static function endIframe(bool $ret=false)
    {
        $retorno = "</iframe>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    
    public static function endDiv(bool $ret=false)
    {
        $retorno = "</div>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    
    public static function hr(int $n, bool $ret=false, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        if($n < 1) $n = 1;
        for ($i=0; $i<$n; $i++)
            echo "<hr {$strProp}></hr>";
        
    }
    
    
    public static function space(int $n)
    {
        if($n < 1) $n = 1;
        for ($i=0; $i<$n; $i++)
            echo "&nbsp;";
    }
    

    public static function br(int $n)
    {
        if($n < 1) $n = 1;
        for ($i=0; $i<$n; $i++)
            echo "<br>";
    }
    
    
}


Structural::heading(1, "Olá Mundo");
