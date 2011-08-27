<div class="center content round">
		<div class="head">
			<img src="app/tpl/skins/Priv/images/logo.png" alt="Logo" />
			<div class="online"><b>{online}</b> {hotelName}'s online now!</div>
		</div>

		<div class="menu round">
			<ul>
				<li><a href="me">Me</a></li>
				<li><a href="help">Help</a></li>
				<li><a href="credits">Credits</a></li>
				
				<li class="signout"><a href="ase/">Housekeeping</a></li>
				<li class="signout"><a href="logout">Logout</a></li>
			</ul>
		</div>

		<?php $template->form->outputError(); ?>
			
		<div class="left page round">
			<img src="app/tpl/skins/Priv/images/frank_help.gif" alt="Can I help!?" style="float: right" />
				
			<h3>Help</h3>
			<p>If you want that we help you. Please fill the box below your question. We will answer that within 5 work days.</p>
				
			<form action="help" method="post">
				<textarea name="question" rows="4" cols="30"></textarea>
				<input type="submit" name="help" value="Send question" class="button round" />
			</form>
		</div>
			
		<div class="clear"></div>
	</div>
				
	<div class="center copyright">
		Designed by <b>joopie</b> and coded by <b>Kryptos</b>
	</div>