<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8"><script src="https://www.google.com/recaptcha/api.js" async defer></script><script src="https://www.methodintegration.com/MethodWebForms/Javascript/formValidation.js" type="text/javascript"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script><script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script><script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script><script type="text/javascript">
function validate_form(thisform){
     with (thisform){
 if (validate_required("AUFBusinessName_Step2","vld_AUFBusinessName_Step2","Business Name must be filled out!")==false)
{document.getElementById("AUFBusinessName_Step2").focus();return false;}
 if (validate_required("AUFBusinessType_Step2","vld_AUFBusinessType_Step2","Please select what type of business you have1")==false)
{document.getElementById("AUFBusinessType_Step2").focus();return false;}
 if (validate_required("Address_Step2","vld_Address_Step2","Address must be filled out!")==false)
{document.getElementById("Address_Step2").focus();return false;}
 if (validate_required("City_Step2","vld_City_Step2","City must be filled out!")==false)
{document.getElementById("City_Step2").focus();return false;}
 if (validate_required("StateProvince_Step2","vld_StateProvince_Step2","State/Province must be filled out!")==false)
{document.getElementById("StateProvince_Step2").focus();return false;}
 if (validate_required("PostalCode_Step2","vld_PostalCode_Step2","Postal/Zip Code must be filled out!")==false)
{document.getElementById("PostalCode_Step2").focus();return false;}
 if (validate_required("Country_Step2","vld_Country_Step2","Country must be filled out!")==false)
{document.getElementById("Country_Step2").focus();return false;}
 if (validate_required("AUFPhoneNum_Step2","vld_AUFPhoneNum_Step2","Phone Number must be filled out!")==false)
{document.getElementById("AUFPhoneNum_Step2").focus();return false;}
 if (validate_required("AUFNumofYears_Step2","vld_AUFNumofYears_Step2","How long you have been in this business?")==false)
{document.getElementById("AUFNumofYears_Step2").focus();return false;}
 if (validate_required("Email_Step2","vld_Email_Step2","Email must be filled out!")==false)
{document.getElementById("Email_Step2").focus();return false;}
 if (validate_required("Name_Step2","vld_Name_Step2","Name must be filled out!")==false)
{document.getElementById("Name_Step2").focus();return false;}
 if (validate_required("AUFTitle1_Step2","vld_AUFTitle1_Step2","Please mention your title!")==false)
{document.getElementById("AUFTitle1_Step2").focus();return false;}
 if (validate_required("AUFFedTaxID_Step2","vld_AUFFedTaxID_Step2","Federal Tax ID must be filled out!")==false)
{document.getElementById("AUFFedTaxID_Step2").focus();return false;}
 if (validate_required("AUFBank_Step2","vld_AUFBank_Step2","Bank Information must be filled out!")==false)
{document.getElementById("AUFBank_Step2").focus();return false;}
 if (validate_required("AUFBankAddress_Step2","vld_AUFBankAddress_Step2","Bank Address must be filled out!")==false)
{document.getElementById("AUFBankAddress_Step2").focus();return false;}
 if (validate_required("AUFAccOfficer_Step2","vld_AUFAccOfficer_Step2","Account Officer must be filled out!")==false)
{document.getElementById("AUFAccOfficer_Step2").focus();return false;}
 if (validate_required("AUFBankPhoneNum_Step2","vld_AUFBankPhoneNum_Step2","Bank Phone Number must be filled out!")==false)
{document.getElementById("AUFBankPhoneNum_Step2").focus();return false;}
 if (validate_required("AUFChqAccNum_Step2","vld_AUFChqAccNum_Step2","Checking Account Number must be filled out!")==false)
{document.getElementById("AUFChqAccNum_Step2").focus();return false;}
 if (validate_required("AUFSavAccNum_Step2","vld_AUFSavAccNum_Step2","Saving Account Number must be filled out!")==false)
{document.getElementById("AUFSavAccNum_Step2").focus();return false;}
 if (validate_required("AUFLoanNum_Step2","vld_AUFLoanNum_Step2","Loan Number must be filled out!")==false)
{document.getElementById("AUFLoanNum_Step2").focus();return false;}
 if (validate_required("AUFCreditRequested_Step2","vld_AUFCreditRequested_Step2","Credit Requested must be filled out!")==false)
{document.getElementById("AUFCreditRequested_Step2").focus();return false;}
 if (validate_required("AUFSignDate_Step2","vld_AUFSignDate_Step2","Date must be entered to accept terms and conditions!")==false)
{document.getElementById("AUFSignDate_Step2").focus();return false;}
 if (validate_required("AUFSignName_Step2","vld_AUFSignName_Step2","Your full name must be entered to accept terms and conditions!")==false)
{document.getElementById("AUFSignName_Step2").focus();return false;}
 if (validate_required("AUFInitials_Step2","vld_AUFInitials_Step2","Please enter first letter of your first and last name!")==false)
{document.getElementById("AUFInitials_Step2").focus();return false;}
if (!jQuery("#AUFAuth_Step2").is(":checked")) {
	        alert("Please read and check Terms & Condition");
document.getElementById("AUFAuth_Step2").focus();
return false;
}


     //this code is for captcha response
      //var to hold g-recaptcha-response from googles server(either true or false)
      var googleResponse = jQuery('#g-recaptcha-response').val();
      
      //if g-recaptcha-response is FALSE(user not verified) do not submit form
      //and ask user to enter reCAPTCHA box
      if (!googleResponse) {

          var foo = "Please check the box below";
          //if the recaptchaError div is present (which it is) insert error message
          if($('#recaptchaError').length){
              $('#recaptchaError').text(foo);
            } else {  
              //$('#recaptchaError').text(foo);
            }
        return false;
      }
      
      else {

               document.getElementById('submit_web_form').disabled=true;
      }//end captcha response

  }//withend
}
</script><script type="text/javascript">
 function show(aval) {
    if (aval == "Partnership") {
    hiddenDiv.style.display='inline-block';
    Form.fileURL.focus();
    } 
    else{
    hiddenDiv.style.display='none';
    }
  }

$(document).ready(function() {
                $('.hiddenSC td').hide();
                $(".hiddenMC td").hide();

                $('#AUFDistType_Step2').change(function () {
                    var val = $(this).val();
                    if (val == "SingleCountry") {
                         $('.hiddenSC td').show();
                         $('.hiddenMC td').hide();
                    } 
else if (val == "MultipleCountry") {
$('.hiddenSC td').hide();
                         $('.hiddenMC td').show();
}
else  {
                        $('.hiddenSC td').hide();
                         $('.hiddenMC td').hide();
                    }
                    });
                });
</script><script type="text/javascript">
function FillBilling(f) {
  if(f.billingtoo.checked == true) {
    f.AUFShippingAddress_Step2.value = f.Address_Step2.value;
    f.AUFShippingCity_Step2.value = f.City_Step2.value;
    f.AUFShippingState_Step2.value = f.StateProvince_Step2.value;
    f.AUFShippingZip_Step2.value = f.PostalCode_Step2.value;
    f.AUFShippingCountry_Step2.value = f.Country_Step2.value;
  }
}
</script>
<form action="https://www.methodintegration.com/method/timezonerouter.aspx?url=https://www.methodintegration.com/MethodWebForms/submit.aspx" id="authForm" method="POST" onsubmit="return validate_form(this)"><input name="oid" type="hidden" value="Phvh0K4bR3WGRk1IGAx9KEpmPD3UlMyFu8m2g/PQ49U=" /> <input name="retURL" type="hidden" value="http://www.avenview.com/index.php?main_page=authorization_agreement_success" /> <input name="formName" type="hidden" value="Avenview Authorized Agreement" />
<p>Avenview is delighted to welcome new partners to our worldwide family of dealers, distributors and retailers. In order to insure our products are properly promoted, installed and supported, Avenview has developed this Authorized Agreement to better understand our customers. Avenview reserves the right to amend and modify this Agreements at any time without further notice.</p>

