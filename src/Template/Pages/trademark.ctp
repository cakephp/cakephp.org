<?php
/**
 * @todo New contact form needs to replace $emailLegal in the sections below
 */
$this->assign('title', __('CakePHP Trademark and Logo Policy'));

$emailLegal = $this->Html->tag('strong', 'legal [at] cakefoundation.org');
?>
<div class="main dev">
    <div class="container-fluid docs">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <p>
                <em><?= __('This trademark policy is based on the Ubuntu trademark policy and published under the CC-BY-SA license. You are welcome to base your own project trademark policies off it, just let others use your changes and give credit to the Ubuntu project as the original source!') ?></em>
            </p>
            <p>
                <?= __('The objective of the CakePHP trademark policy is to encourage widespread use of the CakePHP trademarks by the CakePHP community while controlling that use in order to avoid confusion on the part of CakePHP users and the general public, to maintain the value of the image and reputation of the trademarks and to protect them from inappropriate or unauthorized use.') ?>
            </p>
            <p>
                <?= __('The sections below describe what is allowed, what isn\'t allowed, and cases in which you should ask permission.') ?>
            </p>
            <p>
                <?= __('If you have any doubt, please contact {0} and a member of our trademark\'s team will be in touch with you shortly.', $emailLegal) ?>
            </p>
            <p>
                <?= __('If you are aware a breach or misuse of the CakePHP trademarks in any way, we would appreciate you bringing this to our attention. Please contact {0} so that we can investigate this further.', $emailLegal) ?>
            </p>
            <h3 id="#trademarks"><?= __('The Trademarks') ?></h3>
            <p>
                <?= __('Cake Software Foundation, Inc. owns the registered trademark CakePHP. Any mark starting with the letters CakePHP or Cake, is sufficiently similar to one or more of the trademarks that permission will be needed in order to use it. This policy encompasses all marks, in word and logo form, collectively referred to as "Trademarks".') ?>
            </p>
            <h3 id="#permitted-use"><?= __('Permitted Use') ?></h3>
            <p>
                <?= __('Certain usages of the Trademarks are fine and no specific permission from us is needed.') ?>
            </p>
            <p>
                <strong><?= __('Community Advocacy') ?></strong>.
                <?= __('CakePHP is built by, and largely for, its community. We share access to the Trademarks with the entire community for the purposes of discussion, development and advocacy. We recognize that most of the open source discussion and development areas are for non-commercial purposes and will allow the use of the trademarks in this context, provided:') ?>
            </p>
            <ul>
                <li><?= __('the Trademark is used in a manner consistent with the Usage Guidelines below') ?></li>
                <li><?= __('there is no commercial intent behind the use') ?></li>
                <li><?= __('what you are referring to is in fact CakePHP. If someone is confused into thinking that what isn\'t CakePHP is in fact CakePHP, you are probably doing something wrong') ?></li>
                <li><?= __('there is no suggestion (through words or appearance) that your project is approved, sponsored, or affiliated with CakePHP or its related projects unless it actually has been approved by and is accountable to Cake Software Foundation, Inc. and the CakePHP Project') ?></li>
            </ul>
            <p>
                <strong><?= __('Building on CakePHP or for CakePHP.') ?></strong>
                <?= __('If you are producing new software which is intended for use with or on CakePHP, you may use the Trademark in a way which indicates the intent of your product. For example, if you are developing a system management tool for CakePHP, acceptable project titles would be "System Management for CakePHP" or "CakePHP Based Systems Management". We would strongly discourage, and likely would consider to be problematic, a name such as CakePHPMan, CakePHP Management, CakeMan, etc. Furthermore, you may not use the Trademarks in a way which implies an endorsement where that doesn\'t exist, or which attempts to unfairly or confusingly capitalize on the goodwill or brand of the project.') ?>
            </p>
            <p>
                <strong><?= __('Commentary and Parody.') ?></strong>
                <?= __('The CakePHP trademarks are designed to cover use of a mark to imply origin or endorsement by the project. When a user downloads something called CakePHP, they should know it comes from the CakePHP project. This helps CakePHP build a reputation that will not be damaged by confusion around what is, and isn\'t, CakePHP. Using the trademarks in your discussion, commentary, criticism or parody, in ways that unequivocally do not imply endorsement, is permissible. Anyone is free to write articles, create websites, blog about, or talk about CakePHP -- as long as it\'s clear to everyone -- including people completely unfamiliar with CakePHP -- that they are simply referring to CakePHP and in no way speaking for Cake Software Foundation Inc., or the CakePHP project.') ?>
            </p>
            <p>
                <?= __('We reserve the right to review all usage within the open source community, and to object to any usage that appears to overstep the bounds of discussion and good-faith non-commercial development. In any event, once a project has left the open source project phase or otherwise become a commercial project, this policy does not authorize any use of the Trademarks in connection to that project.') ?>
            </p>
            <h3 id="#restricted-use"><?= __('Restricted Use That Requires a Trademark License') ?></h3>
            <p>
                <?= __('Permission from us is necessary to use any of the Trademarks under any circumstances other than those specifically permitted above. These include:') ?>
            </p>
            <ul>
                <li><?= __('Any commercial use.') ?></li>
                <li><?= __('Use on or in relation to a software product that includes or is built on top of a product supplied by us, if there is any commercial intent associated with that product.') ?></li>
                <li><?= __('Use in a domain name or URL.') ?></li>
                <li><?= __('Use for merchandising purposes, e.g. on t-shirts and the like.') ?></li>
                <li><?= __('Use of a name which includes the letters Cake in relation to a PHP Open-Source project.') ?></li>
                <li><?= __('Services relating to any of the above.') ?></li>
            </ul>
            <p>
                <?= __('If you wish to have permission for any of the uses above or for any other use which is not specifically referred to in this policy, please contact {0} and we\'ll let you know as soon as possible if your proposed use is permissible. Permission may only be granted subject to certain conditions and these may include the requirement that you enter into an agreement with us to maintain the quality of the product and/or service which you intend to supply at a prescribed level.', $emailLegal) ?>
            </p>
            <p>
                <?= __('While there may be exceptions, it is very unlikely that we will approve Trademark use in the following cases:') ?>
            </p>
            <ul>
                <li><?= __('Use of a Trademark in a company name.') ?></li>
                <li><?= __('Use of a Trademark in a domain name which has a commercial intent. The commercial intent can range from promotion of a company or product, to collecting revenue generated by advertising.') ?></li>
                <li><?= __('The calling of any software or product by the name CakePHP (or another related Trademark).') ?></li>
                <li><?= __('Use in combination with any other marks or logos. This include use of a Trademark in a manner that creates a "combined mark", or use that integrates other wording with the Trademark in a way that the public may think of the use as a new mark (for example Club CakePHP or CakePHPBooks, or in a way that by use of special fonts or presentation with nearby words or images conveys an impression that the two are tied in some way).') ?></li>
                <li><?= __('Use in combination with any product or service which is presented as being Certified or Official or formally associated with us or our products or services.') ?></li>
                <li><?= __('Use in a way which implies an endorsement where that doesn\'t exist, or which attempts to unfairly or confusingly capitalize on the goodwill or brand of the project.') ?></li>
                <li><?= __('Use of a Trademark in a manner that disparages Cake Software Foundation, Inc. or any of it\'s Trademark Licensees, CakePHP, or Contributors to CakePHP; or its products and is not clearly third-party parody.') ?></li>
                <li><?= __('On or in relation to a software product which constitutes a substantially modified version of a product supplied by the CakePHP project, that is to say with material changes to the code, or services relating to such a product.') ?></li>
                <li><?= __('In a title or metatag of a web page whose sole intention or result is to influence search engine rankings or result listings, rather than for discussion, open source development or advocacy of the Trademarks.') ?></li>
            </ul>
            <h3 id="#logo-usage-guidelines"><?= __('Logo usage guidelines') ?></h3>
            <p>
                <?= __(
                    'The logos linked below are licensed as {0}; please link to {1} as the attribution when using them (either as a hyperlink or simply the text).',
                    '<a href="http://creativecommons.org/licenses/by-nc-nd/3.0/">Creative Commons Attribution-NonCommercial-NoDerivs 3.0 Unported</a>',
                    '<a href="http://cakephp.org">http://cakephp.org</a>'
                ) ?>
            </p>
            <p>
                <?= __('If you intend on making money or promoting a commercial service by using these logos, you must first contact {0} for trademark licensing information before using the logo or any associated assets.', $emailLegal) ?>
            </p>
            <p>
                <?= __('Our logos are presented in multiple colors and it is important that their visual integrity be maintained. It is therefore preferable that the logos only be used in their standard form but if you should feel the need to alter them in any way you should keep the following guidelines in mind. It should also be borne in mind that the more you wish to vary our logos from their standard form the smaller is the chance that we will be able to approve your proposed use.') ?>
            </p>
            <ul>
                <li><?= __('If presented in multiple colors, the logo should only use the "official" logo colors.') ?></li>
                <li><?= __('You may use transparency and gradient/depth tools but should retain the "official" colors.') ?></li>
                <li><?= __('Any scaling must retain the original proportions of the logo.') ?></li>
            </ul>
            <h3 id="#where-can-i-use-it"><?= __('Where can I use it?'); ?></h3>
            <p>
                <?= __('If you run, own or operate a personal blog, you may use the logo to discuss CakePHP, or place the logo to show your support and that you use the framework.'); ?>
            </p>
            <p>
                <?= __('If you intend to use the CakePHP logo to promote a service or product you must first obtain written permission from the Cake Software Foundation.'); ?>
                <?= __('You may use the "powered by" logos to let the world know that your site or product is built with CakePHP.'); ?>
            </p>
            <h3 id="#where-cant-i-use-it"><?= __('Where can\'t I use it?'); ?></h3>
            <p>
                <?= __('For the publication or promotion of commercial services related to CakePHP development, use of the logos is not permitted without permission from the Cake Software Foundation. For more information regarding the licensing options and capabilities, please contact {0}.', $emailLegal) ?>
            </p>
        </div>
    </div>
</div>

<?php echo $this->element('assets'); ?>
