<div class="modal-body clearfix general-form " id="view_task">
    <div class="p10 clearfix">
        <div class="media m0 bg-white">
            <div class="media-left">
                <span class="avatar avatar-sm">
                    <img src="<?php echo get_avatar($model_info->assigned_to_avatar); ?>" alt="..." />
                </span>
            </div>
            <div class="media-body w100p pt5">
                <div class="media-heading m0">
                    <?php echo $model_info->assigned_to_user; ?>
                </div>
                    <p>
                        <span class='label label-light mr5' title='Point'><?php echo $model_info->points; ?></span>

                        <?php echo $labels . " " . "<span class='label' style='background:$model_info->status_color; '>" . ($model_info->status_key_name ? lang($model_info->status_key_name) : $model_info->status_title) . "</span>"; ?>
                    </p>
            </div>
        </div>
        <select style="float: right; height: 40px;" class="select2-choice w150" hidden="hidden" id="phieu_can">
            <option value="1" selected>NCTS</option>
            <option value="2" >ACSV (ACS)</option>
            <option value="3">ALSC (ALS)</option>
        </select>
        <select style="float: right; height: 40px;" class="select2-choice w150" hidden="hidden" id="debit">
            <option value="1" selected>Debit</option>
            <option value="2">Debit+FOB CHGS</option>
        </select>

    </div>
    <div>
    </div>
    <div>
        <?php
        $status=$model_info->status_id;
        if($status==5){
            $this->load->view("projects/template_excel/booking");
        }
        if($status==6){
            $this->load->view("projects/template_excel/hawb-form");
        }
        if($status==7){
            $this->load->view("projects/template_excel/manifest");
        }
        if($status==9){
            $this->load->view("projects/template_excel/mawb-form");
        }
        if($status==12){
            $this->load->view("projects/template_excel/nhan_agent");
        }
        if($status==13){
            $this->load->view("projects/template_excel/thubao_nhanhang");
        }
        if($status==15){
            $this->load->view("projects/template_excel/shint_bvt");
        }
        if($status==14){
            $this->load->view("projects/template_excel/shint_nhan");
        }
        if ($status==18) {
            $this->load->view("projects/template_excel/nhan_chung_tu_agent_nhap_sea");
        }
        if ($status==19) {
            $this->load->view("projects/template_excel/hang_tau_gui_thong_bao_nhap_sea");
        }
        if ($status==20) {
            $this->load->view("projects/template_excel/livax_nhan_hang");
        }
         if ($status==21) {
            $this->load->view("projects/template_excel/livax_giao_hang");
        }
        if ($status==22) {
            $this->load->view("projects/template_excel/livax_phieu_thu");
        }

        ;?>
    </div>
    <div id="phieucan_load">
        <div  id="ncts"><?php if($status==8){$this->load->view("projects/template_excel/shipping_ncts");};?></div>
        <div hidden="hidden" id="acsv"><?php if($status==8){$this->load->view("projects/template_excel/shipping_acsv");};?></div>
        <div hidden="hidden" id="alsc"><?php if($status==8){$this->load->view("projects/template_excel/shipping_alsc");};?></div>
        <div  id="debit_frm"><?php if($status==10){$this->load->view("projects/template_excel/debit");};?></div>
        <div hidden="hidden" id="debit_chgs"><?php if($status==10){$this->load->view("projects/template_excel/debit_fob_chgs");};?></div>
    </div>

    <div class="form-group clearfix">
        <div  class="col-md-12 mb15">
            <strong><?php echo $model_info->title; ?></strong>
        </div>

        <div class="col-md-12 mb15">
            <?php echo $model_info->description ? nl2br(link_it($model_info->description)) : "-"; ?>
        </div>

        <?php if ($model_info->milestone_title) { ?>
            <div class="col-md-12 mb15">
                <strong><?php echo lang('milestone') . ": "; ?></strong> <?php echo $model_info->milestone_title; ?>
            </div>
        <?php } ?>

        <?php if ($model_info->start_date * 1) { ?>
            <div class="col-md-12 mb15">
                <strong><?php echo lang('start_date') . ": "; ?></strong> <?php echo format_to_date($model_info->start_date); ?>
            </div>
        <?php } ?>
        <div class="col-md-12 mb15">
            <strong><?php echo lang('deadline') . ": "; ?></strong> <?php echo format_to_date($model_info->deadline); ?>
        </div>
        <?php if ($collaborators) { ?>
            <div class="col-md-12 mb15">
                <strong><?php echo lang('collaborators') . ": "; ?> </strong> <?php echo $collaborators; ?>
            </div>
        <?php } ?>

        <?php
        if (count($custom_fields_list)) {
            foreach ($custom_fields_list as $data) {
                if ($data->value) {
                    ?>
                    <div class="col-md-12 mb15">
                        <strong><?php echo $data->title . ": "; ?> </strong> <?php echo $this->load->view("custom_fields/output_" . $data->field_type, array("value" => $data->value), true); ?>
                    </div>
                    <?php
                }
            }
        }
        ?>

        <div class="col-md-12 mb15">
            <strong><?php echo lang('project') . ": "; ?> </strong> <?php echo anchor(get_uri("projects/view/" . $model_info->project_id), $model_info->project_title); ?>
        </div>



    </div>

    <div class="row clearfix">
        <div class="col-md-12 b-t pt10 list-container">
            <?php if ($can_comment_on_tasks) { ?>
                <?php $this->load->view("projects/comments/comment_form"); ?>
            <?php } ?>
            <?php $this->load->view("projects/comments/comment_list"); ?>
        </div>
    </div>

    <?php if ($this->login_user->user_type === "staff") { ?>
        <div class="box-title"><span ><?php echo lang("activity"); ?></span></div>
        <div class="pl15 pr15 mt15 list-container">
            <?php echo activity_logs_widget(array("limit" => 20, "offset" => 0, "log_type" => "task", "log_type_id" => $model_info->id)); ?>
        </div>
    <?php } ?>
