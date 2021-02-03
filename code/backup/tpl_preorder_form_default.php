<!DOCTYPE html>
<head>
<title>Request A Demo: Avenview</title>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


<!-- INSERT THE FOLLOWING IN BETWEEN THE ‘BODY’ TAGS IN YOUR HTML PAGE -->
<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
<script src="https://www.methodintegration.com/MethodWebForms/Javascript/formValidation.js" type="text/javascript"></script>
<script type="text/javascript">

function validate_form(thisform){
     with (thisform){
 if (validate_required("Product_Step2","vld_Product_Step2","Product must be filled out!")==false)
{document.getElementById("Product_Step2").focus();return false;}
 if (validate_required("Name_Step2","vld_Name_Step2","Name must be filled out!")==false)
{document.getElementById("Name_Step2").focus();return false;}
 if (validate_required("Company_Step2","vld_Company_Step2","Company must be filled out!")==false)
{document.getElementById("Company_Step2").focus();return false;}
 if (validate_required("Email_Step2","vld_Email_Step2","Email must be filled out!")==false)
{document.getElementById("Email_Step2").focus();return false;}
 if (validate_required("PhoneNum_Step2","vld_PhoneNum_Step2","Phone Num must be filled out!")==false)
{document.getElementById("PhoneNum_Step2").focus();return false;}
 if (validate_required("Address_Step2","vld_Address_Step2","Address must be filled out!")==false)
{document.getElementById("Address_Step2").focus();return false;}
 if (validate_required("City_Step2","vld_City_Step2","City must be filled out!")==false)
{document.getElementById("City_Step2").focus();return false;}
 if (validate_required("PostalCode_Step2","vld_PostalCode_Step2","Postal Code must be filled out!")==false)
{document.getElementById("PostalCode_Step2").focus();return false;}
 if (validate_required("StateProvince_Step2","vld_StateProvince_Step2","State Province must be filled out!")==false)
{document.getElementById("StateProvince_Step2").focus();return false;}
 if (validate_required("Country_Step2","vld_Country_Step2","Country must be filled out!")==false)
{document.getElementById("Country_Step2").focus();return false;}

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
   }
}
</script>
</head>

<form action="https://www.methodintegration.com/method/timezonerouter.aspx?url=https://www.methodintegration.com/MethodWebForms/submit.aspx" onsubmit="return validate_form(this)" method="POST">
<input type="hidden" name="oid" value="Phvh0K4bR3WGRk1IGAx9KEpmPD3UlMyFu8m2g/PQ49U="/>
<input type="hidden" name="retURL" value="http://www.avenview.com/index.php?main_page=preorder"/>
<input type="hidden" name="formName" value="Pre-Order Form 2"/>
<div><h1>Pre-Order A Product</h1></div>
<table>
  <tr>
    <td class="plainBoxHeading" colspan="2" valign="top" style="border-top:0px; border-bottom:0px; border-left:3px solid #ED1D26; background:#e1e1e1; color:#555;">Product Information</td>
  </tr>
   <tr>
      <td  valign ="top">
         <label for="Product_Step2">Product:</label>
      </td>
      <td>
