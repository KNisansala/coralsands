<?php
$captchacode = rand();
?>               

<img src="captchacode/Generate_Captcha_Code.php?rand=<?php echo $captchacode; ?>" id='captchaimg'  style=" " alt="">  

<a href='javascript: refreshCaptcha();' class="contact-detail">
    <div class="refreshbox">
        <div class="refresh-img">        
            <img style="border:none;" src="captchacode/img/refresh.png" title="Click to change the code" alt="" />
        </div>
    </div>
</a>

<script language='JavaScript' type='text/javascript'>

    function refreshCaptcha() {
        var img = document.images['captchaimg'];
        var c = Math.round(Math.random() * 10000);
        img.src = img.src.substring(0, img.src.lastIndexOf("?")) + "?rand=" + c;
    }

</script>
