<div id="general" class="col-sm-12">
    <h3><?= __('General Information') ?></h3>
    <h4 id="legends" class="p-trad-sub"><?= __('Trademark marking and legends') ?></h4>

    <p><?= __(
        'The first or most prominent mention of a Mark on a webpage, document, packaging, or documentation should be
		accompanied by a symbol indicating whether the mark is a registered trademark ("®") or an unregistered trademark
		("™"). See our {0} for the correct symbol to use.',
        $this->Html->link(__('Trademark List'), '#our-guidelines', ['class' => 't-blue'])
) ?></p>

    <p><?= __(
        'Also, if you are using our Marks in a way described in the sections {0},
		please put following notice at the foot of the page where you have used the Mark (or, if in a book, on the
		credits page), on any packaging or labeling, and on advertising or marketing materials: CakePHP and related Marks
		are trademarks of Cake Software Foundation, Inc. and Cake Development Corporation, registered in the United States and other countries.
		Used with permission from Cake Software Foundation, Inc.',
        $this->Html->link(__('Uses for which we are granting a license'), '#license', ['class' => 't-blue'])
    ) ?> </p>
    <h4 id="abuse" class="p-trad-sub"><?= __('What to do when you see abuse') ?></h4>

    <p><?= __('If you are aware of any confusing use or misuse of the Marks in any way, we would appreciate you bringing this to
		our attention. Please contact us as described below so that we can investigate it further.') ?> </p>
    <h4 id="general-information" class="p-trad-sub"><?= __('Where to get further information') ?></h4>

    <p><?= __('If you have any questions about this Policy, would like to speak with us about the use of our Marks in ways not
		described in the Policy, or see any abuse of our Marks, please contact {0}', '<strong>legal [at] cakefoundation.org</strong>') ?></p>
</div>
