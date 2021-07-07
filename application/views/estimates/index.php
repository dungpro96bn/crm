<div id="page-content" class="p20 clearfix">
    <div class="panel panel-default">
        <div class="page-title clearfix">
            <h1><?php echo lang('estimates'); ?></h1>
            <div class="title-button-group">
                <span class="dropdown inline-block">
                    <button class="btn btn-info dropdown-toggle  mt0 mb0" type="button" data-toggle="dropdown" aria-expanded="true">
                        <i class='fa fa-cogs'></i> <?php echo lang('actions'); ?>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation"><?php echo anchor("#", "<i class='fa fa-times fa-fw'></i> " . lang('delete_selected'), array("title" => lang('delete_selected'), "id" => "delete_multiple")); ?> </li>
                       
                    </ul>
                </span>
                <?php echo modal_anchor(get_uri("estimates/modal_form"), "<i class='fa fa-plus-circle'></i> " . lang('add_estimate'), array("class" => "btn btn-default", "title" => lang('add_estimate'))); ?>
            </div>
        </div>
        <div class="table-responsive">  
            <form method="POST" id="multiple-delete-form" action="estimates/delete_multiple">
            </form>
            <input type="submit" form="multiple-delete-form" value="delete" class="hide" id="submit-button">
                <table id="estimate-table" class="display" cellspacing="0" width="100%">   
                    <tfoot>
                        <tr>
                            <th colspan="5" class="text-right"><?php echo lang("total") ?>:</th>
                            <th class="text-right" data-current-page="5"></th>
                            <th  colspan="2"> </th>
                        </tr>
                        <tr data-section="all_pages">
                            <th colspan="4" class="text-right"><?php echo lang("total_of_all_pages") ?>:</th>
                            <th class="text-right" data-all-page="4"></th>
                            <th colspan="2"> </th>
                        </tr>
                    </tfoot>
                </table>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $("#estimate-table").appTable({
            source: '<?php echo_uri("estimates/list_data") ?>',
            order: [[0, "desc"]],
            dateRangeType: "monthly",
            //filterDropdown: [{name: "status", class: "w150", options: <?php //$this->load->view("estimates/estimate_statuses_dropdown"); ?>//}],
            columns: [
                {title: "<?php echo lang("select_all") ?>", "class": "text-center selectAll"},
                {title: "<?php echo lang("estimate") ?> ", "class": "w15p"},
                {title: "<?php echo lang("client") ?>"},
                {visible: false, searchable: false},
                {title: "<?php echo lang("estimate_date") ?>", "iDataSort": 2, "class": "w20p"},
                {title: "<?php echo lang("amount") ?>", "class": "text-right w20p"},
                {title: "<?php echo lang("status") ?>", "class": "text-center"},
                {title: "<i class='fa fa-bars'></i>", "class": "text-center option w100"}
            ],
            printColumns: [0, 1, 3, 4, 5],
            xlsColumns: [0, 1, 3, 4, 5],
            summation: [{column: 5, dataType: 'currency', currencySymbol: "none"}]
        });
    });
    $(document).ready(function () {
        $('body').on('click', "thead .selectAll:first-child", function () {
            var check = $('tbody input[type="checkbox"]');
            {check.prop("checked", !check.prop("checked"));}
            $('.table-loader .loading').removeClass("loading");
        })
    });




</script>