<p>Please provide the following information:</p>

<h3 class="plainBoxHeading" colspan="4" style="border-top:0px; border-bottom:0px; border-left:3px solid #ED1D26; background:#e1e1e1; color:#555; padding:5px; " valign="top">Company Information</h3>

<table>
	<tbody>
		<tr>
			<td valign="top" width="21%"><label for="AUFBusinessName_Step2">Legal Business Name (DBA):</label></td>
			<td><input id="AUFBusinessName_Step2" maxlength="255" name="AUFBusinessName_Step2" size="20" type="text" value="" /><span id="vld_AUFBusinessName_Step2" style="color:Red">*</span></td>
		</tr>
		<tr>
			<td valign="top"><label for="AUFBusinessType_Step2">Type of Business:</label></td>
			<td><select id="AUFBusinessType_Step2" name="AUFBusinessType_Step2" onchange="java_script_:show(this.options[this.selectedIndex].value)"><option disabled="disabled" selected="selected" value="">Please Choose</option><option value="Partnership">Partnership</option><option value="Proprietorship">Proprietorship</option><option value="Corporation">Corporation</option> </select><span id="vld_AUFBusinessType_Step2" style="color:Red">*</span></td>
		</tr>
	</tbody>
</table>

<div id="hiddenDiv" style="display:none; width:100%;">
<table>
	<tbody>
		<tr>
			<td colspan="2">
			<h4 text-align="center">Please fill in information for the type of partnership and select corresponding service(s) your company provides:</h4>

			<h3 class="plainBoxHeading" colspan="4" style="border-top:0px; border-bottom:0px; border-left:3px solid #ED1D26; background:#e1e1e1; color:#555; padding:5px; " valign="top">Dealer Information</h3>
			</td>
		</tr>
		<tr>
			<td valign="top"><label for="AUFDealer_Step2">Type of Dealer:</label></td>
			<td><select id="AUFDealer_Step2" name="AUFDealer_Step2"><option value="">Please Choose</option><option value="System Services">System Services</option><option value="System Programming">System Programming</option><option value="System Integration">System Integration</option><option value="Installation">Installation</option><option value="Service">Service</option><option value="Sales">Sales</option><option value="AV Project Management">AV Project Management</option> </select></td>
		</tr>
		<tr>
			<td valign="top"><label for="AUFDealerVendors_Step2">Please list current Vendors:</label></td>
			<td><textarea cols="50" id="AUFDealerVendors_Step2" name="AUFDealerVendors_Step2" rows="4"></textarea></td>
		</tr>
		<tr>
			<td colspan="2">
			<h3 class="plainBoxHeading" colspan="4" style="border-top:0px; border-bottom:0px; border-left:3px solid #ED1D26; background:#e1e1e1; color:#555; padding:5px; " valign="top">Distributor Information</h3>
			</td>
		</tr>
		<tr>
			<td valign="top"><label for="AUFDistType_Step2">Type of Distributor:</label></td>
			<td><select id="AUFDistType_Step2" name="AUFDistType_Step2"><option value="">Please Choose</option><option value="Product Distributor">Product Distributor</option><option value="SingleCountry">Single Country</option><option value="MultipleCountry">Multiple Country</option> </select></td>
		</tr>
		<tr class="hiddenSC">
			<td valign="top"><label for="AUFDistSingleCountry_Step2">Please List Country Name:</label></td>
			<td><input id="AUFDistSingleCountry_Step2" maxlength="255" name="AUFDistSingleCountry_Step2" size="20" type="text" value="" /></td>
		</tr>
		<tr class="hiddenMC">
			<td valign="top"><label for="AUFDistMultiCountry_Step2">Please List Country Names:</label></td>
			<td><input id="AUFDistMultiCountry_Step2" maxlength="255" name="AUFDistMultiCountry_Step2" size="20" type="text" value="" /></td>
		</tr>
		<tr>
			<td valign="top"><label for="AUFDistVendors_Step2">Please list current Vendors:</label></td>
			<td><textarea cols="50" id="AUFDistVendors_Step2" name="AUFDistVendors_Step2" rows="4"></textarea></td>
		</tr>
		<tr>
			<td colspan="2">
			<h3 class="plainBoxHeading" colspan="4" style="border-top:0px; border-bottom:0px; border-left:3px solid #ED1D26; background:#e1e1e1; color:#555; padding:5px; " valign="top">Retailer Information</h3>
			</td>
		</tr>
		<tr>
			<td valign="top"><label for="AUFRetailerType_Step2">Type of Retailer:</label></td>
			<td><select id="AUFRetailerType_Step2" name="AUFRetailerType_Step2"><option value="">Please Choose</option><option value="Online">Online</option><option value="Retail Store">Retail Store</option><option value="Online and Retail Store">Online and Retail Store</option> </select></td>
		</tr>
	</tbody>
</table>
</div>

