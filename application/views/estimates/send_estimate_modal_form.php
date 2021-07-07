<?php echo form_open(get_uri("estimates/send_estimate"), array("id" => "send-estimate-form", "class" => "general-form", "role" => "form")); ?>
<div class="modal-body clearfix">
    <input type="hidden" name="id" value="<?php echo $estimate_info->id; ?>" />

    <div class="form-group">
        <label for="contact_id" class=" col-md-3"><?php echo lang('to'); ?></label>
        <div class=" col-md-9" >
            <?php
            echo form_dropdown("contact_id", $contacts_dropdown, array(), "class='select2 validate-hidden' id='contact_id' data-rule-required='true', data-msg-required='" . lang('field_required') . "'");
            ?>
        </div>
    </div>
    <div class="form-group">
        <label for="estimate_cc" class=" col-md-3">CC</label>
        <div class="col-md-9">
            <?php
            echo form_input(array(
                "id" => "estimate_cc",
                "name" => "estimate_cc",
                "value" => "",
                "class" => "form-control",
                "placeholder" => "CC"
            ));
            ?>
        </div>
    </div>
    <div class="form-group">
        <label for="estimate_bcc" class=" col-md-3">BCC</label>
        <div class="col-md-9">
            <?php
            echo form_input(array(
                "id" => "estimate_bcc",
                "name" => "estimate_bcc",
                "value" => "",
                "class" => "form-control",
                "placeholder" => "BCC"
            ));
            ?>
        </div>
    </div>

    <div class="form-group">
        <label for="subject" class=" col-md-3"><?php echo lang("subject"); ?></label>
        <div class="col-md-9">
            <?php
            echo form_input(array(
                "id" => "subject",
                "name" => "subject",
                "value" => $subject,
                "class" => "form-control",
                "placeholder" => lang("subject")
            ));
            ?>
        </div>
    </div>

    <?php
    $template = '<div id="email_tempalte">

    <div class="col-sm-12 col-lg-12 menu_r">
        <div class="">
        </div>

        <div style="color: navy; margin-top: 40px">
            <p style="color: navy;">Dear '.@$CONTACT_FIRST_NAME.''.@$CONTACT_LAST_NAME.',</p>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <span></span>&nbsp;<span style="text-transform: uppercase;font-weight: bold;">'.$info_mail->code_air.'</span>&nbsp;<span>as below:</span><br><br>
                    <span>Currency: USD</span>
                </div>
            </div>

        </div>
        <div style="margin-top: 30px">
            <table width="900px" border="1" cellspacing="0">
                <tr style="text-align: center; background: aqua; font-weight: bold; text-transform: uppercase;">
                    <td height="40px" width="7%" style="font-weight: bold;">
                        <span>A / L </span>
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
                </tr>';
                foreach($price_table as $price){
        $template.=
                '<tr style="text-align: center;">
                    <td height="40px">
                        <span style="text-transform: uppercase;font-weight: bold;">'.$price->a_l.'</span>
                    </td>
                    <td>
                        <span>'.$price->kg_45.'</span>
                    </td>
                    <td>
                        <span>'.$price->kg_100.'</span>
                    </td>
                    <td>
                        <span>'.$price->kg_300.'</span>
                    </td>
                    <td>
                        <span>'.$price->kg_500.'</span>
                    </td>
                    <td>
                        <span>'.$price->kg_1000.'</span>
                    </td>
                    <td colspan="2">
                        <span style="text-transform: uppercase;">'.$price->myc_iss.'</span>
                    </td>
                    <td>
                        <span>'.$price->scc.'</span>
                    </td>
                    <td>
                        <span>'.$price->cgc.'</span>
                    </td>
                    <td>
                        <span>'.$price->awb.'</span>
                    </td>
                    <td>
                        <span style="text-transform: uppercase;">'.$price->routing.'</span>
                    </td>
                    <td>
                        <span>'.$price->frequency.'</span>
                    </td>
                    <td>
                        <span>'.$price->t_t.'</span>
                    </td>
                </tr>
                ';};
    $template.='
            </table>
        </div>

        <div style="color: navy; margin-top: 50px; overflow: hidden;" class="col-md-12 col-sm-12">
            <div class="row">
                <label for=" title">FOB charges:</label><br><br>
                <table width="100%">
                    <tr>
                        <td height="30px" width="150px"><span>- AWB fee:</span>&nbsp;<span>'.$info_mail->awb_fee.' USD</span></td>
                      
                    </tr>
                    <tr>
                        <td height="30px"><span>- Airport terminal fee:</span>&nbsp;<span>'.$info_mail->airport_terminal_fee.' USD</span></td>
                    
                    </tr>
                    <tr>
                        <td height="30px"><span>- Customs export:</span>&nbsp;<span>'.$info_mail->customs_export.' USD</span></td>
                      
                    </tr>
                    <tr>
                        <td height="30px"><span>- Airport handling fee:</span>&nbsp;<span>'.$info_mail->airport_handing_fee.' USD</span></td>
                     
                    </tr>
                    <tr>
                        <td height="30px"><span>- Fumigation fee (if any):</span>&nbsp;<span>'.$info_mail->fumigation_fee.' USD</span></td>
                        
                    </tr>
                    <tr>
                        <td height="30px"><span>- Pick-up & trucking to airport:</span>&nbsp;<span>'.$info_mail->pick_up.' USD</span></td>
                      
                    </tr>
                </table>
   
            
            </div>
        </div>
        <br><br>

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
';?>
    <div class="form-group">
        <div class=" col-md-12">
            <?php
            echo form_textarea(array(
                "id" => "message",
                "name" => "message",
                "value" => $template,
                "class" => "form-control"
            ));
            ?>
        </div>
    </div>
    <div class="form-group ml15">
        <i class='fa fa-check-circle' style="color: #5CB85C;"></i> <?php echo lang('attached') . ' ' . anchor(get_uri("estimates/download_pdf/" . $estimate_info->id), lang("estimate") . "-$estimate_info->id.pdf", array("target" => "_blank")); ?> 
    </div>

</div>


<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> <?php echo lang('close'); ?></button>
    <button type="submit" class="btn btn-primary"><span class="fa fa-send"></span> <?php echo lang('send'); ?></button>
</div>
<?php echo form_close(); ?>

<script type="text/javascript">
    $(document).ready(function () {

        $('#send-estimate-form .select2').select2();
        $("#send-estimate-form").appForm({
            beforeAjaxSubmit: function (data) {
                var custom_message = encodeAjaxPostData(getWYSIWYGEditorHTML("#message"));
                $.each(data, function (index, obj) {
                    if (obj.name === "message") {
                        data[index]["value"] = custom_message;
                    }
                });
            },
            onSuccess: function (result) {
                if (result.success) {
                    appAlert.success(result.message, {duration: 10000});
                    if (typeof updateInvoiceStatusBar == 'function') {
                        updateInvoiceStatusBar(result.invoice_id);
                    }

                } else {
                    appAlert.error(result.message);
                }
            }
        });

        initWYSIWYGEditor("#message", {height: 400, toolbar: []});

    });
</script>