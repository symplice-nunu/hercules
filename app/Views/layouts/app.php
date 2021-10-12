<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HERCULES</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css');?>">
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('css/main.css');?>">
</head>
<body>

<div id="language">
            <div class="languageList">
                <div>
                    English | <a href="#" >French</a>|<a href="#"   >Spanish</a>
                                    </div>
            </div>
        </div>
		        <header class="header">

<div style="margin:0 auto; width:1024px; position:relative;">
	
    <a href="#"><img src="https://herculesfreight.com/assets/default/images/logo.png" alt="Insert Logo Here" width="185" height="104" id="Insert_logo" /></a>
   
	<div class="login_on_nav">
            <div style=" margin:6px 0 3px 0;">
            <form name="Login_Form" id="Login_Form" method="post" action="">
				<input name="Login" id="Login" type="text" class="login_Input login_Form" placeholder="Login" />
				<input name="Password" id="Password" type="password" class="login_Input login_Form" placeholder="Password" />
				<input class="btn_Login btn" name="Login_submit" id="Login_submit" type="submit" value="Login" /><br>
			</form>
			<div id="message"></div>
        </div>
        <div class="forgot_password">
			<a href="#" class="forgot_P">Forgot Password</a>
			<a href="#" class="new_user">New User</a>
        </div>
     
    </div>
    <div class="menu_header">
    <ul id="menu">
		<li ><a href="#" class=' '>Home</a></li>
				<li ><a href="#"  class="" >Freight Tools</a>
			<div class="columns_dropdown ">
				<div class="col_3">
				<span><a>Track Shipment</a></span>
				<span><a href="#">Multi Track</a></span>
				<span class="get_pod"><a class="get_pod_size" href="#">Get POD</a></span>	
				<span class="shedule_pickup"><a class="shedule_pickup_size" href="#">Schedule a pickup</a></span>
				<span class="rate_quote"><a class="rate_quote_size" href="#">Rate Quote</a></span>
				<span class="terminal_map"><a class="get_pod_size" href="#">Terminal Maps</a></span>
				<span class="transit_times"><a href="#">Transit Times</a></span>
				<span class="dowload"><a class="rate_quote_size" href="#">Download Rates</a></span>
				<span class="rate_quote"><a class="get_pod_size" href="#">Exchange Rate for Freight Charges</a></span>
				</div>
			</div>   
		</li>
		<li><a href="#">Customs Brokerage</a>
			<div class="columns_dropdown  ">
            <div class="col_3">
				<span class="customer_brok"><a href="#">About Us</a></span>
				<span class="parstrack"><a href="#">PARS Tracker</a></span>
				<span class="customer_brok"><a href="#">FAQ</a></span>	
            </div>
			</div>  
		</li>
		<li >
			<a href="#"> Documents</a>
			<div class="columns_dropdown  ">
				<div class="col_2">
				<div class="documentList">
					<p class="bill"><span>Bill of Lading Form</span>
					<label><a href="#">online</a>
					<a href="#" target="_blank">download</a></label>
                    </p>
				</div>
				<div class="documentList">
					<p class="custom"><span>Canada Customs Inv.</span>
					<label><a href="#">online</a>
					<a href="#" target="_blank">download</a>
					<a href="#">Help</a></label>
                    </p>
				</div>
				<div class="documentList">
					<p class="credit"><span>Credit Application</span>
					<label><a href="#" >online</a><a href="#" target="_blank">download</a>
										</label>
                    </p>
				</div>
				<div class="documentList">
					<p class="claims"><span>Claim Form</span>
					<label><a href="#"  >online</a>
					<a href="#">Claim Filing Policy & Help</a></label>
                    </p>
				</div>
				<div class="documentList">
					<p class="agency"><span>General Agency Agreement</span>
					<label><a href="#" target="_blank">download</a>
										</label>
                    </p>
				</div>
				<div class="documentList">
					<p class="nafta"><span>USMCA-CUSMA Certificate of Origin</span>
                    <label>
							<a href="#" target="_blank">download</a>
										</label>
                    </p>
					
				</div>
				<div class="clear"></div>
				<div class="documentList floatRight">
					
					<a href="#" class="more documentMoreSpan">More Forms...</a>
				</div>
				
				</div>
			</div>    
		</li>
		<li class="menu_right ">
			<a href="#"  class='' > Company Information</a>
			 <div class="columns_dropdown  ">
				<div class="col_3">
				   <span class="corporate_overview corporate_overview_size"><a href="#">Corporate Overview</a></span>
					<span  class="presentation_hercules corporate_overview_size">
										<a href="#" target="_blank">Presentation on Hercules</a>
										</span>
					<span class="jobs corporate_overview_size"><a href="#">Jobs</a></span>
					<span class="information_request corporate_overview_size"><a href="#">Request Information</a></span>
					<span class="mapIcon corporate_overview_size"><a href="#">Terminal List</a></span>
					<span class="contactus corporate_overview_size"><a href="#">Contact Us</a></span>
					<span class="NewsIcon corporate_overview_size"><a href="#">News</a></span>	
					<span class="feedbackIcon corporate_overview_size"><a href="#">Feedback</a></span>
                    <span class="nafta"><a href="#">Holiday Schedule</a></span>
				</div>

			</div>  
		</li>
    </ul>
    </div>