<div>
<table>
	<tbody>
		<tr>
			<td colspan="2">
			<h3 class="plainBoxHeading" colspan="4" style="border-top:0px; border-bottom:0px; border-left:3px solid #ED1D26; background:#e1e1e1; color:#555; padding:5px; " valign="top">Billing Information</h3>
			</td>
		</tr>
		<tr>
			<td valign="top" width="21%"><label for="Address_Step2">Address:</label></td>
			<td><input id="Address_Step2" maxlength="255" name="Address_Step2" size="20" type="text" value="" /><span id="vld_Address_Step2" style="color:Red">*</span></td>
		</tr>
		<tr>
			<td valign="top"><label for="City_Step2">City:</label></td>
			<td><input id="City_Step2" maxlength="255" name="City_Step2" size="20" type="text" value="" /><span id="vld_City_Step2" style="color:Red">*</span></td>
		</tr>
		<tr>
			<td valign="top"><label for="StateProvince_Step2">State/Province:</label></td>
			<td><input id="StateProvince_Step2" maxlength="255" name="StateProvince_Step2" size="20" type="text" value="" /><span id="vld_StateProvince_Step2" style="color:Red">*</span></td>
		</tr>
		<tr>
			<td valign="top"><label for="PostalCode_Step2">Postal/Zip Code:</label></td>
			<td><input id="PostalCode_Step2" maxlength="255" name="PostalCode_Step2" size="20" type="text" value="" /><span id="vld_PostalCode_Step2" style="color:Red">*</span></td>
		</tr>
		<tr>
			<td valign="top"><label for="Country_Step2">Country:</label></td>
			<td><select id="Country_Step2" name="Country_Step2" style="width: 150px;" type="select"><option title="United States" value="United States">United States</option><option title="Afghanistan" value="Afghanistan">Afghanistan</option><option title="Åland Islands" value="Åland Islands">&Aring;land Islands</option><option title="Albania" value="Albania">Albania</option><option title="Algeria" value="Algeria">Algeria</option><option title="American Samoa" value="American Samoa">American Samoa</option><option title="Andorra" value="Andorra">Andorra</option><option title="Angola" value="Angola">Angola</option><option title="Anguilla" value="Anguilla">Anguilla</option><option title="Antarctica" value="Antarctica">Antarctica</option><option title="Antigua and Barbuda" value="Antigua and Barbuda">Antigua and Barbuda</option><option title="Argentina" value="Argentina">Argentina</option><option title="Armenia" value="Armenia">Armenia</option><option title="Aruba" value="Aruba">Aruba</option><option title="Australia" value="Australia">Australia</option><option title="Austria" value="Austria">Austria</option><option title="Azerbaijan" value="Azerbaijan">Azerbaijan</option><option title="Bahamas" value="Bahamas">Bahamas</option><option title="Bahrain" value="Bahrain">Bahrain</option><option title="Bangladesh" value="Bangladesh">Bangladesh</option><option title="Barbados" value="Barbados">Barbados</option><option title="Belarus" value="Belarus">Belarus</option><option title="Belgium" value="Belgium">Belgium</option><option title="Belize" value="Belize">Belize</option><option title="Benin" value="Benin">Benin</option><option title="Bermuda" value="Bermuda">Bermuda</option><option title="Bhutan" value="Bhutan">Bhutan</option><option title="Bolivia, Plurinational State of" value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option><option title="Bonaire, Sint Eustatius and Saba" value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option><option title="Bosnia and Herzegovina" value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option title="Botswana" value="Botswana">Botswana</option><option title="Bouvet Island" value="Bouvet Island">Bouvet Island</option><option title="Brazil" value="Brazil">Brazil</option><option title="British Indian Ocean Territory" value="British Indian Ocean Territory">British Indian Ocean Territory</option><option title="Brunei Darussalam" value="Brunei Darussalam">Brunei Darussalam</option><option title="Bulgaria" value="Bulgaria">Bulgaria</option><option title="Burkina Faso" value="Burkina Faso">Burkina Faso</option><option title="Burundi" value="Burundi">Burundi</option><option title="Cambodia" value="Cambodia">Cambodia</option><option title="Cameroon" value="Cameroon">Cameroon</option><option title="Canada" value="Canada">Canada</option><option title="Cape Verde" value="Cape Verde">Cape Verde</option><option title="Cayman Islands" value="Cayman Islands">Cayman Islands</option><option title="Central African Republic" value="Central African Republic">Central African Republic</option><option title="Chad" value="Chad">Chad</option><option title="Chile" value="Chile">Chile</option><option title="China" value="China">China</option><option title="Christmas Island" value="Christmas Island">Christmas Island</option><option title="Cocos (Keeling) Islands" value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option title="Colombia" value="Colombia">Colombia</option><option title="Comoros" value="Comoros">Comoros</option><option title="Congo" value="Congo">Congo</option><option title="Congo, the Democratic Republic of the" value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option><option title="Cook Islands" value="Cook Islands">Cook Islands</option><option title="Costa Rica" value="Costa Rica">Costa Rica</option><option title="Côte d'Ivoire" value="Côte d'Ivoire">C&ocirc;te d&#39;Ivoire</option><option title="Croatia" value="Croatia">Croatia</option><option title="Cuba" value="Cuba">Cuba</option><option title="Curaçao" value="Curaçao">Cura&ccedil;ao</option><option title="Cyprus" value="Cyprus">Cyprus</option><option title="Czech Republic" value="Czech Republic">Czech Republic</option><option title="Denmark" value="Denmark">Denmark</option><option title="Djibouti" value="Djibouti">Djibouti</option><option title="Dominica" value="Dominica">Dominica</option><option title="Dominican Republic" value="Dominican Republic">Dominican Republic</option><option title="Ecuador" value="Ecuador">Ecuador</option><option title="Egypt" value="Egypt">Egypt</option><option title="El Salvador" value="El Salvador">El Salvador</option><option title="Equatorial Guinea" value="Equatorial Guinea">Equatorial Guinea</option><option title="Eritrea" value="Eritrea">Eritrea</option><option title="Estonia" value="Estonia">Estonia</option><option title="Ethiopia" value="Ethiopia">Ethiopia</option><option title="Falkland Islands (Malvinas)" value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option><option title="Faroe Islands" value="Faroe Islands">Faroe Islands</option><option title="Fiji" value="Fiji">Fiji</option><option title="Finland" value="Finland">Finland</option><option title="France" value="France">France</option><option title="French Guiana" value="French Guiana">French Guiana</option><option title="French Polynesia" value="French Polynesia">French Polynesia</option><option title="French Southern Territories" value="French Southern Territories">French Southern Territories</option><option title="Gabon" value="Gabon">Gabon</option><option title="Gambia" value="Gambia">Gambia</option><option title="Georgia" value="Georgia">Georgia</option><option title="Germany" value="Germany">Germany</option><option title="Ghana" value="Ghana">Ghana</option><option title="Gibraltar" value="Gibraltar">Gibraltar</option><option title="Greece" value="Greece">Greece</option><option title="Greenland" value="Greenland">Greenland</option><option title="Grenada" value="Grenada">Grenada</option><option title="Guadeloupe" value="Guadeloupe">Guadeloupe</option><option title="Guam" value="Guam">Guam</option><option title="Guatemala" value="Guatemala">Guatemala</option><option title="Guernsey" value="Guernsey">Guernsey</option><option title="Guinea" value="Guinea">Guinea</option><option title="Guinea-Bissau" value="Guinea-Bissau">Guinea-Bissau</option><option title="Guyana" value="Guyana">Guyana</option><option title="Haiti" value="Haiti">Haiti</option><option title="Heard Island and McDonald Islands" value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option><option title="Holy See (Vatican City State)" value="Holy See (Vatican City State)">Holy See (Vatican City State)</option><option title="Honduras" value="Honduras">Honduras</option><option title="Hong Kong" value="Hong Kong">Hong Kong</option><option title="Hungary" value="Hungary">Hungary</option><option title="Iceland" value="Iceland">Iceland</option><option title="India" value="India">India</option><option title="Indonesia" value="Indonesia">Indonesia</option><option title="Iran, Islamic Republic of" value="Iran, Islamic Republic of">Iran, Islamic Republic of</option><option title="Iraq" value="Iraq">Iraq</option><option title="Ireland" value="Ireland">Ireland</option><option title="Isle of Man" value="Isle of Man">Isle of Man</option><option title="Israel" value="Israel">Israel</option><option title="Italy" value="Italy">Italy</option><option title="Jamaica" value="Jamaica">Jamaica</option><option title="Japan" value="Japan">Japan</option><option title="Jersey" value="Jersey">Jersey</option><option title="Jordan" value="Jordan">Jordan</option><option title="Kazakhstan" value="Kazakhstan">Kazakhstan</option><option title="Kenya" value="Kenya">Kenya</option><option title="Kiribati" value="Kiribati">Kiribati</option><option title="Korea, Democratic People's Republic of" value="Korea, Democratic People's Republic of">Korea, Democratic People&#39;s Republic of</option><option title="Korea, Republic of" value="Korea, Republic of">Korea, Republic of</option><option title="Kuwait" value="Kuwait">Kuwait</option><option title="Kyrgyzstan" value="Kyrgyzstan">Kyrgyzstan</option><option title="Lao People's Democratic Republic" value="Lao People's Democratic Republic">Lao People&#39;s Democratic Republic</option><option title="Latvia" value="Latvia">Latvia</option><option title="Lebanon" value="Lebanon">Lebanon</option><option title="Lesotho" value="Lesotho">Lesotho</option><option title="Liberia" value="Liberia">Liberia</option><option title="Libya" value="Libya">Libya</option><option title="Liechtenstein" value="Liechtenstein">Liechtenstein</option><option title="Lithuania" value="Lithuania">Lithuania</option><option title="Luxembourg" value="Luxembourg">Luxembourg</option><option title="Macao" value="Macao">Macao</option><option title="Macedonia, the former Yugoslav Republic of" value="Macedonia, the former Yugoslav Republic of">Macedonia, the former Yugoslav Republic of</option><option title="Madagascar" value="Madagascar">Madagascar</option><option title="Malawi" value="Malawi">Malawi</option><option title="Malaysia" value="Malaysia">Malaysia</option><option title="Maldives" value="Maldives">Maldives</option><option title="Mali" value="Mali">Mali</option><option title="Malta" value="Malta">Malta</option><option title="Marshall Islands" value="Marshall Islands">Marshall Islands</option><option title="Martinique" value="Martinique">Martinique</option><option title="Mauritania" value="Mauritania">Mauritania</option><option title="Mauritius" value="Mauritius">Mauritius</option><option title="Mayotte" value="Mayotte">Mayotte</option><option title="Mexico" value="Mexico">Mexico</option><option title="Micronesia, Federated States of" value="Micronesia, Federated States of">Micronesia, Federated States of</option><option title="Moldova, Republic of" value="Moldova, Republic of">Moldova, Republic of</option><option title="Monaco" value="Monaco">Monaco</option><option title="Mongolia" value="Mongolia">Mongolia</option><option title="Montenegro" value="Montenegro">Montenegro</option><option title="Montserrat" value="Montserrat">Montserrat</option><option title="Morocco" value="Morocco">Morocco</option><option title="Mozambique" value="Mozambique">Mozambique</option><option title="Myanmar" value="Myanmar">Myanmar</option><option title="Namibia" value="Namibia">Namibia</option><option title="Nauru" value="Nauru">Nauru</option><option title="Nepal" value="Nepal">Nepal</option><option title="Netherlands" value="Netherlands">Netherlands</option><option title="New Caledonia" value="New Caledonia">New Caledonia</option><option title="New Zealand" value="New Zealand">New Zealand</option><option title="Nicaragua" value="Nicaragua">Nicaragua</option><option title="Niger" value="Niger">Niger</option><option title="Nigeria" value="Nigeria">Nigeria</option><option title="Niue" value="Niue">Niue</option><option title="Norfolk Island" value="Norfolk Island">Norfolk Island</option><option title="Northern Mariana Islands" value="Northern Mariana Islands">Northern Mariana Islands</option><option title="Norway" value="Norway">Norway</option><option title="Oman" value="Oman">Oman</option><option title="Pakistan" value="Pakistan">Pakistan</option><option title="Palau" value="Palau">Palau</option><option title="Palestinian Territory, Occupied" value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option><option title="Panama" value="Panama">Panama</option><option title="Papua New Guinea" value="Papua New Guinea">Papua New Guinea</option><option title="Paraguay" value="Paraguay">Paraguay</option><option title="Peru" value="Peru">Peru</option><option title="Philippines" value="Philippines">Philippines</option><option title="Pitcairn" value="Pitcairn">Pitcairn</option><option title="Poland" value="Poland">Poland</option><option title="Portugal" value="Portugal">Portugal</option><option title="Puerto Rico" value="Puerto Rico">Puerto Rico</option><option title="Qatar" value="Qatar">Qatar</option><option title="Réunion" value="Réunion">R&eacute;union</option><option title="Romania" value="Romania">Romania</option><option title="Russian Federation" value="Russian Federation">Russian Federation</option><option title="Rwanda" value="Rwanda">Rwanda</option><option title="Saint Barthélemy" value="Saint Barthélemy">Saint Barth&eacute;lemy</option><option title="Saint Helena, Ascension and Tristan da Cunha" value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option><option title="Saint Kitts and Nevis" value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option title="Saint Lucia" value="Saint Lucia">Saint Lucia</option><option title="Saint Martin (French part)" value="Saint Martin (French part)">Saint Martin (French part)</option><option title="Saint Pierre and Miquelon" value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option><option title="Saint Vincent and the Grenadines" value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option title="Samoa" value="Samoa">Samoa</option><option title="San Marino" value="San Marino">San Marino</option><option title="Sao Tome and Principe" value="Sao Tome and Principe">Sao Tome and Principe</option><option title="Saudi Arabia" value="Saudi Arabia">Saudi Arabia</option><option title="Senegal" value="Senegal">Senegal</option><option title="Serbia" value="Serbia">Serbia</option><option title="Seychelles" value="Seychelles">Seychelles</option><option title="Sierra Leone" value="Sierra Leone">Sierra Leone</option><option title="Singapore" value="Singapore">Singapore</option><option title="Sint Maarten (Dutch part)" value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option><option title="Slovakia" value="Slovakia">Slovakia</option><option title="Slovenia" value="Slovenia">Slovenia</option><option title="Solomon Islands" value="Solomon Islands">Solomon Islands</option><option title="Somalia" value="Somalia">Somalia</option><option title="South Africa" value="South Africa">South Africa</option><option title="South Georgia and the South Sandwich Islands" value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option><option title="South Sudan" value="South Sudan">South Sudan</option><option title="Spain" value="Spain">Spain</option><option title="Sri Lanka" value="Sri Lanka">Sri Lanka</option><option title="Sudan" value="Sudan">Sudan</option><option title="Suriname" value="Suriname">Suriname</option><option title="Svalbard and Jan Mayen" value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option><option title="Swaziland" value="Swaziland">Swaziland</option><option title="Sweden" value="Sweden">Sweden</option><option title="Switzerland" value="Switzerland">Switzerland</option><option title="Syrian Arab Republic" value="Syrian Arab Republic">Syrian Arab Republic</option><option title="Taiwan, Province of China" value="Taiwan, Province of China">Taiwan, Province of China</option><option title="Tajikistan" value="Tajikistan">Tajikistan</option><option title="Tanzania, United Republic of" value="Tanzania, United Republic of">Tanzania, United Republic of</option><option title="Thailand" value="Thailand">Thailand</option><option title="Timor-Leste" value="Timor-Leste">Timor-Leste</option><option title="Togo" value="Togo">Togo</option><option title="Tokelau" value="Tokelau">Tokelau</option><option title="Tonga" value="Tonga">Tonga</option><option title="Trinidad and Tobago" value="Trinidad and Tobago">Trinidad and Tobago</option><option title="Tunisia" value="Tunisia">Tunisia</option><option title="Turkey" value="Turkey">Turkey</option><option title="Turkmenistan" value="Turkmenistan">Turkmenistan</option><option title="Turks and Caicos Islands" value="Turks and Caicos Islands">Turks and Caicos Islands</option><option title="Tuvalu" value="Tuvalu">Tuvalu</option><option title="Uganda" value="Uganda">Uganda</option><option title="Ukraine" value="Ukraine">Ukraine</option><option title="United Arab Emirates" value="United Arab Emirates">United Arab Emirates</option><option title="United Kingdom" value="United Kingdom">United Kingdom</option><option title="United States" value="United States">United States</option><option title="United States Minor Outlying Islands" value="United States Minor Outlying Islands">United States Minor Outlying Islands</option><option title="Uruguay" value="Uruguay">Uruguay</option><option title="Uzbekistan" value="Uzbekistan">Uzbekistan</option><option title="Vanuatu" value="Vanuatu">Vanuatu</option><option title="Venezuela, Bolivarian Republic of" value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option><option title="Viet Nam" value="Viet Nam">Viet Nam</option><option title="Virgin Islands, British" value="Virgin Islands, British">Virgin Islands, British</option><option title="Virgin Islands, U.S." value="Virgin Islands, U.S.">Virgin Islands, U.S.</option><option title="Wallis and Futuna" value="Wallis and Futuna">Wallis and Futuna</option><option title="Western Sahara" value="Western Sahara">Western Sahara</option><option title="Yemen" value="Yemen">Yemen</option><option title="Zambia" value="Zambia">Zambia</option><option title="Zimbabwe" value="Zimbabwe">Zimbabwe</option> </select><span id="vld_Country_Step2" style="color:Red">*</span></td>
		</tr>
		<tr>
			<td valign="top"><label for="AUFAddressType_Step2">Location Title:</label></td>
			<td><select id="AUFAddressType_Step2" name="AUFAddressType_Step2"><option disabled="disabled" selected="selected" value="">Please Choose</option><option value="Owned">Owned</option><option value="Rented">Rented</option><option value="Leased">Leased</option> </select></td>
		</tr>
		<tr>
			<td colspan="2"><input name="billingtoo" onclick="FillBilling(this.form)" type="checkbox" /> <em>Check this box if Billing Address and Shipping Address are same.</em></td>
		</tr>
		<tr>
			<td colspan="2">
			<h3 class="plainBoxHeading" colspan="4" style="border-top:0px; border-bottom:0px; border-left:3px solid #ED1D26; background:#e1e1e1; color:#555; padding:5px; " valign="top">Shipping Information</h3>
			</td>
		</tr>
		<tr>
			<td valign="top" width="21%"><label for="AUFShippingAddress_Step2">Shipping Address:</label></td>
			<td><input id="AUFShippingAddress_Step2" maxlength="255" name="AUFShippingAddress_Step2" size="20" type="text" value="" /></td>
		</tr>
		<tr>
			<td valign="top"><label for="AUFShippingCity_Step2">City:</label></td>
			<td><input id="AUFShippingCity_Step2" maxlength="255" name="AUFShippingCity_Step2" size="20" type="text" value="" /></td>
		</tr>
		<tr>
			<td valign="top"><label for="AUFShippingState_Step2">State/Province:</label></td>
			<td><input id="AUFShippingState_Step2" maxlength="255" name="AUFShippingState_Step2" size="20" type="text" value="" /></td>
		</tr>
		<tr>
			<td valign="top"><label for="AUFShippingZip_Step2">Postal/Zip Code:</label></td>
			<td><input id="AUFShippingZip_Step2" maxlength="255" name="AUFShippingZip_Step2" size="20" type="text" value="" /></td>
		</tr>
		<tr>
			<td valign="top"><label for="AUFShippingCountry_Step2">Country:</label></td>
			<td><select id="AUFShippingCountry_Step2" name="AUFShippingCountry_Step2" style="width: 150px;" type="select"><option title="United States" value="United States">United States</option><option title="Afghanistan" value="Afghanistan">Afghanistan</option><option title="Åland Islands" value="Åland Islands">&Aring;land Islands</option><option title="Albania" value="Albania">Albania</option><option title="Algeria" value="Algeria">Algeria</option><option title="American Samoa" value="American Samoa">American Samoa</option><option title="Andorra" value="Andorra">Andorra</option><option title="Angola" value="Angola">Angola</option><option title="Anguilla" value="Anguilla">Anguilla</option><option title="Antarctica" value="Antarctica">Antarctica</option><option title="Antigua and Barbuda" value="Antigua and Barbuda">Antigua and Barbuda</option><option title="Argentina" value="Argentina">Argentina</option><option title="Armenia" value="Armenia">Armenia</option><option title="Aruba" value="Aruba">Aruba</option><option title="Australia" value="Australia">Australia</option><option title="Austria" value="Austria">Austria</option><option title="Azerbaijan" value="Azerbaijan">Azerbaijan</option><option title="Bahamas" value="Bahamas">Bahamas</option><option title="Bahrain" value="Bahrain">Bahrain</option><option title="Bangladesh" value="Bangladesh">Bangladesh</option><option title="Barbados" value="Barbados">Barbados</option><option title="Belarus" value="Belarus">Belarus</option><option title="Belgium" value="Belgium">Belgium</option><option title="Belize" value="Belize">Belize</option><option title="Benin" value="Benin">Benin</option><option title="Bermuda" value="Bermuda">Bermuda</option><option title="Bhutan" value="Bhutan">Bhutan</option><option title="Bolivia, Plurinational State of" value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option><option title="Bonaire, Sint Eustatius and Saba" value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option><option title="Bosnia and Herzegovina" value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option title="Botswana" value="Botswana">Botswana</option><option title="Bouvet Island" value="Bouvet Island">Bouvet Island</option><option title="Brazil" value="Brazil">Brazil</option><option title="British Indian Ocean Territory" value="British Indian Ocean Territory">British Indian Ocean Territory</option><option title="Brunei Darussalam" value="Brunei Darussalam">Brunei Darussalam</option><option title="Bulgaria" value="Bulgaria">Bulgaria</option><option title="Burkina Faso" value="Burkina Faso">Burkina Faso</option><option title="Burundi" value="Burundi">Burundi</option><option title="Cambodia" value="Cambodia">Cambodia</option><option title="Cameroon" value="Cameroon">Cameroon</option><option title="Canada" value="Canada">Canada</option><option title="Cape Verde" value="Cape Verde">Cape Verde</option><option title="Cayman Islands" value="Cayman Islands">Cayman Islands</option><option title="Central African Republic" value="Central African Republic">Central African Republic</option><option title="Chad" value="Chad">Chad</option><option title="Chile" value="Chile">Chile</option><option title="China" value="China">China</option><option title="Christmas Island" value="Christmas Island">Christmas Island</option><option title="Cocos (Keeling) Islands" value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option title="Colombia" value="Colombia">Colombia</option><option title="Comoros" value="Comoros">Comoros</option><option title="Congo" value="Congo">Congo</option><option title="Congo, the Democratic Republic of the" value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option><option title="Cook Islands" value="Cook Islands">Cook Islands</option><option title="Costa Rica" value="Costa Rica">Costa Rica</option><option title="Côte d'Ivoire" value="Côte d'Ivoire">C&ocirc;te d&#39;Ivoire</option><option title="Croatia" value="Croatia">Croatia</option><option title="Cuba" value="Cuba">Cuba</option><option title="Curaçao" value="Curaçao">Cura&ccedil;ao</option><option title="Cyprus" value="Cyprus">Cyprus</option><option title="Czech Republic" value="Czech Republic">Czech Republic</option><option title="Denmark" value="Denmark">Denmark</option><option title="Djibouti" value="Djibouti">Djibouti</option><option title="Dominica" value="Dominica">Dominica</option><option title="Dominican Republic" value="Dominican Republic">Dominican Republic</option><option title="Ecuador" value="Ecuador">Ecuador</option><option title="Egypt" value="Egypt">Egypt</option><option title="El Salvador" value="El Salvador">El Salvador</option><option title="Equatorial Guinea" value="Equatorial Guinea">Equatorial Guinea</option><option title="Eritrea" value="Eritrea">Eritrea</option><option title="Estonia" value="Estonia">Estonia</option><option title="Ethiopia" value="Ethiopia">Ethiopia</option><option title="Falkland Islands (Malvinas)" value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option><option title="Faroe Islands" value="Faroe Islands">Faroe Islands</option><option title="Fiji" value="Fiji">Fiji</option><option title="Finland" value="Finland">Finland</option><option title="France" value="France">France</option><option title="French Guiana" value="French Guiana">French Guiana</option><option title="French Polynesia" value="French Polynesia">French Polynesia</option><option title="French Southern Territories" value="French Southern Territories">French Southern Territories</option><option title="Gabon" value="Gabon">Gabon</option><option title="Gambia" value="Gambia">Gambia</option><option title="Georgia" value="Georgia">Georgia</option><option title="Germany" value="Germany">Germany</option><option title="Ghana" value="Ghana">Ghana</option><option title="Gibraltar" value="Gibraltar">Gibraltar</option><option title="Greece" value="Greece">Greece</option><option title="Greenland" value="Greenland">Greenland</option><option title="Grenada" value="Grenada">Grenada</option><option title="Guadeloupe" value="Guadeloupe">Guadeloupe</option><option title="Guam" value="Guam">Guam</option><option title="Guatemala" value="Guatemala">Guatemala</option><option title="Guernsey" value="Guernsey">Guernsey</option><option title="Guinea" value="Guinea">Guinea</option><option title="Guinea-Bissau" value="Guinea-Bissau">Guinea-Bissau</option><option title="Guyana" value="Guyana">Guyana</option><option title="Haiti" value="Haiti">Haiti</option><option title="Heard Island and McDonald Islands" value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option><option title="Holy See (Vatican City State)" value="Holy See (Vatican City State)">Holy See (Vatican City State)</option><option title="Honduras" value="Honduras">Honduras</option><option title="Hong Kong" value="Hong Kong">Hong Kong</option><option title="Hungary" value="Hungary">Hungary</option><option title="Iceland" value="Iceland">Iceland</option><option title="India" value="India">India</option><option title="Indonesia" value="Indonesia">Indonesia</option><option title="Iran, Islamic Republic of" value="Iran, Islamic Republic of">Iran, Islamic Republic of</option><option title="Iraq" value="Iraq">Iraq</option><option title="Ireland" value="Ireland">Ireland</option><option title="Isle of Man" value="Isle of Man">Isle of Man</option><option title="Israel" value="Israel">Israel</option><option title="Italy" value="Italy">Italy</option><option title="Jamaica" value="Jamaica">Jamaica</option><option title="Japan" value="Japan">Japan</option><option title="Jersey" value="Jersey">Jersey</option><option title="Jordan" value="Jordan">Jordan</option><option title="Kazakhstan" value="Kazakhstan">Kazakhstan</option><option title="Kenya" value="Kenya">Kenya</option><option title="Kiribati" value="Kiribati">Kiribati</option><option title="Korea, Democratic People's Republic of" value="Korea, Democratic People's Republic of">Korea, Democratic People&#39;s Republic of</option><option title="Korea, Republic of" value="Korea, Republic of">Korea, Republic of</option><option title="Kuwait" value="Kuwait">Kuwait</option><option title="Kyrgyzstan" value="Kyrgyzstan">Kyrgyzstan</option><option title="Lao People's Democratic Republic" value="Lao People's Democratic Republic">Lao People&#39;s Democratic Republic</option><option title="Latvia" value="Latvia">Latvia</option><option title="Lebanon" value="Lebanon">Lebanon</option><option title="Lesotho" value="Lesotho">Lesotho</option><option title="Liberia" value="Liberia">Liberia</option><option title="Libya" value="Libya">Libya</option><option title="Liechtenstein" value="Liechtenstein">Liechtenstein</option><option title="Lithuania" value="Lithuania">Lithuania</option><option title="Luxembourg" value="Luxembourg">Luxembourg</option><option title="Macao" value="Macao">Macao</option><option title="Macedonia, the former Yugoslav Republic of" value="Macedonia, the former Yugoslav Republic of">Macedonia, the former Yugoslav Republic of</option><option title="Madagascar" value="Madagascar">Madagascar</option><option title="Malawi" value="Malawi">Malawi</option><option title="Malaysia" value="Malaysia">Malaysia</option><option title="Maldives" value="Maldives">Maldives</option><option title="Mali" value="Mali">Mali</option><option title="Malta" value="Malta">Malta</option><option title="Marshall Islands" value="Marshall Islands">Marshall Islands</option><option title="Martinique" value="Martinique">Martinique</option><option title="Mauritania" value="Mauritania">Mauritania</option><option title="Mauritius" value="Mauritius">Mauritius</option><option title="Mayotte" value="Mayotte">Mayotte</option><option title="Mexico" value="Mexico">Mexico</option><option title="Micronesia, Federated States of" value="Micronesia, Federated States of">Micronesia, Federated States of</option><option title="Moldova, Republic of" value="Moldova, Republic of">Moldova, Republic of</option><option title="Monaco" value="Monaco">Monaco</option><option title="Mongolia" value="Mongolia">Mongolia</option><option title="Montenegro" value="Montenegro">Montenegro</option><option title="Montserrat" value="Montserrat">Montserrat</option><option title="Morocco" value="Morocco">Morocco</option><option title="Mozambique" value="Mozambique">Mozambique</option><option title="Myanmar" value="Myanmar">Myanmar</option><option title="Namibia" value="Namibia">Namibia</option><option title="Nauru" value="Nauru">Nauru</option><option title="Nepal" value="Nepal">Nepal</option><option title="Netherlands" value="Netherlands">Netherlands</option><option title="New Caledonia" value="New Caledonia">New Caledonia</option><option title="New Zealand" value="New Zealand">New Zealand</option><option title="Nicaragua" value="Nicaragua">Nicaragua</option><option title="Niger" value="Niger">Niger</option><option title="Nigeria" value="Nigeria">Nigeria</option><option title="Niue" value="Niue">Niue</option><option title="Norfolk Island" value="Norfolk Island">Norfolk Island</option><option title="Northern Mariana Islands" value="Northern Mariana Islands">Northern Mariana Islands</option><option title="Norway" value="Norway">Norway</option><option title="Oman" value="Oman">Oman</option><option title="Pakistan" value="Pakistan">Pakistan</option><option title="Palau" value="Palau">Palau</option><option title="Palestinian Territory, Occupied" value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option><option title="Panama" value="Panama">Panama</option><option title="Papua New Guinea" value="Papua New Guinea">Papua New Guinea</option><option title="Paraguay" value="Paraguay">Paraguay</option><option title="Peru" value="Peru">Peru</option><option title="Philippines" value="Philippines">Philippines</option><option title="Pitcairn" value="Pitcairn">Pitcairn</option><option title="Poland" value="Poland">Poland</option><option title="Portugal" value="Portugal">Portugal</option><option title="Puerto Rico" value="Puerto Rico">Puerto Rico</option><option title="Qatar" value="Qatar">Qatar</option><option title="Réunion" value="Réunion">R&eacute;union</option><option title="Romania" value="Romania">Romania</option><option title="Russian Federation" value="Russian Federation">Russian Federation</option><option title="Rwanda" value="Rwanda">Rwanda</option><option title="Saint Barthélemy" value="Saint Barthélemy">Saint Barth&eacute;lemy</option><option title="Saint Helena, Ascension and Tristan da Cunha" value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option><option title="Saint Kitts and Nevis" value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option title="Saint Lucia" value="Saint Lucia">Saint Lucia</option><option title="Saint Martin (French part)" value="Saint Martin (French part)">Saint Martin (French part)</option><option title="Saint Pierre and Miquelon" value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option><option title="Saint Vincent and the Grenadines" value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option title="Samoa" value="Samoa">Samoa</option><option title="San Marino" value="San Marino">San Marino</option><option title="Sao Tome and Principe" value="Sao Tome and Principe">Sao Tome and Principe</option><option title="Saudi Arabia" value="Saudi Arabia">Saudi Arabia</option><option title="Senegal" value="Senegal">Senegal</option><option title="Serbia" value="Serbia">Serbia</option><option title="Seychelles" value="Seychelles">Seychelles</option><option title="Sierra Leone" value="Sierra Leone">Sierra Leone</option><option title="Singapore" value="Singapore">Singapore</option><option title="Sint Maarten (Dutch part)" value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option><option title="Slovakia" value="Slovakia">Slovakia</option><option title="Slovenia" value="Slovenia">Slovenia</option><option title="Solomon Islands" value="Solomon Islands">Solomon Islands</option><option title="Somalia" value="Somalia">Somalia</option><option title="South Africa" value="South Africa">South Africa</option><option title="South Georgia and the South Sandwich Islands" value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option><option title="South Sudan" value="South Sudan">South Sudan</option><option title="Spain" value="Spain">Spain</option><option title="Sri Lanka" value="Sri Lanka">Sri Lanka</option><option title="Sudan" value="Sudan">Sudan</option><option title="Suriname" value="Suriname">Suriname</option><option title="Svalbard and Jan Mayen" value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option><option title="Swaziland" value="Swaziland">Swaziland</option><option title="Sweden" value="Sweden">Sweden</option><option title="Switzerland" value="Switzerland">Switzerland</option><option title="Syrian Arab Republic" value="Syrian Arab Republic">Syrian Arab Republic</option><option title="Taiwan, Province of China" value="Taiwan, Province of China">Taiwan, Province of China</option><option title="Tajikistan" value="Tajikistan">Tajikistan</option><option title="Tanzania, United Republic of" value="Tanzania, United Republic of">Tanzania, United Republic of</option><option title="Thailand" value="Thailand">Thailand</option><option title="Timor-Leste" value="Timor-Leste">Timor-Leste</option><option title="Togo" value="Togo">Togo</option><option title="Tokelau" value="Tokelau">Tokelau</option><option title="Tonga" value="Tonga">Tonga</option><option title="Trinidad and Tobago" value="Trinidad and Tobago">Trinidad and Tobago</option><option title="Tunisia" value="Tunisia">Tunisia</option><option title="Turkey" value="Turkey">Turkey</option><option title="Turkmenistan" value="Turkmenistan">Turkmenistan</option><option title="Turks and Caicos Islands" value="Turks and Caicos Islands">Turks and Caicos Islands</option><option title="Tuvalu" value="Tuvalu">Tuvalu</option><option title="Uganda" value="Uganda">Uganda</option><option title="Ukraine" value="Ukraine">Ukraine</option><option title="United Arab Emirates" value="United Arab Emirates">United Arab Emirates</option><option title="United Kingdom" value="United Kingdom">United Kingdom</option><option title="United States" value="United States">United States</option><option title="United States Minor Outlying Islands" value="United States Minor Outlying Islands">United States Minor Outlying Islands</option><option title="Uruguay" value="Uruguay">Uruguay</option><option title="Uzbekistan" value="Uzbekistan">Uzbekistan</option><option title="Vanuatu" value="Vanuatu">Vanuatu</option><option title="Venezuela, Bolivarian Republic of" value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option><option title="Viet Nam" value="Viet Nam">Viet Nam</option><option title="Virgin Islands, British" value="Virgin Islands, British">Virgin Islands, British</option><option title="Virgin Islands, U.S." value="Virgin Islands, U.S.">Virgin Islands, U.S.</option><option title="Wallis and Futuna" value="Wallis and Futuna">Wallis and Futuna</option><option title="Western Sahara" value="Western Sahara">Western Sahara</option><option title="Yemen" value="Yemen">Yemen</option><option title="Zambia" value="Zambia">Zambia</option><option title="Zimbabwe" value="Zimbabwe">Zimbabwe</option> </select></td>
		</tr>
	</tbody>
