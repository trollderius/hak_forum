<!--LOGIN EXCLUSIVO PARA EL JUEGO-->

<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>

<form action="./login.php" method="post" id="login">

    <div class="panel">
        <div class="inner"><span class="corners-top"><span></span></span>

            <div class="content">
                <h2><?php
                    if ($this->_rootref['LOGIN_EXPLAIN']) {
                        echo (isset($this->_rootref['LOGIN_EXPLAIN'])) ? $this->_rootref['LOGIN_EXPLAIN'] : '';
                    } else {
                        echo ((isset($this->_rootref['L_LOGIN'])) ? $this->_rootref['L_LOGIN'] : ((isset($user->lang['LOGIN'])) ? $user->lang['LOGIN'] : '{ LOGIN }'));
                    }
                    ?></h2>
                <fieldset <?php if (!$this->_rootref['S_CONFIRM_CODE']) { ?>class="fields1"<?php } else { ?>class="fields2"<?php } ?>>
                    <?php if ($this->_rootref['LOGIN_ERROR']) { ?><div class="error"><?php echo (isset($this->_rootref['LOGIN_ERROR'])) ? $this->_rootref['LOGIN_ERROR'] : ''; ?></div><?php } ?>

                    <dl>
                        <dt><label for="<?php echo (isset($this->_rootref['USERNAME_CREDENTIAL'])) ? $this->_rootref['USERNAME_CREDENTIAL'] : ''; ?>"><?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>:</label></dt>
                        <dd><input type="text" tabindex="1" name="<?php echo (isset($this->_rootref['USERNAME_CREDENTIAL'])) ? $this->_rootref['USERNAME_CREDENTIAL'] : ''; ?>" id="<?php echo (isset($this->_rootref['USERNAME_CREDENTIAL'])) ? $this->_rootref['USERNAME_CREDENTIAL'] : ''; ?>" size="25" value="<?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>" class="inputbox autowidth" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="<?php echo (isset($this->_rootref['PASSWORD_CREDENTIAL'])) ? $this->_rootref['PASSWORD_CREDENTIAL'] : ''; ?>"><?php echo ((isset($this->_rootref['L_PASSWORD'])) ? $this->_rootref['L_PASSWORD'] : ((isset($user->lang['PASSWORD'])) ? $user->lang['PASSWORD'] : '{ PASSWORD }')); ?>:</label></dt>
                        <dd><input type="password" tabindex="2" id="<?php echo (isset($this->_rootref['PASSWORD_CREDENTIAL'])) ? $this->_rootref['PASSWORD_CREDENTIAL'] : ''; ?>" name="<?php echo (isset($this->_rootref['PASSWORD_CREDENTIAL'])) ? $this->_rootref['PASSWORD_CREDENTIAL'] : ''; ?>" size="25" class="inputbox autowidth" /></dd>

                        <?php
                        if ($this->_rootref['S_DISPLAY_FULL_LOGIN'] && ( $this->_rootref['U_SEND_PASSWORD'] || $this->_rootref['U_RESEND_ACTIVATION'] )) {
                            echo "ola";
                            if ($this->_rootref['U_SEND_PASSWORD']) {
                                echo "111";
                                ?>
                                <dd>
                                    <a href="<?php echo (isset($this->_rootref['U_SEND_PASSWORD'])) ? $this->_rootref['U_SEND_PASSWORD'] : ''; ?>">
                                        <?php
                                        echo (
                                        (isset($this->_rootref['L_FORGOT_PASS'])) ? $this->_rootref['L_FORGOT_PASS'] : (
                                                (isset($user->lang['FORGOT_PASS'])) ? $user->lang['FORGOT_PASS'] : '{ FORGOT_PASS }')
                                        );
                                        ?>
                                    </a>
                                </dd>
                                <?php
                            }

                            if ($this->_rootref['U_RESEND_ACTIVATION']) {
                                echo "222";
                                ?>
                                <dd>
                                    <a href="<?php echo (isset($this->_rootref['U_RESEND_ACTIVATION'])) ? $this->_rootref['U_RESEND_ACTIVATION'] : ''; ?>">
                                        <?php
                                        echo (
                                        (isset($this->_rootref['L_RESEND_ACTIVATION'])) ? $this->_rootref['L_RESEND_ACTIVATION'] : ((isset($user->lang['RESEND_ACTIVATION'])) ? $user->lang['RESEND_ACTIVATION'] : '{ RESEND_ACTIVATION }')
                                        );
                                        ?>
                                    </a>
                                </dd>
                                <?php
                            }
                        }
                        ?>

                    </dl>
                    <?php
                    if ($this->_rootref['CAPTCHA_TEMPLATE'] && $this->_rootref['S_CONFIRM_CODE']) {
                        echo "<script>window.location='/hak_static/pages/forum_limit_login_attempts.html';window.parent.open('/forum/ucp.php?mode=login','_blank');</script>";
//                        $this->_tpldata['DEFINE']['.']['CAPTCHA_TAB_INDEX'] = 3;
//                        if (isset($this->_rootref['CAPTCHA_TEMPLATE'])) {
                            //$this->_tpl_include($this->_rootref['CAPTCHA_TEMPLATE']);
//                        }
                    }
                    if ($this->_rootref['S_DISPLAY_FULL_LOGIN']) {
                        ?>

                        <dl>
                            <?php if ($this->_rootref['S_AUTOLOGIN_ENABLED']) { ?><dd><label for="autologin"><input type="checkbox" name="autologin" id="autologin" tabindex="4" /> <?php echo ((isset($this->_rootref['L_LOG_ME_IN'])) ? $this->_rootref['L_LOG_ME_IN'] : ((isset($user->lang['LOG_ME_IN'])) ? $user->lang['LOG_ME_IN'] : '{ LOG_ME_IN }')); ?></label></dd><?php } ?>

                            <dd><label for="viewonline"><input type="checkbox" name="viewonline" id="viewonline" tabindex="5" /> <?php echo ((isset($this->_rootref['L_HIDE_ME'])) ? $this->_rootref['L_HIDE_ME'] : ((isset($user->lang['HIDE_ME'])) ? $user->lang['HIDE_ME'] : '{ HIDE_ME }')); ?></label></dd>
                        </dl>
                    <?php } ?>


                    <?php echo (isset($this->_rootref['S_LOGIN_REDIRECT'])) ? $this->_rootref['S_LOGIN_REDIRECT'] : ''; ?>

                    <dl>
                        <dt>&nbsp;</dt>
                        <dd><?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?><input type="submit" name="login" tabindex="6" value="<?php echo ((isset($this->_rootref['L_LOGIN'])) ? $this->_rootref['L_LOGIN'] : ((isset($user->lang['LOGIN'])) ? $user->lang['LOGIN'] : '{ LOGIN }')); ?>" class="button1" /></dd>
                    </dl>
                </fieldset>
            </div>
            <span class="corners-bottom"><span></span></span></div>
    </div>


    <?php if (!$this->_rootref['S_ADMIN_AUTH'] && $this->_rootref['S_REGISTER_ENABLED']) { ?>

        <div class="panel">
            <div class="inner"><span class="corners-top"><span></span></span>

                <div class="content">
                    <h3><?php echo ((isset($this->_rootref['L_REGISTER'])) ? $this->_rootref['L_REGISTER'] : ((isset($user->lang['REGISTER'])) ? $user->lang['REGISTER'] : '{ REGISTER }')); ?></h3>
                    <p><?php echo ((isset($this->_rootref['L_LOGIN_INFO'])) ? $this->_rootref['L_LOGIN_INFO'] : ((isset($user->lang['LOGIN_INFO'])) ? $user->lang['LOGIN_INFO'] : '{ LOGIN_INFO }')); ?></p>
                    <p><strong><a href="<?php echo (isset($this->_rootref['U_TERMS_USE'])) ? $this->_rootref['U_TERMS_USE'] : ''; ?>"><?php echo ((isset($this->_rootref['L_TERMS_USE'])) ? $this->_rootref['L_TERMS_USE'] : ((isset($user->lang['TERMS_USE'])) ? $user->lang['TERMS_USE'] : '{ TERMS_USE }')); ?></a> | <a href="<?php echo (isset($this->_rootref['U_PRIVACY'])) ? $this->_rootref['U_PRIVACY'] : ''; ?>"><?php echo ((isset($this->_rootref['L_PRIVACY'])) ? $this->_rootref['L_PRIVACY'] : ((isset($user->lang['PRIVACY'])) ? $user->lang['PRIVACY'] : '{ PRIVACY }')); ?></a></strong></p>
                    <hr class="dashed" />
                    <p><a href="<?php echo (isset($this->_rootref['U_REGISTER'])) ? $this->_rootref['U_REGISTER'] : ''; ?>" target="_blank" class="button2"><?php echo ((isset($this->_rootref['L_REGISTER'])) ? $this->_rootref['L_REGISTER'] : ((isset($user->lang['REGISTER'])) ? $user->lang['REGISTER'] : '{ REGISTER }')); ?></a></p>
                </div>

                <span class="corners-bottom"><span></span></span></div>
        </div>
    <?php } ?>


