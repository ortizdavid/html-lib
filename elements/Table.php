<?php
namespace elements;

require_once 'Help.php';

/**
 *
 * @author Ortiz David
 * <br>Email: ortizaad1994@gmail.com <br>Tel: +244936166699
 * @copyright 2020
 * @name Table
 * @desc classe Responsavel pela criação da tabela e seus elementos
 * <br> Elementos: thead, tbody, tfoot, tr, td, etc
 *        
 */
class Table
{
    
    use Help;
  
    private $strTable = "";
    
    
    /**
     */
    public function __construct(int $width, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $this->strTable .= "<table width='{$width}%' {$strProp}>";
        return $this;
    }
    
    
    public function caption($conteudo, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $conteudo = self::getconteudo($conteudo);
        $this->strTable .= "<caption {$strProp} >{$conteudo}</caption>";
        return $this;
    }
    
    public function col(string $align, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $this->strTable .= "<col align='{$align}' {$strProp}>";
        return $this;
    }
    
    
    public function colGroup(int $span, string $align, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $this->strTable .= "<colgroup span='{$span}' align='{$align}' {$strProp}></colgroup>";
        return $this;
    }
    
    
    public function thead(array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $this->strTable .= " <thead {$strProp}> ";
        return $this;
    }
    
    
    public function tbody(array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $this->strTable .= " <tbody {$strProp}> ";
        return $this;
    }
    
    
    public function tr(array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $this->strTable .= " <tr {$strProp}> ";
        return $this;
    }
    
    
    public function td($conteudo, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $conteudo = self::getconteudo($conteudo);
        $this->strTable .= " <td {$strProp}>{$conteudo}</td>";
        return $this;
    }
    
    
    public function th($conteudo, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $conteudo = self::getconteudo($conteudo);
        $this->strTable .= " <th {$strProp}>{$conteudo}</th>";
        return $this;
    }
    
    
    public function tfoot(array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $this->strTable .= " <tfoot {$strProp}>";
        return $this;
    }
    
    
    public function icon(array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $this->strTable .= " <i {$strProp} > </i> ";
        return $this;
    }
    
    
    public function div(array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $this->strTable .= " <div {$strProp}> ";
        return $this;
    }
    
    
    public function anchor(string $href, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $this->strTable .= " <a href='{$href}' {$strProp}>";
        return $this;
    }
  
    public function content($conteudo)
    {
        $conteudo = self::getConteudo($conteudo);
        $this->strList .= " {$conteudo} ";
        return $this;
    }
    
    
    public function endTable()
    {
        $this->strTable .= " </table> ";
        echo $this->strTable;
    }
    
    
    public function end(string $elem)
    {
        $this->strTable .= " </{$elem}> ";
    }
    
    public function endDiv()
    {
        $this->strTable .= " </div> ";
    }
    
    
    public function endTr()
    {
        $this->strTable .= " </tr> ";
    }
    
    public function endThead()
    {
        $this->strTable .= " </thead> ";
    }
    
    public function endTbody()
    {
        $this->strTable .= " </tbody> ";
    }
    
    public function endTfoot()
    {
        $this->strTable .= " </tfoot> ";
    }
    
   
    
    public function getStrTable()
    {
        return $this->strTable;
    }
    
    
}

$table = new Table(100, ['border'=>'1']);

$table->caption("Lista de Clientes");

$table->tfoot();
$table->tr();
$table->td("Footer 1");
$table->td("Footer 2");
$table->td("Footer 3");
$table->end('tr');
$table->end('tfoot');

$table->thead();
$table->colGroup(3, 'center');
$table->tr();
$table->th("Nome");
$table->th("Sexo");
$table->th("Idade");
$table->end('tr');
$table->end('thead');

$table->tbody();
$table->tr();
$table->td("Jose");
$table->td("Masculino");
$table->td("19 anos");
$table->end('tr');
$table->tr();
$table->td("Maria");
$table->td("Feminino");
$table->td("18 anos");
$table->end('tr');
$table->tr();
$table->td("António");
$table->td("Masculino");
$table->td("78 anos");
$table->end('tr');
$table->end('tbody');


$table->endTable();
