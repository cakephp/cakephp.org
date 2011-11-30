<div class="slider">
	<ul id="carousel" class="photo-carousel">
		<li>
			<span class="polaroid">
				<img src="http://static.flickr.com/66/199481236_dc98b5abb3_s.jpg" />
			</span>
			<a href="#" rel="nofollow">missuniverse.com</a>
		</li>

		<li>
			<span class="polaroid">
				<img src="http://static.flickr.com/66/199481236_dc98b5abb3_s.jpg" />
			</span>
			<a href="#" rel="nofollow">example.com</a>
		</li>

		<li>
			<span class="polaroid">
				<img src="http://static.flickr.com/66/199481236_dc98b5abb3_s.jpg" />
			</span>
			<a href="#" rel="nofollow">google.com</a>
		</li>

		<li>
			<span class="polaroid">
				<img src="http://static.flickr.com/66/199481236_dc98b5abb3_s.jpg" />
			</span>
			<a href="#" rel="nofollow">awesome.com</a>
		</li>

		<li>
			<span class="polaroid">
				<img src="http://static.flickr.com/66/199481236_dc98b5abb3_s.jpg" />
			</span>
			<a href="#" rel="nofollow">woot.com</a>
		</li>

		<li>
			<span class="polaroid">
				<img src="http://static.flickr.com/66/199481236_dc98b5abb3_s.jpg" />
			</span>
			<a href="#" rel="nofollow">disco.com</a>
		</li>
	
	</ul>
</div>
<?php
$this->Html->script('jquery.jcarousel', array('inline' => false));

$this->Js->buffer('$("#carousel").jcarousel({visible: 3});');
