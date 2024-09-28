<header id="header" class="header header-fixed">
          <div class="container-fluid clearfix">
            <div class="brand">
              <a href="index.html">
                <div class="brand-name">
                  <img src="{{URL::asset('assets/site/assets/img/logo.png')}}" alt="Gadallah">
                </div>
                <div class="brand-text">For Trade<br /> Kitchen</div>
              </a>
            </div>
            <button class="nav-toggle-btn a-nav-toggle">
            <span class="nav-toggle-title">Menu</span>
            <span class="nav-toggle nav-toggle-sm">
            <span class="stick stick-1"></span>
            <span class="stick stick-2"></span>
            <span class="stick stick-3"></span>
            </span>
            </button>
            <div class="header-content d-none d-md-block">
              <div class="header-contacts">
                <div class="header-contact-item"><a href="tel:+01234567890" class="phone-link">01234567890</a></div>
                <div class="header-contact-divider">/</div>
                <div class="header-contact-item">
                  <a href="#" class="mail-link">
                    <span class="__cf_email__" data-cfemail="#">info@gadallah.com</span>
                  </a>
                </div>
                <div class="header-contact-divider">/</div>
                <div class="header-contact-item">
                  <nav class="cd-main-nav js-main-nav">
              			<ul class="cd-main-nav__list js-signin-modal-trigger">
              				<!-- inser more links here -->
              				<li><a class="cd-main-nav__item cd-main-nav__item--signin" href="#" data-signin="login">User</a></li>
              				<!-- <li><a class="cd-main-nav__item cd-main-nav__item--signup" href="#0" data-signin="signup">Sign up</a></li> -->
              			</ul>
              		</nav>
                  <div class="cd-signin-modal js-signin-modal"> <!-- this is the entire modal form, including the background -->
                		<div class="cd-signin-modal__container"> <!-- this is the container wrapper -->
                			<ul class="cd-signin-modal__switcher js-signin-modal-switcher js-signin-modal-trigger">
                				<li><a href="#0" data-signin="login" data-type="login">Sign in</a></li>
                				<li><a href="#0" data-signin="signup" data-type="signup">New account</a></li>
                			</ul>

                			<div class="cd-signin-modal__block js-signin-modal-block" data-type="login"> <!-- log in form -->
                				<form class="cd-signin-modal__form">
                					<p class="cd-signin-modal__fieldset">
                						<label class="cd-signin-modal__label cd-signin-modal__label--email cd-signin-modal__label--image-replace" for="signin-email">E-mail</label>
                						<input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signin-email" type="email" placeholder="E-mail">
                						<span class="cd-signin-modal__error">Error message here!</span>
                					</p>

                					<p class="cd-signin-modal__fieldset">
                						<label class="cd-signin-modal__label cd-signin-modal__label--password cd-signin-modal__label--image-replace" for="signin-password">Password</label>
                						<input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signin-password" type="text"  placeholder="Password">
                						<a href="#0" class="cd-signin-modal__hide-password js-hide-password">Hide</a>
                						<span class="cd-signin-modal__error">Error message here!</span>
                					</p>

                					<p class="cd-signin-modal__fieldset">
                						<input type="checkbox" id="remember-me" checked class="cd-signin-modal__input ">
                						<label for="remember-me">Remember me</label>
                					</p>

                					<p class="cd-signin-modal__fieldset">
                						<input class="cd-signin-modal__input cd-signin-modal__input--full-width" type="submit" value="Login">
                					</p>
                				</form>

                				<p class="cd-signin-modal__bottom-message js-signin-modal-trigger"><a href="#0" data-signin="reset">Forgot your password?</a></p>
                			</div> <!-- cd-signin-modal__block -->

                			<div class="cd-signin-modal__block js-signin-modal-block" data-type="signup"> <!-- sign up form -->
                				<form class="cd-signin-modal__form">
                					<p class="cd-signin-modal__fieldset">
                						<label class="cd-signin-modal__label cd-signin-modal__label--username cd-signin-modal__label--image-replace" for="signup-username">Username</label>
                						<input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signup-username" type="text" placeholder="Username">
                						<span class="cd-signin-modal__error">Error message here!</span>
                					</p>

                					<p class="cd-signin-modal__fieldset">
                						<label class="cd-signin-modal__label cd-signin-modal__label--email cd-signin-modal__label--image-replace" for="signup-email">E-mail</label>
                						<input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signup-email" type="email" placeholder="E-mail">
                						<span class="cd-signin-modal__error">Error message here!</span>
                					</p>

                					<p class="cd-signin-modal__fieldset">
                						<label class="cd-signin-modal__label cd-signin-modal__label--password cd-signin-modal__label--image-replace" for="signup-password">Password</label>
                						<input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signup-password" type="text"  placeholder="Password">
                						<a href="#0" class="cd-signin-modal__hide-password js-hide-password">Hide</a>
                						<span class="cd-signin-modal__error">Error message here!</span>
                					</p>

                					<p class="cd-signin-modal__fieldset">
                						<input type="checkbox" id="accept-terms" class="cd-signin-modal__input ">
                						<label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
                					</p>

                					<p class="cd-signin-modal__fieldset">
                						<input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding" type="submit" value="Create account">
                					</p>
                				</form>
                			</div> <!-- cd-signin-modal__block -->

                			<div class="cd-signin-modal__block js-signin-modal-block" data-type="reset"> <!-- reset password form -->
                				<p class="cd-signin-modal__message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

                				<form class="cd-signin-modal__form">
                					<p class="cd-signin-modal__fieldset">
                						<label class="cd-signin-modal__label cd-signin-modal__label--email cd-signin-modal__label--image-replace" for="reset-email">E-mail</label>
                						<input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="reset-email" type="email" placeholder="E-mail">
                						<span class="cd-signin-modal__error">Error message here!</span>
                					</p>

                					<p class="cd-signin-modal__fieldset">
                						<input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding" type="submit" value="Reset password">
                					</p>
                				</form>

                				<p class="cd-signin-modal__bottom-message js-signin-modal-trigger"><a href="#0" data-signin="login">Back to log-in</a></p>
                			</div> <!-- cd-signin-modal__block -->
                			<a href="#0" class="cd-signin-modal__close js-close">Close</a>
                		</div> <!-- cd-signin-modal__container -->
                	</div> <!-- cd-signin-modal -->
                </div>
                <div class="header-contact-divider">/</div>
                <div class="header-contact-item">
                  <a href="#search" class="search_icon"><i class="icon ion-ios-search-strong"></i></a>
                  <div id="search">
                    <button type="button" class="close">×</button>
                    <form>
                      <input type="search" value="" placeholder="SEARCH KEYWORD(s)" />
                      <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="hide-menu a-nav-toggle"></div>
          <div class="menu">
            <div class="menu-lang">
              <a href="#" class="menu-lang-item active">Eng</a>
              <a href="#" class="menu-lang-item">Ar</a>
            </div>
            <div class="menu-main" id="accordion">
              <ul>
              @foreach($components["header"] as $header)
                <li class="{{ request()->is($header->url) ? 'active' : '' }}">
                        <a href="{{ url($header->url) }}" class="animsition-link" data-animsition-out-class="fade-out" data-text="{{ $header->label_eng }}">
                            {{ $header->label_eng }}
                        </a>
                </li>
            @endforeach
              </ul>
            </div>
            <div class="menu-footer">
              <ul class="social social-rounded">
                <li><a href="#"><i class="socicon-twitter"></i></a></li>
                <li><a href="#"><i class="socicon-facebook"></i></a></li>
                <li><a href="#"><i class="socicon-googleplus"></i></a></li>
              </ul>
              <div class="menu-copyright">&copy; 2019 <strong>Gadallah</strong>. All Rights Reserved.<br /> design by <strong>7elmak</strong></div>
            </div>
          </div>
        </header>
