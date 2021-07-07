<div id="page-content" class="p20 clearfix">
    <div class="panel panel-default">
        <div class="page-title clearfix">
            <h1><?php echo lang('clients'); ?></h1>
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
                <?php echo modal_anchor(get_uri("clients/modal_form"), "<i class='fa fa-plus-circle'></i> " . lang('add_client'), array("class" => "btn btn-default", "title" => lang('add_client'))); ?>
            </div>
        </div>
        <div class="table-responsive">
            <form method="POST" id="multiple-delete-form" action="clients/delete_multiple">
            </form>
            <input type="submit" form="multiple-delete-form" value="delete" class="hide" id="submit-button">
            <table id="client-table" class="display" cellspacing="0" width="100%">            
            </table>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        var showInvoiceInfo = true;
        if (!"<?php echo $show_invoice_info; ?>") {
            showInvoiceInfo = false;
        }

        $("#client-table").appTable({
            source: '<?php echo_uri("clients/list_data") ?>',
            filterDropdown: [
                {name: "group_id", class: "w200", options: <?php echo $groups_dropdown; ?>}
            ],
            columns: [
                {title: "<?php echo lang("select_all") ?> ","class": "text-center selectAll"},
                {title: "<?php echo lang("id") ?>", "class": "text-center w50"},
                {title: "<?php echo lang("company_name") ?>"},
                {title: "<?php echo lang("primary_contact") ?>"},
                {title: "<?php echo lang("client_groups") ?>"},
                {title: "<?php echo lang("projects") ?>"},                
                {visible: showInvoiceInfo, searchable: false, title: "<?php echo lang("invoice_value") ?>"},
                {visible: showInvoiceInfo, searchable: false, title: "<?php echo lang("payment_received") ?>"},
                {title: "<?php echo lang("due") ?>"}
                <?php echo $custom_field_headers; ?>,
                {title: '<i class="fa fa-bars"></i>', "class": "text-center option w100"}
            ],
            printColumns: combineCustomFieldsColumns([0, 1, 2, 3, 4, 5, 6], '<?php echo $custom_field_headers; ?>'),
            xlsColumns: combineCustomFieldsColumns([0, 1, 2, 3, 4, 5, 6], '<?php echo $custom_field_headers; ?>')
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