<?php $preOrd = $_GET["preOrder"] ?>
<select type="select" name="Product_Step2" id="Product_Step2" style="width: 150px;" class="requiredField preOrder">
<option value="None">Please Select One</option>
<option value="HDM-C6MWIPL-R" <?php if ($preOrd==19) echo 'selected="selected"';?>>HDM-C6MWIPL-R</option>
<option value="HDM-C6APEXIP-S" <?php if ($preOrd==18) echo 'selected="selected"';?>>HDM-C6APEXIP-S</option>
<option value="HDM-C6APEXIP-R" <?php if ($preOrd==16) echo 'selected="selected"';?>>HDM-C6APEXIP-R</option>
<option value="C-HDM2-4KEXD-A" <?php if ($preOrd==17) echo 'selected="selected"';?>>C-HDM2-4KEXD-A</option>
<option value="C-HDM-USB3" <?php if ($preOrd==15) echo 'selected="selected"';?>>C-HDM-USB3</option>
<option value="MLT-EDGEPRO-2X2" <?php if ($preOrd==13) echo 'selected="selected"';?>>MLT-EDGEPRO-2X2</option>
<option value="MLT-PROWALL-4K" <?php if ($preOrd==14) echo 'selected="selected"';?>>MLT-PROWALL-4K</option>
<option value="HBT2-C6POH-OPT" <?php if ($preOrd==1) echo 'selected="selected"';?>>HBT2-C6POH-OPT</option>
<option value="HBT2-C6POH-USB-SET" <?php if ($preOrd==2) echo 'selected="selected"';?>>HBT2-C6POH-USB-SET</option>
<option value="SW-4KHDM2-8X8" <?php if ($preOrd==3) echo 'selected="selected"';?>>SW-4KHDM2-8X8</option>
<option value="SW-HBT4K-C6-8X8E" <?php if ($preOrd==4) echo 'selected="selected"';?>>SW-HBT4K-C6-8X8E</option>
<option value="SW-4KHBT2-10X10A" <?php if ($preOrd==5) echo 'selected="selected"';?>>SW-4KHBT2-10X10A</option>
<option value="SW-HDM2-T4K-4X1" <?php if ($preOrd==7) echo 'selected="selected"';?>>SW-HDM2-T4K-4X1</option>
<option value="SPLIT-HDM2-T4K-2" <?php if ($preOrd==8) echo 'selected="selected"';?>>SPLIT-HDM2-T4K-2</option>
<option value="SPLIT-HDM2-T4K-8" <?php if ($preOrd==9) echo 'selected="selected"';?>>SPLIT-HDM2-T4K-8</option>
<option value="HDM2-SPLITPRO-T4K" <?php if ($preOrd==10) echo 'selected="selected"';?>>HDM2-SPLITPRO-T4K</option>
<option value="MP-4KHDM2" <?php if ($preOrd==12) echo 'selected="selected"';?>>MP-4KHDM2</option>
<option value="Other">Other</option>
</select>
         <span id="vld_Product_Step2" style="color:Red">*</span>
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="Quantity_Step2">Quantity</label>
      </td>
      <td>
         <input type="text" id="Quantity_Step2" name="Quantity_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr> 
   <tr>
     <td class="plainBoxHeading" colspan="2" valign="top" style="border-top:0px; border-bottom:0px; border-left:3px solid #ED1D26; background:#e1e1e1; color:#555;">Customer Information:</td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="Name_Step2">Name:</label>
      </td>
      <td>
         <input type="text" id="Name_Step2" name="Name_Step2" maxlength="31" size="20" value="" />
         <span id="vld_Name_Step2" style="color:Red">*</span>
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="Company_Step2">Company:</label>
      </td>
      <td>
         <input type="text" id="Company_Step2" name="Company_Step2" maxlength="255" size="20" value="" />
         <span id="vld_Company_Step2" style="color:Red">*</span>
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="Email_Step2">Email:</label>
      </td>
      <td>
         <input type="text" id="Email_Step2" name="Email_Step2" maxlength="1023" size="20" value="" />
         <span id="vld_Email_Step2" style="color:Red">*</span>
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="PhoneNum_Step2">Phone Number:</label>
      </td>
      <td>
         <input type="text" id="PhoneNum_Step2" name="PhoneNum_Step2" maxlength="255" size="20" value="" />
         <span id="vld_PhoneNum_Step2" style="color:Red">*</span>
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="Address_Step2">Address:</label>
      </td>
      <td>
         <input type="text" id="Address_Step2" name="Address_Step2" maxlength="255" size="20" value="" />
         <span id="vld_Address_Step2" style="color:Red">*</span>
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="City_Step2">City:</label>
      </td>
      <td>
         <input type="text" id="City_Step2" name="City_Step2" maxlength="255" size="20" value="" />
         <span id="vld_City_Step2" style="color:Red">*</span>
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="PostalCode_Step2">Postal Code/Zip Code:</label>
      </td>
      <td>
         <input type="text" id="PostalCode_Step2" name="PostalCode_Step2" maxlength="255" size="20" value="" />
         <span id="vld_PostalCode_Step2" style="color:Red">*</span>
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="StateProvince_Step2">State/Province:</label>
      </td>
      <td>
         <input type="text" id="StateProvince_Step2" name="StateProvince_Step2" maxlength="255" size="20" value="" />
         <span id="vld_StateProvince_Step2" style="color:Red">*</span>
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="Country_Step2">Country:</label>
      </td>
      <td>
