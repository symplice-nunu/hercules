<?= $this->extend('layouts/app.php')?>
<?= $this->section('content')?>     
</header>
        
<article class="content">
<div class="card">
    <img src="images/hercules.png" alt="">
    <div class="card_body">
        Online Bill Of Lading
    </div>
</div>
 <div class="address_book"> 
     <a>Address Book</a> 
</div>
    <div class="address_book_form">
        You can fill out this bill of lading online or use the 
        <a href="#" target="_blank" style="text-decoration:none; color:#165CAB;">PDF</a> 
        to create your shipping document. Submitting the form will generate a printable bill of lading.</div>
<form method="post"  target="_blank">

        <div class="contact_information" style="margin-top: 0.8em;">
            <ul>
                <li><label class="border_top">DATE <span class="mandatoryField">*</span></label>
                <span><input type="text" name="bol_date" id="bol_date" readonly value="" size="20" maxlength="100"/></span></li>
                <li><label class="border_top">Rate Quote No.</label>
                <span><input type="text" name="quote_no" id="quote_no" value="" size="20" maxlength="100"/></span></li>
                	
                <li><label>Terms <span class="mandatoryField">*</span></label>
                <span>
                    <input name="terms" type="radio" id="Prepaid" value="Prepaid" size="20"   /> <span>Prepaid </span>
                    <input type="radio" name="terms" id="Collect" value="Collect" size="20" /> <span>Collect </span>
                    <input type="radio" name="terms" id="ThirdParty" value="3rd Party" size="20"  /> <span>3rd Party </span>
                </span></li>
            </ul>
            <div class="all_tables"> 
            <table>
                <tr>
                    <td><h2>Shipper Information</h2></td>
                    <td><h2>Consignee Information</h2></td>
                </tr>
                <tr><td>
                    <table>
                        <tr>
                            <td>
                                <label>Shipper Name <span class="mandatoryField">*</span></label>
                            </td>
                            <td>
                                <span>
                                    <input type="text" name="ShipperName" id="ShipperName" value="" size="20" maxlength="100"/>
                                </span>
                            </td>		
                        </tr>
                        <tr>
                            <td>
                                <label>Address<span class="mandatoryField">*</span></label>
                            </td>
                            <td>
                                <span>
                                    <textarea name="ShipperAddress" id="ShipperAddress" rows="4" cols="20" maxlength="150"></textarea>
                                </span>
                            </td>		
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    City <span class="mandatoryField">*</span>
                                </label>
                            </td>
                            <td>
                                <span>
                                    <input type="text" name="ShipperCity" id="ShipperCity" value="" size="20" maxlength="50"/></span>
                                </td>		
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    State/Province<span class="mandatoryField">*</span>
                                    </td>
                            <td>
                                <span>
                            <select name="ShipperState" id="ShipperState">