</div>
<div class="container">
                            <div class="sidebar1">
                    
    <div class="request_pick_up">
        <h3><span class="fa fa-play"></span>
        <a href="#" id="invoiceForm">Invoice Delivery Options</a></h3>
    </div>
<div class="request_pick_up">
    <h3><span class="fa fa-play"></span>
    <a href="#">Track Shipment</a></h3>
</div>


<div class="request_pick_up" id="track2">
    <h3><span class="fa fa-play"></span><a href="#">Transit Time</a></h3>
</div>


<div class="request_pick_up" id="track3">
    <h3><span class="fa fa-play"></span>
    <a href="#">Rate Quote</a></h3>
</div>
 
 
<div class="request_pick_up">
    <h3><a href="#"><span class="fa fa-play"></span>Request a Pick Up</a></h3>
</div>
<div class="request_pick_up">
    <h3><a href="#" class="terminal-map-toggle">
        <span class="fa fa-play"></span>Terminal Maps</a></h3>
	
    
</div> 

<div class="request_pick_up">
    <h3><a href="#"><span class="fa fa-play"></span>Help Videos</a></h3>
</div>

<div class="marque_news_alignment">

    <h3><span class="fa fa-play"></span><a href="#">News</a></h3>
    <div>
     
        <div class="marque_news_alignment_control">
            <marquee height="250" direction="up" scrollamount="3"  onmouseover="this.stop();" onmouseout="this.start();"><ul id="foo">
                                    <li>
                        <div class="news_info">
                            <a href="#" style="font-size:10px; text-decoration:none; text-align:justify; line-height:2em;">
                                <span style="color:#165cab;display: block;">Shippers Choice Award - 2021</span>
                                <p style="display:block;">Hercules is thrilled to announce we are a recipient of Insid...</p>
                            </a>
                                                        <div style="display: block;color:#165cab;font-size:10px;">20-August-2021</div>
                            <div style="height:10px"></div>
                        </div>
               		</li>
                                    <li>
                        <div class="news_info">
                            <a href="#" style="font-size:10px; text-decoration:none; text-align:justify; line-height:2em;">
                                <span style="color:#165cab; display: block;">Hercules acquires US regional carri...</span>
                                <p style="display:block;">July 27, 2021 - Hercules is pleased to announce a three-term...</p>
                            </a>
                                                        <div style="display: block;color:#165cab;font-size:10px;">29-July-2021</div>
                            <div style="height:10px"></div>
                        </div>
               		</li>
                                    <li>
                        <div class="news_info">
                            <a href="#" style="font-size:10px; text-decoration:none; text-align:justify; line-height:2em;">
                                <span style="color:#165cab; display: block;">General Rate Increase Effective 7/1...</span>
                                <p style="display:block;">We would like to personally thank you for your continued sup...</p>
                            </a>
                                                        <div style="display: block;color:#165cab;font-size:10px;">8-July-2021</div>
                            <div style="height:10px"></div>
                        </div>
               		</li>
                                    <li>
                        <div class="news_info">
                            <a href="#" style="font-size:10px; text-decoration:none; text-align:justify; line-height:2em;">
                                <span style="color:#165cab; display: block;">Colonial Pipeline</span>
                                <p style="display:block;">Shutdown of the Colonial pipeline has effected fuel availabi...</p>
                            </a>
                                                        <div style="display: block;color:#165cab;font-size:10px;">12-May-2021</div>
                            <div style="height:10px"></div>
                        </div>
               		</li>
                            </ul></marquee>
            <div class="more_news">
				<a href="#" > <b>More News</b> </a>
            </div>
        </div>

        <aside class="more_news">
			<h2>A Peek Inside the Service</h2>
            <p>26 locations in the US and Canada</p>
            <p>Claim ratio of only .0026</p>
            <p>Driver handheld computers for real time web tracing</p>
            <p>Ability to move 100% of your freight CSA</p>
            <a href="#" > More... </a>
        </aside>
        <aside class="more_news">
            <h2>Shipping To Canada 101</h2>
                                    <p>Do I need to keep records?</p>
                                            <p>What kind of invoice do I need to provide for clearance?</p>
                                            <p>What to Expect From a NAFTA Verification</p>
                                            <p>What is AMPS?</p>
                                <a href="#" > More... </a>
        </aside>        
    </div>
</div> 
</div>

<div class="app">
    <?= $this->renderSection('content')?>
</div>


</body>
</html>