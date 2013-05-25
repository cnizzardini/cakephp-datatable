<hr class="featurette-divider">
<? if( !isset($user['id']) ): ?>
<div class="featurette" id="step-1">
  <!-- <img class="featurette-image pull-right" src="../assets/img/examples/browser-icon-chrome.png"> -->
  <h2 class="featurette-heading">Create Account <span class="muted">Step 1</span><a name="go-to-form"></a></h2>
  <div class="span5">
  <label for="user-email">Email Address</label>
  <input type="text" placeholder="@" class="input-large" id="user-email" name="data[User][email]" /><br/>
  <span class="help-block error-message" id="user-email-error"></span>
  <label for="user-password">Password</label>
  <input type="password" placeholder="********" id="user-password" name="data[User][password]" /><br/>
  <span class="help-block error-message" id="user-password-error"></span>
  <button type="submit" class="btn btn-primary" id="user-register">Register</button><br/>
  <span class="help-block">Already have an account? <a href="/login">Login Here</a></span>
  </div>
</div>
<? endif; ?>

<div class="featurette next-steps" id="step-2">
  <!-- <img class="featurette-image pull-right" src="../assets/img/examples/browser-icon-chrome.png"> -->
  <h2 class="featurette-heading">Basic Information <span class="muted">Step 2</span><a name="go-to-form"></a></h2>
  
    <div class="span5">
        <label>Company Name</label>
        <input type="text" placeholder="" class="input-large" id="citation-company_name" name="data[CitationField][company_name]" /><br/>
        <span class="help-block error-message" id="citation-company_name-error"></span>

        <label>Address</label>
        <input type="text" placeholder="" class="input-large" id="citation-address" name="data[CitationField][address]" /><br/>
        <span class="help-block error-message" id="citation-address-error"></span>

        <label>Address 2</label>
        <input type="text" placeholder="" class="input-large" id="citation-address2" name="data[CitationField][address2]" /><br/>
        <span class="help-block error-message" id="citation-address2-error"></span>

        <label>City</label>
        <input type="text" placeholder="" class="input-large" id="citation-city" name="data[CitationField][city]" /><br/>
        <span class="help-block error-message" id="citation-city-error"></span>

        <label>State</label>
        <input type="text" placeholder="" class="input-small" id="citation-state" name="data[CitationField][state]" maxlength="2" /><br/>
        <span class="help-block error-message" id="citation-state-error"></span>

        <label>Zip</label>
        <input type="text" placeholder="" class="input-small" id="citation-zip" name="data[CitationField][zip]" maxlength="5" /><br/>
        <span class="help-block error-message" id="citation-zip-error"></span>
        
        <label>Website URL</label>
        <input type="text" placeholder="" class="input-large" id="citation-url" name="data[UserSite][url]" /><br/>
        <span class="help-block error-message" id="citation-url-error"></span>
        
    </div>

    <div class="span5">
  
        <label>Company Phone</label>
        <input type="text" placeholder="" class="input-medium" id="citation-" name="data[CitationField][phone]" maxlength="10" /><br/>
        <span class="help-block error-message" id="citation-phone-error"></span>
        
        <label>First Name</label>
        <input type="text" placeholder="" class="input-large" id="citation-first_name" name="data[CitationField][first_name]" /><br/>
        <span class="help-block error-message" id="citation-first_name-error"></span>

        <label>Last Name</label>
        <input type="text" placeholder="" class="input-large" id="citation-last_name" name="data[CitationField][last_name]" /><br/>
        <span class="help-block error-message" id="citation-last_name-error"></span>  

        <label>Your Position/Title</label>
        <input type="text" placeholder="" class="input-large" id="citation-position_title" name="data[CitationField][position_title]" /><br/>
        <span class="help-block error-message" id="citation-position_title-error"></span>

        <label>Birth Date</label>
        <input type="text" placeholder="" class="input-medium" id="citation-birthday" name="data[CitationField][birthday]" /><br/>
        <span class="help-block error-message" id="citation-birthday-error"></span>

        <label>Gender</label>
        <select id="citation-gender" name="data[CitationField][gender]" >
            <option value=""></option>
            <option value="F">Female</option>
            <option value="M">Male</option>
        </select>
        <span class="help-block error-message" id="citation-gender-error"></span>
        
    </div>
    <div class="span8" style="clear:both;text-align:center">
        <button type="submit" class="btn btn-primary" id="basicinfo-button">Next Step</button>
    </div>
