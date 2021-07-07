<style>
    .form-control{
        border: 1px solid #ccc !important;
        border-radius: 3px !important;
    }
    table tr td{
        padding-left: 2px !important;
        padding-right: 2px !important;
    }
    #s2id_contact_id{
        border: 1px solid #ccc !important;
        border-radius: 3px !important;
    }
    .select2-choice{
        border: 1px solid #ccc !important;
        border-radius: 3px !important;
    }
    .rate{
        text-transform: uppercase;
    }
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        margin: 0;
    }
</style>
<div id="page-content" class="clearfix">
    <div style="max-width: 1000px; margin: auto;">
        <div class="page-title clearfix mt15">
            <h1><?php echo get_estimate_id($estimate_info->id); ?></h1>
            <div class="title-button-group">
                <span class="dropdown inline-block">
                    <button class="btn btn-info dropdown-toggle  mt0 mb0" type="button" data-toggle="dropdown" aria-expanded="true">
                        <i class='fa fa-cogs'></i> <?php echo lang('actions'); ?>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">

                        <li role="presentation"><?php echo modal_anchor(get_uri("estimates/send_estimate_modal_form/" . $estimate_info->id), "<i class='fa fa-edit'></i> " . lang('send_estimate'), array("title" => lang('send_estimate'), "data-post-id" => $estimate_info->id, "role" => "menuitem", "tabindex" => "-1")); ?> </li>
                        <li role="presentation"><?php echo anchor(get_uri("estimates/download_pdf/" . $estimate_info->id), "<i class='fa fa-download'></i> " . lang('download_pdf'), array("title" => lang('download_pdf'))); ?> </li>
                        <li role="presentation"><?php echo anchor(get_uri("estimates/preview/" . $estimate_info->id . "/1"), "<i class='fa fa-search'></i> " . lang('estimate_preview'), array("title" => lang('estimate_preview')), array("target" => "_blank")); ?> </li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><?php echo modal_anchor(get_uri("estimates/modal_form"), "<i class='fa fa-edit'></i> " . lang('edit_estimate'), array("title" => lang('edit_estimate'), "data-post-id" => $estimate_info->id, "role" => "menuitem", "tabindex" => "-1")); ?> </li>

                        <?php
                        if ($estimate_status == "draft") {
                            ?>
                            <li role="presentation"><?php echo ajax_anchor(get_uri("estimates/update_estimate_status/" . $estimate_info->id . "/sent"), "<i class='fa fa-send'></i> " . lang('mark_as_sent'), array("data-reload-on-success" => "1")); ?> </li>
                        <?php } else if ($estimate_status == "sent") { ?>
                            <li role="presentation" class="submit" ><?php echo ajax_anchor(get_uri("estimates/update_estimate_status/" . $estimate_info->id . "/accepted"), "<i class='fa fa-check-circle'></i> " . lang('mark_as_accepted'), array("data-reload-on-success" => "1")); ?> </li>
                            <li role="presentation"><?php echo ajax_anchor(get_uri("estimates/update_estimate_status/" . $estimate_info->id . "/declined"), "<i class='fa fa-times-circle-o'></i> " . lang('mark_as_declined'), array("data-reload-on-success" => "1")); ?> </li>
                        <?php } else if ($estimate_status == "accepted") { ?>
                            <li role="presentation"><?php echo ajax_anchor(get_uri("estimates/update_estimate_status/" . $estimate_info->id . "/declined"), "<i class='fa fa-times-circle-o'></i> " . lang('mark_as_declined'), array("data-reload-on-success" => "1")); ?> </li>
                        <?php } else if ($estimate_status == "declined") { ?>
                            <li role="presentation"class="submit"><?php echo ajax_anchor(get_uri("estimates/update_estimate_status/" . $estimate_info->id . "/accepted"), "<i class='fa fa-check-circle'></i> " . lang('mark_as_accepted'), array("data-reload-on-success" => "1")); ?> </li>
                        <?php } ?>

                        <?php
                        if ($estimate_status == "accepted" && $show_invoice_option) {
                            ?>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><?php echo modal_anchor(get_uri("invoices/modal_form/"), "<i class='fa fa-refresh'></i> " . lang('create_invoice'), array("title" => lang("create_invoice"), "data-post-estimate_id" => $estimate_info->id)); ?> </li>
                        <?php } ?>
                    </ul>
                            <span class="fa fa-check-circle"></button>
                </span>
                <?php echo modal_anchor(get_uri("estimates/item_modal_form"), "<i class='fa fa-plus-circle'></i> " . lang('add_item'), array("class" => "btn btn-default", "title" => lang('add_item'), "data-post-estimate_id" => $estimate_info->id)); ?>
                    <?php echo form_open(get_uri("projects/save_autotask"), array("id" => "task-form", "class" => "general-form", "role" => "form")); ?>
                    <input type="text" hidden="hidden" name="project_id" value="<?php echo ($estimate_info->project_id) ;?>">
                        <input type="text"  hidden="hidden" name="title" value="<?php echo ($estimate_info->title) ;?>" >
                        <input type="text"  hidden="hidden" name="client_id" value="<?php echo ($estimate_info->client_id) ;?>" >
                        <input type="text"  hidden="hidden" name="assign_id" value="<?php echo ($estimate_info->assign_id) ;?>" >
                      <?php echo form_close(); ?>
            </div>
        </div>
        <div id="estimate-status-bar">
            <?php $this->load->view("estimates/estimate_status_bar"); ?>
        </div>
        <div class="mt15">
            <div class="panel panel-default p15 b-t">
                <div class="clearfix p20">
                    <!-- small font size is required to generate the pdf, overwrite that for screen -->
                    <style type="text/css"> .invoice-meta {font-size: 100% !important;}</style>

                    <?php
                    $color = get_setting("invoice_color");
                    if (!$color) {
                        $color = "#2AA384";
                    }
                    $style = get_setting("invoice_style");
                    ?>
                    <?php
                    $data = array(
                        "client_info" => $client_info,
                        "color" => $color,
                        "estimate_info" => $estimate_info
                    );
                    if ($style === "style_2") {
                        $this->load->view('estimates/estimate_parts/header_style_2.php', $data);
                    } else {
                        $this->load->view('estimates/estimate_parts/header_style_1.php', $data);
                    }
                    ?>

                </div>

                <div class="table-responsive mt15 pl15 pr15">
                    <div class="col-sm-12 col-lg-12 menu_r">
                        <?php echo form_open(get_uri("form_email_template/save"), array("id" => "email-settings-form", "class" => "general-form", "role" => "form")); ?>
                        <input type="text" hidden="hidden" name="estimate_id" value="<?php echo @$estimate_info->id;?>">
                        <input type="text"  id="value_x" hidden="hidden" value="<?php if($price_item){echo count($price_item);}else{echo 0;} ;?>">
                        <input type="text" hidden="hidden" name="id_price" value="<?php echo @$info_item[0]->id;?>">
                        <div style="color: navy; margin-top: 40px">
                            <div class="row">
                                <div class="col-md-3 col-sm-3">
                                    <span>Our net/net air rate ex</span>
                                </div>
                                <div class="col-sm-2 col-sm-2">
                                    <input type="text" name="code_air" id="code_air" class="form-control" value="<?php echo @$info_item[0]->code_air ;?>"  style="text-transform: uppercase; text-align: center;" >
                                </div>
                                <div class="col-md-7 col-sm-7">
                                    <span>as below:</span>
                                </div>
                            </div>
                            <div>
                                <span>Currency: USD</span>
                            </div>
                        </div>
                        <div style="margin-top: 30px">
                            <table width="100%" border="1" id="item_table">
                                <tr style="text-align: center; background: aqua; font-weight: bold;">
                                    <td height="40px" width="7%">
                                        <span>A / L </span>
                                    </td>
                                    <td width="7%">
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
                                <?php $arr= 0 ;?>
                                <?php foreach ($price_item as $price_item){ ;?>
                                <tr style="text-align: center;">
                                    <input type="text" name="value[<?php echo $arr ;?>][id_price_item]" hidden="hidden" value="<?php echo @$price_item->id;?>">
                                    <td height="40px" >
                                        <input type="text" name="value[<?php echo $arr ;?>][a_l]" class="form-control" value="<?php echo @$price_item->a_l;?>" style="text-transform: uppercase;font-weight: bold;" placeholder="ey">
                                    </td>
                                    <td >
                                        <input type="number" name="value[<?php echo $arr ;?>][kg_45]" class="form-control" value="<?php echo @$price_item->kg_45 ;?>" >
                                    </td>
                                    <td>
                                        <input type="number" name="value[<?php echo $arr ;?>][kg_100]"  class="form-control" value="<?php echo @$price_item->kg_100;?>">
                                    </td>
                                    <td>
                                        <input type="number" name="value[<?php echo $arr ;?>][kg_300]" class="form-control" value="<?php echo @$price_item->kg_300;?>">
                                    </td>
                                    <td>
                                        <input type="number" name="value[<?php echo $arr ;?>][kg_500]"  class="form-control" value="<?php echo @$price_item->kg_500;?>" >
                                    </td>
                                    <td>
                                        <input type="number" name="value[<?php echo $arr ;?>][kg_1000]" class="form-control" value="<?php echo @$price_item->kg_1000;?>">
                                    </td>
                                    <td colspan="2">
                                        <input type="text" name="value[<?php echo $arr ;?>][myc_iss]"  class="form-control" value="<?php echo @$price_item->myc_iss;?>" style="text-transform: uppercase;">
                                    </td>
                                    <td>
                                        <input type="text" name="value[<?php echo $arr ;?>][scc]"  class="form-control" value="<?php echo @$price_item->scc;?>">
                                    </td>
                                    <td>
                                        <input type="text" name="value[<?php echo $arr ;?>][cgc]" class="form-control" value="<?php echo @$price_item->cgc;?>">
                                    </td>
                                    <td>
                                        <input type="text" name="value[<?php echo $arr ;?>][awb]" class="form-control" id="awb_1" value="<?php echo @$price_item->awb;?>">
                                    </td>
                                    <td>
                                        <input type="text" name="value[<?php echo $arr ;?>][routing]"  value="<?php echo @$price_item->routing;?>" class="form-control" style="text-transform: uppercase;">
                                    </td>
                                    <td>
                                        <input type="text" name="value[<?php echo $arr ;?>][frequency]"  value="<?php echo @$price_item->frequency;?>" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="value[<?php echo $arr ;?>][t_t]"  value="<?php echo @$price_item->t_t;?>" class="form-control">
                                    </td>
                                </tr>
                                <?php $arr++; } $arr-- ;?>
                            </table>
                            <button type="button" id="add" style="float: right;margin-right: 2px;" class="btn btn-primary add"><span class="fa fa-check-circle"></span> add</button>
                            <button type="button" id="remove_button" style="float: right;margin-right: 2px;" class="btn btn-primary"><span class="fa fa-check-circle"></span> remove</button>
                        </div>
                        <div style="color: navy; margin-top: 50px; overflow: hidden;" class="col-md-12 col-sm-12">
                            <div class="row">
                                <label for=" title">FOB charges:</label><br><br>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="title" class="col-md-4 col-sm-4 ">- AWB fee:</label>
                                        <div class=" col-md-6 col-sm-6" style="padding-right: 0px">
                                            <input type="number" name="awb_fee" value="<?php echo @$info_item[0]->awb_fee ;?>" id="awb_fee" class="form-control">

                                        </div>
                                        <div class=" col-md-2 col-sm-2" style="line-height: 34px">
                                            <span>USD</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="title" class="col-md-4 col-sm-4 ">- Airport terminal fee:</label>
                                        <div class=" col-md-6 col-sm-6" style="padding-right: 0px">
                                            <input type="number" name="airport_terminal_fee" value="<?php echo @$info_item[0]->airport_terminal_fee ;?>" id="airport_terminal_fee" class="form-control" style="width: 100%">
                                        </div>
                                        <div class=" col-md-2 col-sm-2" style="line-height: 34px">
                                            <span>USD</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="title" class="col-md-4 col-sm-4 ">- Customs export:</label>
                                        <div class=" col-md-6 col-sm-6" style="padding-right: 0px">
                                            <input type="number" name="customs_export" value="<?php echo @$info_item[0]->customs_export ;?>" id="airport_fee" class="form-control" style="width: 100%">
                                        </div>
                                        <div class=" col-md-2 col-sm-2" style="line-height: 34px">
                                            <span>USD</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="title" class="col-md-4 col-sm-4 ">- Airport handling fee:</label>
                                        <div class=" col-md-6 col-sm-6" style="padding-right: 0px">
                                            <input type="number" name="airport_handing_fee" value="<?php echo @$info_item[0]->airport_handing_fee ;?>" id="airport_handing_fee" class="form-control" style="width: 100%">
                                        </div>
                                        <div class=" col-md-2 col-sm-2" style="line-height: 34px">
                                            <span>USD</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="title" class="col-md-4 col-sm-4 ">- Fumigation fee (if any):</label>
                                        <div class=" col-md-6 col-sm-6" style="padding-right: 0px">
                                            <input type="number" name="fumigation_fee" value="<?php echo @$info_item[0]->fumigation_fee ;?>" id="fumigation_fee" class="form-control" style="width: 100%">
                                        </div>
                                        <div class=" col-md-2 col-sm-2" style="line-height: 34px">
                                            <span>USD</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="title" class="col-md-4 col-sm-4 ">- Pick-up & trucking to airport:</label>
                                        <div class=" col-md-6 col-sm-6" style="padding-right: 0px">
                                            <input type="number" name="pick_up" value="<?php echo @$info_item[0]->pick_up ;?>" id="pick_up" class="form-control" style="width: 100%">
                                        </div>
                                        <div class=" col-md-2 col-sm-2" style="line-height: 34px">
                                            <span>USD</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <button type="button" id="save_form" style="float: right;margin-right: 2px;" class="btn btn-primary"><span class="fa fa-check-circle"></span> <?php echo lang('save'); ?></button>
                            <?php form_close(); ?>
                        </div>
                </div>

                    <table id="estimate-item-table" class="display" width="100%" style="margin-top: 30px">
                    </table>
                </div>

                <div class="clearfix">
                    <div class="col-sm-8">

                    </div>
                    <div class="col-sm-4" id="estimate-total-section">
                        <?php $this->load->view("estimates/estimate_total_section"); ?>
                    </div>
                </div>

                <p class="b-t b-info pt10 m15"><?php echo nl2br($estimate_info->note); ?></p>

            </div>
        </div>

    </div>
