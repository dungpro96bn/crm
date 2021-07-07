<?php echo form_open(get_uri("projects/save_task"), array("id" => "task-form", "class" => "general-form", "role" => "form")); ?>
<div class="modal-body clearfix">
    <input type="hidden" name="id" value="<?php echo $model_info->id; ?>" />
    <input type="hidden" name="project_id" id="project_id" value="<?php echo $project_id; ?>" />
    <div class="form-group">
        <label for="points" class="col-md-3"><?php echo lang('project'); ?>
            <span class="help" data-toggle="tooltip" title="<?php echo lang('task_point_help_text'); ?>"><i class="fa fa-question-circle"></i></span>
        </label>

        <div class="col-md-9">
            <select class="select2" id="taskOption" required>
                <?php
                foreach( $project_dropdown as $value ){ ;?>
                    <option value="<?php echo $value['id'];?>"><?php echo $value['text'];?></option>
                <?php };?>
            </select>
        </div>
    </div>
    <div class="form-group" hidden="hidden" id="assign_to">
        <label for="assigned_to" class=" col-md-3"><?php echo lang('assign_to'); ?></label>
        <div class="col-md-9">
            <select id="assigned_to" class="select2" name="assigned_to"> </select>
        </div>
    </div>
    <div class="form-group">
        <label for="title" class=" col-md-3"><?php echo lang('title'); ?></label>
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
    <div class="form-group">
        <label for="description" class=" col-md-3"><?php echo lang('description'); ?></label>
        <div class=" col-md-9">
            <?php
            echo form_textarea(array(
                "id" => "description",
                "name" => "description",
                "value" => $model_info->description,
                "class" => "form-control",
                "placeholder" => lang('description'),
            ));
            ?>
        </div>
    </div>
    <div class="form-group">
        <label for="points" class="col-md-3"><?php echo lang('points'); ?>
            <span class="help" data-toggle="tooltip" title="<?php echo lang('task_point_help_text'); ?>"><i class="fa fa-question-circle"></i></span>
        </label>

        <div class="col-md-9">
            <?php
            echo form_dropdown("points", $points_dropdown, array($model_info->points), "class='select2'");
            ?>
        </div>
    </div>
    <div class="form-group">
        <label for="milestone_id" class=" col-md-3"><?php echo lang('milestone'); ?></label>
        <div class="col-md-9">
            <?php
            echo form_dropdown("milestone_id", $milestones_dropdown, array($model_info->milestone_id), "class='select2'");
            ?>
        </div>
    </div>
        <div class="form-group">
            <label for="collaborators" class=" col-md-3"><?php echo lang('collaborators'); ?></label>
            <div class="col-md-9">
                <?php
                echo form_input(array(
                    "id" => "collaborators",
                    "name" => "collaborators",
                    "value" => $model_info->collaborators,
                    "class" => "form-control",
                    "placeholder" => lang('collaborators')
                ));
                ?>
            </div>
        </div>


    <div class="form-group">
        <label for="status_id" class=" col-md-3"><?php echo lang('status'); ?></label>
        <div class="col-md-9">
            <?php
            foreach ($statuses as $status) {
                $task_status[$status->id] = $status->key_name ? lang($status->key_name) : $status->title;
            }

            echo form_dropdown("status_id", $task_status, array($model_info->status_id), "class='select2'");
            ?>
        </div>
    </div>
    <div class="form-group">
        <label for="project_labels" class=" col-md-3"><?php echo lang('labels'); ?></label>
        <div class=" col-md-9">
            <?php
            echo form_input(array(
                "id" => "project_labels",
                "name" => "labels",
                "value" => $model_info->labels,
                "class" => "form-control",
                "placeholder" => lang('labels')
            ));
            ?>
        </div>
    </div>
    <div class="form-group">
        <label for="start_date" class=" col-md-3"><?php echo lang('start_date'); ?></label>
        <div class=" col-md-9">
            <?php
            echo form_input(array(
                "id" => "start_date",
                "name" => "start_date",
                "value" => $model_info->start_date * 1 ? $model_info->start_date : "",
                "class" => "form-control",
                "placeholder" => "YYYY-MM-DD"
            ));
            ?>
        </div>
    </div>
    <div class="form-group">
        <label for="deadline" class=" col-md-3"><?php echo lang('deadline'); ?></label>
        <div class=" col-md-9">
            <?php
            echo form_input(array(
                "id" => "deadline",
                "name" => "deadline",
                "value" => $model_info->deadline * 1 ? $model_info->deadline : "",
                "class" => "form-control",
                "data-rule-greaterThanOrEqual" => "#start_date",
                "data-msg-greaterThanOrEqual" => lang("end_date_must_be_equal_or_greater_than_start_date"),
                "placeholder" => "YYYY-MM-DD"
            ));
            ?>
        </div>
    </div>

    <?php $this->load->view("custom_fields/form/prepare_context_fields", array("custom_fields" => $custom_fields, "label_column" => "col-md-3", "field_column" => " col-md-9")); ?> 

</div>

<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> <?php echo lang('close'); ?></button>
    <button type="submit" class="btn btn-primary"><span class="fa fa-check-circle"></span> <?php echo lang('save'); ?></button>
</div>
<?php echo form_close(); ?>
<script type="text/javascript">
    $(document).ready(function () {

        $('#taskOption').on('change',function () {
            load_ajax();
            $('#assign_to').show();
            var test = $('#project_id');
            var id =$('#taskOption option:selected').val();
            test.val(id);
        });
        function load_ajax() {
            var id =$('#taskOption option:selected').val();
            $.ajax({
                url: "<?php echo get_uri("projects/load_ajax"); ?>",
                data: {id: id},
                cache: false,
                type: 'POST',
                dataType: "json",
                success: function (data) {
                    $('#assigned_to').empty();
                    $.each(data, function(i, obj){
                        $('#assigned_to').append($('<option>').text(obj.member_name).attr('value', obj.user_id));
                    });
                }
            });
        }
        $("#task-form").appForm({
            onSuccess: function (result) {
                $("#task-table").appTable({newData: result.data, dataId: result.id});
                $("#reload-kanban-button").trigger("click");
            }
        });
        $("#task-form .select2").select2();
        $("#title").focus();

        setDatePicker("#start_date,#deadline");

        $("#project_labels").select2({
            tags: <?php echo json_encode($label_suggestions); ?>
        });

        $("#collaborators").select2({
            tags: <?php echo json_encode($collaborators_dropdown); ?>
        });

        $('[data-toggle="tooltip"]').tooltip();
        
    });
</script>    