<?= $this->extend('layouts/app.php')?>
<?= $this->section('content')?> 
</header>   
<article class="content">

<form name="form_newcall" method="post"action="#">
        

    <h2>Contact Info</h2>  
    <div class="contact_information">
        <ul>
            <li><label class="border_top">Name <span class="mandatoryField">*</span></label>
            <span><input type="text" name="Name" id="Name" value="" size="20" maxlength="100"/></span><span id="availability_status"></span></li>
            <li><label>Phone <span class="mandatoryField">*</span></label>
            <span><input class="phone3" type="text" name="Phone1" id="Phone1" value="" size="20" maxlength="3"/></span>
            <span><input class="phone3" type="text" name="Phone2" id="Phone2" value="" size="20" maxlength="3"/></span>
            <span><input class="phone4" type="text" name="Phone3" id="Phone3" value="" size="20" maxlength="4"/></span>
            <span><input type="hidden" name="Phone" id="Phone" value=""/></span></li>
            <li><label>Email Address  <span class="mandatoryField">*</span></label>
            <span><input type="text" name="email" id="email" value=""size="20" maxlength="100"/></span></li>
        </ul>
    </div>
    <div id="clear"></div>
    <h2>Pickup Info</h2>
    <div class="contact_information">
        <ul>
            <li><label class="border_top">Shipper Name <span class="mandatoryField">*</span></label>
            <span><input type="text" name="ShipperName" id="ShipperName" value="" size="20" maxlength="100"/></span></li>
            <li><label>Contact Name <span class="mandatoryField">*</span></label>
            <span><input type="text" name="ContactName" id="ContactName" value=""  size="20" maxlength="100"/></span></li>
            <li><label>Street Address <span class="mandatoryField">*</span></label>
            <span><input type="text" name="StreetAddress" id="StreetAddress" value="" size="20" maxlength="150"/></span>
            <br><span id="availability_emailstatus"></span></li>

            <li><label>Zip/Postal <span class="mandatoryField">*</span></label>
            <span><input type="text" name="Zip" id="Zip" value="" size="20" maxlength="30"/>
                <input type="hidden" id="ValidZipCode" name="ValidZipCode">
            </span> 
            <span id="ZipcodeSpan" style="vertical-align: sub; color:red;margin-left:10px;"></span>
            </li>

            <li><label>State/Province <span class="mandatoryField">*</span></label>
                <span>
                <select name="State" id="State">
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
            </li>
            <li><label>City <span class="mandatoryField">*</span></label>
            <span>
                <select name="City" id="City">
                <option value="" selected="selected">Select a City</option>
            </select>

            </span></li>
            
            
            <li><label>Phone(if different)</label>
                        <span><input class="phone3" type="text" name="PhoneDifferent1" id="PhoneDifferent1" value="" size="20" maxlength="3" /></span>
            <span><input class="phone3" type="text" name="PhoneDifferent2" id="PhoneDifferent2" value="" size="20" maxlength="3" /></span>
            <span><input class="phone4" type="text" name="PhoneDifferent3" id="PhoneDifferent3" value="" size="20" maxlength="4" /></span>
            <span><input type="hidden" name="PhoneDifferent" id="PhoneDifferent" value=""/></span></li>
            <li><label>Total Shipments <span class="mandatoryField">*</span></label>
                <span>
                    <select name="TotalShipements" id="TotalShipements">
                    <option value="">Select a Shipment</option>
                                                    <option value="1" selected="selected"> 1</option>
                                                        <option value="2"> 2</option>
                                                        <option value="3"> 3</option>
                                                        <option value="4"> 4</option>
                                                        <option value="5"> 5</option>
                                                        <option value="6"> 6</option>
                                                        <option value="7"> 7</option>
                                                        <option value="8"> 8</option>
                                                        <option value="9"> 9</option>
                                                        <option value="10"> 10</option>
                                                </select>
                </span>
            </li>
        </ul>
    </div>  
        
    <div id="clear"></div>
    
    <h2>Shipment Info<br/>
   <span style="color:red; display:none; margin:0px; font-size:10px;" id="newdatetime"></span>
    <span style="color:black; display:none; margin:0px; font-size:10px;" id="getdatetime">Note: Ready & Close times should be the times at the pickup location and should not be earlier than the current time at that location</span>
        </h2>
    <input type="hidden" id="hidNowTime">
    <input type="hidden" id="hidZipDateTime">
    <div class="contact_information">
        <ul>
        <li><label class="border_top">Pickup Date <span class="mandatoryField">*</span> </label>
        <span><input  name="PickupDate" id="date" readonly="readonly" type="text" value="" /> </span></li>
        <li><label>Ready Time <span class="mandatoryField">*</span></label>
        <span><input class="time2" type="text" name="ReadyTime1" id="ReadyTime1" value="" size="20" maxlength="2" placeholder="hh" /></span>
        <span><input class="time2" type="text" name="ReadyTime2" id="ReadyTime2" value="" size="20" maxlength="2" placeholder="mm" /></span>
        <span><select class="time_select" name="ReadyTime3" id="ReadyTime3">
        <option value="am">AM</option>
        <option value="pm">PM</option>
        </select></span>
        <span id="ready_now">Now</span>
        <span id="rtime" class="errormsg" style="display: none;">Hours(1 to 12) Minutes(0 to 59)</span>
        <span id="rtime_error" class="errormsg" style="display: none;">Ready Time cannot be in the past</span>
        <span><input type="hidden" name="ReadyTime" id="ReadyTime" value="" size="20" maxlength="30" placeholder="Expected Format: hh:mm am|pm"/></span></li>
        <li><label>Closing Time <span class="mandatoryField">*</span></label>
        <span><input class="time2" type="text" name="ClosingTime1" id="ClosingTime1" value="" size="20" maxlength="2" placeholder="hh" /></span>
        <span><input class="time2" type="text" name="ClosingTime2" id="ClosingTime2" value="" size="20" maxlength="2" placeholder="mm" /></span>
        <span><select class="time_select" name="ClosingTime3" id="ClosingTime3">
        <option value="am">AM</option>
        <option value="pm">PM</option>
        </select></span>
        <span id="ctime" class="errormsg" style="display: none;">Hours(1 to 12) Minutes(0 to 59)</span>
        <span id="ctime_error" class="errormsg" style="display: none;">Closing Time has to be at least 2 hours later than the Ready Time</span>
        <span><input type="hidden" name="ClosingTime" id="ClosingTime" value="" size="20" maxlength="30" placeholder="Expected Format: hh:mm am|pm"/></span></li>
        </ul>
    </div>
    
    <div id="clear"></div>
    <div id="Dynamicdiv">
        
    </div>
    
  
    <div class="contact_information">
        
                    <ul>
                <li><label class="captchaLabel">Enter the contents of image<span class="mandatoryField">*</span></label>
                <span><input type="text" name="captcha" id="captcha" class="captInput" maxlength="6" size="6"/><img  id ="captchasID" class="captValue" src="https://herculesfreight.com/assets/captcha/captcha.php?0.26094800 1633514065"/></span><a href="#" id='reloadCaptcha'><img src="https://herculesfreight.com/assets/images/refresh.png" class="refreshButton"/></a></li>
            </ul>
            </div>
    <div class="clear"></div>
    <span class="cap_show">
        <div class="cap_status"></div>
    </span>
    <span class="pickup_info_new_call">
        Any scheduling done after 3 PM (local time at pickup location) will be processed the next business day.    </span><br><br>
    
    
    <div class="btn_in_tables">
        <input type="submit" name="btn_submit" id="btn_submit" value="Submit" size="20"/>
        <input type="reset" name="btn_clear" id="btn_clear" value="Clear" size="20"/>
    </div>
</form>
</article>
	  
<div style="clear:both"></div>

        </div>
	  
        <footer>
           
<div style="width:1024px; margin:0 auto;position:relative;">
    <div class="footerLeft"><span>The Strength To Carry Your Reputation</span>
    <div class="footer-links">&copy; Copyright 2015 Hercules Forwarding, Inc. <a href="#">Privacy Policy</a> | <a href="#">Terms</a> | <a href="#">Site Map</a> | <a href="#">Feedback</a></div>
    </div>
    
    <address>
    In Canada call <span>800.822.4512</span><br>
    In US call <span>800.621.8723</span>
    </address>
</div>

<div>

</div>
 
        </footer>
<?= $this->endSection() ?>