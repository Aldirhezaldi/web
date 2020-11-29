<?=
    form_open('login/proses_login');
?>
<div class="mid-class">
    <div class="art-right-w3ls">
        <h2>Sign In and Sign Up</h2>
        <form class="form" role="form" autocomplete="off" id="formlogin" novalidate="" method="post">
            <div class="main">
                <div class="form-left-to-w3l">
                    <input type="text" name="uname1" id="uname1" placeholder="Username" required="">
                </div>
                <div class="form-left-to-w3l ">
                    <input type="password" name="pwd1" id="pwd1" placeholder="Password" required="" autocomplete="new-password">
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="btnn">
                <button type="submit">Sign In</button>
            </div>
        </form>
        <div class="w3layouts_more-buttn">
            <h3>Don't Have an account..?
                <a href="<?= base_url('login/registration') ?>">Sign Up Here
                </a>
            </h3>
        </div>
        <!-- popup-->
        <!-- //popup -->
    </div>
    <div class="art-left-w3ls">
        <h1 class="header-w3ls">
            LOGIN PAGE BIMBEL IT
        </h1>
    </div>
</div>

<?=
    form_close();
?>