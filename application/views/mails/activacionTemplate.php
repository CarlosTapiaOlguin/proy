<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>


<body>
<table border="0" width="600" style="font-family: Arial; font-size:11px;">
    <tr>
    	<td  colspan="2" height="35px" valign="middle" style='background-color:#3b5998; width:600px; height:35px; color:#FFF ;'>
        &nbsp;&nbsp;&nbsp;&nbsp;<b style="font:Arial; font-size:18px;" >LoCambio</b>
    	</td>
    </tr>
    <tr>
    	<td  colspan="2" >
        <br />
        Hola <b><?php= $usuario ?></b>:
        <br />
     
        </td>
    </tr>
    <tr>
    
    	<td height="15" colspan="2" style="text-align:center; margin-bottom:10px">
 			<br />	
            Muchas gracias por inscribirse en LoCambio.cl para confirmar su cuenta haga clic <a href="<?php= $url ?>" style="text-decoration:none">aqu&iacute;</a>
	  </td>
  </tr>
  <tr>
	<td width="550px" style="text-align:center">
    	<br />
    	Su c&oacute;digo de activaci&oacute;n es :<b><?php= $codigo ?></b>
       <br /><br />
       Si el enlace no funciona copie y pegue esto en el navegador
       <br/>
       <?php= $url ?>
       <br />
       <br />
    </td> 
   
   
    </tr>
    <tr>
    <td  colspan="2" >
    		<hr  style=" border:1px dotted #999; border-left:none; border-bottom:none; border-right:none" />
    	</td>
    </tr>
    <tr>
    	<td style="text-align:center; color: #999" colspan="2">
    		Este correo fue generado autom&aacute;ticamente depu&eacute;s de su inscripci&oacute;n en <a href="www.locambio.cl" style="text-decoration:none" >LoCambio.cl</a>
            <br />
            Al activar su cuenta acepta los <a href="<?php= $terminos ?>" style=" text-decoration:none">T&eacute;rminos y condiciones</a>
          </td>
    	
    </tr>
</table>
</body>
</html>