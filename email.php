<?php

 if(!empty($_POST['nombre']) AND !empty($_POST['email']) AND !empty($_POST['asunto'])){
  $to ="info@decohogarmultiservicios.cl";
  $headers = "Content-Type: text/html; charset=iso-8859-1\n";
  $headers .= "From:".$_POST['nombre']."\r\n";
  $tema="Contacto desde el Sitio Web decohogarmultiservicios.cl";
  $mensaje="
  <table border='0' cellspacing='2' cellpadding='2'>
    <tr>
      <td width='20%' align='center' bgcolor='#FFFFCC'><strong>Nombre:</strong></td>
      <td width='80%' align='left'>$_POST[nombre]</td>
    </tr>
    <tr>
      <td align='center' bgcolor='#FFFFCC'><strong>E-mail:</strong></td>
      <td align='left'>$_POST[email]</td>
    </tr>
    <tr>
      <td width='20%' align='center' bgcolor='#FFFFCC'><strong>telefono</strong></td>
      <td width='80%' align='left'>$_POST[asunto]</td>
    </tr>
    <tr>
      <td align='center' bgcolor='#FFFFCC'><strong>Comentario:</strong></td>
      <td align='left'>$_POST[mensaje]</td>
    </tr>
  </table>
  ";
  @mail($to,$tema,$mensaje,$headers);
  echo "su mensaje ha sido enviado exitosamente, gracias por contactarnos <a href=\"http://www.decohogarmultiservicios.cl\">Volver.</a> ";
} else {
	 echo "no se pudo enviar el mensaje";
}

?>