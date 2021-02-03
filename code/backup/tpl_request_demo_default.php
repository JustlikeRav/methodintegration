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
 if (validate_required("RADProduct_Step2","vld_RADProduct_Step2","Product must be filled out!")==false)
{document.getElementById("RADProduct_Step2").focus();return false;}
 if (validate_required("Name_Step2","vld_Name_Step2","Name must be filled out!")==false)
{document.getElementById("Name_Step2").focus();return false;}
 if (validate_required("Email_Step2","vld_Email_Step2","Email must be filled out!")==false)
{document.getElementById("Email_Step2").focus();return false;}
 if (validate_required("PhoneNum_Step2","vld_PhoneNum_Step2","Phone Number must be filled out!")==false)
{document.getElementById("PhoneNum_Step2").focus();return false;}
 if (validate_required("Address_Step2","vld_Address_Step2","Address must be filled out!")==false)
{document.getElementById("Address_Step2").focus();return false;}
 if (validate_required("City_Step2","vld_City_Step2","City must be filled out!")==false)
{document.getElementById("City_Step2").focus();return false;}
 if (validate_required("StateProvince_Step2","vld_StateProvince_Step2","State/Province must be filled out!")==false)
{document.getElementById("StateProvince_Step2").focus();return false;}
 if (validate_required("PostalCode_Step2","vld_PostalCode_Step2","Postal Code/Zip Code must be filled out!")==false)
{document.getElementById("PostalCode_Step2").focus();return false;}
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

  }//withend
}//validate_formend

</script>
</head>
<form action="https://www.methodintegration.com/method/timezonerouter.aspx?url=https://www.methodintegration.com/MethodWebForms/submit.aspx" onsubmit="return validate_form(this)" method="POST">
<div><h1>Request A Demo</h1></div>
<input type="hidden" name="oid" value="2HVXMpRyZhdsD2zWVU2b/wcQJIybAK5IuuC3qNYwD34="/>
<input type="hidden" name="retURL" value="https://www.avenview.com"/>
<input type="hidden" name="formName" value="Request_A_Demo"/>
<table>
<tr>
  <td class="plainBoxHeading" colspan="2" valign="top" style="border-top:0px; border-bottom:0px; border-left:3px solid #ED1D26; background:#e1e1e1; color:#555;">Product Information</td>
