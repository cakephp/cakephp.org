<div id="meta">
	<div class="box">
		<div id="conferences">
			<?php
			/*
			echo $this->Html->link(
				$this->Html->image('http://2010.osdc.com.au/sites/default/files/imagecache/wysiwyg_imageupload_preview/wysiwyg_imageupload/1/osdc2010.png', array(
					'class' => 'image png',
					'width' => 196)),
				'http://2010.osdc.com.au/proposal/31/re-imagining-cakephp-path-20', array('escape' => false));
			*/
			?>
		</div>
		<div id="donations">
			<h3>CakePHP Loves you</h3>
			<h4>Give some love back</h4>
			<ul>
				<li class="sponsor-cakefest">
					<?php echo $this->Html->link('Sponsor CakeFest', 'http://www.cakefest.org/pages/sponsors'); ?>
				</li>

				<li class="donate-any-amount">
					<form name="donateAnyAmount" action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick" />
						<a href="#" onclick="document.forms['donateAnyAmount'].submit()"><?php __('donate anything')?></a>
						<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
						<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----" />
					</form>
				</li>

				<li class="donate-100">
					<form name="donate100" action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick" />
						<a href="#" onclick="document.forms['donate100'].submit()"><?php __('donate $100')?></a>
						<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
						<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----" />
					</form>
				</li>

				<li class="donate-50">
					<form name="donate50" action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick" />
						<a href="#" onclick="document.forms['donate50'].submit()"><?php __('donate $50')?></a>
						<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
						<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----" />
					</form>
				</li>

				<li class="donate-25">
					<form name="donate25" action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick" />
						<a href="#" onclick="document.forms['donate25'].submit()"><?php __('donate $25')?></a>
						<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
						<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----" />
					</form>
				</li>

				<li class="donate-10">
					<form name="donate10" action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick" />
						<a href="#" onclick="document.forms['donate10'].submit()"><?php __('donate $10')?></a>
						<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
						<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----" />
					</form>
				</li>

				<li class="donate-5">
					<form name="donate5" action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick" />
						<a href="#" onclick="document.forms['donate5'].submit()"><?php __('donate $5')?></a>
						<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
						<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----" />
					</form>
				</li>

				<li class="donate-1">
					<form name="donate1" action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick" />
						<a href="#" onclick="document.forms['donate1'].submit()"><?php __('donate $1')?></a>
						<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
						<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----" />
					</form>
				</li>
			</ul>
		</div>
		<p>&nbsp;</p>
		<div id="quotes" style="display: none;">
			<h3>What people say</h3>
			<div class="quote">
				<blockquote>
					Thanks to CakePHP, we have created an app prototype in one week, where it would
					have certainly took more than 1 month without ... :D
				</blockquote>
			 	<cite>&mdash;
				<a href="http://twitter.com/scharrier/status/3575118194" target="_new">Sebastien
					Charrier</a>
				</cite>
			</div>
			<div class="quote">
				<blockquote>
					@<a href="http://twitter.com/nateabele" target="_new">nateabele</a> Great work
					with CakePHP to the CakePHP team too we're big fans and following its
					development closely! Cheers
				</blockquote>
				<cite>&mdash;
					<a href="http://twitter.com/Skystack/status/3558986436">The Skystack Team</a>
				</cite>
			</div>
			<div class="quote">
				<blockquote>
					The CakePHP API is the most beautiful API I've ever seen. I could trawl through
					for hours.
				</blockquote>
				<cite>&mdash;
					<a href="http://twitter.com/cozycabbage/statuses/3552584972">Michael
						Kozakewich</a>
				</cite>
			</div>
		</div>
	</div>

	<div id="just_baked">
		<h3>Just baked</h3>
		<ul>
			<li><a href="http://amerpages.com" target="_new"><?php __('Amerpages'); ?></a></li>
			<li><a href="http://cakeqs.org" target="_new"><?php __('CakePHP Questions'); ?></a></li>
			<li><a href="http://www.traffictravis.com" target="_new"><?php __('Traffic Travis'); ?></a></li>
			<li><a href="http://pianomarvel.com/" target="_new"><?php __('Piano Marvel'); ?></a></li>
			<li><a href="http://www.missuniverse.com/" target="_new"><?php __('Miss Universe'); ?></a></li>
			<li><a href="http://www.affilorama.com" target="_new"><?php __('Affilorama'); ?></a></li>
			<li><a href="http://www.hotscripts.com" target="_new"><?php __('Hot Scripts'); ?></a></li>
		</ul>		
		<h4><a href="http://book.cakephp.org/view/510/Sites-in-the-wild">They are using CakePHP</h4>
		<ul>			
			<li><a href="http://www.mygasfeed.com">My Gas Feed</a></li>
			<li><a href="http://www.thedailysave.com">The Daily Save</a></li>
			<li><a href="http://amblingbooks.com">Ambling Books</a></li>
			<li><a href="http://croogo.org" target="_new">Croogo</a></li>
			<li><a href="http://scratch.mit.edu/" target="_new">Scratch by MIT</a></li>
			<li><a href="http://store.theonion.com/" target="_new">The Onion Store</a></li>
			<li><a href="http://noserub.com/" target="_new">NoseRub</a></li>
			<li><a href="http://foamee.com/" target="_new">foamee</a></li>
			<li><a href="http://www.mapme.com" target="_new">MapMe</a></li>
			<li><a href="http://www.zeadoo.com" target="_new">Zeadoo</a></li>
			<li><a href="http://cghub.com" target="_new">cghub</a></li>
		</ul>
	</div>
	<div id="bakery_last">
		<?php
			echo $this->element('channel', array('site' => 'Bakery', 'title'=> 'Now at the Bakery', 'count' => 10));
		?>
	</div>
	<div id="ohloh_journal">
		<?php
			// echo $this->element('channel', array('site' => 'Ohloh', 'title'=> 'Ohloh Journal', 'count' => 6));
		?>
	</div>
	<span class="clear:both"></span>
</div>