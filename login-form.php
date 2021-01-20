<!-- Bubble-box with notification-box style -->
<div class="bubble-box notification-box bg-purple" data-reveal-at="1200" data-hide-after="9000">
    <div class="bb--inner">
        <p>This is just a simple notice. Everything is in order and this is a <a href="#">simple link.</a></p>
    </div>
    <span class="bb--close"><i class="glyphicon glyphicon-remove"></i></span>
</div>
<!-- Bubble-box with notification-box style -->


<!-- Login Panel content -->
<div id="login_panel" class="mfp-hide loginbox-popup auth-popup">
    <div class="inner-container login-panel auth-popup-panel">
        <h3 class="m_title m_title_ext text-custom auth-popup-title tcolor">SIGN IN YOUR ACCOUNT TO HAVE ACCESS TO DIFFERENT FEATURES</h3>
        <form class="login_panel" name="login_form" method="post" action="#">
            <div class="form-group kl-fancy-form">
                <input type="text" id="kl-username" name="log" class="form-control inputbox kl-fancy-form-input kl-fw-input" placeholder="eg: james_smith">
                <label class="kl-font-alt kl-fancy-form-label">USERNAME</label>
            </div>
            <div class="form-group kl-fancy-form">
                <input type="password" id="kl-password" name="pwd" class="form-control inputbox kl-fancy-form-input kl-fw-input" placeholder="type password">
                <label class="kl-font-alt kl-fancy-form-label">PASSWORD</label>
            </div>
            <label class="auth-popup-remember" for="kl-rememberme"><input type="checkbox" name="rememberme" id="kl-rememberme" value="forever" class="auth-popup-remember-chb"> Remember Me </label>
            <input type="submit" id="login" name="submit_button" class="btn zn_sub_button btn-fullcolor btn-md" value="LOG IN">
            <input type="hidden" value="login" class="" name="form_action"><input type="hidden" value="login" class="" name="action">
            <input type="hidden" value="#" class="" name="submit">
            <div class="links auth-popup-links">
                <a href="#register_panel" class="create_account auth-popup-createacc kl-login-box auth-popup-link">CREATE AN ACCOUNT</a><span class="sep auth-popup-sep"></span><a href="#forgot_panel" class="kl-login-box auth-popup-link">FORGOT YOUR PASSWORD?</a>
            </div>
        </form>
    </div>
    <button title="Close (Esc)" type="button" class="mfp-close">×</button>
</div>
<div id="register_panel" class="mfp-hide loginbox-popup auth-popup">
    <div class="inner-container register-panel auth-popup-panel">
        <h3 class="m_title m_title_ext text-custom auth-popup-title">CREATE ACCOUNT</h3>
        <form class="register_panel" name="login_form" method="post" action="#">
            <div class="form-group kl-fancy-form ">
                <input type="text" id="reg-username" name="user_login" class="form-control inputbox kl-fancy-form-input kl-fw-input" placeholder="type desired username"><label class="kl-font-alt kl-fancy-form-label">USERNAME</label>
            </div>
            <div class="form-group kl-fancy-form">
                <input type="text" id="reg-email" name="user_email" class="form-control inputbox kl-fancy-form-input kl-fw-input" placeholder="your-email@website.com"><label class="kl-font-alt kl-fancy-form-label">EMAIL</label>
            </div>
            <div class="form-group kl-fancy-form">
                <input type="password" id="reg-pass" name="user_password" class="form-control inputbox kl-fancy-form-input kl-fw-input" placeholder="*****"><label class="kl-font-alt kl-fancy-form-label">PASSWORD</label>
            </div>
            <div class="form-group kl-fancy-form">
                <input type="password" id="reg-pass2" name="user_password2" class="form-control inputbox kl-fancy-form-input kl-fw-input" placeholder="*****"><label class="kl-font-alt kl-fancy-form-label">CONFIRM PASSWORD</label>
            </div>
            <div class="form-group">
                <input type="submit" id="signup" name="submit" class="btn zn_sub_button btn-block btn-fullcolor btn-md" value="CREATE MY ACCOUNT">
            </div>
            <div class="links auth-popup-links">
                <a href="#login_panel" class="kl-login-box auth-popup-link">ALREADY HAVE AN ACCOUNT?</a>
            </div>
        </form>
    </div>
</div>
<div id="forgot_panel" class="mfp-hide loginbox-popup auth-popup forgot-popup">
    <div class="inner-container forgot-panel auth-popup-panel">
        <h3 class="m_title m_title_ext text-custom auth-popup-title">FORGOT YOUR DETAILS?</h3>
        <form class="forgot_form" name="login_form" method="post" action="#">
            <div class="form-group kl-fancy-form">
                <input type="text" id="forgot-email" name="user_login" class="form-control inputbox kl-fancy-form-input kl-fw-input" placeholder="...">
                <label class="kl-font-alt kl-fancy-form-label">USERNAME OR EMAIL</label>
            </div>
            <div class="form-group">
                <input type="submit" id="recover" name="submit" class="btn btn-block zn_sub_button btn-fullcolor btn-md" value="SEND MY DETAILS!">
            </div>
            <div class="links auth-popup-links">
                <a href="#login_panel" class="kl-login-box auth-popup-link">AAH, WAIT, I REMEMBER NOW!</a>
            </div>
        </form>
    </div>
    <button title="Close (Esc)" type="button" class="mfp-close">×</button>
</div>
<!--/ Login Panel content --><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