</div>

<div class="featurette next-steps" id="step-3">
  <!-- <img class="featurette-image pull-right" src="../assets/img/examples/browser-icon-chrome.png"> -->
  <h2 class="featurette-heading">Extended Information <span class="muted">Step 3</span><a name="go-to-form"></a></h2>
  
    <div class="span5">
        <label>Title / Tagline</label>
        <input type="text" placeholder="" class="input-large" id="citation-title" name="data[CitationField][title]" /><br/>
        <span class="help-block error-message" id="citation-title-error"></span>

        <label>Short Description</label>
        <textarea class="input-large" id="citation-short_description" name="data[CitationField][short_description]"></textarea>
        <span class="help-block error-message" id="citation-short_description-error"></span>

        <label>Long Description</label>
        <textarea class="input-large" id="citation-long_description" name="data[CitationField][long_description]"></textarea>
        <span class="help-block error-message" id="citation-long_description-error"></span>

        <label>Blog URL</label>
        <input type="text" placeholder="" class="input-large" id="citation-blog_url" name="data[CitationField][blog_url]" /><br/>
        <span class="help-block error-message" id="citation-blog_url-error"></span>

        <label>Twitter</label>
        <input type="text" placeholder="" class="input-large" id="citation-twitter" name="data[CitationField][twitter]" /><br/>
        <span class="help-block error-message" id="citation-twitter-error"></span>

        <label>Facebook</label>
        <input type="text" placeholder="" class="input-large" id="citation-facebook" name="data[CitationField][facebook]" /><br/>
        <span class="help-block error-message" id="citation-facebook-error"></span>
        
        <label>Tags</label>
        <input type="text" placeholder="" class="input-large" id="citation-tags" name="data[CitationField][tags]" /><br/>
        <span class="help-block error-message" id="citation-tags-error"></span>

        <label>Categories</label>
        <input type="text" placeholder="" class="input-large" id="citation-categories" name="data[CitationField][categories]" /><br/>
        <span class="help-block error-message" id="citation-categories-error"></span>
    </div>
    <div class="span5">
        <label>Products</label>
        <input type="text" placeholder="" class="input-large" id="citation-products" name="data[CitationField][products]" /><br/>
        <span class="help-block error-message" id="citation-products-error"></span>

        <label>Services</label>
        <input type="text" placeholder="" class="input-large" id="citation-services" name="data[CitationField][services]" /><br/>
        <span class="help-block error-message" id="citation-services-error"></span>

        <label>Brands</label>
        <input type="text" placeholder="" class="input-large" id="citation-brands" name="data[CitationField][brands]" /><br/>
        <span class="help-block error-message" id="citation-brands-error"></span>

        <label>Hours of Operation</label>
        <textarea id="citation-hours_of_operation" name="data[CitationField][hours_of_operation]"></textarea>
        <span class="help-block error-message" id="citation-hours_of_operation-error"></span>

        <label>Languages</label>
        <input type="text" placeholder="" class="input-large" id="citation-languages" name="data[CitationField][languages]" /><br/>
        <span class="help-block error-message" id="citation-languages-error"></span>

        <label>Employees</label>
        <input type="text" placeholder="" class="input-large" id="citation-employees" name="data[CitationField][employees]" /><br/>
        <span class="help-block error-message" id="citation-employees-error"></span>

        <label>Founded Date</label>
        <input type="text" placeholder="" class="input-large" id="citation-founded_date" name="data[CitationField][founded_date]" /><br/>
        <span class="help-block error-message" id="citation-founded_date-error"></span>
    </div>
  
</div>

<div class="featurette next-steps" id="step-4">
  <!-- <img class="featurette-image pull-right" src="../assets/img/examples/browser-icon-chrome.png"> -->
  <h2 class="featurette-heading">Payment Information <span class="muted">Step 4</span><a name="go-to-form"></a></h2>
  
</div>