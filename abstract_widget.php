<?php

interface Observer {
  public function update(Observable $subject);
}


abstract class Widget implements Observer {

  protected $internalData = array();

  abstract public function draw();

  public function update(Observable $subject) {
         $this->internalData = $subject->getData();
  }
}


class BasicWidget extends Widget {

  function __construct() {
  }

  public function draw() {
         $html = "<table border=1 width=130>";
         $html .= "<tr><td colspan=3 bgcolor=#cccccc>
                        <b>Instrument Info<b></td></tr>";

         $numRecords = count($this->internalData[0]);
         for($i = 0; $i < $numRecords; $i++) {
                $instms = $this->internalData[0];
                $prices = $this->internalData[1];
                $years =  $this->internalData[2];
                $html .=  "<tr><td>$instms[$i]</td><td> $prices[$i]</td>
                           <td>$years[$i]</td></tr>";
                }
         $html .= "</table><br>";
         echo $html;
  }
}


class FancyWidget extends Widget {
  
  function __construct() {
  }
  
  public function draw() {
         $html = 
         "<table border=0 cellpadding=5 width=270 bgcolor=#6699BB>
                <tr><td colspan=3 bgcolor=#cccccc>
                <b><span class=blue>Our Latest Prices<span><b>
                </td></tr>
                <tr><td><b>instrument</b></td>
                <td><b>price</b></td><td><b>date issued</b>
                </td></tr>";
         
         $numRecords = count($this->internalData[0]);
         for($i = 0; $i < $numRecords; $i++) {
                $instms = $this->internalData[0];
                $prices = $this->internalData[1];
                $years =  $this->internalData[2];
                
                $html .= 
                "<tr><td>$instms[$i]</td><td> 
                        $prices[$i]</td><td>$years[$i]
                        </td></tr>";
                }
         $html .= "</table><br>";
         echo $html;
  }
}

//Model 2

class BasicWidgetRichard extends Widget {

  function __construct() {
  }

  public function draw() {
         $html = "<table border=1 width=130>";
         $html .= "<tr><td colspan=5 bgcolor=#44BF94>
                        <b>Alumnos Info<b></td></tr>";

         $numRecords = count($this->internalData[0]);
         for($i = 0; $i < $numRecords; $i++) {
                $nombre = $this->internalData[0];
                $apellidos = $this->internalData[1];
                $fechaNacimiento =  $this->internalData[2];
                $curso =  $this->internalData[3];
                $telefono =  $this->internalData[4];
                $html .= 
                "<tr><td>$nombre[$i]</td>
                <td>$apellidos[$i]</td>
                <td>$fechaNacimiento[$i]</td>
                <td>$curso[$i]</td>
                <td>$telefono[$i]</td>
                </tr>";
                }
         $html .= "</table><br>";
         echo $html;
  }
}


class FancyWidgetRichard extends Widget {
  
  function __construct() {
  }
  
  public function draw() {
         $html = 
         "<table border=0 cellpadding=5 width=270 bgcolor=#EDFF6E>
                <tr><td colspan=5 bgcolor=#D17354>
                <b><span class=blue>Lista Alumnos: <span><b>
                </td></tr>
                <tr>
                <td><b>Nombre</b></td>
                <td><b>Apellidos</b></td>
                <td><b>Fecha de Nacimiento</b></td>
                <td><b>Curso</b></td>
                <td><b>Telefono</b></td>
                </tr>";
         
         $numRecords = count($this->internalData[0]);
         for($i = 0; $i < $numRecords; $i++) {
                $nombre = $this->internalData[0];
                $apellidos = $this->internalData[1];
                $fechaNacimiento =  $this->internalData[2];
                $curso =  $this->internalData[3];
                $telefono =  $this->internalData[4];
                
                $html .= 
                "<tr><td>$nombre[$i]</td>
                <td>$apellidos[$i]</td>
                <td>$fechaNacimiento[$i]</td>
                <td>$curso[$i]</td>
                <td>$telefono[$i]</td>
                </tr>";
                }
         $html .= "</table><br>";
         echo $html;
  }
}

?>