</table>
</div>

<div>
<table>
	<tbody>
		<tr>
			<td colspan="4">
			<h3 class="plainBoxHeading" colspan="4" style="border-top:0px; border-bottom:0px; border-left:3px solid #ED1D26; background:#e1e1e1; color:#555; padding:5px; " valign="top">Customer Information</h3>
			</td>
		</tr>
		<tr>
			<td valign="top" width="21%"><label for="Name_Step2">Principal Name 1:</label></td>
			<td width="21%"><input id="Name_Step2" maxlength="31" name="Name_Step2" size="20" type="text" value="" /> <span id="vld_Name_Step2" style="color:Red">*</span></td>
			<td valign="top" width="18%"><label for="AUFTitle1_Step2">Title:</label></td>
			<td width="40%"><input id="AUFTitle1_Step2" maxlength="255" name="AUFTitle1_Step2" size="20" type="text" value="" /><span id="vld_AUFTitle1_Step2" style="color:Red">*</span></td>
		</tr>
		<tr>
			<td valign="top"><label for="AUFName2_Step2">Principal Name 2:</label></td>
			<td><input id="AUFName2_Step2" maxlength="255" name="AUFName2_Step2" size="20" type="text" value="" /></td>
			<td valign="top"><label for="AUFTitle2_Step2">Title:</label></td>
			<td><input id="AUFTitle2_Step2" maxlength="255" name="AUFTitle2_Step2" size="20" type="text" value="" /></td>
		</tr>
		<tr>
			<td valign="top"><label for="AUFPhoneNum_Step2">Phone Number:</label></td>
			<td><input id="AUFPhoneNum_Step2" maxlength="255" name="AUFPhoneNum_Step2" size="20" type="number" pattern='[0-9]{10}' value="(000) 000-0000" /><span id="vld_AUFPhoneNum_Step2" style="color:Red">*</span></td>
			<td valign="top"><label for="AUFFaxNum_Step2">Fax Number:</label></td>
			<td><input id="AUFFaxNum_Step2" maxlength="255" name="AUFFaxNum_Step2" size="20" type="number" pattern='[0-9]{10}' value="(000) 000-0000" /></td>
		</tr>
		<tr>
			<td valign="top"><label for="AUFWebsite_Step2">Website:</label></td>
			<td><input id="AUFWebsite_Step2" maxlength="255" name="AUFWebsite_Step2" size="20" type="text" value="" /></td>
			<td valign="top"><label for="Email_Step2">Email:</label></td>
			<td><input id="Email_Step2" maxlength="1023" name="Email_Step2" onblur="validateEmail(this.value);" size="20" type="text" value="" /><span id="vld_Email_Step2" style="color:Red">*</span></td>
		</tr>
		<tr>
			<td valign="top"><label for="AUFNumofYears_Step2">Number of Years in Business:</label></td>
			<td><input id="AUFNumofYears_Step2" maxlength="255" name="AUFNumofYears_Step2" size="20" type="number" value="00" /><span id="vld_AUFNumofYears_Step2" style="color:Red">*</span></td>
			<td valign="top"><label for="AUFFedTaxID_Step2">Fed. Tax ID: (SS No. If Sole Proprietor)</label></td>
			<td><input id="AUFFedTaxID_Step2" maxlength="255" name="AUFFedTaxID_Step2" size="20" type="text" value="" /><span id="vld_AUFFedTaxID_Step2" style="color:Red">*</span></td>
		</tr>
	</tbody>
