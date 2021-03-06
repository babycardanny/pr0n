     <div id="rightcontent">
        {include file="errmsg.tpl"}
        <div id="right">
        <div align="center">
        <h2>Mobile / iPhone / iPod Settings</h2>
        <div id="simpleForm">
        <form name="media_settings" method="POST" action="index.php?m=iphone">
        <fieldset>
        <legend>Mobile Configuration</legend>
            <label for="iphone_convert" style="width: 35%;">Mobile / iPhone / iPod Video Conversion: </label>
            <select name="iphone_convert">
            <option value="0"{if $iphone_convert eq "0"} selected="selected"{/if}>Disabled</option>
            <option value="1"{if $iphone_convert eq "1"} selected="selected"{/if}>Enabled</option>
            </select><br>
		</fieldset>    
            
         <fieldset> 
         <legend>Mobile Frontend Settings</legend> 
            {if $mobile_frontend == '1'}
            <label for="mobile_view_limit" style="width: 35%;">Mobile Page Videos Per Page: </label>
            <select name="mobile_view_limit">
            <option value="5"{if $mobile_view_limit eq "5"} selected="selected"{/if}>5</option>
            <option value="10"{if $mobile_view_limit eq "10"} selected="selected"{/if}>10</option>
            <option value="15"{if $mobile_view_limit eq "15"} selected="selected"{/if}>15</option>
            <option value="20"{if $mobile_view_limit eq "20"} selected="selected"{/if}>20</option>
            <option value="25"{if $mobile_view_limit eq "25"} selected="selected"{/if}>25</option>
            <option value="30"{if $mobile_view_limit eq "30"} selected="selected"{/if}>30</option>
            <option value="35"{if $mobile_view_limit eq "35"} selected="selected"{/if}>35</option>
            <option value="40"{if $mobile_view_limit eq "40"} selected="selected"{/if}>40</option>
            <option value="45"{if $mobile_view_limit eq "45"} selected="selected"{/if}>45</option>
            <option value="50"{if $mobile_view_limit eq "50"} selected="selected"{/if}>50</option>
            </select><br>
            
            <label for="mobile_template" style="width: 35%;">Mobile Template: </label>
            <select name="mobile_template">
            <option value="mobile_default"{if $mobile_template eq "mobile_default"} selected="selected"{/if}>Mobile Default</option>
            </select><br>
            
            <label for="mobile_default_type" style="width: 35%;">Default Videos Type: </label>
            <select name="mobile_default_type">
            <option value="recent"{if $mobile_default_type eq "recent"} selected="selected"{/if}>Recent</option>
            <option value="rated"{if $mobile_default_type eq "rated"} selected="selected"{/if}>Top Rated</option>
            <option value="popular"{if $mobile_default_type eq "popular"} selected="selected"{/if}>Popular</option>
            </select><br>
            
            {else}
            	<h3 style="color:#E51442;">iPhone / Mobile Plugin Not Installed</h3><br/>
            	<small>You can convert videos for mobile, but the Mobile Frontend is Disabled.</small><br><small>To enable the Mobile Frontend, you need to purchase and install the "iPhone / Mobile Plugin".</small>
            {/if}
         </fieldset>    
            
         <fieldset> 
         <legend>Mobile Encoding Settings</legend>  
            <!-- Encoding Passes -->
	        <label for="iphone_encodepass" style="width: 35%;">Encoding Passes: </label>
	        <select name="iphone_encodepass">
	        <option value="1"{if $sm_encodepass eq "1"} selected="selected"{/if}>1 Pass</option>
	        <option value="2"{if $sm_encodepass eq "2"} selected="selected"{/if}>2 Pass</option>
	        </select>
	        <small style="color:#bbb; font-weight:0.8em;">Default: <i>2 Pass</i></small><br> 
	        
	        <!-- OVC Profile -->
	        <label for="iphone_ovc_profile" style="width: 35%;">OVC Profile: </label>
	        <select name="iphone_ovc_profile">
	        <option value="standard"{if $sm_ovc_profile eq "standard"} selected="selected"{/if}>Standard</option>
	        </select>
	        <small style="color:#bbb; font-weight:0.8em;">Default: <i>Standard</i></small><br> 
	        
	        <!-- Bitrate Type -->
	        <script>
	        {literal}
	        function hdvbr(id){
	        	var val = document.getElementById(id).value
	        	if(val == 'fix'){
	        		document.getElementById('btr').style.display = "block"
	        	}else{
	        		document.getElementById('btr').style.display = "none"
	        	}
	        }
	        {/literal}
	        </script>
	        <label for="iphone_ref_type" style="width: 35%;">Video Bitrate: </label>
	        <select name="iphone_ref_type" id="hdvdr" onchange="hdvbr(this.id)">
	        <option value="standard"{if $sm_ref_type eq "standard"} selected="selected"{/if}>Auto Calculated</option>
	        <option value="fix"{if $sm_ref_type eq "fix"} selected="selected"{/if}>Fixed</option>
	        </select>
	        <small style="color:#bbb; font-weight:0.8em;">Default: <i>Auto Calculated</i></small><br>        		       
 			<!-- Video Bit-Rate -->  
 			<div id="btr" {if $sm_ref_type eq "standard"}style="display:none;"{else}style="display:block;"{/if}>        	
	        <label for="iphone_ref_bitrate" style="width: 35%;">Fixed Video Bitrate (in Kbps): </label>
	        <input type="text" name="iphone_ref_bitrate" value="{$sm_ref_bitrate}">
	        <small style="color:#bbb; font-weight:0.8em;">Default: <i>1500</i></small><br> 
			</div>
			<!-- Blackbars -->
	        <label for="iphone_blackbars" style="width: 35%;">Blackbars: </label>
	        <select name="iphone_blackbars">
	        <option value="1"{if $sm_blackbars eq "1"} selected="selected"{/if}>Yes</option>
	        <option value="0"{if $sm_blackbars eq "0"} selected="selected"{/if}>No</option>
	        </select>
	        <small style="color:#bbb; font-weight:0.8em;">Default: <i>No</i></small><br> 	        
	          		       
	        <!-- Resize Base -->
	        <label for="iphone_resize_base" style="width: 35%;">Resize Base: </label>
	        <select name="iphone_resize_base">
	        <option value="area"{if $sm_resize_base eq "area"} selected="selected"{/if}>Area</option>
	        <option value="width"{if $sm_resize_base eq "width"} selected="selected"{/if}>Width</option>
	        <option value="height"{if $sm_resize_base eq "height"} selected="selected"{/if}>Height</option>
	        <option value="both"{if $sm_resize_base eq "both"} selected="selected"{/if}>Both</option>
	        <option value="crop"{if $sm_resize_base eq "crop"} selected="selected"{/if}>Crop</option>
	        </select>
	        <small style="color:#bbb; font-weight:0.8em;">Default: <i>Both</i></small><br>  	
	        <!-- Resize Width -->
	        <label for="iphone_resize_width" style="width: 35%;">Resize Width (px): </label>
	        <input type="text" name="iphone_resize_width" value="{$sm_resize_width}">
	        <small style="color:#bbb; font-weight:0.8em;">Default: <i>480</i></small><br>
	         <!-- Resize Height -->
	        <label for="iphone_resize_height" style="width: 35%;">Resize Height (px): </label>
	        <input type="text" name="iphone_resize_height" value="{$sm_resize_height}">
	        <small style="color:#bbb; font-weight:0.8em;">Default: <i>320</i></small><br>  

	        <!-- Audio Bit-Rate -->          	
	        <label for="iphone_audio_bitrate" style="width: 35%;">Audio Bitrate (in Kbps): </label>
	        <input type="text" name="iphone_audio_bitrate" value="{$sm_audio_bitrate}">
	        <small style="color:#bbb; font-weight:0.8em;">Default: <i>128</i></small><br>            
	        <!-- Audio Sampling -->
	        <label for="iphone_audio_sampling" style="width: 35%;">Audio Sampling rate (in KHz): </label>
	        <input type="text" name="iphone_audio_sampling" value="{$sm_audio_sampling}">
	        <small style="color:#bbb; font-weight:0.8em;">Default: <i>44100</i></small><br>       
	        

                        
        </fieldset>
        <div style="text-align: center;">
            <input type="submit" name="submit_media_mp4" value="Update Mobile Settings" class="button">
        </div>
        </form>
        </div>
        </div>
        </div>
     </div>
