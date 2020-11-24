<?php
namespace elements;

require_once 'Help.php';

/**
 *
 * @author Ortiz David
 * <br>Email: ortizaad1994@gmail.com <br>Tel: +244936166699
 * @copyright 2020
 * @name Form
 * @desc Classe Responsavel pela Criação do Formulario e seus elementos
 * <br> Elementos: input, select, label, button, fieldset, etc
 *        
 */
class Form
{
    
    use Help;
    
    
    private $strForm = "";
    
    /**
     */
    public function __construct(string $name, string $action, string $method="POST", string $enctype="multipart/form-data", array $propriedades=null)
    {
        $this->startForm($name, $action, $method, $enctype, $propriedades);
        return $this;
    }
    
    
    private function startForm(string $name, string $action, string $method="POST", string $enctype="multipart/form-data", array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $this->strForm .= " <form name='{$name}' action='{$action}' method='{$method}' enctype='{$enctype}' {$strProp} >"; 
    }
    
    
    public function endForm()
    {
        $this->strForm .= " </form> ";
        echo $this->strForm;
    }
    
    
    public function button(string $name, string $type, $conteudo, array $propriedades=null)
    {
        $conteudo = self::getConteudo($conteudo);
        $strProp = self::getStrProp($propriedades);
        $this->strForm .= " <button type='{$type}' {$strProp} >{$conteudo}</button> ";
        return $this;
    }
    
    
    public function submit(string $name, string $conteudo, array $propriedades=null)
    {
        $conteudo = utf8_encode($conteudo);
        $strProp = self::getStrProp($propriedades);
        $this->strForm .= " <input type='submit' name='{$name}' value='{$conteudo}' {$strProp}> ";
        return $this;
    }
    
    
    public function reset(string $name, string $conteudo, array $propriedades=null)
    {
        $conteudo = utf8_encode($conteudo);
        $strProp = self::getStrProp($propriedades);
        $this->strForm .= " <input type='reset' name='{$name}' value='{$conteudo}' {$strProp}> ";
        return $this;
    }
    
    
    public function label(string $for, $conteudo, array $propriedades=null)
    {
        $conteudo = self::getConteudo($conteudo);
        $strProp = self::getStrProp($propriedades);
        $this->strForm .= " <label type='text' for='{$for}' {$strProp}> {$conteudo} </label>";
        return $this;
    }
    
    
    public function select(string $name, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $this->strForm .= " <select name='{$name}'  {$strProp} > ";
        return $this;
    }
    
    
    public function endSelect() 
    {
        $this->strForm .= " </select>";
        return $this;
    }
    
    
    public function optGroup(string $label, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $this->strForm .= " <optgroup label='{$label}' {$strProp}> ";
        return $this;
    }

    public function endOptGroup()
    {
        $this->strForm .= " </optgroup>";
    }
    
    
    public function option($value, $conteudo, array $propriedades=null)
    {
        $conteudo = self::getConteudo($conteudo);
        $strProp = self::getStrProp($propriedades);
        $this->strForm .= " <option  {$strProp} value='{$value}'>{$conteudo}</option> ";
        return $this;
    }
    
    
    public function textArea(string $name, int $cols, int $rows, array $propriedades=null, $value="")
    {
        $value = utf8_encode($value);
        $strProp = self::getStrProp($propriedades);
        $this->strForm .= " <textarea name='{$name}' cols='{$cols}' rows='{$rows}' {$strProp} >{$value}</textArea> ";
        return $this;
    }
    
    
    public function radio(string $name, string $texto, $value, array $propriedades=null)
    {
        $value = utf8_encode($value);
        $texto = utf8_encode($texto);
        $strProp = self::getStrProp($propriedades);
        $this->strForm .= " <input type='radio' name='{$name}' value='{$value}' {$strProp}> {$texto} ";
        return $this;
    }
    
    
    public function checkbox(string $name, string $texto, $value, array $propriedades=null )
    {
        $value = utf8_encode($value);
        $texto = utf8_encode($texto);
        $strProp = self::getStrProp($propriedades);
        $this->strForm .= " <input type='checkbox' name='{$name}' value='{$value}' {$strProp}> {$texto} ";
        return $this;
    }
    
    
    public function hidden(string $name, array $propriedades=null, $value="")
    {
        $value = utf8_encode($value);
        $strProp = self::getStrProp($propriedades);
        $this->strForm .= " <input type='hidden' name='{$name}' value='{$value}' {$strProp}> ";
        return $this;
    }
    
    
    public function text(string $name, array $propriedades=null, $value="")
    {
        $value =  utf8_encode($value);
        $strProp = self::getStrProp($propriedades);
        $this->strForm .= " <input type='text' name='{$name}' value='{$value}' {$strProp}> ";
        return $this;
    }
    
    
    public function search(string $name, array $propriedades=null, $value="")
    {
        $value = utf8_encode($value);
        $strProp = self::getStrProp($propriedades);
        $this->strForm .= " <input type='search' name='{$name}' value='{$value}' {$strProp}> ";
        return $this;
    }
    
    
    public function url(string $name, array $propriedades=null, $value="")
    {
        $value = utf8_encode($value);
        $strProp = self::getStrProp($propriedades);
        $this->strForm .= " <input type='url' name='{$name}' value='{$value}' {$strProp}> ";
        return $this;
    }
    
    
    public function file(string $name, array $propriedades=null, $value="")
    {
        $value = utf8_encode($value);
        $strProp = self::getStrProp($propriedades);
        $this->strForm .= " <input type='file' name='{$name}' value='{$value}' {$strProp}> ";
        return $this;
    }
    
    
    public function password(string $name, array $propriedades=null, $value="")
    {
        $value = utf8_encode($value);
        $strProp = self::getStrProp($propriedades);
        $this->strForm .= " <input type='password' name='{$name}' value='{$value}' {$strProp}> ";
        return $this;
    }
    
    
    public function email(string $name, array $propriedades=null, $value="")
    {
        $value = utf8_encode($value);
        $strProp = self::getStrProp($propriedades);
        $this->strForm .= " <input type='email' name='{$name}' value='{$value}' {$strProp}> ";
        return $this;
    }
    
    
    public function number(string $name, array $propriedades=null, $value="")
    {
        $value = utf8_encode($value);
        $strProp = self::getStrProp($propriedades);
        $this->strForm .= " <input type='number' name='{$name}' value='{$value}' {$strProp}> ";
        return $this;
    }
    
    
    public function tel(string $name, array $propriedades=null, $value="")
    {
        $value = utf8_encode($value);
        $strProp = self::getStrProp($propriedades);
        $this->strForm .= " <input type='tel' name='{$name}' value='{$value}' {$strProp}> ";
        return $this;
    }
    
    
    public function color(string $name, array $propriedades=null, $value="")
    {
        $value = utf8_encode($value);
        $strProp = self::getStrProp($propriedades);
        $this->strForm .= " <input type='color' name='{$name}' value='{$value}' {$strProp}> ";
        return $this;
    }
    
    
    public function date(string $name, array $propriedades=null, $value="")
    {
        $value = utf8_encode($value);
        $strProp = self::getStrProp($propriedades);
        $this->strForm .= " <input type='date' name='{$name}' value='{$value}' {$strProp}> ";
        return $this;
    }
    
    
    public function dateTime(string $name, array $propriedades=null, $value="")
    {
        $value = utf8_encode($value);
        $strProp = self::getStrProp($propriedades);
        $this->strForm .= " <input type='datetime' name='{$name}' value='{$value}' {$strProp}> ";
        return $this;
    }
    
    
    public function dateTimeLocal(string $name, array $propriedades=null, $value="")
    {
        $strProp = self::getStrProp($propriedades);
        $value = utf8_encode($value);
        $this->strForm .= " <input type='datetime-local' name='{$name}' value='{$value}' {$strProp}> ";
        return $this;
    }
    
    
    public function time(string $name, array $propriedades=null, $value="")
    {
        $value = utf8_encode($value);
        $strProp = self::getStrProp($propriedades);
        $this->strForm .= " <input type='time' name='{$name}' value='{$value}' {$strProp}> ";
        return $this;
    }
    
    
    public function div(array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $this->strForm .= " <div {$strProp}> ";
        return $this;
    }
    
    
    public function endDiv()
    {
        $this->strForm .= " </div> ";
        return $this;
    }
    
    
    public function fieldset(array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $this->strForm .= " <fieldset {$strProp}> ";
        return $this;
    }
    