<option value="" selected="selected">Select a State/Province</option>
<option value="Alabama">Alabama</option>
<option value="Alaska">Alaska</option>
<option value="Arizona">Arizona</option>
<option value="Arkansas">Arkansas</option>
<option value="California">California</option>
<option value="Colorado">Colorado</option>
<option value="Connecticut">Connecticut</option>
<option value="Delaware">Delaware</option>
<option value="D.C.">D.C.</option>
<option value="Florida">Florida</option>
<option value="Georgia">Georgia</option>
<option value="Hawaii">Hawaii</option>
<option value="Idaho">Idaho</option>
<option value="Illinois">Illinois</option>
<option value="Indiana">Indiana</option>
<option value="Iowa">Iowa</option>
<option value="Kansas">Kansas</option>
<option value="Kentucky">Kentucky</option>
<option value="Louisiana">Louisiana</option>
<option value="Maine">Maine</option>
<option value="Maryland">Maryland</option>
<option value="Massachusetts">Massachusetts</option>
<option value="Michigan">Michigan</option>
<option value="Minnesota">Minnesota</option>
<option value="Mississippi">Mississippi</option>
<option value="Missouri">Missouri</option>
<option value="Montana">Montana</option>
<option value="Nebraska">Nebraska</option>
<option value="Nevada">Nevada</option>
<option value="New Hampshire">New Hampshire</option>
<option value="New Jersey">New Jersey</option>
<option value="New Mexico">New Mexico</option>
<option value="New York">New York</option>
<option value="North Carolina">North Carolina</option>
<option value="North Dakota">North Dakota</option>
<option value="Ohio">Ohio</option>
<option value="Oklahoma">Oklahoma</option>
<option value="Oregon">Oregon</option>
<option value="Pennsylvania">Pennsylvania</option>
<option value="Rhode Island">Rhode Island</option>
<option value="South Carolina">South Carolina</option>
<option value="South Dakota">South Dakota</option>
<option value="Tennessee">Tennessee</option>
<option value="Texas">Texas</option>
<option value="Utah">Utah</option>
<option value="Vermont">Vermont</option>
<option value="Virginia">Virginia</option>
<option value="Washington">Washington</option>
<option value="West Virginia">West Virginia</option>
<option value="Wisconsin">Wisconsin</option>
<option value="Wyoming">Wyoming</option>
<option value="Alberta">Alberta</option>
<option value="British Columbia">British Columbia</option>
<option value="Manitoba">Manitoba</option>
<option value="New Brunswick">New Brunswick</option>
<option value="New Foundland">New Foundland</option>
<option value="Nova Scotia">Nova Scotia</option>
<option value="Northwest Territory">Northwest Territory</option>
<option value="Ontario">Ontario</option>
<option value="Price Edward Island">Price Edward Island</option>
<option value="Quebec">Quebec</option>
<option value="Saskatchewan">Saskatchewan</option>
<option value="Yukon">Yukon</option>
</select>
                            </span></td>		
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    Zip/Postal <span class="mandatoryField">*</span>
                                </label>
                            </td>
                            <td>
                                <span>
                                    <input type="text" name="ShipperZip" id="ShipperZip" value="" size="20" maxlength="100"/>
                                </span>
                            </td>		
                        </tr>
                        <tr>
                            <td>
                                <label>BOL No. </label>
                            </td>
                            <td>
                                <span>
                                    <input type="text" name="BOLNumber" id="BOLNumber" class="" value="" size="20" maxlength="100">
                                </span>
                            </td>		
                        </tr>
                        <tr>
                            <td>
                                <label>Shipper No.</label>
                            </td>
                            <td>
                                <span>
                                    <input type="text" name="ShipperNumber" id="ShipperNumber" class="" value="" size="20" maxlength="100">
                                </span>
                            </td>		
                        </tr>
                        <tr>
                            <td>
                                <label>Phone No.</label>
                            </td>
                            <td>
                                <span>
                                    <input class="phone3" type="text" name="ShipperPhone1" id="ShipperPhone1" value="" size="20" maxlength="3"/>
                                </span>
                            <span>
                                <input class="phone3" type="text" name="ShipperPhone2" id="ShipperPhone2" value="" size="20" maxlength="3"/>
                            </span>
                            <span>
                                <input class="phone4" type="text" name="ShipperPhone3" id="ShipperPhone3" value="" size="20" maxlength="4"/>
                            </span>
                            <input type="hidden" name="ShipperPhone" id="ShipperPhone" value="" size="20" maxlength="100"/>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                              
                                <div class="btn_in_tables" style="text-align: center; margin-left: 0px;">
                                 <input type="submit" name="btn_save1" id="btn_save1" href="#" value="Save" size="20"/>
                                        <input type="submit" name="btn_search1" id="btn_search1" href="#" value="Search" size="20"/>
                                                                        <input type="reset" name="btn_clear1" id="btn_clear1" value="Clear" size="20"/>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table>
                        <tr>
                            <td>
                                <label>
                                    Name <span class="mandatoryField">*</span></label>
                                </td>
                            <td>
                                <span>
                                    <input type="text" name="ConsigneeName" id="ConsigneeName" value="" size="20" maxlength="100"/>
                                </span>
                            </td>		
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    Address <span class="mandatoryField">*</span>
                                </label>
                            </td>
                            <td>
                                <span>
                                    <textarea name="ConsigneeAddress" id="ConsigneeAddress" rows="4" cols="20"></textarea>
                                </span>
                            </td>		
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    City <span class="mandatoryField">*</span>
                                </label>
                            </td>
                            <td>
                                <span>
                                    <input type="text" name="ConsigneeCity" id="ConsigneeCity" size="20" maxlength="100"/>
                                </span>
                            </td>		
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    State/Province <span class="mandatoryField">*</span>
                                </label>
                            </td>
                            <td>
                                <span>
                                    <select name="ConsigneeState" id="ConsigneeState">