</tr>
   <tr>
      <td  valign ="top">
         <label for="RADProduct_Step2">Product (type in model #):</label>
      </td>
      <td>
         <input type="text" id="RADProduct_Step2" name="RADProduct_Step2" maxlength="255" size="20" value="" />
         <span id="vld_RADProduct_Step2" style="color:Red">*</span>
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="Quantity_Step2">Quantity:</label>
      </td>
      <td>
         <input type="text" id="Quantity_Step2" name="Quantity_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
     <td class="plainBoxHeading" colspan="2" valign="top" style="border-top:0px; border-bottom:0px; border-left:3px solid #ED1D26; background:#e1e1e1; color:#555;">Customer Information</td>
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
         <label for="StateProvince_Step2">State Province:</label>
      </td>
      <td>
         <input type="text" id="StateProvince_Step2" name="StateProvince_Step2" maxlength="255" size="20" value="" />
         <span id="vld_StateProvince_Step2" style="color:Red">*</span>
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
         <label for="Country_Step2">Country:</label>
      </td>
      <td>
        <select type="select" id="Country_Step2" name="Country_Step2" style="width: 150px;">
 <option value="United States" title="United States">United States</option>
<option value="Afghanistan" title="Afghanistan">Afghanistan</option>
<option value="Albania" title="Albania">Albania</option>
<option value="Algeria" title="Algeria">Algeria</option>
<option value="Andorra" title="Andorra">Andorra</option>
<option value="Angola" title="Angola">Angola</option>
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
<option value="Bhutan" title="Bhutan">Bhutan</option>
<option value="Bolivia" title="Bolivia">Bolivia</option>
<option value="Bosnia and Herzegovina" title="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
<option value="Botswana" title="Botswana">Botswana</option>
<option value="Brazil" title="Brazil">Brazil</option>
<option value="Brunei " title="Brunei ">Brunei </option>
<option value="Bulgaria" title="Bulgaria">Bulgaria</option>
<option value="Burkina Faso" title="Burkina Faso">Burkina Faso</option>
<option value="Burma" title="Burma">Burma</option>
<option value="Burundi" title="Burundi">Burundi</option>
<option value="Cambodia" title="Cambodia">Cambodia</option>
<option value="Cameroon" title="Cameroon">Cameroon</option>
<option value="Canada" title="Canada">Canada</option>
<option value="Cape Verde" title="Cape Verde">Cape Verde</option>
<option value="Central African Republic" title="Central African Republic">Central African Republic</option>
<option value="Chad" title="Chad">Chad</option>
<option value="Chile" title="Chile">Chile</option>
<option value="China" title="China">China</option>
<option value="Colombia" title="Colombia">Colombia</option>
<option value="Comoros" title="Comoros">Comoros</option>
<option value="Democratic Republic of the Congo" title="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
<option value="Republic of the Congo" title="Republic of the Congo">Republic of the Congo</option>
<option value="Costa Rica" title="Costa Rica">Costa Rica</option>
<option value="Cote d'Ivoire" title="Cote d'Ivoire">Cote d'Ivoire</option>
<option value="Croatia" title="Croatia">Croatia</option>
<option value="Cuba" title="Cuba">Cuba</option>
<option value="Curacao" title="Curacao">Curacao</option>
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
<option value="Fiji" title="Fiji">Fiji</option>
<option value="Finland" title="Finland">Finland</option>
<option value="France" title="France">France</option>
<option value="Gabon" title="Gabon">Gabon</option>
<option value="Gambia" title="Gambia">Gambia</option>
<option value="Georgia" title="Georgia">Georgia</option>
<option value="Germany" title="Germany">Germany</option>
<option value="Ghana" title="Ghana">Ghana</option>
<option value="Greece" title="Greece">Greece</option>
<option value="Grenada" title="Grenada">Grenada</option>
<option value="Guatemala" title="Guatemala">Guatemala</option>
<option value="Guinea" title="Guinea">Guinea</option>
<option value="Guinea-Bissau" title="Guinea-Bissau">Guinea-Bissau</option>
<option value="Guyana" title="Guyana">Guyana</option>
<option value="Haiti" title="Haiti">Haiti</option>
<option value="Holy See" title="Holy See">Holy See</option>
<option value="Honduras" title="Honduras">Honduras</option>
<option value="Hong Kong" title="Hong Kong">Hong Kong</option>
<option value="Hungary" title="Hungary">Hungary</option>
<option value="Iceland" title="Iceland">Iceland</option>
<option value="India" title="India">India</option>
<option value="Indonesia" title="Indonesia">Indonesia</option>
<option value="Iran" title="Iran">Iran</option>
<option value="Iraq" title="Iraq">Iraq</option>
<option value="Ireland" title="Ireland">Ireland</option>
<option value="Israel" title="Israel">Israel</option>
<option value="Italy" title="Italy">Italy</option>
<option value="Jamaica" title="Jamaica">Jamaica</option>
<option value="Japan" title="Japan">Japan</option>
<option value="Jordan" title="Jordan">Jordan</option>
<option value="Kazakhstan" title="Kazakhstan">Kazakhstan</option>
<option value="Kenya" title="Kenya">Kenya</option>
<option value="Kiribati" title="Kiribati">Kiribati</option>
<option value="North Korea" title="North Korea">North Korea</option>
<option value="South Korea" title="South Korea">South Korea</option>
<option value="Kosovo" title="Kosovo">Kosovo</option>
<option value="Kuwait" title="Kuwait">Kuwait</option>
<option value="Kyrgyzstan" title="Kyrgyzstan">Kyrgyzstan</option>
<option value="Laos" title="Laos">Laos</option>
<option value="Latvia" title="Latvia">Latvia</option>
<option value="Lebanon" title="Lebanon">Lebanon</option>
<option value="Lesotho" title="Lesotho">Lesotho</option>
<option value="Liberia" title="Liberia">Liberia</option>
<option value="Libya" title="Libya">Libya</option>
<option value="Liechtenstein" title="Liechtenstein">Liechtenstein</option>
<option value="Lithuania" title="Lithuania">Lithuania</option>
<option value="Luxembourg" title="Luxembourg">Luxembourg</option>
<option value="Macau" title="Macau">Macau</option>
<option value="Macedonia" title="Macedonia">Macedonia</option>
<option value="Madagascar" title="Madagascar">Madagascar</option>
<option value="Malawi" title="Malawi">Malawi</option>
<option value="Malaysia" title="Malaysia">Malaysia</option>
<option value="Maldives" title="Maldives">Maldives</option>
<option value="Mali" title="Mali">Mali</option>
<option value="Malta" title="Malta">Malta</option>
<option value="Marshall Islands" title="Marshall Islands">Marshall Islands</option>
<option value="Mauritania" title="Mauritania">Mauritania</option>
<option value="Mauritius" title="Mauritius">Mauritius</option>
<option value="Mexico" title="Mexico">Mexico</option>
<option value="Micronesia" title="Micronesia">Micronesia</option>
<option value="Moldova" title="Moldova">Moldova</option>
<option value="Monaco" title="Monaco">Monaco</option>
<option value="Mongolia" title="Mongolia">Mongolia</option>
<option value="Montenegro" title="Montenegro">Montenegro</option>
<option value="Morocco" title="Morocco">Morocco</option>
<option value="Mozambique" title="Mozambique">Mozambique</option>
<option value="Namibia" title="Namibia">Namibia</option>
<option value="Nauru" title="Nauru">Nauru</option>
<option value="Nepal" title="Nepal">Nepal</option>
<option value="Netherlands" title="Netherlands">Netherlands</option>
<option value="Netherlands Antilles" title="Netherlands Antilles">Netherlands Antilles</option>
<option value="New Zealand" title="New Zealand">New Zealand</option>
<option value="Nicaragua" title="Nicaragua">Nicaragua</option>
<option value="Niger" title="Niger">Niger</option>
<option value="Nigeria" title="Nigeria">Nigeria</option>
<option value="North Korea" title="North Korea">North Korea</option>
<option value="Norway" title="Norway">Norway</option>
<option value="Oman" title="Oman">Oman</option>
<option value="Pakistan" title="Pakistan">Pakistan</option>
<option value="Palau" title="Palau">Palau</option>
<option value="Palestinian Territories" title="Palestinian Territories">Palestinian Territories</option>
<option value="Panama" title="Panama">Panama</option>
<option value="Papua New Guinea" title="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay" title="Paraguay">Paraguay</option>
<option value="Peru" title="Peru">Peru</option>
<option value="Philippines" title="Philippines">Philippines</option>
<option value="Poland" title="Poland">Poland</option>
<option value="Portugal" title="Portugal">Portugal</option>
<option value="Qatar" title="Qatar">Qatar</option>
<option value="Romania" title="Romania">Romania</option>
<option value="Russia" title="Russia">Russia</option>
<option value="Rwanda" title="Rwanda">Rwanda</option>
<option value="Saint Kitts and Nevis" title="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
<option value="Saint Lucia" title="Saint Lucia">Saint Lucia</option>
<option value="Saint Vincent and the Grenadines" title="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
<option value="Samoa " title="Samoa ">Samoa </option>
<option value="San Marino" title="San Marino">San Marino</option>
<option value="Sao Tome and Principe" title="Sao Tome and Principe">Sao Tome and Principe</option>
<option value="Saudi Arabia" title="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal" title="Senegal">Senegal</option>
<option value="Serbia" title="Serbia">Serbia</option>
<option value="Seychelles" title="Seychelles">Seychelles</option>
<option value="Sierra Leone" title="Sierra Leone">Sierra Leone</option>
<option value="Singapore" title="Singapore">Singapore</option>
<option value="Sint Maarten" title="Sint Maarten">Sint Maarten</option>
<option value="Slovakia" title="Slovakia">Slovakia</option>
<option value="Slovenia" title="Slovenia">Slovenia</option>
<option value="Solomon Islands" title="Solomon Islands">Solomon Islands</option>
<option value="Somalia" title="Somalia">Somalia</option>
<option value="South Africa" title="South Africa">South Africa</option>
<option value="South Korea" title="South Korea">South Korea</option>
<option value="South Sudan" title="South Sudan">South Sudan</option>
<option value="Spain " title="Spain ">Spain </option>
<option value="Sri Lanka" title="Sri Lanka">Sri Lanka</option>
<option value="Sudan" title="Sudan">Sudan</option>
<option value="Suriname" title="Suriname">Suriname</option>
<option value="Swaziland " title="Swaziland ">Swaziland </option>
<option value="Sweden" title="Sweden">Sweden</option>
<option value="Switzerland" title="Switzerland">Switzerland</option>
<option value="Syria" title="Syria">Syria</option>
<option value="Taiwan" title="Taiwan">Taiwan</option>
<option value="Tajikistan" title="Tajikistan">Tajikistan</option>
<option value="Tanzania" title="Tanzania">Tanzania</option>
<option value="Thailand " title="Thailand ">Thailand </option>
<option value="Timor-Leste" title="Timor-Leste">Timor-Leste</option>
<option value="Togo" title="Togo">Togo</option>
<option value="Tonga" title="Tonga">Tonga</option>
<option value="Trinidad and Tobago" title="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tunisia" title="Tunisia">Tunisia</option>
<option value="Turkey" title="Turkey">Turkey</option>
<option value="Turkmenistan" title="Turkmenistan">Turkmenistan</option>
<option value="Tuvalu" title="Tuvalu">Tuvalu</option>
<option value="Uganda" title="Uganda">Uganda</option>
<option value="Ukraine" title="Ukraine">Ukraine</option>
<option value="United Arab Emirates" title="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom" title="United Kingdom">United Kingdom</option>
<option value="Uruguay" title="Uruguay">Uruguay</option>
<option value="Uzbekistan" title="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu" title="Vanuatu">Vanuatu</option>
<option value="Venezuela" title="Venezuela">Venezuela</option>
<option value="Vietnam" title="Vietnam">Vietnam</option>
<option value="Yemen" title="Yemen">Yemen</option>
<option value="Zambia" title="Zambia">Zambia</option>
<option value="Zimbabwe" title="Zimbabwe">Zimbabwe</option>
</select>
         <span id="vld_Country_Step2" style="color:Red">*</span>
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="RADComments_Step2">Comments:</label>
      </td>
      <td>
         <textarea class="commentBox" id="RADComments_Step2" name="RADComments_Step2" maxlength="255" rows="4" size="20" value=""></textarea>
      </td>
   </tr>
</table>
<div style="color:#ff0000" id="recaptchaError"></div>
<div class="g-recaptcha" data-sitekey="6LdVfCITAAAAADA-3B9gscjrgpFh0DfsvvXc5pYR" style="padding-bottom:5px;"></div>

<input type="submit" class="button" name="submit_web_form" id="submit_web_form" value="Submit" />

</form>
