<?php
/**
 * @var \App\View\AppView $this
 */
use Cake\Core\Configure;
?>
<div id="comunityguidelinesside" class="col-sm-12 get-developer pt-100">
	<h2><?= __('Community Guidelines') ?><?= $this->Html->link('¶', '#comunityguidelinesside', ['class' => 'headerlink', 'title' => __('Permalink to this headline')]) ?></h2>
	<p><?= __('The following is a list of recommendations to help keep the CakePHP community strong, active and healthy, as well as a place where everyone feels welcome. These are by no means rules or laws, but instead suggestions and best practices.') ?></p>
	<ol>
		<li><?= __('Remember that when you talk about CakePHP you\'re representing a global community of people, most of whom are passionate about their involvement, and dedicate their free time and good will to helping the framework. Be friendly and helpful, and always show the respect for others in the same way you\'d expect from them.') ?></li>
		<li><?= __('Never insult, tease or ridicule a user, group of users or community, based on personal opinion or bias towards them. If you don\'t agree with their opinion or argument, then simply state your reason, provide examples or links, and be polite. If they\'re acting inappropriately or using abusive language then contact an admin of that channel to have them removed.') ?></li>
		<li><?= __('Never degrade, belittle, insult or otherwise damage the name or reputation of another project in favour of CakePHP. If you want to compare or promote features of the framework, always aim to do so with relevant and technical arguments, with a positive attitude, and in a humble and respectful manner.') ?></li>
		<li><?= __('Never use the community channels to announce or advertise a commercial service or product, or to spam other users with content unrelated to CakePHP or the community.') ?></li>
		<li><?= __('When dealing with a user asking for help, if possible, attempt to resolve their problem or concern, no matter how trivial it may seem. We all started from somewhere. If you don\'t have the time, the patience or the know-how to answer, always refer the user to the CakePHP Community Center at {0}', $this->Html->link('https://community.cakephp.org', 'https://community.cakephp.org', ['class' => 't-blue', 'target' => '_blank'])) ?></li>
		<li><?= __('When talking about a technical feature of CakePHP, always try to make a clear reference to the version of the framework in which it became available. Also, if possible, attempt to supply documentation and examples where possible, to help the reader or listener better understand the concept. And remember, always check your facts before jumping to conclusions or defending a false argument.') ?></li>
		<li><?= __('When writing example code, always try to apply the CakePHP Conventions and Coding Standards correctly, and check that the example given does not throw an error or give an incorrect result. This promotes good practice, and aids developers in learning to do things "the right way" by default, without hitting too many bumps along the way.') ?></li>
		<li><?= __('The use of the CakePHP logo and brand assets should follow the instructions available from the logo usage guide: {0}. Following those standards ensures that the visual identity of the framework is never misrepresented or abused.', $this->Html->link('https://cakephp.org/logos', 'https://cakephp.org/logos', ['class' => 't-blue'])) ?></li>
		<li><?= __('Try to use the CakePHP name correctly. The name should be spelled "CakePHP", all as one word, with an uppercase "C", and "PHP". This helps keep the links and references to the framework consistent. For example, CAKEPHP, Cakephp, cake-php or just Cake would be incorrect uses. Maintaining a common spelling and format for the name helps keep brand coherent and consistent.') ?></li>
		<li><?= __('When making a reference to CakePHP in a marketing or promotional context, it helps to make the name stand-out or interactive. Consider using &lt;strong&gt; or &lt;b&gt; tags for HTML, bold formatting for documents, or making the name a visible link to {0}. Don\'t overuse the name in any body of text, instead try keeping any direct uses of the name relevant. To even out the usage try to use other references, such as "the framework" or "the project".', $this->Html->link('https://cakephp.org', 'https://cakephp.org')) ?></li>
	</ol>
</div>