</table>
</div>

<div>
<table>
	<tbody>
		<tr>
			<td colspan="2">
			<h3 class="plainBoxHeading" colspan="4" style="border-top:0px; border-bottom:0px; border-left:3px solid #ED1D26; background:#e1e1e1; color:#555; padding:5px; " valign="top">Bank Information</h3>
			<em>(For prepaid or credit card accounts, please download and fax credit card authorization form) </em></td>
		</tr>
		<tr>
			<td valign="top" width="21%"><label for="AUFBank_Step2">1st Bank:</label></td>
			<td><input id="AUFBank_Step2" maxlength="255" name="AUFBank_Step2" size="20" type="text" value="" /><span id="vld_AUFBank_Step2" style="color:Red">*</span></td>
		</tr>
		<tr>
			<td valign="top"><label for="AUFBankAddress_Step2">Address:</label></td>
			<td><input id="AUFBankAddress_Step2" maxlength="255" name="AUFBankAddress_Step2" size="20" type="text" value="" /><span id="vld_AUFBankAddress_Step2" style="color:Red">*</span></td>
		</tr>
		<tr>
			<td valign="top"><label for="AUFAccOfficer_Step2">Account Officer:</label></td>
			<td><input id="AUFAccOfficer_Step2" maxlength="255" name="AUFAccOfficer_Step2" size="20" type="text" value="" /><span id="vld_AUFAccOfficer_Step2" style="color:Red">*</span></td>
		</tr>
		<tr>
			<td valign="top"><label for="AUFBankPhoneNum_Step2">Phone Number:</label></td>
			<td><input id="AUFBankPhoneNum_Step2" maxlength="255" name="AUFBankPhoneNum_Step2" size="20" type="number" pattern='[0-9]{10}' value="(000) 000-0000" /><span id="vld_AUFBankPhoneNum_Step2" style="color:Red">*</span></td>
		</tr>
		<tr>
			<td valign="top"><label for="AUFChqAccNum_Step2">Checking Account Number:</label></td>
			<td><input id="AUFChqAccNum_Step2" maxlength="255" name="AUFChqAccNum_Step2" size="20" type="number" value="" /><span id="vld_AUFChqAccNum_Step2" style="color:Red">*</span></td>
		</tr>
		<tr>
			<td valign="top"><label for="AUFSavAccNum_Step2">Saving Account Number:</label></td>
			<td><input id="AUFSavAccNum_Step2" maxlength="255" name="AUFSavAccNum_Step2" size="20" type="number" value="" /><span id="vld_AUFSavAccNum_Step2" style="color:Red">*</span></td>
		</tr>
		<tr>
			<td valign="top"><label for="AUFLoanNum_Step2">Loan Number:</label></td>
			<td><input id="AUFLoanNum_Step2" maxlength="255" name="AUFLoanNum_Step2" size="20" type="text" value="" /><span id="vld_AUFLoanNum_Step2" style="color:Red">*</span></td>
		</tr>
		<tr>
			<td valign="top"><label for="AUFCreditRequested_Step2">Credit Amount Requested<span style="color:Red">**</span>:</label></td>
			<td><input id="AUFCreditRequested_Step2" maxlength="255" name="AUFCreditRequested_Step2" size="20" type="number" value="$0.00" /><span id="vld_AUFCreditRequested_Step2" style="color:Red">*</span></td>
		</tr>
        		<tr>
			<td colspan="2">
            <h3 class="plainBoxHeading" colspan="4" style="border-top:0px; border-bottom:0px; border-left:3px solid #ED1D26; background:#e1e1e1; color:#555; padding:5px; " valign="top">Please fill in information to accept our Terms & Conditions:</h3>
            </td>
            </tr>
           <tr>
      <td  valign ="top">
         <label for="AUFSignName_Step2">Full Name:</label>
      </td>
      <td>
         <input type="text" id="AUFSignName_Step2" name="AUFSignName_Step2" maxlength="255" size="20" value="" />
         <span id="vld_AUFSignName_Step2" style="color:Red">*</span>
      </td>
   </tr>
           <tr>
      <td  valign ="top">
         <label for="AUFSignDate_Step2">Date:</label>
      </td>
      <td>
         <input type="text" id="AUFSignDate_Step2" name="AUFSignDate_Step2" size="20" value="MM/DD/YYYY" />
         <span id="vld_AUFSignDate_Step2" style="color:Red">*</span>
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="AUFInitials_Step2">Please enter your initials:</label>
      </td>
      <td>
         <input type="text" id="AUFInitials_Step2" name="AUFInitials_Step2" maxlength="255" size="20" value="" />
         <span id="vld_AUFInitials_Step2" style="color:Red">*</span>
      </td>
   </tr>
   		<tr>
			<td colspan="2"><input id="AUFAuth_Step2" name="AUFAuth_Step2" type="checkbox" /> <em>Check this box to accept Terms &amp; Conditions.</em> <span>- <a href="http://www.avenview.com/index.php?main_page=authorization_agreement_terms" target="_blank">View Terms &amp; Conditions</a></span></td>
		</tr>
	</tbody>
</table>
</div>

<div id="recaptchaError" style="color:#ff0000">&nbsp;</div>

<div class="g-recaptcha" data-sitekey="6LdVfCITAAAAADA-3B9gscjrgpFh0DfsvvXc5pYR" style="padding-bottom:5px;">&nbsp;</div>
<input class="button" id="submit_web_form" name="submit_web_form" type="submit" value="Submit" />&nbsp;<a class="button" href="http://www.avenview.com/downloads/Credit_Card_Authorization_Form_2017.pdf" target="_blank">Download Credit Card Authorization Form</a></form>

<div><em><span style="color:Red">**</span>Companies requesting net terms must submit copies of their financial statements.<br />
Information provided will remain confidential and for the exclusive use of the Avenview credit department only. </em></div>
