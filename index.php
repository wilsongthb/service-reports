<?php
/**
 * Author: Wilson Pilco Nuñez
 * Email: wilsonaux1@gmail.com
 * PHP Version: 7.4
 * Created at: 2023-10-07 16:29
 */

include "vendor/autoload.php";

use PhpOffice\PhpWord\TemplateProcessor;

$templateProcessor = new TemplateProcessor('storage/4-6-modelo-de-carta-de-solicitud-de-permiso_43.docx');
$templateProcessor->setValues([
  'nombreapellido' => 'Danilo palomino',
  'direccion' => 'Av Canarias 555',
  'telefono' => '+1 666 2213 31',
  'correoelectronico' => 'sssggrr@mgaail.com',
  'ciudad' => 'Puerto Madero',
  'fecha' => '15 de Octubre del 2018',
]);
$templateProcessor->saveAs('storage/salida.docx');
