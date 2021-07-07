<?php

/**
 *
 */
class Migration_update_email_template extends CI_Migration
{


    function up(){
        $data = array(
            'template_name' => "send_estimate",
            'email_subject' => "New estimate",
            'default_message' => '

<div id="email_tempalte">  	

	<div class="col-sm-12 col-lg-12 menu_r">
		<div class="">
                <h4><?php echo lang("form_email_template"); ?></h4>
        </div>

    	<div style="color: navy; margin-top: 40px">
			<p style="color: navy;">Dear {CONTACT_FIRST_NAME} {CONTACT_LAST_NAME},</p> 
		
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<span>Our net/net air rate ex</span>&nbsp;<span>{code_air}</span>&nbsp;<span>as below:</span><br><br>
				<span>Currency: USD</span>
			</div>
		</div>

	</div>
	<div style="margin-top: 30px">
		<table width="1000px" border="1" cellspacing="0">
			<tr style="text-align: center; background: aqua; font-weight: bold; text-transform: uppercase;">
				<td height="40px" width="7%" style="font-weight: bold;">
					<span >A / L </span>
				</td>
				<td width="7%" style="font-weight: bold;">
					<span>+45 KG</span>
				</td>
				<td width="7%">
					<span>+100 KG</span>
				</td>
				<td width="7%">
					<span>+300 KG</span>
				</td>
				<td width="7%">
					<span>+500 KG</span>
				</td>
				<td width="7%">
					<span>+1000 KG</span>
				</td>
				<td width="7%">
					<span>MYC</span>
				</td>
				<td width="7%">
					<span>ISS</span>
				</td>
				<td width="7%">
					<span>SCC</span>
				</td>
				<td width="7%">
					<span>CGC</span>
				</td>
				<td width="7%">
					<span>AWB</span>
				</td>
				<td width="9%">
					<span>Routing</span>
				</td>
				<td width="7%">
					<span>Frequency</span>
				</td>
				<td width="7%">
					<span>T/T</span>
				</td>
			</tr>
			<tr style="text-align: center;">
				<td height="40px" >
					<span style="text-transform: uppercase;font-weight: bold;">{al_1}</span>
				</td>
				<td>
					<span>{kg_45_1}</span>
				</td>
				<td>
					<span>{kg_100_1}</span>
				</td>
				<td>
					<span>{kg_300_1}</span>
				</td>
				<td>
					<span>{kg_500_1}</span>
				</td>
				<td>
					<span>{kg_1000_1}</span>
				</td>
				<td colspan="2">
					<span style="text-transform: uppercase;">{myc_iss_1}</span>
				</td>
				<td>
					<span>{scc_1}</span>
				</td>
				<td>
					<span>{cgc_1}</span>
				</td>
				<td>
					<span>{awb_1}</span>
				</td>
				<td>
					<span style="text-transform: uppercase;">{routing_1}</span>
				</td>
				<td>
					<span>{frequency_1}</span>
				</td>
				<td>
					<span>{tt_1}</span>
				</td>
			</tr>
			<tr style="text-align: center;">
				<td height="40px" style="text-transform: uppercase;font-weight: bold;">
					<span style="text-transform: uppercase;font-weight: bold;">{al_2}</span>
				</td>
				<td>
					<span>{kg_45_2}</span>
				</td>
				<td>
					<span>{kg_100_2}</span>
				</td>
				<td>
					<span>{kg_300_2}</span>
				</td>
				<td>
					<span>{kg_500_2}</span>
				</td>
				<td>
					<span>{kg_1000_2}</span>
				</td>
				<td colspan="2">
					<span style="text-transform: uppercase;">{myc_iss_2}</span>
				</td>
				<td>
					<span>{scc_2}</span>
				</td>
				<td>
					<span>{cgc_2}</span>
				</td>
				<td>
					<span>{awb_2}</span>
				</td>
				<td>
					<span style="text-transform: uppercase;">{routing_2}</span>
				</td>
				<td>
					<span>{frequency_2}</span>
				</td>
				<td>
					<span>{tt_2}</span>
				</td>
			</tr>
		</table>
	</div>

	<div style="color: navy; margin-top: 50px; overflow: hidden;" class="col-md-12 col-sm-12">
		<div class="row">
			<label for=" title">FOB charges:</label><br><br>

			<div class="form-group">
		        <span>- AWB fee:</span>&nbsp;<span>{awb_fee}</span>
	      	</div>
	      	<div class="form-group">
		        <span>- Airport terminal fee:</span>&nbsp;<span>{airport_terminal_fee}</span>
	      	</div>
	      	<div class="form-group">
		        <span>- Customs export:</span>&nbsp;<span>{customs_export}</span>
	      	</div>
	      	<div class="form-group">
		        <span>- Airport handling fee:</span>&nbsp;<span>{airport_handing_fee}</span>
	      	</div>
	      	<div class="form-group">
		        <span>- Fumigation fee (if any):</span>&nbsp;<span>{fumigation_fee}</span>
	      	</div>
	      	<div class="form-group">
		        <span>- Pick-up & trucking to airport:</span>&nbsp;<span>{pick_up}</span>
	      	</div>
		</div>	
	</div><br><br>

	<div style="color: navy; margin-top: 40px;">
		<div style="margin-top: 40px; ">
			<p>Hope this will help.</p>
		</div>
	</div>

	<div style="margin-top: 40px; color: red">
		<span>Notice: We will be closed for public holidays on April 25 <br>
		and from April 30 to May 01, will be back to work on May 02.</span>
	</div>

	<div style="color: navy; margin-top: 40px;">
		<span>Thanks and b. regards</span><br>
		<span>C.Kieu. Galaxy Logistics Co.,Ltd</span><br>
		<span>Unit 2401, 24/f, Tower 101 Lang Ha, Hanoi, Vietnam</span><br>
		<span>Tel.: 84.24.35624946    Fax:  84.24.35624947</span><br>
		<span>Email.:  kieu.vt@galaxy-vietnam.com</span><br>
		<span style="padding-left: 45px">galaxyhanoi@hn.vnn.vn</span><br>
		<span style="padding-left: 45px">Skype : kieugalaxy1</span>
	</div>

	
	</div>
</div>
	'
        );
        $this->db->insert("email_templates", $data);


    }
}

?>