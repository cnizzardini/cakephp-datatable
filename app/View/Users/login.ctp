<div class="container marketing">
    <div class="no-home">
      <div class="featurette">
        <form method="post" action="/users/login">
        <!-- <img class="featurette-image pull-right" src="../assets/img/examples/browser-icon-chrome.png"> -->
        <h2 class="featurette-heading"><span class="muted">Login</span><a name="go-to-form"></a></h2>
        <label for="user-email">Email Address</label>
        <input type="text" placeholder="@" class="input-large" id="user-email" name="data[User][email]" /><br/>
        <span class="help-block error-message" id="user-email-error"></span>
        <label for="user-password">Password</label>
        <input type="password" placeholder="********" id="user-password" name="data[User][password]" /><br/>
        <span class="help-block error-message" id="user-password-error"></span>
        <input type="submit" class="btn btn-primary" id="user-register" value="Login" /><br/>
        <span class="help-block">Don't have an account? <a href="/register">Register Here</a></span>
        </form>
      </div>
    </div>