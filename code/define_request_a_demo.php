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
 if (validate_required("CompanyName_Step2","vld_CompanyName_Step2","Company Name must be filled out!")==false)
{document.getElementById("CompanyName_Step2").focus();return false;}
 if (validate_required("Email_Step2","vld_Email_Step2","Email must be filled out!")==false)
{document.getElementById("Email_Step2").focus();return false;}
 if (validate_required("ShipAddressAddr1_Step2","vld_ShipAddressAddr1_Step2","Address 1 must be filled out!")==false)
{document.getElementById("ShipAddressAddr1_Step2").focus();return false;}
 if (validate_required("ShipAddressCity_Step2","vld_ShipAddressCity_Step2","City must be filled out!")==false)
{document.getElementById("ShipAddressCity_Step2").focus();return false;}
 if (validate_required("ShipAddressPostalCode_Step2","vld_ShipAddressPostalCode_Step2","Postal Code must be filled out!")==false)
{document.getElementById("ShipAddressPostalCode_Step2").focus();return false;}
 if (validate_required("ShipAddressState_Step2","vld_ShipAddressState_Step2","State/Province must be filled out!")==false)
{document.getElementById("ShipAddressState_Step2").focus();return false;}
 if (validate_required("ShipAddressCountry_Step2","vld_ShipAddressCountry_Step2","Country must be filled out!")==false)
{document.getElementById("ShipAddressCountry_Step2").focus();return false;}
 if (validate_maxLength("Notes_Step2","vld_Notes_Step2","Notes maximum length should be 4095 characters!",4095)==false)
{document.getElementById("Notes_Step2").focus();return false;}
 if (validate_required("Name_Step3","vld_Name_Step3","Name must be filled out!")==false)
{document.getElementById("Name_Step3").focus();return false;}
         document.getElementById('submit_web_form').disabled=true;
     }
}
</script>

<form action="https://www.avenview.com/formsubmissions/formreceiver.php" onsubmit="return validate_form(this)" method="POST">
<input type="hidden" name="oid" value="Phvh0K4bR3WGRk1IGAx9KEpmPD3UlMyFu8m2g/PQ49U="/>
<input type="hidden" name="retURL" value="http://www.avenview.com"/>
<input type="hidden" name="formName" value="Request a Demo"/>
<h3>Request a Demo</h3>
<table>
   <tr>
      <td  valign ="top">
         <label for="Product_Step2">Product</label>
      </td>
      <td>
         <input type="text" id="Product_Step2" name="Product_Step2" maxlength="255" size="20" value="" />
         <span id="vld_Product_Step2" style="color:Red">*</span>
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="Name_Step2">Name</label>
      </td>
      <td>
         <input type="text" id="Name_Step2" name="Name_Step2" maxlength="41" size="20" value="" />
         <span id="vld_Name_Step2" style="color:Red">*</span>
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="CompanyName_Step2">Company Name</label>
      </td>
      <td>
         <input type="text" id="CompanyName_Step2" name="CompanyName_Step2" maxlength="41" size="20" value="" />
         <span id="vld_CompanyName_Step2" style="color:Red">*</span>
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
         <label for="Phone_Step2">Phone</label>
      </td>
      <td>
         <input type="text" id="Phone_Step2" name="Phone_Step2" maxlength="21" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="ShipAddressAddr1_Step2">Address 1</label>
      </td>
      <td>
         <input type="text" id="ShipAddressAddr1_Step2" name="ShipAddressAddr1_Step2" maxlength="41" size="20" value="" />
         <span id="vld_ShipAddressAddr1_Step2" style="color:Red">*</span>
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="ShipAddressAddr2_Step2">Address 2</label>
      </td>
      <td>
         <input type="text" id="ShipAddressAddr2_Step2" name="ShipAddressAddr2_Step2" maxlength="41" size="20" value="" />
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="ShipAddressCity_Step2">City</label>
      </td>
      <td>
         <input type="text" id="ShipAddressCity_Step2" name="ShipAddressCity_Step2" maxlength="31" size="20" value="" />
         <span id="vld_ShipAddressCity_Step2" style="color:Red">*</span>
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="ShipAddressPostalCode_Step2">Postal Code</label>
      </td>
      <td>
         <input type="text" id="ShipAddressPostalCode_Step2" name="ShipAddressPostalCode_Step2" maxlength="13" size="20" value="" />
         <span id="vld_ShipAddressPostalCode_Step2" style="color:Red">*</span>
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="ShipAddressState_Step2">State/Province</label>
      </td>
      <td>
         <input type="text" id="ShipAddressState_Step2" name="ShipAddressState_Step2" maxlength="21" size="20" value="" />
         <span id="vld_ShipAddressState_Step2" style="color:Red">*</span>
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="ShipAddressCountry_Step2">Country</label>
      </td>
      <td>
         <input type="text" id="ShipAddressCountry_Step2" name="ShipAddressCountry_Step2" maxlength="31" size="20" value="" />
         <span id="vld_ShipAddressCountry_Step2" style="color:Red">*</span>
      </td>
   </tr>
   <tr>
      <td  valign ="top">
         <label for="Notes_Step2">Notes</label>
      </td>
      <td>
         <textarea rows="5" id="Notes_Step2" name="Notes_Step2" ></textarea>
         <span id="vld_Notes_Step2" style="color:Red"></span>
      </td>
   </tr>
</table>
<h3>Campaign Type</h3>
<table>
   <tr>
      <td  valign ="top">
         <label for="Name_Step3">Name</label>
      </td>
      <td>
         <input type="text" id="Name_Step3" name="Name_Step3" maxlength="100" size="20" value="" />
         <span id="vld_Name_Step3" style="color:Red">*</span>
      </td>
   </tr>
</table>
<input type="submit" name="submit_web_form" id="submit_web_form" value="Submit" />
</form>
