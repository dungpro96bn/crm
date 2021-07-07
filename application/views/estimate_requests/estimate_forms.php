<div id="page-content" class="p20 clearfix">
    <div class="panel panel-default">
        <div class="page-title clearfix">
            <h1> <?php echo lang('estimate_request_forms'); ?></h1>
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
                <?php echo modal_anchor(get_uri("estimate_requests/estimate_request_modal_form"), "<i class='fa fa-plus-circle'></i> " . lang('add_form'), array("class" => "btn btn-default", "title" => lang('add_form'))); ?>
            </div>
        </div>
        <div class="table-responsive">
            <form method="POST" id="multiple-delete-form" action="delete_multiple">
            </form>
            <input type="submit" form="multiple-delete-form" value="delete" class="hide" id="submit-button">
            <table id="estimate-form-main-table" class="display" cellspacing="0" width="100%">            
            </table>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $("#estimate-form-main-table").appTable({
            source: '<?php echo_uri("estimate_requests/estimate_forms_list_data") ?>',
            order: [[0, 'asc']],
            columns: [
                {title: "<?php echo lang("select_all") ?> ","class": "text-center w100 selectAll"},
                {title: "<?php echo lang("title"); ?>"},
                {title: "<?php echo lang("public"); ?>", "class": "w200"},
                {title: "<?php echo lang("status"); ?>", "class": "w200"},
                {title: '<i class="fa fa-bars"></i>', "class": "text-center option w100"}
            ]
        });
    });

    $(document).ready(function () {
        $('body').on('click', "thead .selectAll:first-child", function () {
            {check.prop("checked", !check.prop("checked"));}
            $('.table-loader .loading').removeClass("loading");
        })
    });
</script>