<?php
namespace elements;

require_once 'Help.php';

/**
 *
 * @author Ortiz David
 * <br>Email: ortizaad1994@gmail.com <br>Tel: +244936166699
 * @copyright 2020
 * @name TextFormat
 * @desc Classe Responsavel Pela formatacao de texto
 * <br> Elementos: bold, italic, span, strong, etc
 *        
 */
class TextFormat
{
    
    use Help;
    
    
    /**
     *  TAG: <img>
     * */
    public static function details(string $title, $conteudo, bool $ret=false, array $propriedades=null)
    {
        $conteudo = self::getConteudo($conteudo);
        $strProp = self::getStrProp($propriedades);
        //$title = utf8_encode($title);
        $retorno = "<details {$strProp} > <summary>{$title}</summary> {$conteudo} </details>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    
    /**
     *  TAG: <img>
     * */
    public static function mark($conteudo, bool $ret=false, array $propriedades=null)
    {
        $conteudo = self::getConteudo($conteudo);
        $strProp = self::getStrProp($propriedades);
        $retorno = "<mark {$strProp} >{$conteudo}</mark>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    
    /**
     *  TAG: <a></a>
     * */
    public static function anchor($conteudo, string $href, string $target='_self', bool $ret=false, array $propriedades=null)
    {
        $conteudo = self::getConteudo($conteudo);
        $strProp = self::getStrProp($propriedades);
        $retorno = "<a href='{$href}' {$strProp} >{$conteudo}</a>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    
    /**
     *  TAG: <a></a>
     * */
    public static function acronym(string $title, string $text, bool $ret=false, array $propriedades=null)
    {
        //$text = utf8_encode($text);
        $strProp = self::getStrProp($propriedades);
        $retorno = "<acronym title='{$title}' {$strProp} >{$text}</acronym>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    
    /**
     *  TAG: <strong></strong>
     * */
    public static function strong($conteudo, bool $ret=false, array $propriedades=null)
    {
        $conteudo = self::getConteudo($conteudo);
        $strProp = self::getStrProp($propriedades);
        $retorno =   "<strong {$strProp}>{$conteudo}</strong>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    /**
     *  TAG: <b></b>
     * */
    public static function bold($conteudo, bool $ret=false, array $propriedades=null)
    {
        $conteudo = self::getConteudo($conteudo);
        $strProp = self::getStrProp($propriedades);
        $retorno =   "<b {$strProp}>{$conteudo}</b>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    /**
     *  TAG: <big></big>
     * */
    public static function big($conteudo, bool $ret=false, array $propriedades=null)
    {
        $conteudo = self::getConteudo($conteudo);
        $strProp = self::getStrProp($propriedades);
        $retorno =   "<big {$strProp}>{$conteudo}</big>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    /**
     *  TAG: <small></small>
     * */
    public static function small($conteudo, bool $ret=false, array $propriedades=null)
    {
        $conteudo = self::getConteudo($conteudo);
        $strProp = self::getStrProp($propriedades);
        $retorno =   "<small {$strProp}>{$conteudo}</small>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    /**
     *  TAG: <i></i>
     * */
    public static function italic($conteudo, bool $ret=false, array $propriedades=null)
    {
        $conteudo = self::getConteudo($conteudo);
        $strProp = self::getStrProp($propriedades);
        $retorno =   "<i {$strProp}>{$conteudo}</i>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    /**
     *  TAG: <blockquote></blockquote>
     * */
    public static function blockquote($conteudo, bool $ret=false, array $propriedades=null)
    {
        $conteudo = self::getConteudo($conteudo);
        $strProp = self::getStrProp($propriedades);
        $retorno =   "<blockquote {$strProp}>{$conteudo}</blockquote>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    /**
     *  TAG: <cite></cite>
     * */
    public static function cite($conteudo, bool $ret=false, array $propriedades=null)
    {
        $conteudo = self::getConteudo($conteudo);
        $strProp = self::getStrProp($propriedades);
        $retorno =   "<cite {$strProp}>{$conteudo}</cite>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    /**
     *  TAG: <code></code>
     * */
    public static function code($conteudo, bool $ret=false, array $propriedades=null)
    {
        $conteudo = self::getConteudo($conteudo);
        $strProp = self::getStrProp($propriedades);
        $retorno =   "<code {$strProp}>{$conteudo}</code>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    /**
     *  TAG: <del></del>
     * */
    public static function del($conteudo, bool $ret=false, array $propriedades=null)
    {
        $conteudo = self::getConteudo($conteudo);
        $strProp = self::getStrProp($propriedades);
        $retorno =   "<del {$strProp}>{$conteudo}</del>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    /**
     *  TAG: <ins></ins>
     * */
    public static function ins($conteudo, bool $ret=false, array $propriedades=null)
    {
        $conteudo = self::getConteudo($conteudo);
        $strProp = self::getStrProp($propriedades);
        $retorno =   "<ins {$strProp}>{$conteudo}</ins>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    /**
     *  TAG: <dfn></dfn>
     * */
    public static function dfn($conteudo, bool $ret=false, array $propriedades=null)
    {
        $conteudo = self::getConteudo($conteudo);
        $strProp = self::getStrProp($propriedades);
        $retorno =   "<dfn {$strProp}>{$conteudo}</dfn>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    /**
     *  TAG: <em></em>
     * */
    public static function em($conteudo, bool $ret=false, array $propriedades=null)
    {
        $conteudo = self::getConteudo($conteudo);
        $strProp = self::getStrProp($propriedades);
        $retorno =   "<em {$strProp}>{$conteudo}</em>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    /**
     *  TAG: <var></var>
     * */
    public static function var($conteudo, bool $ret=false, array $propriedades=null)
    {
        $conteudo = self::getConteudo($conteudo);
        $strProp = self::getStrProp($propriedades);
        $retorno =   "<var {$strProp}>{$conteudo}</var>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    /**
     *  TAG: <address></address>
     * */
    public static function address($conteudo, bool $ret=false, array $propriedades=null)
    {
        $conteudo = self::getConteudo($conteudo);
        $strProp = self::getStrProp($propriedades);
        $retorno =   "<address {$strProp}>{$conteudo}</address>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    /**
     * Muda a direcção do texto, direita para esquerda e vice-versa
     * direcções: rtl e ltr
     * /**
     *  TAG: <bdo></bdo>
     * */
    public static function bdo($conteudo, string $dir="rtl",  bool $ret=false, array $propriedades=null)
    {
        $conteudo = self::getConteudo($conteudo);
        $strProp = "";
        $strProp = self::getStrProp($propriedades);
        $retorno =   "<bdo dir='{$dir}' '{$strProp} > {$conteudo} </bdo>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    /**
     *  TAG: <kbd></kbd>
     * */
    public static function kbd($conteudo, bool $ret=false, array $propriedades=null)
    {
        $conteudo = self::getConteudo($conteudo);
        $strProp = self::getStrProp($propriedades);
        $retorno =   "<kbd {$strProp}>{$conteudo}</kbd>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    /**
     *  TAG: <pre></pre>
     * */
    public static function pre($conteudo, bool $ret=false, array $propriedades=null)
    {
        $conteudo = self::getConteudo($conteudo);
        $strProp = self::getStrProp($propriedades);
        $retorno =   "<pre {$strProp}>{$conteudo}</pre>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    /**
     *  TAG: <q></q>
     * */
    public static function quot($conteudo, bool $ret=false, array $propriedades=null)
    {
        $conteudo = self::getConteudo($conteudo);
        $strProp = self::getStrProp($propriedades);
        $retorno =   "<q {$strProp}>{$conteudo}</q>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    /**
     *  TAG: <samp></samp>
     * */
    public static function samp($conteudo, bool $ret=false, array $propriedades=null)
    {
        $conteudo = self::getConteudo($conteudo);
        $strProp = self::getStrProp($propriedades);
        $retorno =   "<samp {$strProp}>{$conteudo}</samp>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    /**
     *  TAG: <span></span>
     * */
    public static function span($conteudo, bool $ret=false, array $propriedades=null)
    {
        $conteudo = self::getConteudo($conteudo);
        $strProp = self::getStrProp($propriedades);
        $retorno =   "<span {$strProp}>{$conteudo}</span>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    /**
     *  TAG: <sub></sub>
     * */
    public static function sub($conteudo, bool $ret=false, array $propriedades=null)
    {
        $conteudo = self::getConteudo($conteudo);
        $strProp = self::getStrProp($propriedades);
        $retorno =   "<sub {$strProp}>{$conteudo}</sub>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    /**
     *  TAG: <sup></sup>
     * */
    public static function sup($conteudo, bool $ret=false, array $propriedades=null)
    {
        $conteudo = self::getConteudo($conteudo);
        $strProp = self::getStrProp($propriedades);
        $retorno =   "<sup {$strProp}>{$conteudo}</sup>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    /**
     *  TAG: <tt></tt>
     * */
    public static function tt($conteudo, bool $ret=false, array $propriedades=null)
    {
        $conteudo = self::getConteudo($conteudo);
        $strProp = self::getStrProp($propriedades);
        $retorno =   "<tt {$strProp}>{$conteudo}</tt>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    
    public static function abbr(string $_abbr, string $title, bool $ret=false, array $propriedades=null)
    {
        //$title = utf8_encode($title);
        //$conteudo = utf8_encode($_abbr);
        $conteudo = $_abbr;
        $strProp = self::getStrProp($propriedades);
        $retorno =   "<abbr title='{$title}' {$strProp}>{$conteudo}</abbr>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    
    public static function noscript(string $text, bool $ret=false, array $propriedades=null)
    {
        //$text = utf8_encode($text);
        $strProp = self::getStrProp($propriedades);
        $retorno =   "<noscript {$strProp} >{$text}</noscript>";
        if($ret == false)   echo $retorno;
        if($ret == true) return $retorno;
    }
    
    
}

TextFormat::details('Título', "Decsriçãoo, Toda a descrição está aqui");