</div>

<div class="modal-footer">
    <?php
    if ($can_edit_tasks) {
        echo modal_anchor(get_uri("projects/task_modal_form/"), "<i class='fa fa-pencil'></i> " . lang('edit_task'), array("class" => "btn btn-default", "data-post-id" => $model_info->id, "title" => lang('edit_task')));
    }
    ?>
    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> <?php echo lang('close'); ?></button>
     <button class="btn btn-default" id="pdf"><i class="fa fa-file-pdf-o" style="color: "></i> PDF</button>
    <button class="btn btn-default" id="uploads" style="display: none; height: 34px"><i class="fa fa-upload"></i> Uploads</button>

</div>

<?php
$task_link = anchor(get_uri("projects/view/$model_info->project_id/tasks?task=" . $model_info->id), '<i class="fa fa-external-link"></i>', array("target" => "_blank", "class" => "p15"));
?>

<script type="text/javascript">
    $(document).ready(function () {
        //add a clickable link in task title.
        $("#ajaxModalTitle").append('<?php echo $task_link ?>');
        var vl = $("#vl").val();
        $.ajax({
            url: "<?php echo get_uri("projects/session_value"); ?>",
            data: {value: vl},
            cache: false,
            type: 'POST',
            dataType: "json",
            success: function (response){}
        });
        $("#pdf").on("click",function () {
            debugger;
            var vl = $("#vl").val();

            if(vl==1){
            $("#pdf-form1").submit();
            } else
            if(vl==2){
                $("#pdf-form2").submit();
            } else
            if(vl==3){
                $("#pdf-form3").submit();
            } else {
                $("#pdf-form").submit();
            }
        });
        $("#uploads").on("click",function () {
            $("#upload-pdf").submit();
        });
        if(<?php echo $status;?>==8){
            $("#phieu_can").show();
        }
        if(<?php echo $status;?>==10){
            $("#debit").show();
        }
        $("#phieu_can").on("change",function () {
           var vl = $("#phieu_can").val();
            $("#vl").val(vl);
           if (vl==1)
           {
               $("#ncts").show();
               $("#acsv").hide();
               $("#alsc").hide();
           }
            if (vl==2)
            {
                $("#acsv").show();
                $("#ncts").hide();
                $("#alsc").hide();
            }
            if (vl==3)
            {
                $("#alsc").show();
                $("#ncts").hide();
                $("#acsv").hide();
            }
            $.ajax({
                url: "<?php echo get_uri("projects/session_value"); ?>",
                data: {value: vl},
                cache: false,
                type: 'POST',
                dataType: "json",
                success: function (response){}
            });
        });

        var status_id="<?php echo $model_info->status_id;?>";
        if( status_id == 1 ||status_id == 4||status_id == 11||status_id == 17||status_id == 23 ){
            $("#pdf").hide();
            $("#uploads").hide();
        }
        if(status_id == 12||status_id == 13||status_id == 18||status_id == 19){
            $("#pdf").hide();
            $("#uploads").css("display","inline");
        }

        $("#debit").on("change",function () {
            var vl = $("#debit").val();
            $("#vl").val(vl);
            if(vl==1){
                $("#debit_frm").show();
                $("#debit_chgs").hide();
            }
            if(vl==2){
                $("#debit_chgs").show();
                $("#debit_frm").hide();
            }
            $.ajax({
                url: "<?php echo get_uri("projects/session_value"); ?>",
                data: {value: vl},
                cache: false,
                type: 'POST',
                dataType: "json",
                success: function (response){}
            });
            });
        $("#total_galaxy2").on("change",function () {
            var s = $("#total_galaxy2").val();
            var str = numbertowords(s);
            $("#in_words_total2").val(str);

        });
        $("#total_galaxy").on("change",function () {
            var s = $("#total_galaxy").val();
            var str = numbertowords(s);
            $("#in_words_total").val(str);
        });
        function numbertowords(s) {
            var th = ['', 'thousand', 'million', 'billion', 'trillion'];

            var dg = ['zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine'];

            var tn = ['ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'];

            var tw = ['twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety'];

            s = s.toString();
            s = s.replace(/[\, ]/g, '');
            if (s != parseFloat(s)) return 'not a number';
            var x = s.indexOf('.');
            if (x == -1) x = s.length;
            if (x > 15) return 'too big';
            var n = s.split('');
            var str = '';
            var sk = 0;
            for (var i = 0; i < x; i++) {
                if ((x - i) % 3 == 2) {
                    if (n[i] == '1') {
                        str += tn[Number(n[i + 1])] + ' ';
                        i++;
                        sk = 1;
                    } else if (n[i] != 0) {
                        str += tw[n[i] - 2] + ' ';
                        sk = 1;
                    }
                } else if (n[i] != 0) {
                    str += dg[n[i]] + ' ';
                    if ((x - i) % 3 == 0) str += 'hundred ';
                    sk = 1;
                }
                if ((x - i) % 3 == 1) {
                    if (sk) str += th[(x - i - 1) / 3] + ' ';
                    sk = 0;
                }
            }
            if (x != s.length) {
                var y = s.length;
                str += 'point ';
                for (var i = x + 1; i < y; i++) str += dg[n[i]] + ' ';
            }
            return str.replace(/\s+/g, ' ');
        }

    });
</script>