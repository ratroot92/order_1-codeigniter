<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">

<!--  ----------------------------------------------------------------------  -->
<!--  NOTE: Please add the following <FORM> element to your page.             -->
<!--  ----------------------------------------------------------------------  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
jQuery(function ($) {
    var $inputs = $('input[name=mobile],input[name=phone]');
    $inputs.on('input', function () {
        // Set the required property of the other input to false if this input is not empty.
        $inputs.not(this).prop('required', !$(this).val().length);
    });
});
</script>
<script>
function removeSpaces(string) {
 return string.split(' ').join('');
}
</script>
<script type="text/javascript" src="http://ff.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=PMRWhg16Jdpa-9ErwyK2vQEbnsrJeqT2ScBlgJO6GwGFlrjHPcyt8mf1Jk37NgXTJynBnPpYopWowdSMCMfZP88i7OLbM_xU_xje35e_hGu4jQFZ1uIKvYbLB-iNAMKoHe1b5-IFX7Apm3v8GcTjdczRRxbZe4miIjWh0Biu1ZExYbDZvrHopzVY2TFEJ4jZAH0xkXdiC5i_nBkKntfGpw" charset="UTF-8"></script><style type="text/css">
body,td,th {
	font-family: Tahoma;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
</style>
	</head>
<body>
<form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">

<input type=hidden name="oid" value="00D3i000000ugPI">
<input type=hidden name="retURL" value="https://www.crownflourmills.com">

<!--  ----------------------------------------------------------------------  -->
<!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
<!--  these lines if you wish to test in debug mode.                          -->
<!--  <input type="hidden" name="debug" value=1>                              -->
<!--  <input type="hidden" name="debugEmail"                                  -->
<!--  value="christia.tawil@ei-technologies.com">                             -->
<!--  ----------------------------------------------------------------------  -->

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td><a href="http://www.crownflourmills.com"><img src="Crown mills.png" width="153" height="153" alt=""/></a></td>
    </tr>
    <tr>
      <td><img src="banner1.jpg" width="100%"  alt=""/></td>
    </tr>
  </tbody>
</table>
  <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody> <tr><td height="30">

	  <label for="salutation"><br>
	    <br>
	    Salutation</label></td></tr><tr><td><select name="salutation"  id="salutation"><option value="">--None--</option><option value="Mr.">Mr.</option>
<option value="Ms.">Ms.</option>
<option value="Mrs.">Mrs.</option>
<option value="Dr.">Dr.</option>
<option value="Prof.">Prof.</option>
		</select></td></tr><tr><td height="30">

<label for="first_name">First Name</label></td></tr><tr><td><input  id="first_name" maxlength="40" name="first_name" size="100" type="text" required/></td></tr><tr><td height="30">

<label for="last_name">Last Name</label></td></tr><tr><td><input  id="last_name" maxlength="80" name="last_name" size="100" type="text" required/></td></tr><tr><td height="30">

<label for="email">Email</label></td></tr><tr><td><input  id="email" maxlength="80" name="email" size="100" type="email" /></td></tr><tr><td height="30">

<label for="company">Company</label></td></tr><tr><td><input  id="company" maxlength="40" name="company" size="100" type="text" /></td></tr><tr><td height="30">

<label for="phone">Phone</label></td></tr><tr><td><input placeholder="format: +9611123123"  id="phone" maxlength="40" name="phone" size="100" type="tel" pattern="[+]{1}[0-9]+" onkeyup="this.value=removeSpaces(this.value);" required/></td></tr><tr><td height="30">

<label for="mobile">Mobile</label></td></tr><tr><td><input placeholder="format: +9611123123"  id="mobile" maxlength="40" name="mobile" size="100" type="tel" pattern="[+]{1}[0-9]+" onkeyup="this.value=removeSpaces(this.value);" required/></td></tr><tr><td height="30">

<label for="city">City</label></td></tr><tr><td><input  id="city" maxlength="40" name="city" size="100" type="text" /></td></tr><tr><td height="30">

<label for="state">State/Province</label></td></tr><tr><td><input  id="state" maxlength="20" name="state" size="100" type="text" /></td></tr><tr><td height="30">

<label for="street">Street</label></td></tr><tr><td><textarea name="street" cols="100"></textarea></td></tr><tr><td height="30">

<label for="country">Country</label></td></tr><tr><td><input  id="country" maxlength="40" name="country" size="100" type="text" /></td></tr><tr><td height="30" align="left">

  <label style="visibility: hidden" for="lead_source">Lead Source</label><select style="visibility: hidden" id="lead_source" name="lead_source"><option value="">--None--</option><option value="Self-Generated">Self-Generated</option>
<option value="In-bound Lead">In-bound Lead</option>
<option value="Exhibition">Exhibition</option>
<option value="Website" selected="selected" >Website</option>
<option value="Referral">Referral</option>
</select>

<input type="hidden" name="debug" value="0"> <input type="hidden" name="debugEmail" value="karam.zouhairy@ei-technologies.com">
<br>

<input type="submit" name="submit">
</td>
		</tr>
  </tbody>
</table>

</form>
</body></html>