<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8"><script src="https://www.methodintegration.com/MethodWebForms/Javascript/formValidation.js" type="text/javascript"></script>
<script type="text/javascript">
window.onload = function() {
	var today = new Date();
	var dd = today.getDate();
	var mm = today.getMonth()+1; //January is 0!
	var yyyy = today.getFullYear();
	 if(dd<10){
			dd='0'+dd
		} 
		if(mm<10){
			mm='0'+mm
		} 

	today = yyyy+'-'+mm+'-'+dd;
	document.getElementById("RMASignedOn_Step2").setAttribute("max", today);
	document.getElementById("RMAInvoiceDate_Step2").setAttribute("max", today);
};
</script>
<script type="text/javascript">
function isNumber(n) { return /^-?[\d.]+(?:e-?\d+)?$/.test(n); }
function validateForm(){
 if (validate_required("Name_Step2","vld_Name_Step2","Please enter your name")==false)
{document.getElementById("Name_Step2").focus();return false;}
 if (validate_required("RMACompany_Step2","vld_RMACompany_Step2","Please enter company name")==false)
{document.getElementById("RMACompany_Step2").focus();return false;}
 if (validate_required("Email_Step2","vld_Email_Step2","Please enter email address")==false)
{document.getElementById("Email_Step2").focus();return false;}
 if (validate_required("RMAPhone_Step2","vld_RMAPhone_Step2","Please enter phone number")==false)
{document.getElementById("RMAPhone_Step2").focus();return false;}
 if (validate_required("Address_Step2","vld_Address_Step2","Please enter address")==false)
{document.getElementById("Address_Step2").focus();return false;}
 if (validate_required("City_Step2","vld_City_Step2","Please enter city name")==false)
{document.getElementById("City_Step2").focus();return false;}
 if (validate_required("PostalCode_Step2","vld_PostalCode_Step2","Please enter postal code")==false)
{document.getElementById("PostalCode_Step2").focus();return false;}
 if (validate_required("StateProvince_Step2","vld_StateProvince_Step2","Please enter state/province name")==false)
{document.getElementById("StateProvince_Step2").focus();return false;}
 if (validate_required("Country_Step2","vld_Country_Step2","Please select country name")==false)
{document.getElementById("Country_Step2").focus();return false;}
 if (validate_required("RMAReason_Step2","vld_RMAReason_Step2","Please select a reason for RMA")==false)
{document.getElementById("RMAReason_Step2").focus();return false;}
 if (validate_required("RMASignedBy_Step2","vld_RMASignedBy_Step2","Please enter full name")==false)
{document.getElementById("RMASignedBy_Step2").focus();return false;}
 if (validate_required("RMASignedOn_Step2","vld_RMASignedOn_Step2","Please enter today's date")==false)
{document.getElementById("RMASignedOn_Step2").focus();return false;}
 if (validate_required("RMAInvoiceDate_Step2","vld_RMAInvoiceDate_Step2","Please enter invoice date")==false)
{document.getElementById("RMAInvoiceDate_Step2").focus();return false;}
 if (validate_required("RMAInvoiceNumber_Step2","vld_RMAInvoiceNumber_Step2","Please enter invoice number")==false)
{document.getElementById("RMAInvoiceNumber_Step2").focus();return false;}

if(!isNumber(document.getElementById("RMAQtyOne_Step2").value)){
	document.getElementById("RMAQtyOne_Step2_validate").innerHTML = "<br>Must be a number";
	document.getElementById("RMAQtyOne_Step2_validate").focus();
	return false;
} else document.getElementById("RMAQtyOne_Step2_validate").innerHTML = "";

if(!isNumber(document.getElementById("RMAQtyTwo_Step2").value)){
	document.getElementById("RMAQtyTwo_Step2_validate").innerHTML = "<br>Must be a number";
	document.getElementById("RMAQtyOne_Step2_validate").focus();
	return false;
} else document.getElementById("RMAQtyTwo_Step2_validate").innerHTML = "";

if(!isNumber(document.getElementById("RMAQtyThree_Step2").value)){
	document.getElementById("RMAQtyThree_Step2_validate").innerHTML = "<br>Must be a number";
	document.getElementById("RMAQtyOne_Step2_validate").focus();
	return false;
} else document.getElementById("RMAQtyThree_Step2_validate").innerHTML = "";

if(!isNumber(document.getElementById("RMAQtyFour_Step2").value)){
	document.getElementById("RMAQtyFour_Step2_validate").innerHTML = "<br>Must be a number";
	document.getElementById("RMAQtyOne_Step2_validate").focus();
	return false;
} else document.getElementById("RMAQtyFour_Step2_validate").innerHTML = "";

if(!isNumber(document.getElementById("RMAQtyFour_Step2").value)){
	document.getElementById("RMAQtyFour_Step2_validate").innerHTML = "<br>Must be a number";
	document.getElementById("RMAQtyOne_Step2_validate").focus();
	return false;
} else document.getElementById("RMAQtyFour_Step2_validate").innerHTML = "";

if(!isNumber(document.getElementById("RMAInvoiceNumber_Step2").value)){
	document.getElementById("vld_RMAInvoiceNumber_Step2").innerHTML = "Must be a number";
	document.getElementById("RMAInvoiceNumber_Step2").focus();
	return false;
} else document.getElementById("RMAInvoiceNumber_Step2").innerHTML = "";

}
</script>
<p>At Avenview, we pride ourselves on providing affordable, high-quality products to distributors and retailers&nbsp;in order to use the latest in AV innovations to attract and entertain customers. However, in the event that a product is damaged, not delivered in the best condition or does not meet the expectations of a client, we do provide a limited warranty that will allow the return of the item.</p>
<p><strong>Limited Warranty</strong></p>
<p>AVENVIEW CORP. ("Avenview") warrants its products for 3 years to be free from defects in material or workmanship.</p>
<ol>
<li><strong>RETURN</strong>
<p>All returns within 30 Days are subject to a restocking fee of 30% percent of the original price. All Custom Items such as video wall controllers and cables are not subject to return. Customers looking to return a product must contact Avenview support department for a Return Authorization number. Customers may send it back returns to Avenview, However, our return policy covers items for 30 days after they are shipped. Avenview will not issue a refund for any orders after 30 days from shipment date. Customers seeking a refund must return the product in its original package within that 30-day period.</p>
</li>
<li><strong>LABOR.&nbsp;&nbsp;</strong>
<p>For a period of three years from the date of purchase, if a product is determined to be defective, Avenview will repair or replace the product, at its option, at no charge. After this warranty period, you must pay for all labor charges.&nbsp;</p>
</li>
<li><strong>PARTS</strong>
<p>In addition, Avenview will supply, at no charge, new or rebuilt replacements in exchange for defective parts for a period of three years. After the warranty period, you must pay for all parts costs.<br />Avenview's warranty covers products that have been deemed defective and do no work properly. However, some actions - particularly unauthorized use - will result in this warranty becoming void. Additionally, circumstances under which the malfunctions occur must fall under certain conditions. The instances that are not covered by the warranty are constituted by - but are not limited to - the following:</p>
<ul type="disc">
<li>Cosmetic damage</li>
<li>Damage from&nbsp;acts of God, accident, misuse, abuse or negligence</li>
<li>Modification of or to any part of the product</li>
<li>Improper installation</li>
<li>Loss of use of the product or wasted programming charges due to product malfunction</li>
<li>Damage due to improper operation or maintenance</li>
<li>Connection of the product to improper voltage supply</li>
<li>Attempted repair by anyone other than a facility authorized by Avenview to service the product.</li>
</ul>
</li>
</ol>
<p>In order for a customer to receive warranty service, they must provide proof of purchase in the form of a bill of sale or receipted invoice showing that the unit is within the warranty period.warranty period.</p>
<p>Repair or replacement as provided under this warranty is the exclusive remedy of the consumer. Avenview shall not be liable for any incidental or consequential damages for breach of any expressed or implied warranty on this product. Except to the extent prohibited by applicable law, any implied warranty of merchantability or fitness for a particular purpose on this product is limited in duration to the duration of this warranty.</p>
<p>This warranty gives you certain legal rights. However, these conditions may not apply to you, as your rights vary from state-to-state. Some states do not allow the inclusion or limitation of incidental or consequential damages, or allow limitations on how long and implied the warranty lasts, so the above limitations or exclusions may not apply to you.</p>
<p>If you have any questions about our services or want to contact us concerning the warranty on a product,&nbsp;please call <a href="tel:8665080269" target="_blank" rel="noopener">+1(866) 508-0269</a>&nbsp;(toll free) or reach out to us via e-mail at&nbsp;<a href="mailto:support@avenview.com" target="_blank" rel="noopener">support@avenview.com</a>.</p>
<form action="https://www.avenview.com/formsubmissions/formreceiver.php" onsubmit="return validateForm()" method="POST"><input name="oid" type="hidden" value="Phvh0K4bR3WGRk1IGAx9KLsMBUWjY2ujuaYl6mXxXNw=" /> <input name="retURL" type="hidden" value="http://www.avenview.com/index.php?main_page=rma_form_success" /> <input name="formName" type="hidden" value="RMA Form" />
<table style="margin-top: -20px; margin-bottom: -20px;" width="100%">
<tbody>
<tr>
<td colspan="2">
<h3 class="plainBoxHeading" style="border-top: 0px; border-bottom: 0px; border-left: 3px solid #ED1D26; background: #e1e1e1; color: #555; padding: 5px;">1.1 General Information</h3>
</td>
</tr>
</tbody>
</table>
<table width="38%">
<tbody>
<tr>
<td valign="top" width="27%"><label for="Name_Step2">Full Name</label></td>
<td width="73%"><input id="Name_Step2" maxlength="31" name="Name_Step2" size="20" type="text" value="" /> <span id="vld_Name_Step2" style="color: red;">*</span></td>
</tr>
<tr>
<td valign="top"><label for="RMACompany_Step2">Company</label></td>
<td><input id="RMACompany_Step2" maxlength="255" name="RMACompany_Step2" size="20" type="text" value="" /> <span id="vld_RMACompany_Step2" style="color: red;">*</span></td>
</tr>
<tr>
<td valign="top"><label for="Email_Step2">Email</label></td>
<td><input id="Email_Step2" maxlength="1023" name="Email_Step2" size="20" type="text" value="" /> <span id="vld_Email_Step2" style="color: red;">* test@yourcompany.com</span></td>
</tr>
<tr>
<td valign="top"><label for="RMAPhone_Step2">Phone</label></td>
<td><input id="RMAPhone_Step2" maxlength="255" name="RMAPhone_Step2" size="20" type="text" value="" /> <span id="vld_RMAPhone_Step2" style="color: red;">*</span></td>
</tr>
<tr>
<td valign="top"><label for="Address_Step2">Address</label></td>
<td><input id="Address_Step2" maxlength="255" name="Address_Step2" size="20" type="text" value="" /> <span id="vld_Address_Step2" style="color: red;">*</span></td>
</tr>
<tr>
<td valign="top"><label for="City_Step2">City</label></td>
<td><input id="City_Step2" maxlength="255" name="City_Step2" size="20" type="text" value="" /> <span id="vld_City_Step2" style="color: red;">*</span></td>
</tr>
<tr>
<td valign="top"><label for="PostalCode_Step2">Postal Code</label></td>
<td><input id="PostalCode_Step2" maxlength="255" name="PostalCode_Step2" size="20" type="text" value="" /> <span id="vld_PostalCode_Step2" style="color: red;">*</span></td>
</tr>
<tr>
<td valign="top"><label for="StateProvince_Step2">State/Province</label></td>
<td><input id="StateProvince_Step2" maxlength="255" name="StateProvince_Step2" size="20" type="text" value="" /> <span id="vld_StateProvince_Step2" style="color: red;">*</span></td>
</tr>
<tr>
<td valign="top"><label for="Country_Step2">Country</label></td>
<td><select id="Country_Step2" style="width: 150px;" name="Country_Step2">
<option disabled="disabled" selected="selected" value="">Please Choose</option>
<option title="United States" value="United States">United States</option>
<option title="Afghanistan" value="Afghanistan">Afghanistan</option>
<option title="Albania" value="Albania">Albania</option>
<option title="Algeria" value="Algeria">Algeria</option>
<option title="Andorra" value="Andorra">Andorra</option>
<option title="Angola" value="Angola">Angola</option>
<option title="Antigua and Barbuda" value="Antigua and Barbuda">Antigua and Barbuda</option>
<option title="Argentina" value="Argentina">Argentina</option>
<option title="Armenia" value="Armenia">Armenia</option>
<option title="Aruba" value="Aruba">Aruba</option>
<option title="Australia" value="Australia">Australia</option>
<option title="Austria" value="Austria">Austria</option>
<option title="Azerbaijan" value="Azerbaijan">Azerbaijan</option>
<option title="Bahamas" value="Bahamas">Bahamas</option>
<option title="Bahrain" value="Bahrain">Bahrain</option>
<option title="Bangladesh" value="Bangladesh">Bangladesh</option>
<option title="Barbados" value="Barbados">Barbados</option>
<option title="Belarus" value="Belarus">Belarus</option>
<option title="Belgium" value="Belgium">Belgium</option>
<option title="Belize" value="Belize">Belize</option>
<option title="Benin" value="Benin">Benin</option>
<option title="Bhutan" value="Bhutan">Bhutan</option>
<option title="Bolivia" value="Bolivia">Bolivia</option>
<option title="Bosnia and Herzegovina" value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
<option title="Botswana" value="Botswana">Botswana</option>
<option title="Brazil" value="Brazil">Brazil</option>
<option title="Brunei&nbsp;" value="Brunei&nbsp;">Brunei&nbsp;</option>
<option title="Bulgaria" value="Bulgaria">Bulgaria</option>
<option title="Burkina Faso" value="Burkina Faso">Burkina Faso</option>
<option title="Burma" value="Burma">Burma</option>
<option title="Burundi" value="Burundi">Burundi</option>
<option title="Cambodia" value="Cambodia">Cambodia</option>
<option title="Cameroon" value="Cameroon">Cameroon</option>
<option title="Canada" value="Canada">Canada</option>
<option title="Cape Verde" value="Cape Verde">Cape Verde</option>
<option title="Central African Republic" value="Central African Republic">Central African Republic</option>
<option title="Chad" value="Chad">Chad</option>
<option title="Chile" value="Chile">Chile</option>
<option title="China" value="China">China</option>
<option title="Colombia" value="Colombia">Colombia</option>
<option title="Comoros" value="Comoros">Comoros</option>
<option title="Democratic Republic of the Congo" value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
<option title="Republic of the Congo" value="Republic of the Congo">Republic of the Congo</option>
<option title="Costa Rica" value="Costa Rica">Costa Rica</option>
<option title="Cote d'Ivoire" value="Cote d'Ivoire">Cote d'Ivoire</option>
<option title="Croatia" value="Croatia">Croatia</option>
<option title="Cuba" value="Cuba">Cuba</option>
<option title="Curacao" value="Curacao">Curacao</option>
<option title="Cyprus" value="Cyprus">Cyprus</option>
<option title="Czech Republic" value="Czech Republic">Czech Republic</option>
<option title="Denmark" value="Denmark">Denmark</option>
<option title="Djibouti" value="Djibouti">Djibouti</option>
<option title="Dominica" value="Dominica">Dominica</option>
<option title="Dominican Republic" value="Dominican Republic">Dominican Republic</option>
<option title="Ecuador" value="Ecuador">Ecuador</option>
<option title="Egypt" value="Egypt">Egypt</option>
<option title="El Salvador" value="El Salvador">El Salvador</option>
<option title="Equatorial Guinea" value="Equatorial Guinea">Equatorial Guinea</option>
<option title="Eritrea" value="Eritrea">Eritrea</option>
<option title="Estonia" value="Estonia">Estonia</option>
<option title="Ethiopia" value="Ethiopia">Ethiopia</option>
<option title="Fiji" value="Fiji">Fiji</option>
<option title="Finland" value="Finland">Finland</option>
<option title="France" value="France">France</option>
<option title="Gabon" value="Gabon">Gabon</option>
<option title="Gambia" value="Gambia">Gambia</option>
<option title="Georgia" value="Georgia">Georgia</option>
<option title="Germany" value="Germany">Germany</option>
<option title="Ghana" value="Ghana">Ghana</option>
<option title="Greece" value="Greece">Greece</option>
<option title="Grenada" value="Grenada">Grenada</option>
<option title="Guatemala" value="Guatemala">Guatemala</option>
<option title="Guinea" value="Guinea">Guinea</option>
<option title="Guinea-Bissau" value="Guinea-Bissau">Guinea-Bissau</option>
<option title="Guyana" value="Guyana">Guyana</option>
<option title="Haiti" value="Haiti">Haiti</option>
<option title="Holy See" value="Holy See">Holy See</option>
<option title="Honduras" value="Honduras">Honduras</option>
<option title="Hong Kong" value="Hong Kong">Hong Kong</option>
<option title="Hungary" value="Hungary">Hungary</option>
<option title="Iceland" value="Iceland">Iceland</option>
<option title="India" value="India">India</option>
<option title="Indonesia" value="Indonesia">Indonesia</option>
<option title="Iran" value="Iran">Iran</option>
<option title="Iraq" value="Iraq">Iraq</option>
<option title="Ireland" value="Ireland">Ireland</option>
<option title="Israel" value="Israel">Israel</option>
<option title="Italy" value="Italy">Italy</option>
<option title="Jamaica" value="Jamaica">Jamaica</option>
<option title="Japan" value="Japan">Japan</option>
<option title="Jordan" value="Jordan">Jordan</option>
<option title="Kazakhstan" value="Kazakhstan">Kazakhstan</option>
<option title="Kenya" value="Kenya">Kenya</option>
<option title="Kiribati" value="Kiribati">Kiribati</option>
<option title="North Korea" value="North Korea">North Korea</option>
<option title="South Korea" value="South Korea">South Korea</option>
<option title="Kosovo" value="Kosovo">Kosovo</option>
<option title="Kuwait" value="Kuwait">Kuwait</option>
<option title="Kyrgyzstan" value="Kyrgyzstan">Kyrgyzstan</option>
<option title="Laos" value="Laos">Laos</option>
<option title="Latvia" value="Latvia">Latvia</option>
<option title="Lebanon" value="Lebanon">Lebanon</option>
<option title="Lesotho" value="Lesotho">Lesotho</option>
<option title="Liberia" value="Liberia">Liberia</option>
<option title="Libya" value="Libya">Libya</option>
<option title="Liechtenstein" value="Liechtenstein">Liechtenstein</option>
<option title="Lithuania" value="Lithuania">Lithuania</option>
<option title="Luxembourg" value="Luxembourg">Luxembourg</option>
<option title="Macau" value="Macau">Macau</option>
<option title="Macedonia" value="Macedonia">Macedonia</option>
<option title="Madagascar" value="Madagascar">Madagascar</option>
<option title="Malawi" value="Malawi">Malawi</option>
<option title="Malaysia" value="Malaysia">Malaysia</option>
<option title="Maldives" value="Maldives">Maldives</option>
<option title="Mali" value="Mali">Mali</option>
<option title="Malta" value="Malta">Malta</option>
<option title="Marshall Islands" value="Marshall Islands">Marshall Islands</option>
<option title="Mauritania" value="Mauritania">Mauritania</option>
<option title="Mauritius" value="Mauritius">Mauritius</option>
<option title="Mexico" value="Mexico">Mexico</option>
<option title="Micronesia" value="Micronesia">Micronesia</option>
<option title="Moldova" value="Moldova">Moldova</option>
<option title="Monaco" value="Monaco">Monaco</option>
<option title="Mongolia" value="Mongolia">Mongolia</option>
<option title="Montenegro" value="Montenegro">Montenegro</option>
<option title="Morocco" value="Morocco">Morocco</option>
<option title="Mozambique" value="Mozambique">Mozambique</option>
<option title="Namibia" value="Namibia">Namibia</option>
<option title="Nauru" value="Nauru">Nauru</option>
<option title="Nepal" value="Nepal">Nepal</option>
<option title="Netherlands" value="Netherlands">Netherlands</option>
<option title="Netherlands Antilles" value="Netherlands Antilles">Netherlands Antilles</option>
<option title="New Zealand" value="New Zealand">New Zealand</option>
<option title="Nicaragua" value="Nicaragua">Nicaragua</option>
<option title="Niger" value="Niger">Niger</option>
<option title="Nigeria" value="Nigeria">Nigeria</option>
<option title="North Korea" value="North Korea">North Korea</option>
<option title="Norway" value="Norway">Norway</option>
<option title="Oman" value="Oman">Oman</option>
<option title="Pakistan" value="Pakistan">Pakistan</option>
<option title="Palau" value="Palau">Palau</option>
<option title="Palestinian Territories" value="Palestinian Territories">Palestinian Territories</option>
<option title="Panama" value="Panama">Panama</option>
<option title="Papua New Guinea" value="Papua New Guinea">Papua New Guinea</option>
<option title="Paraguay" value="Paraguay">Paraguay</option>
<option title="Peru" value="Peru">Peru</option>
<option title="Philippines" value="Philippines">Philippines</option>
<option title="Poland" value="Poland">Poland</option>
<option title="Portugal" value="Portugal">Portugal</option>
<option title="Qatar" value="Qatar">Qatar</option>
<option title="Romania" value="Romania">Romania</option>
<option title="Russia" value="Russia">Russia</option>
<option title="Rwanda" value="Rwanda">Rwanda</option>
<option title="Saint Kitts and Nevis" value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
<option title="Saint Lucia" value="Saint Lucia">Saint Lucia</option>
<option title="Saint Vincent and the Grenadines" value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
<option title="Samoa&nbsp;" value="Samoa&nbsp;">Samoa&nbsp;</option>
<option title="San Marino" value="San Marino">San Marino</option>
<option title="Sao Tome and Principe" value="Sao Tome and Principe">Sao Tome and Principe</option>
<option title="Saudi Arabia" value="Saudi Arabia">Saudi Arabia</option>
<option title="Senegal" value="Senegal">Senegal</option>
<option title="Serbia" value="Serbia">Serbia</option>
<option title="Seychelles" value="Seychelles">Seychelles</option>
<option title="Sierra Leone" value="Sierra Leone">Sierra Leone</option>
<option title="Singapore" value="Singapore">Singapore</option>
<option title="Sint Maarten" value="Sint Maarten">Sint Maarten</option>
<option title="Slovakia" value="Slovakia">Slovakia</option>
<option title="Slovenia" value="Slovenia">Slovenia</option>
<option title="Solomon Islands" value="Solomon Islands">Solomon Islands</option>
<option title="Somalia" value="Somalia">Somalia</option>
<option title="South Africa" value="South Africa">South Africa</option>
<option title="South Korea" value="South Korea">South Korea</option>
<option title="South Sudan" value="South Sudan">South Sudan</option>
<option title="Spain&nbsp;" value="Spain&nbsp;">Spain&nbsp;</option>
<option title="Sri Lanka" value="Sri Lanka">Sri Lanka</option>
<option title="Sudan" value="Sudan">Sudan</option>
<option title="Suriname" value="Suriname">Suriname</option>
<option title="Swaziland&nbsp;" value="Swaziland&nbsp;">Swaziland&nbsp;</option>
<option title="Sweden" value="Sweden">Sweden</option>
<option title="Switzerland" value="Switzerland">Switzerland</option>
<option title="Syria" value="Syria">Syria</option>
<option title="Taiwan" value="Taiwan">Taiwan</option>
<option title="Tajikistan" value="Tajikistan">Tajikistan</option>
<option title="Tanzania" value="Tanzania">Tanzania</option>
<option title="Thailand&nbsp;" value="Thailand&nbsp;">Thailand&nbsp;</option>
<option title="Timor-Leste" value="Timor-Leste">Timor-Leste</option>
<option title="Togo" value="Togo">Togo</option>
<option title="Tonga" value="Tonga">Tonga</option>
<option title="Trinidad and Tobago" value="Trinidad and Tobago">Trinidad and Tobago</option>
<option title="Tunisia" value="Tunisia">Tunisia</option>
<option title="Turkey" value="Turkey">Turkey</option>
<option title="Turkmenistan" value="Turkmenistan">Turkmenistan</option>
<option title="Tuvalu" value="Tuvalu">Tuvalu</option>
<option title="Uganda" value="Uganda">Uganda</option>
<option title="Ukraine" value="Ukraine">Ukraine</option>
<option title="United Arab Emirates" value="United Arab Emirates">United Arab Emirates</option>
<option title="United Kingdom" value="United Kingdom">United Kingdom</option>
<option title="Uruguay" value="Uruguay">Uruguay</option>
<option title="Uzbekistan" value="Uzbekistan">Uzbekistan</option>
<option title="Vanuatu" value="Vanuatu">Vanuatu</option>
<option title="Venezuela" value="Venezuela">Venezuela</option>
<option title="Vietnam" value="Vietnam">Vietnam</option>
<option title="Yemen" value="Yemen">Yemen</option>
<option title="Zambia" value="Zambia">Zambia</option>
<option title="Zimbabwe" value="Zimbabwe">Zimbabwe</option>
</select><span id="vld_Country_Step2" style="color: red;">*</span></td>
</tr>
<tr>
<td valign="top"><label for="RMAReason_Step2">Reason</label></td>
<td><select id="RMAReason_Step2" name="RMAReason_Step2">
<option disabled="disabled" selected="selected" value="">Please Choose</option>
<option value="Replacement">Replacement</option>
<option value="Exchange">Exchange</option>
<option value="Repair">Repair</option>
<option value="Credit">Credit</option>
<option value="Refund">Refund</option>
</select><span id="vld_RMAReason_Step2" style="color: red;">*</span></td>
</tr>
<tr>
<td valign="top"><label for="RMAInvoiceDate_Step2">Invoice/Purchase Date</label></td>
<td><input id="RMAInvoiceDate_Step2" name="RMAInvoiceDate_Step2" size="20" type="date" min='1899-01-01' max='2019-12-12'/> <span id="vld_RMAInvoiceDate_Step2" style="color: red;">*</span></td>
</tr>
<tr>
<td valign="top"><label for="RMARequestDate_Step2">Requested Return Date</label></td>
<td><input id="RMARequestDate_Step2" name="RMARequestDate_Step2" size="20" type="date" /></td>
</tr>
<tr>
<td valign="top"><label for="RMAInvoiceNumber_Step2">Invoice Number</label></td>
<td><input id="RMAInvoiceNumber_Step2" maxlength="255" name="RMAInvoiceNumber_Step2" size="20" type="text" value="" /> <span id="vld_RMAInvoiceNumber_Step2" style="color: red;">* </span></td>
</tr>
</tbody>
</table>
<table style="margin-top: -20px; margin-bottom: -20px;" width="100%">
<tbody>
<tr>
<td colspan="2">
<h3 class="plainBoxHeading" style="border-top: 0px; border-bottom: 0px; border-left: 3px solid #ED1D26; background: #e1e1e1; color: #555; padding: 5px;">1.2 Product Information</h3>
</td>
</tr>
</tbody>
</table>
<table>
<tbody>
<tr>
<td valign="top" width="19%">Model Number</td>
<td valign="top" width="18%">Serial Number</td>
<td valign="top" width="18%">Qty</td>
<td valign="top" width="45%">Issues/Description (As Detailed As Possible)</td>
</tr>
<tr>
<td valign="top"><input id="RMAModelOne_Step2" maxlength="255" name="RMAModelOne_Step2" size="20" type="text" value="" /></td>
<td valign="top"><input id="RMASerialOne_Step2" maxlength="255" name="RMASerialOne_Step2" size="20" type="text" value="" /></td>
<td valign="top"><input id="RMAQtyOne_Step2" maxlength="11" name="RMAQtyOne_Step2" size="20" type="text" value="00" /><span id="RMAQtyOne_Step2_validate" style="color: red;"></span></td>
<td valign="top"><input id="RMAIssuesOne_Step2" maxlength="255" name="RMAIssuesOne_Step2" size="50" type="text" value="" /></td>
</tr>
<tr>
<td valign="top"><input id="RMAModelTwo_Step2" maxlength="255" name="RMAModelTwo_Step2" size="20" type="text" value="" /></td>
<td valign="top"><input id="RMASerialTwo_Step2" maxlength="255" name="RMASerialTwo_Step2" size="20" type="text" value="" /></td>
<td valign="top"><input id="RMAQtyTwo_Step2" maxlength="11" name="RMAQtyTwo_Step2" size="20" type="text" value="00" /><span id="RMAQtyTwo_Step2_validate" style="color: red;"></span></td>
<td valign="top"><input id="RMAIssuesTwo_Step2" maxlength="255" name="RMAIssuesTwo_Step2" size="50" type="text" value="" /></td>
</tr>
<tr>
<td valign="top"><input id="RMAModelThree_Step2" maxlength="255" name="RMAModelThree_Step2" size="20" type="text" value="" /></td>
<td valign="top"><input id="RMASerialThree_Step2" maxlength="255" name="RMASerialThree_Step2" size="20" type="text" value="" /></td>
<td valign="top"><input id="RMAQtyThree_Step2" maxlength="11" name="RMAQtyThree_Step2" size="20" type="text" value="00" /><span id="RMAQtyThree_Step2_validate" style="color: red;"></span></td>
<td valign="top"><input id="RMAIssuesThree_Step2" maxlength="255" name="RMAIssuesThree_Step2" size="50" type="text" value="" /></td>
</tr>
<tr>
<td valign="top"><input id="RMAModelFour_Step2" maxlength="255" name="RMAModelFour_Step2" size="20" type="text" value="" /></td>
<td valign="top"><input id="RMASerialFour_Step2" maxlength="255" name="RMASerialFour_Step2" size="20" type="text" value="" /></td>
<td valign="top"><input id="RMAQtyFour_Step2" maxlength="11" name="RMAQtyFour_Step2" size="20" type="text" value="00" /><span id="RMAQtyFour_Step2_validate" style="color: red;"></span></td>
<td valign="top"><input id="RMAIssuesFour_Step2" maxlength="255" name="RMAIssuesFour_Step2" size="50" type="text" value="" /></td>
</tr>
</tbody>
</table>
<table style="margin-top: -20px; margin-bottom: -20px;" width="100%">
<tbody>
<tr>
<td colspan="2">
<h3 class="plainBoxHeading" style="border-top: 0px; border-bottom: 0px; border-left: 3px solid #ED1D26; background: #e1e1e1; color: #555; padding: 5px;">1.3 Physical Condition</h3>
</td>
</tr>
<tr>
<td colspan="2">
<p>Check the following and advice accordingly and email us picture(s) if available</p>
</td>
</tr>
</tbody>
</table>
<table>
<tbody>
<tr>
<td width="28%">Check For:</td>
<td width="20%">Condition</td>
<td width="52%">Description</td>
</tr>
<tr>
<td>Tamper Seal</td>
<td><select id="RMATamperCheck_Step2" name="RMATamperCheck_Step2">
<option disabled="disabled" selected="selected" value="">Please Choose</option>
<option value="In Order">In Order</option>
<option value="Not In Order">Not In Order</option>
</select></td>
<td><input id="RMATamperDes_Step2" maxlength="255" name="RMATamperDes_Step2" size="50" type="text" value="" /></td>
</tr>
<tr>
<td>Physical Damage to Unit</td>
<td><select id="RMADamageCheck_Step2" name="RMADamageCheck_Step2">
<option disabled="disabled" selected="selected" value="">Please Choose</option>
<option value="In Order">In Order</option>
<option value="Not In Order">Not In Order</option>
</select></td>
<td><input id="RMADamageDes_Step2" maxlength="255" name="RMADamageDes_Step2" size="50" type="text" value="" /></td>
</tr>
<tr>
<td>Power Supply - Voltage/AMP</td>
<td><select id="RMAPowerCheck_Step2" name="RMAPowerCheck_Step2">
<option disabled="disabled" selected="selected" value="">Please Choose</option>
<option value="In Order">In Order</option>
<option value="Not In Order">Not In Order</option>
</select></td>
<td><input id="RMAPowerDes_Step2" maxlength="255" name="RMAPowerDes_Step2" size="50" type="text" value="" /></td>
</tr>
<tr>
<td>Other</td>
<td colspan="2"><input id="RMAOtherCheck_Step2" maxlength="255" name="RMAOtherCheck_Step2" size="82" type="text" value="" /></td>
</tr>
</tbody>
</table>
<table style="margin-top: -20px; margin-bottom: -20px;" width="100%">
<tbody>
<tr>
<td>
<h3 class="plainBoxHeading" style="border-top: 0px; border-bottom: 0px; border-left: 3px solid #ED1D26; background: #e1e1e1; color: #555; padding: 5px;">Special Instructions</h3>
</td>
</tr>
<tr>
<td>
<p>If you require to return any Avenview merchandise for repair, please proceed with the following procedures:</p>
<ul>
<li>Fill out the RMA request form and obtain RMA# from Avenview Corp.</li>
<li>Attach the product with a tag detailing the reason for return</li>
<li>Original packaging is preffered when shipping the RMA unit back to our facility. You are responsible for delivering the returned product to Avenview Corp. safely and undamaged.</li>
<li>The RMA number should be clearly marked on all returned product, boxes, packages and accompanied with the completed RMA form.</li>
<li>RMA# is valid for 30 Days from the date issued.</li>
</ul>
<p>Please note, RMA processes takes up to 4 weeks from the time of receiving the returning unit.</p>
</td>
</tr>
</tbody>
</table>
<table>
<tbody>
<tr>
<td valign="top" width="22%"><label for="RMASignedBy_Step2">Signed By</label></td>
<td width="78%"><input id="RMASignedBy_Step2" maxlength="255" name="RMASignedBy_Step2" size="20" type="text" /> <span id="vld_RMASignedBy_Step2" style="color: red;">*</span></td>
</tr>
<tr>
<td valign="top"><label for="RMASignedOn_Step2">Signed On</label></td>
<td><input id="RMASignedOn_Step2" name="RMASignedOn_Step2" size="20" type="date" min='1899-01-01' max='2019-12-11'/> <span id="vld_RMASignedOn_Step2" style="color: red;">*</span></td>
</tr>
<tr>
<td colspan="2" valign="top"><input id="RMAAgreement_Step2" style="display: none;" checked="checked" name="RMAAgreement_Step2" type="checkbox" /><label style="color: red;" for="RMAAgreement_Step2"><strong>By signing above fields, you are agreeing to comply with Avenview's RMA policy</strong></label> <span id="vld_RMASignedOn_Step2" style="color: red;"> *</span></td>
</tr>
</tbody>
</table>
<input id="submit_web_form" name="submit_web_form" type="submit" value="Submit" />&nbsp;</form>
