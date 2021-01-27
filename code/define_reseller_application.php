
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://www.methodintegration.com/MethodWebForms/Javascript/formValidation.js" type="text/javascript"></script>
<script type="text/javascript">
function validate_form(thisform){
     with (thisform){
 if (validate_required("Company_Step2","vld_Company_Step2","Company must be filled out!")==false)
{document.getElementById("Company_Step2").focus();return false;}
 if (validate_required("Name_Step2","vld_Name_Step2","Name must be filled out!")==false)
{document.getElementById("Name_Step2").focus();return false;}
 if (validate_required("PhoneNum_Step2","vld_PhoneNum_Step2","Phone Number must be filled out!")==false)
{document.getElementById("PhoneNum_Step2").focus();return false;}
 if (validate_required("Email_Step2","vld_Email_Step2","Email must be filled out!")==false)
{document.getElementById("Email_Step2").focus();return false;}
 if (validate_required("DATaxIDNum_Step2","vld_DATaxIDNum_Step2","Tax ID Number must be filled out!")==false)
{document.getElementById("DATaxIDNum_Step2").focus();return false;}
 if (validate_required("DAResaleNum_Step2","vld_DAResaleNum_Step2","Resale Number must be filled out!")==false)
{document.getElementById("DAResaleNum_Step2").focus();return false;}
 if (validate_required("Address_Step2","vld_Address_Step2","Address must be filled out!")==false)
{document.getElementById("Address_Step2").focus();return false;}
 if (validate_required("City_Step2","vld_City_Step2","City must be filled out!")==false)
{document.getElementById("City_Step2").focus();return false;}
 if (validate_required("StateProvince_Step2","vld_StateProvince_Step2","State Province must be filled out!")==false)
{document.getElementById("StateProvince_Step2").focus();return false;}
 if (validate_required("PostalCode_Step2","vld_PostalCode_Step2","Postal Code must be filled out!")==false)
{document.getElementById("PostalCode_Step2").focus();return false;}
 if (validate_required("Country_Step2","vld_Country_Step2","Country must be filled out!")==false)
{document.getElementById("Country_Step2").focus();return false;}
 if (validate_maxLength("DAHowDidYouHear_Step2","vld_DAHowDidYouHear_Step2","How Did You Hear About Us? maximum length should be 255 characters!",255)==false)
{document.getElementById("DAHowDidYouHear_Step2").focus();return false;}

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
   }//with_end
}//validate_formend
</script>
<STYLE>
BODY
{scrollbar-face-color: #528607; scrollbar-shadow-color: #3B6201;
scrollbar-highlight-color: #639E0C; scrollbar-3dlight-color: #7BB625;
scrollbar-darkshadow-color: #2C4901; scrollbar-track-color: #3F6A01;
scrollbar-arrow-color: #D8FA2E}
</STYLE>
<table>
<form action="https://www.avenview.com/formsubmissions/formreceiver.php" onsubmit="return validate_form(this)" method="POST">
<input type="hidden" name="oid" value="Phvh0K4bR3WGRk1IGAx9KEpmPD3UlMyFu8m2g/PQ49U="/>
<input type="hidden" name="retURL" value="http://www.avenview.com"/>
<input type="hidden" name="formName" value="Dealers Application"/>
<tr>
  <td class="plainBoxHeading" colspan="4" valign="top"><p>Avenview products, services and sales programs enable organizations like yours to generate true business success from the professional and commercial AV marketplace. We maintain the highest product and service standards so our taxidpartners can always deliver the most robust and scalable solutions available and are constantly expanding our network of distributors, dealers and other partners globally. Take advantage of our expertise and knowledge and become an authorized Avenview partner today.</p>

<p>Thank you for your interest!</p></td>
</tr>
<tr class="accordion" colspan="4">
<td class="accordion-section" colspan="4"><a class="accordion-section-title" style="border-top:0px; border-bottom:0px; border-left:3px solid #ED1D26; background:#e1e1e1; color:#555;" href="#accordion-0">Why become an Avenview Dealer (click to expand)</a>
<div class="accordion-section-content" id="accordion-0">

<p>At Avenview, our goal is to enable installers and integrators to provide outstanding installations and excellent end user experiences in their Pro AV applications.</p>
<p>Our network of dealers is the key to helping us reach this goal. As we increase the size and depth of our dealer network, we are able to provide increased value to the customers and increased profitability to the dealers.  Our success is tied to our dealers’ success – we both want to succeed.</p>
<h2>What Benefit is there to becoming a dealer?</h2>
<p><strong>Success:</strong> Avenview products are designed with the installer and integrator in mind.  We are committed to providing products and services that compliment our dealers’ offerings and enhance our dealers’ success.</p>
<p>We are continuously innovating and adding to our product line to ensure that the latest technologies are available and that these products are what our dealers need in the field. The complete Avenview product line has been tested and designed to ensure efficiency and effectiveness in the field: our products work and are easy to install.  </p>
<p>Combined with Just In Time Inventory delivery, using Avenview products leads to <strong>Dealer success:</strong> Success with installations, in applications and in achieving outstanding results.</p>
<p><strong>Profitability:</strong> Becoming an Avenview dealer provides the opportunity to save money on long-term costs on labor, support and operational costs.  Our products are tested and effective, and we ensure that our products are easy to install and interoperable.  Our dealers’ time is important to us: we know that time wasted on troubleshooting problems is money lost.  Our team will ensure that you are up and running as quickly as possible by providing simple installations, hands on support and service follow up - saving you time and money.</p>
<p>The dealership also provides access to discounts that are otherwise not available.  Combined with our already competitive pricing, good margins mean increased profits. Your Avenview Account Manager will provide hands on administration so that any increased sales volume or special projects are given priority.</p>
<p><strong>Growth:</strong> Our product line, support and service provide a solid foundation on which our dealers can grow.  Avenview’s product line provides the depth and range of technologies and devices to allow our dealers to grow their businesses.  Our products are reliable and effective and are interoperable with many other products on the market. </p>
<p>We also provide training to our dealer network.  We will invest the time to train your staff and installers, increasing their knowledge base and effectiveness in the field.  Our engineers are continuously innovating and bringing new technologies and products to the market.  Once you partner with us, you will have first access to new products and technologies, allowing you to concentrate on what you do best and grow your company.</p>
<p><strong>Satisfaction:</strong> Avenview provides a full 3-year warranty on all products, and expert technicians will provide exceptional after sales support through training, installation guidance or technical troubleshooting. Anything that is required to achieve high-end results, Avenview will ensure your satisfaction on any product. </p>
<p>We know that your name is on the line with your customers, and we understand what it takes to make you successful.</p>




</div>
</td>
</tr>
  <tr>
    <td class="plainBoxHeading" colspan="4" valign="top" style="border-top:0px; border-bottom:0px; border-left:3px solid #ED1D26; background:#e1e1e1; color:#555;">Company Profile:</td>
  </tr>
   <tr>
      <td  valign ="top">
         <label for="Company_Step2">Company</label>
      </td>
      <td>
         <input type="text" id="Company_Step2" name="Company_Step2" maxlength="255" size="20" value="" />
         <span id="vld_Company_Step2" style="color:Red">*</span>
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="Name_Step2">Name</label>
      </td>
      <td>
         <input type="text" id="Name_Step2" name="Name_Step2" maxlength="31" size="20" value="" />
         <span id="vld_Name_Step2" style="color:Red">*</span>
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="PhoneNum_Step2">Phone Number</label>
      </td>
      <td>
         <input type="text" id="PhoneNum_Step2" name="PhoneNum_Step2" maxlength="255" size="20" value="" />
         <span id="vld_PhoneNum_Step2" style="color:Red">*</span>
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAFax_Step2">Fax</label>
      </td>
      <td>
         <input type="text" id="DAFax_Step2" name="DAFax_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="Email_Step2">Email</label>
      </td>
      <td>
         <input type="text" id="Email_Step2" name="Email_Step2" maxlength="1023" size="20" value="" />
         <span id="vld_Email_Step2" style="color:Red">*</span>
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAWebsite_Step2">Website</label>
      </td>
      <td>
         <input type="text" id="DAWebsite_Step2" name="DAWebsite_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DATaxIDNum_Step2">Tax ID Number</label>
      </td>
      <td>
         <input type="text" id="DATaxIDNum_Step2" name="DATaxIDNum_Step2" maxlength="255" size="20" value="" />
         <span id="vld_DATaxIDNum_Step2" style="color:Red">*</span>
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAResaleNum_Step2">Resale Number</label>
      </td>
      <td>
         <input type="text" id="DAResaleNum_Step2" name="DAResaleNum_Step2" maxlength="255" size="20" value="" />
         <span id="vld_DAResaleNum_Step2" style="color:Red">*</span>
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="Address_Step2">Address</label>
      </td>
      <td>
         <input type="text" id="Address_Step2" name="Address_Step2" maxlength="255" size="20" value="" />
         <span id="vld_Address_Step2" style="color:Red">*</span>
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="City_Step2">City</label>
      </td>
      <td>
         <input type="text" id="City_Step2" name="City_Step2" maxlength="255" size="20" value="" />
         <span id="vld_City_Step2" style="color:Red">*</span>
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="StateProvince_Step2">State Province</label>
      </td>
      <td>
         <input type="text" id="StateProvince_Step2" name="StateProvince_Step2" maxlength="255" size="20" value="" />
         <span id="vld_StateProvince_Step2" style="color:Red">*</span>
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="PostalCode_Step2">Postal Code</label>
      </td>
      <td>
         <input type="text" id="PostalCode_Step2" name="PostalCode_Step2" maxlength="255" size="20" value="" />
         <span id="vld_PostalCode_Step2" style="color:Red">*</span>
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="Country_Step2">Country</label>
      </td>
      <td>
         <input type="text" id="Country_Step2" name="Country_Step2" maxlength="255" size="20" value="" />
         <span id="vld_Country_Step2" style="color:Red">*</span>
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAHowDidYouHear_Step2">How Did You Hear About Us?</label>
      </td>
      <td>
         <textarea rows="4" id="DAHowDidYouHear_Step2" name="DAHowDidYouHear_Step2" ></textarea>
         <span id="vld_DAHowDidYouHear_Step2" style="color:Red"></span>
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAPrincipalName_Step2">Principal Name</label>
      </td>
      <td>
         <input type="text" id="DAPrincipalName_Step2" name="DAPrincipalName_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DASalesManagerName_Step2">Sales Manager Name</label>
      </td>
      <td>
         <input type="text" id="DASalesManagerName_Step2" name="DASalesManagerName_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DaNumofYears_Step2">Number of Years</label>
      </td>
      <td>
         <input type="text" id="DaNumofYears_Step2" name="DaNumofYears_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DANumOfEmp_Step2">Number of Employees</label>
      </td>
      <td>
         <input type="text" id="DANumOfEmp_Step2" name="DANumOfEmp_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DaNumOfSalesPers_Step2">Number of Sales Personnel</label>
      </td>
      <td>
         <input type="text" id="DaNumOfSalesPers_Step2" name="DaNumOfSalesPers_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DANumOfServicePers_Step2">Number of Service Tech Personnel</label>
      </td>
      <td>
         <input type="text" id="DANumOfServicePers_Step2" name="DANumOfServicePers_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAYearsOfLoc_Step2">Years in Business</label>
      </td>
      <td>
         <input type="text" id="DAYearsOfLoc_Step2" name="DAYearsOfLoc_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAAnnualSales_Step2">Annual Sales</label>
      </td>
      <td>
         <input type="text" id="DAAnnualSales_Step2" name="DAAnnualSales_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAAccPayName_Step2">Account Payable Name</label>
      </td>
      <td>
         <input type="text" id="DAAccPayName_Step2" name="DAAccPayName_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAAccPayAddress_Step2">Account Payable Address</label>
      </td>
      <td>
         <input type="text" id="DAAccPayAddress_Step2" name="DAAccPayAddress_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAAccPayPhn_Step2">Account Payable Phone</label>
      </td>
      <td>
         <input type="text" id="DAAccPayPhn_Step2" name="DAAccPayPhn_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAGeoMax_Step2">Geographical Covered Max</label>
      </td>
      <td>
         <input type="text" id="DAGeoMax_Step2" name="DAGeoMax_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAGeoMin_Step2">Geographical Covered Min</label>
      </td>
      <td>
         <input type="text" id="DAGeoMin_Step2" name="DAGeoMin_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAOthrLoc_Step2">Other Locations</label>
      </td>
      <td>
         <input type="text" id="DAOthrLoc_Step2" name="DAOthrLoc_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAMonthlySalesExp_Step2">Monthly Sales Expected</label>
      </td>
      <td>
         <input type="text" id="DAMonthlySalesExp_Step2" name="DAMonthlySalesExp_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DACurrentBuySource_Step2">Current Buying Source</label>
      </td>
      <td>
         <input type="text" id="DACurrentBuySource_Step2" name="DACurrentBuySource_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DACreditTerms_Step2">Credit Terms</label>
      </td>
      <td>
         <input type="checkbox" id="DACreditTerms_Step2" name="DACreditTerms_Step2"  />
      </td>
   </tr>

   <!-- start trade reference drop down?-->
 <tr class="accordion" colspan="4">
<td class="accordion-section" colspan="4"><a class="accordion-section-title" style="border-top:0px; border-bottom:0px; border-left:3px solid #ED1D26; background:#e1e1e1; color:#555;" href="#accordion-1">TRADE REFERENCE #1 (click to expand)</a>
<div class="accordion-section-content" id="accordion-1">
<table>
   <tr>
      <td  valign ="top">
         <label for="DAR1Company_Step2">Company </label>
      </td>
      <td>
         <input type="text" id="DAR1Company_Step2" name="DAR1Company_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAR1Name_Step2">Name</label>
      </td>
      <td>
         <input type="text" id="DAR1Name_Step2" name="DAR1Name_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAR1Phone_Step2">Phone</label>
      </td>
      <td>
         <input type="text" id="DAR1Phone_Step2" name="DAR1Phone_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAR1Fax_Step2">Fax</label>
      </td>
      <td>
         <input type="text" id="DAR1Fax_Step2" name="DAR1Fax_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAR1Address_Step2">Address</label>
      </td>
      <td>
         <input type="text" id="DAR1Address_Step2" name="DAR1Address_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAR1City_Step2">City</label>
      </td>
      <td>
         <input type="text" id="DAR1City_Step2" name="DAR1City_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAR1PostalCode_Step2">Postal Code</label>
      </td>
      <td>
         <input type="text" id="DAR1PostalCode_Step2" name="DAR1PostalCode_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAR1ProvinceState_Step2">Province/State</label>
      </td>
      <td>
         <input type="text" id="DAR1ProvinceState_Step2" name="DAR1ProvinceState_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAR1Country_Step2">Country</label>
      </td>
      <td>
         <input type="text" id="DAR1Country_Step2" name="DAR1Country_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
</table>
</div>
</td>
</tr>
<tr class="accordion" colspan="4">
<td class="accordion-section" colspan="4"><a class="accordion-section-title" style="border-top:0px; border-bottom:0px; border-left:3px solid #ED1D26; background:#e1e1e1; color:#555;" href="#accordion-2">TRADE REFERENCE #2 (click to expand)</a>
<div class="accordion-section-content" id="accordion-2">
<table>
   <tr>
      <td  valign ="top">
         <label for="DAR2Company_Step2">Company</label>
      </td>
      <td>
         <input type="text" id="DAR2Company_Step2" name="DAR2Company_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAR2Name_Step2">Name</label>
      </td>
      <td>
         <input type="text" id="DAR2Name_Step2" name="DAR2Name_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAR2Phone_Step2">Phone</label>
      </td>
      <td>
         <input type="text" id="DAR2Phone_Step2" name="DAR2Phone_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAR2Fax_Step2">Fax</label>
      </td>
      <td>
         <input type="text" id="DAR2Fax_Step2" name="DAR2Fax_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAR2Address_Step2">Address</label>
      </td>
      <td>
         <input type="text" id="DAR2Address_Step2" name="DAR2Address_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAR2City_Step2">City</label>
      </td>
      <td>
         <input type="text" id="DAR2City_Step2" name="DAR2City_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAR2PostalCode_Step2">Postal Code</label>
      </td>
      <td>
         <input type="text" id="DAR2PostalCode_Step2" name="DAR2PostalCode_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAR2ProvinceState_Step2">Province/State</label>
      </td>
      <td>
         <input type="text" id="DAR2ProvinceState_Step2" name="DAR2ProvinceState_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAR2Country_Step2">Country</label>
      </td>
      <td>
         <input type="text" id="DAR2Country_Step2" name="DAR2Country_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
</table>
</div>
</td>
</tr>
<tr class="accordion" colspan="4">
<td class="accordion-section" colspan="4"><a class="accordion-section-title" style="border-top:0px; border-bottom:0px; border-left:3px solid #ED1D26; background:#e1e1e1; color:#555;" href="#accordion-3">TRADE REFERENCE #3 (click to expand)</a>
<div class="accordion-section-content" id="accordion-3">
<table>
   <tr>
      <td  valign ="top">
         <label for="DAR3Company_Step2">Company</label>
      </td>
      <td>
         <input type="text" id="DAR3Company_Step2" name="DAR3Company_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAR3Name_Step2">Name</label>
      </td>
      <td>
         <input type="text" id="DAR3Name_Step2" name="DAR3Name_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAR3Phone_Step2">Phone</label>
      </td>
      <td>
         <input type="text" id="DAR3Phone_Step2" name="DAR3Phone_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAR3Fax_Step2">Fax</label>
      </td>
      <td>
         <input type="text" id="DAR3Fax_Step2" name="DAR3Fax_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAR3Address_Step2">Address</label>
      </td>
      <td>
         <input type="text" id="DAR3Address_Step2" name="DAR3Address_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAR3City_Step2">City</label>
      </td>
      <td>
         <input type="text" id="DAR3City_Step2" name="DAR3City_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAR3PostalCode_Step2">Postal Code</label>
      </td>
      <td>
         <input type="text" id="DAR3PostalCode_Step2" name="DAR3PostalCode_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAR3ProvinceState_Step2">Province/State</label>
      </td>
      <td>
         <input type="text" id="DAR3ProvinceState_Step2" name="DAR3ProvinceState_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAR3Country_Step2">Country</label>
      </td>
      <td>
         <input type="text" id="DAR3Country_Step2" name="DAR3Country_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
</table>
</div>
</td>
</tr>
<tr class="accordion" colspan="4">
<td class="accordion-section" colspan="4"><a class="accordion-section-title" style="border-top:0px; border-bottom:0px; border-left:3px solid #ED1D26; background:#e1e1e1; color:#555;" href="#accordion-4">TRADE REFERENCE #4 (click to expand)</a>
<div class="accordion-section-content" id="accordion-4">
<table>
   <tr>
      <td  valign ="top">
         <label for="DAR4Company_Step2">Company</label>
      </td>
      <td>
         <input type="text" id="DAR4Company_Step2" name="DAR4Company_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAR4Name_Step2">Name</label>
      </td>
      <td>
         <input type="text" id="DAR4Name_Step2" name="DAR4Name_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAR4Phone_Step2">Phone</label>
      </td>
      <td>
         <input type="text" id="DAR4Phone_Step2" name="DAR4Phone_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAR4Fax_Step2">Fax</label>
      </td>
      <td>
         <input type="text" id="DAR4Fax_Step2" name="DAR4Fax_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAR4Address_Step2">Address</label>
      </td>
      <td>
         <input type="text" id="DAR4Address_Step2" name="DAR4Address_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAR4City_Step2">City</label>
      </td>
      <td>
         <input type="text" id="DAR4City_Step2" name="DAR4City_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAR4PostalCode_Step2">Postal Code</label>
      </td>
      <td>
         <input type="text" id="DAR4PostalCode_Step2" name="DAR4PostalCode_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAR4ProvinceState_Step2">Province/State</label>
      </td>
      <td>
         <input type="text" id="DAR4ProvinceState_Step2" name="DAR4ProvinceState_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="DAR4Country_Step2">Country</label>
      </td>
      <td>
         <input type="text" id="DAR4Country_Step2" name="DAR4Country_Step2" maxlength="255" size="20" value="" />
      </td>
   </tr>
 </table>
 </div>
 </td>
 </tr>


<div style="color:#ff0000" id="recaptchaError"></div>
<div class="g-recaptcha" data-sitekey="6LdVfCITAAAAADA-3B9gscjrgpFh0DfsvvXc5pYR"></div>
<input type="submit" name="submit_web_form" id="submit_web_form" value="Submit" />
</form>
</table>