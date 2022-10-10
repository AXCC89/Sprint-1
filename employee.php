
<?php
$employee = new Employee();
 
$employee->setNombre('Ana');
$employee->setApellido('Perez');
$employee->setSueldo(1000);
 
print $employee->getNombre(); 
print $employee->getApellido(); 
print $employee->getSueldo();
print $employee->Impuesto();
?>

//PHP-employee
<?php
class Employee
{
  public $nombre;
  public $apellido;
  public $sueldo;
  
  public function __construct($nombre, $apellido, $sueldo)
  {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->sueldo = $sueldo;
  //getter
  }
  public function getNombre()
  {
    return $this->nombre;
  }
 
  public function getApellido()
  {
    return $this->apellido;
  }
 
  public function getSueldo()
  {
    return $this->sueldo;
  //setter
  }
  public function setNombre($nombre)
  {
    $this->nombre = $nombre;
  }
}
public function setApellido($apellido)
{
  $this->apellido = $apellido;
}
public function setSueldo($apellido)
{
  $this->sueldo = $sueldo;
}
//general
public function Impuesto()
{
  echo ($this->sueldo ? '6000':false?'Paga impuestos':'No paga impuestos.')
}
 
?>