</div>


<script type="text/javascript">
    RELOAD_VIEW_AFTER_UPDATE = true;
    $(document).ready(function () {
        $("#estimate-item-table").appTable({
            source: '<?php echo_uri("estimates/item_list_data/" . $estimate_info->id . "/") ?>',
            order: [[0, "asc"]],
            hideTools: true,
            columns: [
                {title: "<?php echo lang("item") ?> "},
                {title: "<?php echo lang("quantity") ?>", "class": "text-right w15p"},
                {title: "<?php echo lang("rate code") ?>", "class": "text-right w15p"},
                {title: "<?php echo lang("total") ?>", "class": "text-right w15p"},
                {title: "<i class='fa fa-bars'></i>", "class": "text-center option w100"}
            ],
            onDeleteSuccess: function (result) {
                $("#estimate-total-section").html(result.estimate_total_view);
                if (typeof updateInvoiceStatusBar == 'function') {
                    updateInvoiceStatusBar(result.estimate_id);
                }
            },
            onUndoSuccess: function (result) {
                $("#estimate-total-section").html(result.estimate_total_view);
                if (typeof updateInvoiceStatusBar == 'function') {
                    updateInvoiceStatusBar(result.estimate_id);
                }
            }
        });
    });

    updateInvoiceStatusBar = function (estimateId) {
        $.ajax({
            url: "<?php echo get_uri("estimates/get_estimate_status_bar"); ?>/" + estimateId,
            success: function (result) {
                if (result) {
                    $("#estimate-status-bar").html(result);
                }
            }
        });
    };

    $('.submit').on('click',function () {
        $('#task-form').submit();
    });

    var x = $("#value_x").val(); //Initial field counter is 1
    var maxField = 10; //Input fields increment limitation
    var addButton = $('#add'); //Add button selector
    var wrapper = $('#item_table'); //Input field wrapper


    $(addButton).click(function(){ //Once add button is clicked
        if( $("#value_x").val() < maxField){ //Check maximum number of input fields
            var x = $("#value_x").val();
            $(wrapper).append('<tr style="text-align: center;" id="remove_button'+ x +'">\n' +
            '                                    <td height="40px" >\n' +
            '                                     <input type="text" id="id_item" name="value['+ x +'][id_price_item]" hidden="hidden" value="">\n'+
            '                                        <input type="text" name="value['+ x +'][a_l]"  class="form-control " value="" style="text-transform: uppercase;font-weight: bold;" placeholder="ey">\n' +
            '                                    </td>\n' +
            '                                    <td >\n' +
            '                                        <input type="number" name="value['+ x +'][kg_45]"  class="form-control " value="" >\n' +
            '                                    </td>\n' +
            '                                    <td>\n' +
            '                                        <input type="number" name="value['+ x +'][kg_100]"  class="form-control " value="">\n' +
            '                                    </td>\n' +
            '                                    <td>\n' +
            '                                        <input type="number" name="value['+ x +'][kg_300]"  class="form-control " value="">\n' +
            '                                    </td>\n' +
            '                                    <td>\n' +
            '                                        <input type="number" name="value['+ x +'][kg_500]"  class="form-control " value="" >\n' +
            '                                    </td>\n' +
            '                                    <td>\n' +
            '                                        <input type="number" name="value['+ x +'][kg_1000]"  class="form-control " value="">\n' +
            '                                    </td>\n' +
            '                                    <td colspan="2">\n' +
            '                                        <input type="text" name="value['+ x +'][myc_iss]" class="form-control " value="" style="text-transform: uppercase;">\n' +
            '                                    </td>\n' +
            '                                    <td>\n' +
            '                                        <input type="text" name="value['+ x +'][scc]" class="form-control " value="">\n' +
            '                                    </td>\n' +
            '                                    <td>\n' +
            '                                        <input type="text" name="value['+ x +'][cgc]"  class="form-control " value="">\n' +
            '                                    </td>\n' +
            '                                    <td>\n' +
            '                                        <input type="text" name="value['+ x +'][awb]" class="form-control " value="">\n' +
            '                                    </td>\n' +
            '                                    <td>\n' +
            '                                        <input type="text" name="value['+ x +'][routing]"  value="" class="form-control " style="text-transform: uppercase;">\n' +
            '                                    </td>\n' +
            '                                    <td>\n' +
            '                                        <input type="text" name="value['+ x +'][frequency]" value="" class="form-control ">\n' +
            '                                    </td>\n' +
            '                                    <td>\n' +
            '                                        <input type="text" name="value['+ x +'][t_t]" value="" class="form-control ">\n' +
            '                                    </td>\n' +
            '                                </tr>'); // Add field html
            x++; //Increment field counter
            $("#value_x").val(x);
        }
    });
    $('#remove_button').on('click', function(){ //Once remove button is clicked
        if($("#value_x").val() > 1){
            var x = $("#value_x").val();
        var arr =($("#value_x").val()-1);
        var a = "value["+ arr +"][id_price_item]";
        var id_delete = $('input[name="' + a + '"]').val();
        if(id_delete){
        $.ajax({
            url: "<?php echo get_uri("Form_email_template/ajax_delete"); ?>",
            data: {id: id_delete},
            cache: false,
            type: 'POST',
            dataType: "json",
            success: function (result) {
                appAlert.success(result.message, {duration: 10000});
            }
        });}
        document.getElementById("item_table").deleteRow(x);
            x--;
            $("#value_x").val(x);
        }});//Decrement field counter

    $("#save_form").on("click",function () {
            $("#email-settings-form").submit();
        });
    $("#email-settings-form").appForm({
            isModal: false,
            onSuccess: function (result) {
                appAlert.success(result.message, {duration: 10000});
            }

        });

</script>

<?php
//required to send email 

load_css(array(
    "assets/js/summernote/summernote.css",
));
load_js(array(
    "assets/js/summernote/summernote.min.js",
));
?>
