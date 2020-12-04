<div id="auth_box" class="login">
  <div id="top_part">
    <h1 id="the_logo">
      <a href="<?php print url('<front>'); ?>">
        <img src="/sites/default/files/CCB_logo.png" alt="<?php print $site_name; ?>">
      </a>
    </h1>
  </div>

  <div id="middle_part">
    <h2 class="title" style="color:#333;">User Login</h2>

    <?php print $messages; ?>
    
    <?php print render($page['content']); ?>
<div class="password_link">
      <?php print l(t('Forgot your password?'), 'user/password'); ?>
    </div>
  </div>

  <div id="bottom_part">
  	
	<p class="text-center">
  		<a href="http://carolinacustombooth.com/Request-Binder" target="_blank" class="cat-register">Register Catalog</a>
  	</p>


    </div>



  </div>
</div>
