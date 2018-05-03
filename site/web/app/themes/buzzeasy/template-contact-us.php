<?php

/**
 * Template Name: Contact Us Template
 */

?>

<section class="page-hero lazyload">
	<div class="container">
		<div class="page-hero__inner">
			<header>
				<h1 class="page-hero__heading heading--alpha heading--white heading--highlight--blue">
					Lorem ipsum dolor sit amet, consectetur adipiscing.
				</h1>
			</header>
			
			<p class="text--large text--white">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
			</p>
		</div>
	</div>
</section>

<section class="contact-us band">
	<div class="container container--reduced">
		<h2 class="heading--bravo">Get in touch</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		<form action="action_page.php">

			<label for="fname" class="vh">First name</label>
			<input type="text" id="fname" name="firstname" placeholder="First name" required class="input--bold">

			<label for="lname" class="vh">Last name</label>
			<input type="text" id="lname" name="lastname" placeholder="Last name" required class="input--bold">

			<label for="subject" class="vh">Your message</label>
			<textarea id="subject" name="subject" placeholder="Your message"></textarea>

			<input id="GDPR" type="checkbox" value="GDPR">
			<label for="GDPR">GDPR Compliant Opt-in</label>

			<button type="submit" value="Submit" class="btn btn--green">Submit</button>

		</form>
	</div>
</section>