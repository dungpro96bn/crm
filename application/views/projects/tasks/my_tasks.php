<?php $project_id = 1; ?>
    <div id="page-content" class="p20 clearfix">
        <ul class="nav nav-tabs bg-white title" role="tablist">
            <li class="title-tab"><h4 class="pl15 pt10 pr15"><?php echo lang("tasks"); ?></h4></li>
            <li class="active"><a href="<?php echo_uri('projects/all_tasks/'); ?>"><?php echo lang("list"); ?></a></li>
            <li><a href="<?php echo_uri('projects/all_tasks_kanban/'); ?>"><?php echo lang('kanban');?></a></li>
        </ul>
        <div class="panel panel-default">
            <div class="tab-title clearfix">
                <div class="title-button-group " id="add_tasks">
                    <?php
                    echo modal_anchor(get_uri("projects/add_tasks"), "<i class='fa fa-plus-circle'></i> " . lang('add_task'), array("class" => "btn btn-default", "title" => lang('add_task'), "data-post-project_id" => $project_id));
                    ?>
                </div>
            </div>

            <div class="table-responsive">
                <div class ="select2-container">
                    <select name="xuat_air" id="xuat_air" class="w100 select2-choice " style="position: absolute; margin-top:21px;margin-left:157px;z-index:999">
                        <option>Types</option>
                        <option value="1">Xuất Air</option>
                        <option value="2">Nhập Air</option>
                        <option value="3">Nhập Sea</option>
                    </select>
                </div>
                <table id="task-table" class="display" cellspacing="0" width="100%">

                </table>
            </div>
        </div>
    </div>
<?php
//if we get any task parameter, we'll show the task details modal automatically
$preview_task_id = get_array_value($_GET, 'task');
if ($preview_task_id) {
    echo modal_anchor(get_uri("projects/task_view"), "", array("id" => "preview_task_link", "title" => lang('task_info') . " #$preview_task_id", "data-post-id" => $preview_task_id));
}

$statuses = array();
foreach ($task_statuses as $status) {
    $is_selected = false;
    if ($status->key_name != "done") {
        $is_selected = true;
    }

    $statuses[] = array("text" => ($status->key_name ? lang($status->key_name) : $status->title), "value" => $status->id, "isChecked" => $is_selected);
}
?>

    <script type="text/javascript">
        $(document).ready(function () {

            $('#xuat_air').on('change', function () {
                project_ajax();
            });

            function project_ajax() {
               var value= $( "#xuat_air" ).val();
                var status_id=[];
               if(value==1) {
                    status_id = [4,5,6,7,8,9,10];
               }
               if(value==2)
               {
                   status_id=[11,12,13,14,15,16];
               }
               if(value==3)
                {
                    status_id=[17,18,19,20,21,22];
                }

                   $("#task-table tbody").remove();
                   $.ajax({
                       url: "<?php echo get_uri("projects/my_tasks_ajax"); ?>",
                       data: {status_id: status_id},
                       cache: false,
                       type: 'POST',
                       dataType: "json",
                       success: function (response) {
                           if (response) {
                               $.each(response.data, function (k, v) {
                                   $("#task-table").append('' +
                                       '<tr role="row" class="even">' +
                                       '<td style="border-left:5px solid ' + v[0] + ' !important;">' +
                                       v[1] + '</td>' +
                                       '<td>' + v[2] +
                                       '</td>' +
                                       '<td>' + v[4] + '</td>' +
                                       '<td>' + v[5] + '</td>' +
                                       '<td>' +
                                       v[7] +
                                       '</td>' +
                                       '<td class=" min-w150">' + v[8] +
                                       '</td>' +
                                       '<td>' + v[9] + '</td>' +
                                       '<td>' + v[10] + '</td></tr>'
                                   )
                                   /// do stuff
                               });

                           }
                       }
                   });
            }

            $("#task-table").appTable({
                source: '<?php echo_uri("projects/my_tasks_list_data/")?>',
                order: [[1, "desc"]],
                filterDropdown: [
                    {name: "specific_user_id", class: "w150", options: <?php echo $team_members_dropdown; ?>},
                    {
                        name: "milestone_id",
                        class: "w150",
                        options: [{id: "", text: "- <?php echo lang('milestone'); ?> -"}],
                        dependency: ["project_id"],
                        dataSource: '<?php echo_uri("projects/get_milestones_for_filter") ?>'
                    }, //milestone is dependent on project
                    {
                        name: "project_id",
                        class: "w150",
                        options: <?php echo $projects_dropdown; ?>,
                        dependent: ["milestone_id"]
                    }, //reset milestone on changing of project
                ],
                singleDatepicker: [{
                    name: "deadline", defaultText: "<?php echo lang('deadline') ?>",
                    options: [
                        {value: "expired", text: "<?php echo lang('expired') ?>"},
                        {value: moment().format("YYYY-MM-DD"), text: "<?php echo lang('today') ?>"},
                        {value: moment().add(1, 'days').format("YYYY-MM-DD"), text: "<?php echo lang('tomorrow') ?>"},
                        {
                            value: moment().add(7, 'days').format("YYYY-MM-DD"),
                            text: "<?php echo sprintf(lang('in_number_of_days'), 7); ?>"
                        },
                        {
                            value: moment().add(15, 'days').format("YYYY-MM-DD"),
                            text: "<?php echo sprintf(lang('in_number_of_days'), 15); ?>"
                        }
                    ]
                }],
                multiSelect: [
                    {
                        name: "status_id",
                        text: "<?php echo lang('status'); ?>",
                        options: <?php echo json_encode($statuses); ?>
                    }
                ],

                columns: [
                    {visible: false, searchable: false},
                    {title: '<?php echo lang("id") ?>'},
                    {title: '<?php echo lang("title") ?>'},
                    {visible: false, searchable: false},
                    {title: '<?php echo lang("start_date") ?>', "iDataSort": 3},
                    {visible: false, searchable: false},
                    {title: '<?php echo lang("deadline") ?>', "iDataSort": 5},
                    {title: '<?php echo lang("project") ?>'},
                    {title: '<?php echo lang("assigned_to") ?>', "class": "min-w150"},
                    {title: '<?php echo lang("collaborators") ?>'},
                    {title: '<?php echo lang("status") ?>'}
                    <?php echo $custom_field_headers; ?>,
                    {visible: false, searchable: false}
                ],
                printColumns: combineCustomFieldsColumns([1, 2, 4, 6, 7, 8, 9, 10], '<?php echo $custom_field_headers; ?>'),
                xlsColumns: combineCustomFieldsColumns([1, 2, 4, 6, 7, 8, 9, 10], '<?php echo $custom_field_headers; ?>'),
                rowCallback: function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
                    $('td:eq(0)', nRow).attr("style", "border-left:5px solid " + aData[0] + " !important;");
                }
            });
            if ($("#preview_task_link").length) {
                $("#preview_task_link").trigger("click");
            }
        });
    </script>
<?php $this->load->view("projects/tasks/update_task_script"); ?>