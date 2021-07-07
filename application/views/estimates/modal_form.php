<?php echo form_open(get_uri("estimates/save"), array("id" => "estimate-form", "class" => "general-form", "role" => "form")); ?>
<div class="modal-body clearfix">
    <input type="hidden" name="id" value="<?php echo $model_info->id; ?>"/>
    <div class="form-group">
        <label for="title" class="col-md-3"><?php echo lang('title'); ?></label>
        <div class=" col-md-9">
            <?php
            echo form_input(array(
                "id" => "title",
                "name" => "title",
                "value" => $model_info->title,
                "class" => "form-control",
                "placeholder" => lang('title'),
                "autofocus" => true,
                "data-rule-required" => true,
                "data-msg-required" => lang("field_required"),
            ));
            ?>
        </div>
    </div>
    <?php if ($client_id) { ?>
        <input type="hidden" name="estimate_client_id" value="<?php echo $client_id; ?>"/>
    <?php } else { ?>
        <div class="form-group">
            <label for="estimate_client_id" class=" col-md-3"><?php echo lang('client'); ?></label>
            <div class="col-md-9">
                <?php
                echo form_dropdown("estimate_client_id", $clients_dropdown, array($model_info->client_id), "class='select2 validate-hidden' id='estimate_client_id' data-rule-required='true', data-msg-required='" . lang('field_required') . "'");
                ?>
            </div>
        </div>
    <?php } ?>
    <div class="form-group" id="div-project" hidden="hidden">
        <label for="project" class=" col-md-3"><?php echo lang('projects'); ?></label>
        <div class="col-md-9 select2-container" >
            <select class="select2 select2-choice" name="project_id" id="myselect">
            </select>
        </div>
    </div>
    <div class="form-group" id="div-assigned" hidden="hidden">
        <label for="project" class="col-md-3"><?php echo lang('assigned_to'); ?></label>
        <div class="col-md-9 select2-container">
            <select class="select2-choice select2" name="assigned_to" id="assgin">
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="estimate_date" class=" col-md-3"><?php echo lang('estimate_date'); ?></label>
        <div class="col-md-9">
            <?php
            echo form_input(array(
                "id" => "estimate_date",
                "name" => "estimate_date",
                "value" => $model_info->estimate_date,
                "class" => "form-control",
                "placeholder" => lang('estimate_date'),
                "data-rule-required" => true,
                "data-msg-required" => lang("field_required"),
            ));
            ?>
        </div>
    </div>
    <div class="form-group">
        <label for="valid_until" class=" col-md-3"><?php echo lang('valid_until'); ?></label>
        <div class="col-md-9">
            <?php
            echo form_input(array(
                "id" => "valid_until",
                "name" => "valid_until",
                "value" => $model_info->valid_until,
                "class" => "form-control",
                "placeholder" => lang('valid_until'),
                "data-rule-required" => true,
                "data-msg-required" => lang("field_required"),
                "data-rule-greaterThanOrEqual" => "#estimate_date",
                "data-msg-greaterThanOrEqual" => lang("end_date_must_be_equal_or_greater_than_start_date")
            ));
            ?>
        </div>
    </div>

    <div class="form-group">
        <label for="tax_id" class=" col-md-3"><?php echo lang('tax'); ?></label>
        <div class="col-md-9">
            <?php
            echo form_dropdown("tax_id", $taxes_dropdown, array($model_info->tax_id), "class='select2 tax-select2'");
            ?>
        </div>
    </div>
    <div class="form-group">
        <label for="tax_id" class=" col-md-3"><?php echo lang('second_tax'); ?></label>
        <div class="col-md-9">
            <?php
            echo form_dropdown("tax_id2", $taxes_dropdown, array($model_info->tax_id2), "class='select2 tax-select2'");
            ?>
        </div>
    </div>
    <div class="form-group">
        <label for="estimate_note" class=" col-md-3"><?php echo lang('note'); ?></label>
        <div class=" col-md-9">
            <?php
            echo form_textarea(array(
                "id" => "estimate_note",
                "name" => "estimate_note",
                "value" => $model_info->note ? $model_info->note : "",
                "class" => "form-control",
                "placeholder" => lang('note')
            ));
            ?>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal"><span
                class="fa fa-close"></span> <?php echo lang('close'); ?></button>
    <button type="submit" class="btn btn-primary"><span class="fa fa-check-circle"></span> <?php echo lang('save'); ?>
    </button>
</div>
<?php echo form_close(); ?>

<script type="text/javascript">
    $(document).ready(function () {

        $('#myselect').on('change',function () {
            load_ajax();
            $('#div-assigned').show();
        });
        function load_ajax() {
            var project = $( "#myselect" ).val();
            $.ajax({
                url: "<?php echo get_uri("projects/load_ajax"); ?>",
                data: {id: project},
                cache: false,
                type: 'POST',
                dataType: "json",
                success: function (data) {
                    $('#assgin').empty();
                    $.each(data, function(i, obj){
                        $('#assgin').append($('<option>').text(obj.member_name).attr('value', obj.user_id));
                    });
                }
            });
        }

        $('#estimate_client_id').on('change',function () {
            project_ajax();
            $('#div-project').show();
        });
        function project_ajax() {
            var client_id = $( "#estimate_client_id" ).val();
            $.ajax({
                url: "<?php echo get_uri("projects/get_project"); ?>",
                data: {client_id: client_id},
                cache: false,
                type: 'POST',
                dataType: "json",
                success: function (data) {
                    $('#myselect').empty();
                    $.each(data, function(i, obj){
                        $('#myselect').append($('<option>').text(obj.title).attr('value', obj.id));
                    });
                }
            });
        }

        $("#estimate-form").appForm({
            onSuccess: function (result) {
                if (typeof RELOAD_VIEW_AFTER_UPDATE !== "undefined" && RELOAD_VIEW_AFTER_UPDATE) {
                    location.reload();
                } else {
                    window.location = "<?php echo site_url('estimates/view'); ?>/" + result.id;
                }
            }
        });
        $("#estimate-form .tax-select2").select2();
        $("#estimate_client_id").select2();

        setDatePicker("#estimate_date, #valid_until");
    });
</script>