<select type="select" id="Country_Step2" name="Country_Step2" style="width: 150px;">
	<option value="United States" title="United States">United States</option>
	<option value="Afghanistan" title="Afghanistan">Afghanistan</option>
	<option value="Åland Islands" title="Åland Islands">Åland Islands</option>
	<option value="Albania" title="Albania">Albania</option>
	<option value="Algeria" title="Algeria">Algeria</option>
	<option value="American Samoa" title="American Samoa">American Samoa</option>
	<option value="Andorra" title="Andorra">Andorra</option>
	<option value="Angola" title="Angola">Angola</option>
	<option value="Anguilla" title="Anguilla">Anguilla</option>
	<option value="Antarctica" title="Antarctica">Antarctica</option>
	<option value="Antigua and Barbuda" title="Antigua and Barbuda">Antigua and Barbuda</option>
	<option value="Argentina" title="Argentina">Argentina</option>
	<option value="Armenia" title="Armenia">Armenia</option>
	<option value="Aruba" title="Aruba">Aruba</option>
	<option value="Australia" title="Australia">Australia</option>
	<option value="Austria" title="Austria">Austria</option>
	<option value="Azerbaijan" title="Azerbaijan">Azerbaijan</option>
	<option value="Bahamas" title="Bahamas">Bahamas</option>
	<option value="Bahrain" title="Bahrain">Bahrain</option>
	<option value="Bangladesh" title="Bangladesh">Bangladesh</option>
	<option value="Barbados" title="Barbados">Barbados</option>
	<option value="Belarus" title="Belarus">Belarus</option>
	<option value="Belgium" title="Belgium">Belgium</option>
	<option value="Belize" title="Belize">Belize</option>
	<option value="Benin" title="Benin">Benin</option>
	<option value="Bermuda" title="Bermuda">Bermuda</option>
	<option value="Bhutan" title="Bhutan">Bhutan</option>
	<option value="Bolivia, Plurinational State of" title="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
	<option value="Bonaire, Sint Eustatius and Saba" title="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
	<option value="Bosnia and Herzegovina" title="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
	<option value="Botswana" title="Botswana">Botswana</option>
	<option value="Bouvet Island" title="Bouvet Island">Bouvet Island</option>
	<option value="Brazil" title="Brazil">Brazil</option>
	<option value="British Indian Ocean Territory" title="British Indian Ocean Territory">British Indian Ocean Territory</option>
	<option value="Brunei Darussalam" title="Brunei Darussalam">Brunei Darussalam</option>
	<option value="Bulgaria" title="Bulgaria">Bulgaria</option>
	<option value="Burkina Faso" title="Burkina Faso">Burkina Faso</option>
	<option value="Burundi" title="Burundi">Burundi</option>
	<option value="Cambodia" title="Cambodia">Cambodia</option>
	<option value="Cameroon" title="Cameroon">Cameroon</option>
	<option value="Canada" title="Canada">Canada</option>
	<option value="Cape Verde" title="Cape Verde">Cape Verde</option>
	<option value="Cayman Islands" title="Cayman Islands">Cayman Islands</option>
	<option value="Central African Republic" title="Central African Republic">Central African Republic</option>
	<option value="Chad" title="Chad">Chad</option>
	<option value="Chile" title="Chile">Chile</option>
	<option value="China" title="China">China</option>
	<option value="Christmas Island" title="Christmas Island">Christmas Island</option>
	<option value="Cocos (Keeling) Islands" title="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
	<option value="Colombia" title="Colombia">Colombia</option>
	<option value="Comoros" title="Comoros">Comoros</option>
	<option value="Congo" title="Congo">Congo</option>
	<option value="Congo, the Democratic Republic of the" title="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
	<option value="Cook Islands" title="Cook Islands">Cook Islands</option>
	<option value="Costa Rica" title="Costa Rica">Costa Rica</option>
	<option value="Côte d'Ivoire" title="Côte d'Ivoire">Côte d'Ivoire</option>
	<option value="Croatia" title="Croatia">Croatia</option>
	<option value="Cuba" title="Cuba">Cuba</option>
	<option value="Curaçao" title="Curaçao">Curaçao</option>
	<option value="Cyprus" title="Cyprus">Cyprus</option>
	<option value="Czech Republic" title="Czech Republic">Czech Republic</option>
	<option value="Denmark" title="Denmark">Denmark</option>
	<option value="Djibouti" title="Djibouti">Djibouti</option>
	<option value="Dominica" title="Dominica">Dominica</option>
	<option value="Dominican Republic" title="Dominican Republic">Dominican Republic</option>
	<option value="Ecuador" title="Ecuador">Ecuador</option>
	<option value="Egypt" title="Egypt">Egypt</option>
	<option value="El Salvador" title="El Salvador">El Salvador</option>
	<option value="Equatorial Guinea" title="Equatorial Guinea">Equatorial Guinea</option>
	<option value="Eritrea" title="Eritrea">Eritrea</option>
	<option value="Estonia" title="Estonia">Estonia</option>
	<option value="Ethiopia" title="Ethiopia">Ethiopia</option>
	<option value="Falkland Islands (Malvinas)" title="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
	<option value="Faroe Islands" title="Faroe Islands">Faroe Islands</option>
	<option value="Fiji" title="Fiji">Fiji</option>
	<option value="Finland" title="Finland">Finland</option>
	<option value="France" title="France">France</option>
	<option value="French Guiana" title="French Guiana">French Guiana</option>
	<option value="French Polynesia" title="French Polynesia">French Polynesia</option>
	<option value="French Southern Territories" title="French Southern Territories">French Southern Territories</option>
	<option value="Gabon" title="Gabon">Gabon</option>
	<option value="Gambia" title="Gambia">Gambia</option>
	<option value="Georgia" title="Georgia">Georgia</option>
	<option value="Germany" title="Germany">Germany</option>
	<option value="Ghana" title="Ghana">Ghana</option>
	<option value="Gibraltar" title="Gibraltar">Gibraltar</option>
	<option value="Greece" title="Greece">Greece</option>
	<option value="Greenland" title="Greenland">Greenland</option>
	<option value="Grenada" title="Grenada">Grenada</option>
	<option value="Guadeloupe" title="Guadeloupe">Guadeloupe</option>
	<option value="Guam" title="Guam">Guam</option>
	<option value="Guatemala" title="Guatemala">Guatemala</option>
	<option value="Guernsey" title="Guernsey">Guernsey</option>
	<option value="Guinea" title="Guinea">Guinea</option>
	<option value="Guinea-Bissau" title="Guinea-Bissau">Guinea-Bissau</option>
	<option value="Guyana" title="Guyana">Guyana</option>
	<option value="Haiti" title="Haiti">Haiti</option>
	<option value="Heard Island and McDonald Islands" title="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
	<option value="Holy See (Vatican City State)" title="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
	<option value="Honduras" title="Honduras">Honduras</option>
	<option value="Hong Kong" title="Hong Kong">Hong Kong</option>
	<option value="Hungary" title="Hungary">Hungary</option>
	<option value="Iceland" title="Iceland">Iceland</option>
	<option value="India" title="India">India</option>
	<option value="Indonesia" title="Indonesia">Indonesia</option>
	<option value="Iran, Islamic Republic of" title="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
	<option value="Iraq" title="Iraq">Iraq</option>
	<option value="Ireland" title="Ireland">Ireland</option>
	<option value="Isle of Man" title="Isle of Man">Isle of Man</option>
	<option value="Israel" title="Israel">Israel</option>
	<option value="Italy" title="Italy">Italy</option>
	<option value="Jamaica" title="Jamaica">Jamaica</option>
	<option value="Japan" title="Japan">Japan</option>
	<option value="Jersey" title="Jersey">Jersey</option>
	<option value="Jordan" title="Jordan">Jordan</option>
	<option value="Kazakhstan" title="Kazakhstan">Kazakhstan</option>
	<option value="Kenya" title="Kenya">Kenya</option>
	<option value="Kiribati" title="Kiribati">Kiribati</option>
	<option value="Korea, Democratic People's Republic of" title="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
	<option value="Korea, Republic of" title="Korea, Republic of">Korea, Republic of</option>
	<option value="Kuwait" title="Kuwait">Kuwait</option>
	<option value="Kyrgyzstan" title="Kyrgyzstan">Kyrgyzstan</option>
	<option value="Lao People's Democratic Republic" title="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
	<option value="Latvia" title="Latvia">Latvia</option>
	<option value="Lebanon" title="Lebanon">Lebanon</option>
	<option value="Lesotho" title="Lesotho">Lesotho</option>
	<option value="Liberia" title="Liberia">Liberia</option>
	<option value="Libya" title="Libya">Libya</option>
	<option value="Liechtenstein" title="Liechtenstein">Liechtenstein</option>
	<option value="Lithuania" title="Lithuania">Lithuania</option>
	<option value="Luxembourg" title="Luxembourg">Luxembourg</option>
	<option value="Macao" title="Macao">Macao</option>
	<option value="Macedonia, the former Yugoslav Republic of" title="Macedonia, the former Yugoslav Republic of">Macedonia, the former Yugoslav Republic of</option>
	<option value="Madagascar" title="Madagascar">Madagascar</option>
	<option value="Malawi" title="Malawi">Malawi</option>
	<option value="Malaysia" title="Malaysia">Malaysia</option>
	<option value="Maldives" title="Maldives">Maldives</option>
	<option value="Mali" title="Mali">Mali</option>
	<option value="Malta" title="Malta">Malta</option>
	<option value="Marshall Islands" title="Marshall Islands">Marshall Islands</option>
	<option value="Martinique" title="Martinique">Martinique</option>
	<option value="Mauritania" title="Mauritania">Mauritania</option>
	<option value="Mauritius" title="Mauritius">Mauritius</option>
	<option value="Mayotte" title="Mayotte">Mayotte</option>
	<option value="Mexico" title="Mexico">Mexico</option>
	<option value="Micronesia, Federated States of" title="Micronesia, Federated States of">Micronesia, Federated States of</option>
	<option value="Moldova, Republic of" title="Moldova, Republic of">Moldova, Republic of</option>
	<option value="Monaco" title="Monaco">Monaco</option>
	<option value="Mongolia" title="Mongolia">Mongolia</option>
	<option value="Montenegro" title="Montenegro">Montenegro</option>
	<option value="Montserrat" title="Montserrat">Montserrat</option>
	<option value="Morocco" title="Morocco">Morocco</option>
	<option value="Mozambique" title="Mozambique">Mozambique</option>
	<option value="Myanmar" title="Myanmar">Myanmar</option>
	<option value="Namibia" title="Namibia">Namibia</option>
	<option value="Nauru" title="Nauru">Nauru</option>
	<option value="Nepal" title="Nepal">Nepal</option>
	<option value="Netherlands" title="Netherlands">Netherlands</option>
	<option value="New Caledonia" title="New Caledonia">New Caledonia</option>
	<option value="New Zealand" title="New Zealand">New Zealand</option>
	<option value="Nicaragua" title="Nicaragua">Nicaragua</option>
	<option value="Niger" title="Niger">Niger</option>
	<option value="Nigeria" title="Nigeria">Nigeria</option>
	<option value="Niue" title="Niue">Niue</option>
	<option value="Norfolk Island" title="Norfolk Island">Norfolk Island</option>
	<option value="Northern Mariana Islands" title="Northern Mariana Islands">Northern Mariana Islands</option>
	<option value="Norway" title="Norway">Norway</option>
	<option value="Oman" title="Oman">Oman</option>
	<option value="Pakistan" title="Pakistan">Pakistan</option>
	<option value="Palau" title="Palau">Palau</option>
	<option value="Palestinian Territory, Occupied" title="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
	<option value="Panama" title="Panama">Panama</option>
	<option value="Papua New Guinea" title="Papua New Guinea">Papua New Guinea</option>
	<option value="Paraguay" title="Paraguay">Paraguay</option>
	<option value="Peru" title="Peru">Peru</option>
	<option value="Philippines" title="Philippines">Philippines</option>
	<option value="Pitcairn" title="Pitcairn">Pitcairn</option>
	<option value="Poland" title="Poland">Poland</option>
	<option value="Portugal" title="Portugal">Portugal</option>
	<option value="Puerto Rico" title="Puerto Rico">Puerto Rico</option>
	<option value="Qatar" title="Qatar">Qatar</option>
	<option value="Réunion" title="Réunion">Réunion</option>
	<option value="Romania" title="Romania">Romania</option>
	<option value="Russian Federation" title="Russian Federation">Russian Federation</option>
	<option value="Rwanda" title="Rwanda">Rwanda</option>
	<option value="Saint Barthélemy" title="Saint Barthélemy">Saint Barthélemy</option>
	<option value="Saint Helena, Ascension and Tristan da Cunha" title="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
	<option value="Saint Kitts and Nevis" title="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
	<option value="Saint Lucia" title="Saint Lucia">Saint Lucia</option>
	<option value="Saint Martin (French part)" title="Saint Martin (French part)">Saint Martin (French part)</option>
	<option value="Saint Pierre and Miquelon" title="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
	<option value="Saint Vincent and the Grenadines" title="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
	<option value="Samoa" title="Samoa">Samoa</option>
	<option value="San Marino" title="San Marino">San Marino</option>
	<option value="Sao Tome and Principe" title="Sao Tome and Principe">Sao Tome and Principe</option>
	<option value="Saudi Arabia" title="Saudi Arabia">Saudi Arabia</option>
	<option value="Senegal" title="Senegal">Senegal</option>
	<option value="Serbia" title="Serbia">Serbia</option>
	<option value="Seychelles" title="Seychelles">Seychelles</option>
	<option value="Sierra Leone" title="Sierra Leone">Sierra Leone</option>
	<option value="Singapore" title="Singapore">Singapore</option>
	<option value="Sint Maarten (Dutch part)" title="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
	<option value="Slovakia" title="Slovakia">Slovakia</option>
	<option value="Slovenia" title="Slovenia">Slovenia</option>
	<option value="Solomon Islands" title="Solomon Islands">Solomon Islands</option>
	<option value="Somalia" title="Somalia">Somalia</option>
	<option value="South Africa" title="South Africa">South Africa</option>
	<option value="South Georgia and the South Sandwich Islands" title="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
	<option value="South Sudan" title="South Sudan">South Sudan</option>
	<option value="Spain" title="Spain">Spain</option>
	<option value="Sri Lanka" title="Sri Lanka">Sri Lanka</option>
	<option value="Sudan" title="Sudan">Sudan</option>
	<option value="Suriname" title="Suriname">Suriname</option>
	<option value="Svalbard and Jan Mayen" title="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
	<option value="Swaziland" title="Swaziland">Swaziland</option>
	<option value="Sweden" title="Sweden">Sweden</option>
	<option value="Switzerland" title="Switzerland">Switzerland</option>
	<option value="Syrian Arab Republic" title="Syrian Arab Republic">Syrian Arab Republic</option>
	<option value="Taiwan, Province of China" title="Taiwan, Province of China">Taiwan, Province of China</option>
	<option value="Tajikistan" title="Tajikistan">Tajikistan</option>
	<option value="Tanzania, United Republic of" title="Tanzania, United Republic of">Tanzania, United Republic of</option>
	<option value="Thailand" title="Thailand">Thailand</option>
	<option value="Timor-Leste" title="Timor-Leste">Timor-Leste</option>
	<option value="Togo" title="Togo">Togo</option>
	<option value="Tokelau" title="Tokelau">Tokelau</option>
	<option value="Tonga" title="Tonga">Tonga</option>
	<option value="Trinidad and Tobago" title="Trinidad and Tobago">Trinidad and Tobago</option>
	<option value="Tunisia" title="Tunisia">Tunisia</option>
	<option value="Turkey" title="Turkey">Turkey</option>
	<option value="Turkmenistan" title="Turkmenistan">Turkmenistan</option>
	<option value="Turks and Caicos Islands" title="Turks and Caicos Islands">Turks and Caicos Islands</option>
	<option value="Tuvalu" title="Tuvalu">Tuvalu</option>
	<option value="Uganda" title="Uganda">Uganda</option>
	<option value="Ukraine" title="Ukraine">Ukraine</option>
	<option value="United Arab Emirates" title="United Arab Emirates">United Arab Emirates</option>
	<option value="United Kingdom" title="United Kingdom">United Kingdom</option>
	<option value="United States" title="United States">United States</option>
	<option value="United States Minor Outlying Islands" title="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
	<option value="Uruguay" title="Uruguay">Uruguay</option>
	<option value="Uzbekistan" title="Uzbekistan">Uzbekistan</option>
	<option value="Vanuatu" title="Vanuatu">Vanuatu</option>
	<option value="Venezuela, Bolivarian Republic of" title="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
	<option value="Viet Nam" title="Viet Nam">Viet Nam</option>
	<option value="Virgin Islands, British" title="Virgin Islands, British">Virgin Islands, British</option>
	<option value="Virgin Islands, U.S." title="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
	<option value="Wallis and Futuna" title="Wallis and Futuna">Wallis and Futuna</option>
	<option value="Western Sahara" title="Western Sahara">Western Sahara</option>
	<option value="Yemen" title="Yemen">Yemen</option>
	<option value="Zambia" title="Zambia">Zambia</option>
	<option value="Zimbabwe" title="Zimbabwe">Zimbabwe</option>
</select>
         <span id="vld_Country_Step2" style="color:Red">*</span>
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="Comments_Step2">Comments:</label>
      </td>
      <td>
         <textarea id="Comments_Step2" name="Comments_Step2" maxlength="255" rows="4" size="20" value=""></textarea>
      </td>
   </tr>
</table>

<div style="color:#ff0000" id="recaptchaError"></div>
<div class="g-recaptcha" data-sitekey="6LdVfCITAAAAADA-3B9gscjrgpFh0DfsvvXc5pYR" style="padding-bottom:5px;"></div>

<input type="submit" class="button" name="submit_web_form" id="submit_web_form" value="Submit" />
</form>
