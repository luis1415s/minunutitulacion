<!--codigo boton paypal de opciones -->

								                                                           
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
    <!--<input type="hidden" name="cmd" value="_s-xclick">-->
<!--
    <input type="hidden" name="cmd" value="<?php echo $total; ?>" disabled="disabled">
    <table>
    <tr><td><input type="hidden" name="on0" value="NuNú Ocacional"> ¡Ya puedes pagar con Paypal! </td></tr><tr><td><select name="os0">
    <option> <label class="derecha fucsia" id="total"><?php echo "$".$_POST['total']; ?></label> </option>

    </select> </td></tr>
    </table>
    <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
    <input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
    <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
    </form> -->
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<?php $_POST['total'];
switch($total) {
									case 170:
										$tot= "3 horas";
										break;
									case 230:
										$tot= "3 y media horas";
										break;
									case 270:
										$tot= "4 horas";
										break;
									case 330:
										$tot= "4 y media horas";
										break;
									case 370:
										$tot= "5 horas";
										break;
									case 430:
										$tot= "5 y media horas";
										break;
									case 470:
										$tot= "6 horas";
										break;	
                                }				
?>
<table>

<tr><td><input type="hidden" name="on0" value="Tu paquete">Tu paquete</td></tr><tr><td><select name="os0">
	<option value="<?php echo $tot; ?>">3 horas $170.00 MXN</option>
	<option value="<?php echo $tot; ?>">3 y media horas $230.00 MXN</option>
	<option value="<?php echo $tot; ?>">4 horas $270.00 MXN</option>
	<option value="<?php echo $tot; ?>">4 horas y media $330.00 MXN</option>
	<option value="<?php echo $tot; ?>">5 horas $370.00 MXN</option>
	<option value="<?php echo $tot; ?>">5 horas y media $430.00 MXN</option>
	<option value="<?php echo $tot; ?>">6 horas y media $470.00 MXN</option>
</select> </td></tr>
</table>
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form>

   

    
    
    
    
    
    