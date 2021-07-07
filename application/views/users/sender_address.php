<div class="tab-content">
    <?php
    $url = "team_members";
    if ($user_info->user_type === "client") {
        $url = "clients";
    }
    echo form_open(get_uri($url . "/save_sender_address/" . $user_info->id), array("id" => "account-info-form", "class" => "general-form dashed-row white", "role" => "form"));
    ?>
    <div class="panel">
        <div class="panel-default panel-heading">
            <h4><?php echo lang('email_settings');?></h4>
        </div>
        <div class="panel-body">

            <div class="form-group">
                <label for="email_sent_from_address2" class=" col-md-2"><?php echo lang('email_sent_from_address'); ?></label>
                <div class=" col-md-10">
                    <?php
                    echo form_input(array(
                        "id" => "email_sent_from_address2",
                        "name" => "email_sent_from_address2",
                        "value" => $user_info->email_sent_from_address2,
                        "class" => "form-control",
                        "placeholder" => "somemail@somedomain.com",
                        "data-rule-required" => true,
                        "data-msg-required" => lang("field_required"),
                    ));
                    ?>
                </div>
            </div>

            <div class="form-group">
                <label for="email_sent_from_name2" class=" col-md-2"><?php echo lang('email_sent_from_name'); ?></label>
                <div class="col-md-10">
                    <?php
                    echo form_input(array(
                        "id" => "email_sent_from_name2",
                        "name" => "email_sent_from_name2",
                        "value" => $user_info->email_sent_from_name2,
                        "class" => "form-control",
                        "placeholder" => "Company Name",
                        "data-rule-required" => true,
                        "data-msg-required" => lang("field_required"),
                    ));
                    ?>
                </div>
            </div>
            <div class="form-group">
                <label for="use_smtp" class=" col-md-2"><?php echo lang('email_use_smtp'); ?></label>
                <div class="col-md-10">
                    <?php
                    echo form_checkbox(
                        "email_protocol2", "smtp", $user_info->email_protocol2 === "smtp" ? true : false, "id='use_smtp'"
                    );
                    ?>
                </div>
            </div>

            <div id="smtp_settings" class="<?php echo $user_info->email_protocol2 === "smtp" ? "" : "hide"; ?>">
                <div class="form-group">
                    <label for="email_smtp_host2" class=" col-md-2">IMAP Host</label>
                    <div class="col-md-10">
                        <?php
                        echo form_input(array(
                            "id" => "imap_host",
                            "name" => "imap_host",
                            "value" => $user_info->imap_host,
                            "class" => "form-control",
                            "placeholder" => 'IMAP Host',
                        ));
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email_smtp_host2" class=" col-md-2"><?php echo lang('email_smtp_host'); ?></label>
                    <div class="col-md-10">
                        <?php
                        echo form_input(array(
                            "id" => "email_smtp_host2",
                            "name" => "email_smtp_host2",
                            "value" => $user_info->email_smtp_host2,
                            "class" => "form-control",
                            "placeholder" => lang('email_smtp_host'),
                            "data-rule-required" => true,
                            "data-msg-required" => lang("field_required"),
                        ));
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email_smtp_user2" class=" col-md-2"><?php echo lang('email_smtp_user'); ?></label>
                    <div class="col-md-10">
                        <?php
                        echo form_input(array(
                            "id" => "email_smtp_user2",
                            "name" => "email_smtp_user2",
                            "value" => $user_info->email_smtp_user2,
                            "class" => "form-control",
                            "placeholder" => lang('email_smtp_user'),
                            "data-rule-required" => true,
                            "data-msg-required" => lang("field_required"),
                        ));
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email_smtp_pass2" class=" col-md-2"><?php echo lang('email_smtp_password'); ?></label>
                    <div class="col-md-10">
                        <?php
                        echo form_password(array(
                            "id" => "email_smtp_pass2",
                            "name" => "email_smtp_pass2",
                            "value" => $user_info->email_smtp_pass2,
                            "class" => "form-control",
                            "placeholder" => lang('email_smtp_password'),
                            "data-rule-required" => true,
                            "data-msg-required" => lang("field_required"),
                        ));
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email_smtp_port2" class=" col-md-2"><?php echo lang('email_smtp_port'); ?></label>
                    <div class="col-md-10">
                        <?php
                        echo form_input(array(
                            "id" => "email_smtp_port2",
                            "name" => "email_smtp_port2",
                            "value" => $user_info->email_smtp_port2,
                            "class" => "form-control",
                            "placeholder" => lang('email_smtp_port'),
                            "data-rule-required" => true,
                            "data-msg-required" => lang("field_required"),
                        ));
                        ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email_smtp_security_type2" class=" col-md-2"><?php echo lang('security_type'); ?></label>
                    <div class="col-md-10">
                        <?php
                        echo form_dropdown(
                            "email_smtp_security_type2", array(
                            "none" => "-",
                            "tls" => "TLS",
                            "ssl" => "SSL"
                        ), $user_info->email_smtp_security_type2, "class='select2 mini'"
                        );
                        ?>
                    </div>
                </div>

            </div>
            <div class="form-group" style="display: none;">
                <label for="send_test_mail_to2" class=" col-md-2"><?php echo lang('send_test_mail_to'); ?></label>
                <div class="col-md-10">
                    <?php
                    echo form_input(array(
                        "id" => "send_test_mail_to2",
                        "name" => "send_test_mail_to2",
                        "value" => $user_info->send_test_mail_to2,
                        "class" => "form-control",
                        "placeholder" => "Keep it blank if you are not interested to send test mail",
                    ));
                    ?>
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <button type="submit" class="btn btn-primary"><span class="fa fa-check-circle"></span> <?php echo lang('save'); ?></button>
        </div>
    </div>
    <?php echo form_close(); ?>
</div>

<script type="text/javascript">
    $(document).ready(function() {

        $("#email-settings-form").appForm({
            isModal: false,
            onSubmit: function() {
                appLoader.show();
            },
            onSuccess: function(result) {
                appLoader.hide();
                appAlert.success(result.message, {duration: 10000});
            },
            onError: function() {
                appLoader.hide();
            }
        });

        $("#use_smtp").click(function() {
            if ($(this).is(":checked")) {
                $("#smtp_settings").removeClass("hide");
            } else {
                $("#smtp_settings").addClass("hide");
            }
        });

        $("#email-settings-form .select2").select2();
    });
    /////////////////////////////////////////////////////////////////////
    $(document).ready(function() {
        $("#account-info-form").appForm({
            isModal: false,
            onSuccess: function(result) {
                appAlert.success(result.message, {duration: 10000});
            }
        });
        $("#account-info-form .select2").select2();


        //show/hide asmin permission help message
        $("#user-role").change(function() {
            if ($(this).val() === "admin") {
                $("#user-role-help-block").removeClass("hide");
            } else {
                $("#user-role-help-block").addClass("hide");
            }
        });

        //show/hide disable login help message
        $("#disable_login").click(function() {
            if ($(this).is(":checked")) {
                $("#disable-login-help-block").removeClass("hide");
            } else {
                $("#disable-login-help-block").addClass("hide");
            }
        });

        //show/hide user status help message
        $("#user_status").click(function() {
            if ($(this).is(":checked")) {
                $("#user-status-help-block").removeClass("hide");
            } else {
                $("#user-status-help-block").addClass("hide");
            }
        });
    });
</script>