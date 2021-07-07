<div id="page-content" class="p20 clearfix">
    <div class="panel panel-default">
        <div class="page-title clearfix">
            <h1> <?php echo lang('items'); ?></h1>
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
                <?php echo modal_anchor(get_uri("items/modal_form"), "<i class='fa fa-plus-circle'></i> " . lang('add_item'), array("class" => "btn btn-default", "title" => lang('add_item'))); ?>
            </div>
        </div>
        <div class="table-responsive">
            <form method="POST" id="multiple-delete-form" action="items/delete_multiple">
            </form>
            <input type="submit" form="multiple-delete-form" value="delete" class="hide" id="submit-button">
            <table id="item-table" class="display" cellspacing="0" width="100%">            
            </table>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $("#item-table").appTable({
            source: '<?php echo_uri("items/list_data") ?>',
            order: [[0, 'desc']],
            columns: [
                {title: "<?php echo lang("select_all") ?> ","class": "text-center w100 selectAll"},
                {title: "<?php echo lang('title') ?> ", "class": "w20p"},
                {title: "<?php echo lang('description') ?>"},
                {title: "<?php echo lang('unit_type') ?>", "class": "w100"},
                {title: "<?php echo lang('rate') ?>", "class": "text-right w100"},
                {title: "<i class='fa fa-bars'></i>", "class": "text-center option w100"}
            ]
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