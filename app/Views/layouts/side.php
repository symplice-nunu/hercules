<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HERCULES</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css');?>">
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
   
</head>
<body>

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