<option value="" selected="selected">Select a State/Province</option>
<option value="Alabama">Alabama</option>
<option value="Alaska">Alaska</option>
<option value="Arizona">Arizona</option>
<option value="Arkansas">Arkansas</option>
<option value="California">California</option>
<option value="Colorado">Colorado</option>
<option value="Connecticut">Connecticut</option>
<option value="Delaware">Delaware</option>
<option value="D.C.">D.C.</option>
<option value="Florida">Florida</option>
<option value="Georgia">Georgia</option>
<option value="Hawaii">Hawaii</option>
<option value="Idaho">Idaho</option>
<option value="Illinois">Illinois</option>
<option value="Indiana">Indiana</option>
<option value="Iowa">Iowa</option>
<option value="Kansas">Kansas</option>
<option value="Kentucky">Kentucky</option>
<option value="Louisiana">Louisiana</option>
<option value="Maine">Maine</option>
<option value="Maryland">Maryland</option>
<option value="Massachusetts">Massachusetts</option>
<option value="Michigan">Michigan</option>
<option value="Minnesota">Minnesota</option>
<option value="Mississippi">Mississippi</option>
<option value="Missouri">Missouri</option>
<option value="Montana">Montana</option>
<option value="Nebraska">Nebraska</option>
<option value="Nevada">Nevada</option>
<option value="New Hampshire">New Hampshire</option>
<option value="New Jersey">New Jersey</option>
<option value="New Mexico">New Mexico</option>
<option value="New York">New York</option>
<option value="North Carolina">North Carolina</option>
<option value="North Dakota">North Dakota</option>
<option value="Ohio">Ohio</option>
<option value="Oklahoma">Oklahoma</option>
<option value="Oregon">Oregon</option>
<option value="Pennsylvania">Pennsylvania</option>
<option value="Rhode Island">Rhode Island</option>
<option value="South Carolina">South Carolina</option>
<option value="South Dakota">South Dakota</option>
<option value="Tennessee">Tennessee</option>
<option value="Texas">Texas</option>
<option value="Utah">Utah</option>
<option value="Vermont">Vermont</option>
<option value="Virginia">Virginia</option>
<option value="Washington">Washington</option>
<option value="West Virginia">West Virginia</option>
<option value="Wisconsin">Wisconsin</option>
<option value="Wyoming">Wyoming</option>
<option value="Alberta">Alberta</option>
<option value="British Columbia">British Columbia</option>
<option value="Manitoba">Manitoba</option>
<option value="New Brunswick">New Brunswick</option>
<option value="New Foundland">New Foundland</option>
<option value="Nova Scotia">Nova Scotia</option>
<option value="Northwest Territory">Northwest Territory</option>
<option value="Ontario">Ontario</option>
<option value="Price Edward Island">Price Edward Island</option>
<option value="Quebec">Quebec</option>
<option value="Saskatchewan">Saskatchewan</option>
<option value="Yukon">Yukon</option>
</select>
                            </span>
                        </td>		
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    Zip/Postal <span class="mandatoryField">*</span>
                                </label>
                            </td>
                            <td>
                                <span>
                                    <input type="text" name="ConsigneeZip" id="ConsigneeZip"  size="20" maxlength="100"/>
                                </span>
                            </td>		
                        </tr>
                        <tr>
                            <td>
                                <label>P.O. No.</label>
                            </td>
                            <td>
                                <span>
                                    <input type="text" name="PONumber" id="PONumber" class="" value=""  size="20" maxlength="100"/>
                                </span>
                            </td>		
                        </tr>
                        <tr>
                            <td>
                                <label>Consignee No. </label>
                            </td>
                            <td>
                                <span>
                                    <input type="text" name="ConsigneeNumber" id="ConsigneeNumber" class="" value="" size="20" maxlength="100"/>
                                </span>
                            </td>		
                        </tr>
                        <tr>
                            <td>
                                <label>Phone No.</label>
                            </td>
                            <td>
                                <span>
                                    <input class="phone3" type="text" name="ConsigneePhone1" id="ConsigneePhone1" value="" size="20" maxlength="3"/>
                                </span>
                            <span>
                                <input class="phone3" type="text" name="ConsigneePhone2" id="ConsigneePhone2" value="" size="20" maxlength="3"/>
                            </span>
                            <span>
                                <input class="phone4" type="text" name="ConsigneePhone3" id="ConsigneePhone3" value="" size="20" maxlength="4"/>
                            </span>
                            <input type="hidden" name="ConsigneePhone" id="ConsigneePhone" value="" size="20" maxlength="100"/>
                            </td>	
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="btn_in_tables" style="text-align: center;margin-left: 0px;">
                                <input type="submit" name="btn_save2" id="btn_save2" href="#" value="Save" size="20"/>
                                <input type="submit" name="btn_search2" id="btn_search2" href="#" value="Search" size="20"/>
                                <input type="reset" name="btn_clear2" id="btn_clear2" value="Clear" size="20"/>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            </table>
        </div>
     <div>
            <h2>Additional Service Options</h2>
            <ul>
                <li>
                    <label class="additional_services_option additional_services_option_bold">Pickup Options</label>
                    <label class="additional_services_option additional_services_option_bold">Delivery Options</label>
                    <label class="additional_services_option additional_services_option_bold">Other Options</label>
                </li>
                <li>
                    <label class="additional_services_option"><input type="Checkbox" name="LiftGatePickup" id="LiftGatePickup" value="1" size="20"  />&nbsp; Lift Gate</label>
                    <label class="additional_services_option"><input type="Checkbox" name="LiftGateDelivery" id="LiftGateDelivery" value="2" size="20"  />&nbsp; Lift Gate</label>
                    <label class="additional_services_option"><input type="Checkbox" name="ExtremeLength" id="ExtremeLength" value="1" size="20"  />&nbsp; Extreme Length (12ft or more)</label>
                </li>
                <li>
                    <label class="additional_services_option"><input type="Checkbox" name="ResidentialPickup" id="ResidentialPickup" value="1" size="20"  />&nbsp; Residential</label>
                    <label class="additional_services_option"><input type="Checkbox" name="ResidentialDelivery" id="ResidentialDelivery" value="2" size="20"  />&nbsp; Residential</label>
                    <label class="additional_services_option"><input type="Checkbox" name="HazardousMaterial" id="HazardousMaterial" value="1" size="20"  />&nbsp; Hazardous Material</label>
                </li>
                <li>
                    <label class="additional_services_option"><input type="Checkbox" name="InsidePickup" id="InsidePickup" value="1" size="20"  />&nbsp; Inside</label>
                    <label class="additional_services_option"><input type="Checkbox" name="InsideDelivery" id="InsideDelivery" value="2" size="20"  />&nbsp; Inside</label>
                    <label class="additional_services_option"><input type="Checkbox" name="TEBondedMaterial" id="TEBondedMaterial" value="1" size="20"  />&nbsp; T&E Bonded Material</label>
                </li>
                <li>
                    <label class="additional_services_option"><input type="Checkbox" name="AppointmentPickup" id="AppointmentPickup" value="1" size="20"  />&nbsp; Appointment/Call Required</label>
                    <label class="additional_services_option"><input type="Checkbox" name="AppointmentDelivery" id="AppointmentDelivery" value="2" size="20"  />&nbsp; Appointment/Call Required</label>
                    
                </li>
            </ul>
        </div>
         <div>
            <ul>        
                <li>
                    <label>
                        Notes / Comments 
                    </label>
                <span>
                    <input type="text" name="acc1" id="acc1" value="" size="20" maxlength="100" />
                </span>
            </li>			
            </ul>
        <h2>Shipments</h2>
        <table  class="shipment_table_form">
                <tr>
                    <td>
                        <table>
                            <tr style="padding-bottom:0px;">
                                <td width="17%">
                                    <label>Number of Shipping Units <span class="mandatoryField">*</span>
                                </label>
                            </td>
                                <td width="16%">
                                    <label>Pkg. Type <span class="mandatoryField">*</span>
                                </label>
                            </td>
                                <td width="16%">
                                    <label>CLASS<span class="mandatoryField">*</span>
                                </label>
                            </td>
                                
                                <td colspan="3" width="52%">
                                    <label>Description of articles, special marks, and exceptions<span class="mandatoryField">*</span>
                                </label>
                            </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>
                                        <input type="text"   size="5" maxlength="100"/>
                                    </span>
                                </td>
                                <td>
                                    <span>
                                        <input type="text"   size="5" maxlength="100"/>
                                    </span>
                                </td>
                                <td>
                                    <span>
                                        <input type="text"  size="5" maxlength="100"/>
                                    </span>
                                </td>
                                <td colspan="3">

                                </label>
                                <span>
                                    <input type="text" maxlength="100"/>
                                </span>
                            </td>
                            </tr>
                            <tr>
                                <td width="100">
                                    <label>NMFC Number<label>

                                    </td>
                                <td>
                                    <label>
                                        Weight(lb)<span class="mandatoryField">*</span>
                                    </label>
                                </td>
                                <td>
                                    <label>Length(in)</label>
                                </td>
                                <td width="11%">
                                    <label>Width(in)</label>
                                </td>
                                <td width="11%">
                                    <label>Height(in)</label>
                                </td>
                                <td width="80">
                                    <label>HAZMAT</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>
                                        <input type="text" size="5" maxlength="100"/>
                                    </span>
                                </td>	
                                <td>
                                    <span>
                                        <input type="text" size="5" maxlength="100"/>
                                    </span>
                                </td>
                                <td>
                                    <span>
                                        <input type="text" size="5" maxlength="100"/>
                                    </span>
                                </td>
                                <td>
                                    <span>
                                        <input type="text" size="5" maxlength="100">
                                    </span>
                                </td>
                                <td>
                                    <span>
                                        <input type="text" size="5" maxlength="100"/>
                                    </span>
                                </td>
                                <td>
                                    <span>
                                        <input type="checkbox" class="check_hazamat" value="1" size="5" maxlength="100"/>
                                    
                                </span>
                            </td>
                            </tr>	
                        </table>
                    </td>
                    <td>
                        <img style="margin-bottom: 65px;" src="https://herculesfreight.com/assets/images/add-icon.png" alt="Add" height="20" width="20"/>
                    </td>
                </tr>
            </table>
        </div>
         <div>
            <h2>Dimensions (Inches)</h2>
            <table  class="dimensions_tables">
                <tr>
                    <td>
                        <table>
                            <tr>
                                <td>
                                    <label>PCS</label>
                                </td>
                                <td>
                                    <label>Length</label>
                                </td>
                                <td>
                                    <label>Width</label>
                                </td>
                                <td>
                                    <label>Height</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>
                                        <input type="text" size="5" maxlength="50"/>
                                    </span>
                                </td>
                                <td>
                                    <span>
                                        <input type="text" size="5" maxlength="50"/>
                                    </span>
                                </td>
                                <td>
                                    <span>
                                        <input type="text"  size="5" maxlength="50"/> 
                                    </span>
                                </td>
                                <td>
                                    <span>
                                        <input type="text" size="5" maxlength="50"/>
                                    </span>
                                </td>
                                <td>
                                    <img src="https://herculesfreight.com/assets/images/add-icon.png" alt="Add" height="20" width="20"/>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
   <div>
        <ul>
            <li>
                <label>COD Amount(if applicable): $</label>
            <span>
                <input name="CODAmount" type="text" size="20" maxlength="100" />
            </span>
        </li>
            
        </ul>
        <p><input type="hidden" name="showbutton" value=""/>Where the rate depends on value, shippers must state specifically in writing the agreed or declared value of the property as follows:</p>

        <ul>
            <li>
                
            <label>The agreed or declared value of the property is hereby specifically stated by the shipper to not exceed </label>
            <span>
            <label class="agreed_properties">
                <input type="text" size="20" maxlength="100"/>
            </label>
            <span class="per">per </span>
            <label class="agreed_properties">
                <input type="text" size="20" maxlength="100"/>
            </label>
            </span>
        </li>
        <li>
            <label class="captchaLabel">Enter the contents of image<span class="mandatoryField">*</span>
        </label>
                <span>
                    <input type="text" name="captcha" id="captcha" maxlength="6" size="6"/><img class="captValue"  id ="captchasID" src="https://herculesfreight.com/assets/captcha/captcha.php?0.65052000 1633696059" />
                </span>
                <a href="#" id='reloadCaptcha'>
                    <img src="https://herculesfreight.com/assets/images/refresh.png" class="refreshButton"/>
                </a>
            </li>
                    </ul>
    </div>
     <p>
         <b>Note: Shipper must sign the bottom of the BOL and give to the HERCULES driver.</b>
        </p>
    <div class="create-reset_bill_lading-btn create-reset_bill_lading-btn_right">
        <input type="submit" value="Create Bill Of Lading"/>
        <input type="reset"  value="Reset"/>
    </div>
    <div class="clear"></div>
    <p>If this shipment is to be delivered to the consignee without recourse on the consignor, the consignor needs to sign the appropriate statement, which is in the fine-print area of the BOL.</p>

</form>
</article>


<?= $this->endSection() ?>