    public function endFieldset()
    {
        $this->strForm .= " </fieldset> ";
        return $this;
    }
    
    
    public function image(string $src, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $this->strForm .= " <input type='image' src='{$src}' {$strProp}>";
        return $this;
    }
    
    
    public function Week(string $name, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $this->strForm .= " <input type='week' name='{$name}' {$strProp}>";
        return $this;
    }
    
    
    public function month(string $name, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $this->strForm .= " <input type='month' name='{$name}' {$strProp}>";
        return $this;
    }
    
    
    public function range(string $name, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $this->strForm .= " <input type='range' name='{$name}' {$strProp}>";
        return $this;
    }
    
    
    
    public function icon(string $class, array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $this->strForm .= " <i class='{$class}' {$strProp}></i>";
        return $this;
    }
    
    
    public function legend(array $propriedades=null)
    {
        $strProp = self::getStrProp($propriedades);
        $this->strForm .= " <legend {$strProp}> ";
        return $this;
    }
    
    
    public function endLegend()
    {
        $this->strForm .= " </legend> ";
        return $this;
    }
    
    
    public function writeText($conteudo)
    {
        $conteudo = self::getConteudo($conteudo);
        $this->strForm .= " {$conteudo}  ";
        return $this;
    }
    
    
    public function br(int $n=1)
    {
        $n = ($n<1 ) ? 1 : $n; 
        for ($i=0; $i<$n; $i++)
            $this->strForm .= "<br> ";
        return $this;
    }
    
    public function end(string $field)
    {
        $this->strForm .= " </{$field}> ";
        return $this;
    }
   
   
    public function getStrForm()
    {
        return $this->strForm;
    }
    
    
}

$form = new Form("form_registo", "index.php", "POST");

$form->text("ass", ['placeholder'=>'Digite O nome', 'autofocus', 'readonly'], "Algum Texto");
$form->br();
$form->select("estado[]", ['autofocus', 'multiple']);
$form->option("s01", "Casado");
$form->option("s02", "Divorciado");
$form->option("s03", "Nenhum");
$form->option("s04", "Outro");
$form->option("s05", "Viuvo");
$form->option("s06", "Solteiro");
$form->endSelect();
$form->br();
$form->checkbox("prev[]", "Listar", "prev01", ['multiple']);
$form->checkbox("prev[]", "Editar", "prev02", ['multiple']);
$form->checkbox("prev[]", "Eliminar", "prev03", ['multiple']);
$form->checkbox("prev[]", "Registar", "prev04", ['multiple']);
$form->br();
$form->radio("sexo", "Masculino", "Masculino");
$form->radio("sexo", "Feminino", "Feminino");
$form->br();
$form->submit("enviar", "Enviar");
$form->reset('limpar', "Limpar");

$form->endForm();