</form>

<?php if (( $this->_rootref['S_AL_WL_ENABLED'] || $this->_rootref['S_AL_FB_ENABLED'] ) && !$this->_rootref['S_ADMIN_AUTH']) { ?>

    <div class="panel bg3">
        <div class="inner"><span class="corners-top"><span></span></span>

            <h3><?php echo ((isset($this->_rootref['L_SOCIAL_LOGIN_OPTIONS'])) ? $this->_rootref['L_SOCIAL_LOGIN_OPTIONS'] : ((isset($user->lang['SOCIAL_LOGIN_OPTIONS'])) ? $user->lang['SOCIAL_LOGIN_OPTIONS'] : '{ SOCIAL_LOGIN_OPTIONS }')); ?></h3> 
            <br /> 
            <?php if ($this->_rootref['S_AL_WL_ENABLED']) { ?> 
                <a href="<?php echo (isset($this->_rootref['U_AL_WL_AUTHORIZE'])) ? $this->_rootref['U_AL_WL_AUTHORIZE'] : ''; ?>" target="_blank" ><img src="alternatelogin/images/windows_live_connect.png" alt="Windows Live Connect" /></a> 
            <?php } if ($this->_rootref['S_AL_FB_ENABLED']) { ?> 
                <a onclick="window.location = 'alternatelogin/al_fb_connect.php';" href="#"><img src="./alternatelogin/create_fb_button.php?label=<?php echo (isset($this->_rootref['AL_FB_LOGIN_BUTTON_TEXT'])) ? $this->_rootref['AL_FB_LOGIN_BUTTON_TEXT'] : ''; ?>"></a> <?php } if ($this->_rootref['S_AL_OI_ENABLED']) { ?> 
                <link type="text/css" rel="stylesheet" href="<?php echo (isset($this->_rootref['T_TEMPLATE_PATH'])) ? $this->_rootref['T_TEMPLATE_PATH'] : ''; ?>/css/openid.css" />
                <script type="text/javascript" src="<?php echo (isset($this->_rootref['T_TEMPLATE_PATH'])) ? $this->_rootref['T_TEMPLATE_PATH'] : ''; ?>/js/jquery-1.2.6.min.js"></script>
                <script type="text/javascript" src="<?php echo (isset($this->_rootref['T_TEMPLATE_PATH'])) ? $this->_rootref['T_TEMPLATE_PATH'] : ''; ?>/js/openid-jquery.js"></script>
                <script type="text/javascript" src="<?php echo (isset($this->_rootref['T_TEMPLATE_PATH'])) ? $this->_rootref['T_TEMPLATE_PATH'] : ''; ?>/js/openid-en.js"></script>
                <script type="text/javascript">
                    $(document).ready(function() {
                        openid.init('openid_identifier');
                    });
                </script>
                <form action="<?php echo (isset($this->_rootref['U_AL_OI_LOGIN'])) ? $this->_rootref['U_AL_OI_LOGIN'] : ''; ?>" method="get" id="openid_form">
                    <input type="hidden" name="action" value="verify" />
                    <fieldset>
                        <legend>Sign-in or Create New Account</legend>
                        <div id="openid_choice">
                            <p>Please click your account provider:</p>
                            <div id="openid_btns"></div>
                        </div>
                        <div id="openid_input_area">
                            <input id="openid_identifier" name="openid_identifier" type="text" value="http://" />
                            <input id="openid_submit" type="submit" value="Sign-In"/>
                        </div>

                    </fieldset>
                </form>
            <?php } ?> 
            <span class="corners-bottom"><span></span></span></div>
    </div>
<?php } $this->_tpl_include('overall_footer.html'); ?>