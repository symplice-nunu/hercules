<?= $this->extend('layouts/app.php')?>
<?= $this->section('content')?>     
</header>
        
<article class="content">
<h2>Rate Quote</h2>

<form method="post" action="">

    
	<div class="contact_information">
        	
    	<ul>
            <li>
                <label class="formBorderTop">Freight Terms <span class="mandatoryField">*</span></label>
                <span>
                    <input name="freight_term" type="radio" id="Prepaid" value="PPD"  /><span>Prepaid</span>  
                    <input type="radio" name="freight_term" id="Collect"  value="COL"   /><span>Collect</span>
                    <input type="radio" name="freight_term" id="ThirdParty" value="3RD"  /><span>3rd Party</span>
                </span>
            </li>
            <li>
                <label>Currency <span class="mandatoryField">*</span></label>
                <span>
                    <input name="currency" type="radio"  id="USD" value="USD"  /><span>USD</span>
                    <input type="radio" name="currency" id="CND" value="CND"   /><span>CND</span>
                </span>
            </li>
        </ul>
    </div>
    <div class="contact_information">
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
        <div class="contact_information">
    	<div style="color:#ff0000; font-size:10px;">Note: Minimum of 4 characters for the Canadian postal code and 5 characters for the US postal code </div>
		<ul>        		
		
            <li>
                <label>
                    Origin (Zip/Postal code) <span class="mandatoryField">*</span>
                </label>
                <span>
                    <input type="text" name="origin" id="origin" value=""   /><a href="">
                        <img src="https://herculesfreight.com/graphics/lookupicon.png" alt="search">
                    </a>
                </span>
            </li>
            <li>
                <label>
                    Destination (Zip/Postal code) <span class="mandatoryField">*</span>
                </label>
                <span>
                    <input type="text" name="destination" id="destination" value=""/>
                    <a href=""><img src="https://herculesfreight.com/graphics/lookupicon.png" alt="search"></a>
                </span>
            </li>
                            <li>
                    <label>LTL Discount %</label>
                    <span>
                        <input type="text" name="ltl_discount" id="ltl_discount" value="" />
                    </span>
                </li>
                <li>
                    <label>MIN Discount (if different) %</label>
                    <span>
                        <input type="text" name="min_discount" id="min_discount" value=""  />
                    </span>
                </li>
                <li>
                    <label>Absolute MIN Charges $</label>
                    <span>
                        <input type="text" name="absolute_min" id="absolute_min" value=""  />
                    </span>
                </li>
                        <li>
                <label>Notes / Comments </label>
                <span>
                    <input type="text" name="acc1" id="acc1" value="" size="20" maxlength="100" />
                </span>
            </li>
        
        </ul>
    </div>
    <div class="contact_information">
        <ul>
            <li>
                <span>
                    <input type="Checkbox" name="cubic" class="check-label-cubic" id="cubic" value="1"  /> This shipment is 600 cubic feet or more in volume (negotiated discount may not apply)</span>
            </li>
        </ul>
        <div class="check-label-cubic-info">
            If your shipment:
            <p>1. measures 600 cubic feet or more, or</p> <br>

            <p style="margin-left: -19.8em;">2. weighs 20,000 lbs or more</p>

            <p>Please call your representative (or 800-621-8723 in the U.S. / 800-822-4512 in Canada) for a special volume quote</p>
        </div>
</div>
<h2 class="optionLeftAvailable">
    Class<span class="mandatoryField">*</span>
</h2>
    <label class="optionLeftInput" style="font-weight: bold;">Weight (lbs)
    <span class="mandatoryField">*</span>
</label>
    <label class="optionLeftInput" style="font-weight: bold;">
    Hazmat</label>  
    <div class="contact_information">
        <ul class="dynamic">
                            <li>
                    <label>
                        <select name="class[]" id="class"  class="validate[required] boxStyle">
                            <option value="">Select One</option>
                            <option value="50">50</option>
                            <option value="55">55</option>
                            <option value="60">60</option>
                            <option value="65">65</option>
                            <option value="70">70</option>
                            <option value="77">77</option>
                            <option value="85">85</option>
                            <option value="92">92</option>
                            <option value="100">100</option>
                            <option value="110">110</option>
                            <option value="125">125</option>
                            <option value="150">150</option>
                            <option value="175">175</option>
                            <option value="200">200</option>
                            <option value="250">250</option>
                            <option value="300">300</option>
                            <option value="400">400</option>
                            <option value="500">500</option>
                        </select>
                    </label>
                    <span>
                        <label class="optionLeftInput"><input type="text" name="weight[]" id="weight"  class="validate[required,custom[integer]] weight" value="" size="20" maxlength="50"/></label>
                        <label class="optionLeftInput"><input type="text" name="hazmat[]" id="hazmat"  value="" size="20" maxlength="50" onclick = "if(this.value==''){this.value='X'}else if(this.value=='X'){this.value=''}" onkeypress = "if(this.value==''){this.value='X'}" style='color:red;font-weight:bolder' readonly /></label>
                    </span>
                </li>
                    </ul>
        <div class="addship">
            <input type="button" name="btn_addclass" id="btn_addclass" value="Add Class" size="20">
        </div>
         <ul>
            <li>
                <label>Number of Pallets</label>
                <span>
                    <input type="text" name="pallets" id="pallets" value="" class="validate[custom[integer]]" size="3" maxlength="2" style="width:30px;" />
                </span>
            </li>
        </ul>    
    </div>
    <div class="form_header_inner_style_button" style="margin-left: 24.5em;">
        <input type="submit" name="btn_submit" id="btn_submit" class = "cubic_val" value="Get Rate" size="20"/>
        <input type="reset" name="btn_clear" id="btn_clear" value="Clear" size="20"/>
    </div>
</form>
</article>


<?= $this->endSection() ?>