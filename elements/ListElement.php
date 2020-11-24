<?php
namespace elements;

require_once 'Help.php';

/**
 *
 * @author Ortiz David
 * <br>Email: ortizaad1994@gmail.com <br>Tel: +244936166699
 * @copyright 2020
 * @name ListElement
 * @desc Classe Responsavel pela Criação de Listas e seus elementos
 * <br> Elementos: ul, ol, dl, dt, li, etc
 *        
 */
class ListElement
{

    use Help;
    
    private $strList = "";
    private $type;
    private $current;
    
    
    /**
     */
    public function __construct(string $type='ul', array $propriedades=null)
    {   
        $this->startList($type, $propriedades);
        return $this;
    }
    
    
    private function startList(string $type='ul', array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $this->type = $type;
        $this->strList .= " <{$this->type} {$strProp} >";
    }
    
    
    public function endList()
    {
        $this->strList .= " </{$this->type}> ";
        echo $this->strList;
    }
    
    
    public function ul(array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $this->strList .= " <ul {$strProp}> ";
        return $this;
    }
    
    
    public function ol(array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $this->strList .= " <ol {$strProp}> ";
        return $this;
    }
  
    
    public function li(array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $this->strList .= " <li {$strProp}> ";
        return $this;
    }
    
    
    
    public function icon(array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $this->strList .= " <i {$strProp} > </i> ";
        return $this;
    }
    
    
    public function div(array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $this->strList .= " <div {$strProp} > ";
        return $this;
    }
    
    
    public function anchor(string $href, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $this->strList .= " <a href='{$href}' {$strProp} >";
        return $this;
    }
    
    
    public function content($conteudo)
    {
        $conteudo = self::getConteudo($conteudo);
        $this->strList .= " {$conteudo} ";
        return $this;
    }
    
    
    public function dt(array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $this->strList .= " <dt {$strProp} > ";
        return $this;
    }
    
    
    public function dd(array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $this->strList .= " <dd {$strProp} > ";
        return $this;
    }
    
    
    public function dl(array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $this->strList .= " <dl {$strProp} > ";
        return $this;
    }
    
    
    public function end(string $elem)
    {
        $this->strList .= " </{$elem}> ";
        return $this;
    }
    
    
    public function endUl()
    {
        $this->strList .= " </ul> ";
        return $this;
    }
    
    public function endOl()
    {
        $this->strList .= " </ol> ";
        return $this;
    }
    
    public function endDl()
    {
        $this->strList .= " </dl> ";
        return $this;
    }
    
    public function endDt()
    {
        $this->strList .= " </dt> ";
        return $this;
    }
    
    public function endDd()
    {
        $this->strList .= " </dd> ";
        return $this;
    }
    
    public function endDiv()
    {
        $this->strList .= " </div> ";
        return $this;
    }
    
    public function endLi()
    {
        $this->strList .= " </li> ";
        return $this;
    }
    
    public function getStrList()
    {
        return $this->strList;
    }
    
    
}


/*
$l= new ListElement();

$l->li();
$l->anchor('clientes.php')->content('Nossos Clientes')->end('a');
$l->end('li');
$l->li();
$l->anchor('index.php')->content('Ir Para o Índice')->end('a');
$l->end('li');
$l->li();
$l->anchor('contactos.php')->icon(['class'=>'phone icon'])->content('Nossos Contactos')->end('a');
$l->end('li');

$l->ol();
$l->li()->content('OUTRA 1')->end('li');
$l->li()->content('OUTRA 2')->end('li');
$l->li()->content('OUTRA 3')->end('li');
$l->end('ol');

$l->endList();
*/


$l1 = new ListElement('dl');
$l1->dd()->content('Item Direita 1')->end('dd');
$l1->dd()->content('Item Direita 2')->end('dd');
$l1->dt()->content('Item Esquerda 1')->end('dt');
$l1->dt()->content('Item Esquerda 2')->end('dt');
$l1->endList();




