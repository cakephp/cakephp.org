<div id="software" class="col-sm-12 use-soft-trade">
	<h3><?= __('Use for software')?></h3>
	<p>
		<?= __('See {0}, above, which also apply.', $this->Html->link(__("Universal considerations for all uses"), '#universal-considerations', [
            'class' => 't-blue'
        ]))?>
	</p>
	<h4 id="sofware-users" class="p-trad-sub"><?= __('Uses we consider non-infringing')?></h4>

	<p>
		<strong id="unmodified-uses" class="pt-20"><?= __('Distribution of unmodified source code or unmodified executable code
			we have compiled')?></strong><br>
		<?= __('When you redistribute an unmodified copy of our software, you are not changing the quality or nature of it.
		Therefore, you may retain the Word Marks and the Logos we have placed on the software, to identify your
		redistribution -- whether that redistribution is made by optical media, memory stick or download of unmodified
		source and executable code. This kind of use only applied if you are redistributing an official distribution
		from this Project that has not been changed in any way. You can find files for the Logos and approved designs
		for packaging on our &lt;&lt;Brand Standards&gt;&gt; page.')?>
	</p>

	<p>
		<strong id="executable-uses" class="pt-20"><?= __('Distribution of executable code that you have compiled, or modified
			code')?></strong><br>
		<?= __('You may use the Word Marks, but not the Logos, to truthfully describe the origin of the software that you are
		providing, that is, that the code you are distributing is a modification of our software. You may say, for
		example, that "this software is derived from the source code for &lt;&lt;~Mark&gt;&gt; software."')?>
	</p>

	<p>&lt;&lt;<?= __('Example #1: This source code is distributed with an "--enable-official-branding" flag. By default, this
		software will compile without official branding. As long as you do not modify the code or enable this flag
		before compiling, any use of the <<~Mark>> in the compiled code is noninfringing.')?>&gt;&gt;</p>

	<p><?= __('Of course, you can place your own trademarks or logos on versions of the software to which you have made
		substantive modifications, because by modifying the software, you have become the origin of that exact version.
		In that case, you should not use our Logos. Our source code version therefore does not contain our Logo data
		files.')?></p>

	<p>
		<strong id="compatibility-uses" class="pt-20"><?= __('Statements about compatibility, interoperability or
			derivation')?></strong><br>
		<?= __('You may use the Word Marks, but not the Logos, to truthfully describe the relationship between your software and
		ours. Our Mark should be used after a verb or preposition that describes the relationship between your software
		and ours. So you may say, for example, "Bob\'s software for the <<~Mark>> platform" but may not say "Bob\'s &lt;&lt;~Mark&gt;&gt;
		software." Some other examples that may work for you are:')?>
	</p>
	<ul>
		<li><?= __('[Your software] works with {0} software', '&lt;&lt;~Mark&gt;&gt;')?></li>
		<li><?= __('[Your software] uses {0} software', '&lt;&lt;~Mark&gt;&gt;')?></li>
		<li><?= __('[Your software] is compatible with {0} software', '&lt;&lt;~Mark&gt;&gt;')?></li>
		<li><?= __('[Your software] is powered by {0} software', '&lt;&lt;~Mark&gt;&gt;')?></li>
		<li><?= __('[Your software] runs on {0} software', '&lt;&lt;~Mark&gt;&gt;')?></li>
		<li><?= __('[Your software] for use with {0} software', '&lt;&lt;~Mark&gt;&gt;')?></li>
		<li><?= __('[Your software] for {0} software', '&lt;&lt;~Mark&gt;&gt;')?></li>
	</ul>
	<p>
		<strong id="affiliation-uses" class="pt-20"><?= __('Use of trademarks to show community affiliation')?></strong><br>
		<?= __('This section discusses the use of our Marks for software such an application themes, skins and personas. The use
			of our Marks on websites is discussed below.')?>
	</p>

	<p><?= __('You may use the Word Marks and the Logos in themes, personas, or skins for applications to show your support for
		the Project, provided that the use is non-commercial and the use is clearly decorative, as contrasted with a use
		that appears to be the branding for a website or application.')?></p>
</div>
<div class="col-sm-12">
	<p>
		<strong><?= __('Community Flags')?></strong><br>
		&lt;&lt;<?= __('Insert descriptive text here')?>&gt;&gt;
	</p>

	<p><?= __('1. Group Flag:')?></p>

	<div class="col-md-12 p0 flag-m">
		<div class="col-sm-4 flag-box">
			<?= $this->Html->image('trademarks/flag-1.jpg', ['class' => 'img-responsive']) ?>
		</div>
		<div class="col-sm-8">
			<p><?= __('Floating Flag Embed Code:')?></p>

			<div class="box-code-trad">
<pre><span class="k">&lt;div</span> <span class="g">style</span><span class="w">=</span><span class="nx">"position:fixed; bottom:80%; right:0; z-index:9999;"</span><span class="k">&gt;</span>
   <span class="k">&lt;a</span> <span class="g">href</span><span class="w">=</span><span class="nx">"http://www.cakephp.org/"</span><span class="k">&gt;</span>
      <span class="k">&lt;img</span> <span class="g">src</span><span class="w">=</span><span class="nx">"http://www.cakephp.org/images/flag/flg1.png"</span><span class="k">&gt;</span>
   <span class="k">&lt;/a&gt;</span>
<span class="k">&lt;/div&gt;</span>
</pre>
			</div>
			<p><?= __('Image files:')?></p>
			<?= $this->Html->link(__('DOWNLOAD PNG'), 'img/flags/We-bake-with-CakePHP.png', ['class' => 'btn btn-ok btn-b mb20', 'fullBase' => true])?>
			<span class="mr20"></span>
			<?= $this->Html->link(__('DOWNLOAD EPS'), 'img/flags/We-bake-with-CakePHP.eps', ['class' => 'btn btn-ok btn-b mb20', 'fullBase' => true])?>
			<span class="mr20"></span>
		</div>
	</div>

	<p><?= __('2. Application Flag:')?></p>

	<div class="col-md-12 p0 flag-m">
		<div class="col-sm-4 flag-box">
			<?= $this->Html->image('trademarks/flag-2.jpg', ['class' => 'img-responsive']) ?>
		</div>
		<div class="col-sm-8">
			<p><?= __('Floating Flag Embed Code:')?></p>
			<div class="box-code-trad">
<pre><span class="k">&lt;div</span> <span class="g">style</span><span class="w">=</span><span class="nx">"position:fixed; bottom:80%; right:0; z-index:9999;"</span><span
		class="k">&gt;</span>
   <span class="k">&lt;a</span> <span class="g">href</span><span class="w">=</span><span class="nx">"http://www.cakephp.org/"</span><span
		class="k">&gt;</span>
      <span class="k">&lt;img</span> <span class="g">src</span><span class="w">=</span><span class="nx">"http://www.cakephp.org/images/flag/flg2.png"</span><span
		class="k">&gt;</span>
   <span class="k">&lt;/a&gt;</span>
<span class="k">&lt;/div&gt;</span>
</pre>
			</div>
			<p><?= __('Image files:')?></p>
			<?= $this->Html->link(__('DOWNLOAD PNG'), 'img/flags/Baked-with-CakePHP.png', ['class' => 'btn btn-ok btn-b mb20', 'fullBase' => true])?>
			<span class="mr20"></span>
			<?= $this->Html->link(__('DOWNLOAD EPS'), 'img/flags/Baked-with-CakePHP.eps', ['class' => 'btn btn-ok btn-b mb20', 'fullBase' => true])?>
			<span class="mr20"></span>
		</div>
	</div>

	<p><?= __('3. Developer Flag:')?></p>

	<div class="col-md-12 p0 flag-m">
		<div class="col-sm-4 flag-box">
			<?= $this->Html->image('trademarks/flag-3.jpg', ['class' => 'img-responsive']) ?>
		</div>
		<div class="col-sm-8">
			<p><?= __('Floating Flag Embed Code:')?></p>

			<div class="box-code-trad">
<pre><span class="k">&lt;div</span> <span class="g">style</span><span class="w">=</span><span class="nx">"position:fixed; bottom:80%; right:0; z-index:9999;"</span><span
		class="k">&gt;</span>
   <span class="k">&lt;a</span> <span class="g">href</span><span class="w">=</span><span class="nx">"http://www.cakephp.org/"</span><span
		class="k">&gt;</span>
      <span class="k">&lt;img</span> <span class="g">src</span><span class="w">=</span><span class="nx">"http://www.cakephp.org/images/flag/flg3.png"</span><span
		class="k">&gt;</span>
   <span class="k">&lt;/a&gt;</span>
<span class="k">&lt;/div&gt;</span>
</pre>
			</div>
			<p><?= __('Image files:')?></p>
			<?= $this->Html->link(__('DOWNLOAD PNG'), 'img/flags/I-bake-with-CakePHP.png', ['class' => 'btn btn-ok btn-b mb20', 'fullBase' => true])?>
			<span class="mr20"></span>
			<?= $this->Html->link(__('DOWNLOAD EPS'), 'img/flags/I-bake-with-CakePHP.eps', ['class' => 'btn btn-ok btn-b mb20', 'fullBase' => true])?>
			<span class="mr20"></span>
		</div>
	</div>

	<p><?= __('4. Supporter Flag:')?></p>

	<div class="col-md-12 p0 flag-m">
		<div class="col-sm-4 flag-box">
			<?= $this->Html->image('trademarks/flag-4.jpg', ['class' => 'img-responsive']) ?>
		</div>
		<div class="col-sm-8">
			<p><?= __('Floating Flag Embed Code:')?></p>
			<div class="box-code-trad">
<pre><span class="k">&lt;div</span> <span class="g">style</span><span class="w">=</span><span class="nx">"position:fixed; bottom:80%; right:0; z-index:9999;"</span><span
		class="k">&gt;</span>
   <span class="k">&lt;a</span> <span class="g">href</span><span class="w">=</span><span class="nx">"http://www.cakephp.org/"</span><span
		class="k">&gt;</span>
      <span class="k">&lt;img</span> <span class="g">src</span><span class="w">=</span><span class="nx">"http://www.cakephp.org/images/flag/flg4.png"</span><span
		class="k">&gt;</span>
   <span class="k">&lt;/a&gt;</span>
<span class="k">&lt;/div&gt;</span>
</pre>
			</div>
			<p><?= __('Image files:')?></p>
			<?= $this->Html->link(__('DOWNLOAD PNG'), 'img/flags/Bake-with-CakePHP.png', ['class' => 'btn btn-ok btn-b mb20', 'fullBase' => true])?>
			<span class="mr20"></span>
			<?= $this->Html->link(__('DOWNLOAD EPS'), 'img/flags/Bake-with-CakePHP.eps', ['class' => 'btn btn-ok btn-b mb20', 'fullBase' => true])?>
			<span class="mr20"></span>
		</div>
	</div>
</div>

<div class="col-sm-12">
	<p>
		<?= __('5. Community Flags usage Guidelines:')?> <br>
		<?= __('Respect a margin over a forth of the flag’s hight to ensure visual effectiveness. The side margins might be
		disregarded while using the flag on the extreme left or right sides of a layout.')?>
	</p>
	<?= $this->Html->image('trademarks/flags-guidelines.jpg', ['class' => 'img-responsive']) ?>
	<h4 id="license" class="p-trad-sub"><?= __('Uses for which we are granting a license')?></h4>
	<p>
		<strong id="software-license" class="pt-20"><?= __('Distribution of modified software')?></strong><br>
		&lt;&lt;<?= __('Example #1: You may use the Word Marks and the Logos for the distribution of code (source or executable)
		on the condition that any executable is built from the official Project source code and that any modifications
		are limited to switching on or off features already included in the software, translations into other languages,
		and incorporating bug-fix patches.')?>&gt;&gt;
	</p>

	<p>&lt;&lt;<?= __('Example #2: You may use the Word Marks and the Logos for the distribution of executable code on the
		condition that it is made from official Project source code using the procedure documented for creating an
		executable found at &lt;&lt;location of build instructions.&gt;&gt;&gt;&gt;')?> </p>

	<p>
		<strong id="hardware-license" class="pt-20"><?= __('Distribution of software preloaded on hardware')?></strong><br>
		&lt;&lt;<?= __('Example #1: You may use the Word Marks and the Logos in association with hardware devices on the
		condition that the executable installed on the device is the official source executable for the Project, and
		that you do not suggest that the Project is the source of the hardware device itself but rather than the Marks
		are for the software incorporated into the device.')?>&gt;&gt;
	</p>

	<p>&lt;&lt;<?= __('Example #2: You may use use the Word Marks and the Logos in association with hardware devices on the
		condition that the software installed on the device is modified only so far as necessary to operate on the
		hardware platforms and the essential functions of the software are unchanged, and that you do not suggest that
		the Project is the source of the hardware device itself but rather than the Marks are for the software
		incorporated into the device.')?>&gt;&gt; </p>
	<h4 id="permission" class="p-trad-sub"><?= __('Uses we consider infringing without seeking further permission from
		us')?></h4>

	<p><?= __('We will likely consider using the Marks in a software distribution that combines our software with any other
		software program an infringement of our Marks. In addition to creating a single executable for both software
		programs, we would consider your software "combined" with ours if installing our software automatically installs
		yours. We would not consider your software "combined" with ours if it is on the same media but requires
		separate, independent action to install it.')?></p>
</div>