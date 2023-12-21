<div class="pb5 jc fg">
    <div class="r jse p25 mbs30 pdiv">
        <img src="/img/fingerprint.svg" alt="Store" class="fds h" width="256" height="256">
        <div style="flex-grow: 1;max-width: 500px;">
            <div class="form_wrapper dbr p20 rg15">
                <div class="ac">
                    <h1>Login</h1>
                </div>
                <form onsubmit="login(this,event)" class="rg15">
                    <input type="username" placeholder="Username" autocomplete="username" required>
                    <input type="password" placeholder="Password" autocomplete="current-password" required>
                    <input type="submit" class="btn" value="Login">
                </form>
                <strong id="response"></strong>
                <div class="ae">
                    <a href="/reset" class="blu">Forgot password?</a>
                </div>
            </div>
            <div class="pb15 jc r cg5">
                <span>Don't have account?</span><a href="/signup" class="blu">Signup</a>
            </div>
        </div>
    </div>
</div>