<?php
/**
 * @var \App\View\AppView $this
 */
?>

    <section class="newsletter-signup">
        <div class="container back-red">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3 class="title-white mb50 mt50"><?= __('Sign up for our newsletter.') ?></h3>
                    <form id="sib-form" method="POST" action="https://ec420bc2.sibforms.com/serve/MUIFANthUSG_Kw-d1nhQi0ujPPKaE6hJTnc88en2sr8daLM3wfLOXlDr_MFg8ErlVuhbUh7weURyqY3wm85mhWSPIStIsiSj8h2MEWiq3d4Djo-UOLKzqAhGsCuUZnw7z27r9NkQfu6DGewwT0UUcF9joSsPu0a3XBY_-_NY7AUJFxy6Imj90FbpyRxACF9xZM9OW1dUbBdOMQAGEA==" data-type="subscription">
                        <div class="row col-p10 pb-40">
                            <div class="col-sm-5 col-sm-offset-1">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label class="label mb10">
                                            <input type="text"
                                                   class="form-control"
                                                   id="FIRSTNAME"
                                                   name="FIRSTNAME"
                                                   placeholder="<?= __('First Name') ?>"
                                                   data-required="true"
                                                   required>
                                        </label>
                                    </div>
                                    <div class="col-sm-12">
                                        <label class="label mb-10">
                                            <input type="text"
                                                   class="form-control"
                                                   id="LASTNAME"
                                                   name="LASTNAME"
                                                   placeholder="<?= __('Last Name') ?>"
                                                   data-required="true"
                                                   required>
                                        </label>
                                    </div>
                                    <div class="col-sm-12">
                                        <label class="label mb10">
                                            <input type="text"
                                                   class="form-control"
                                                   id="EMAIL"
                                                   name="EMAIL"
                                                   placeholder="<?= __('Email') ?>"
                                                   data-required="true"
                                                   required>
                                        </label>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="newsletter-submit">
                                            <button
                                                type="submit"
                                                name="subscribe"
                                                id="mc-embedded-subscribe"
                                                class="btn btn-home btn-inverted"
                                                style="margin-left: 0.5em;">
                                                <?= __('Submit') ?>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5 col-sm-offset-1">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 mc-field-group mt10">
                                        <strong>English Lists</strong>
                                        <ul>
                                            <li>
                                                <input type="checkbox" class="input_replaced" name="NEWSLETTER_INTEREST_EN[]" id="newsletter-interest-en-newsletter" data-value="Newsletter" value="Newsletter" />
                                                <label for="newsletter-interest-en-newsletter">Newsletter</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" class="input_replaced" name="NEWSLETTER_INTEREST_EN[]" id="newsletter-interest-en-events" data-value="Events" value="Events" />
                                                <label for="newsletter-interest-en-events">Events</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" class="input_replaced" name="NEWSLETTER_INTEREST_EN[]" id="newsletter-interest-en-security" data-value="Security" value="Security" />
                                                <label for="newsletter-interest-en-security">Security</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" class="input_replaced" name="NEWSLETTER_INTEREST_EN[]" id="newsletter-interest-en-freelancers" data-value="Freelancers" value="Freelancers" />
                                                <label for="newsletter-interest-en-freelancers">Freelancers</label>
                                            </li>
                                        </ul>
                                        <br>
                                        <strong class="mt10"><?= __('Email Format') ?></strong>
                                        <ul>
                                            <li>
                                                <input type="checkbox" class="input_replaced" name="EMAIL_TYPE[]" id="email-format-html" data-value="html" value="html" />
                                                <label for="email-format-html">html</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" class="input_replaced" name="EMAIL_TYPE[]" id="email-format-text" data-value="text" value="text" />
                                                <label for="email-format-text">text</label>
                                            </li>
                                        </ul>
                                    </div>
                                    <label class="entry__error entry__error--primary" style="font-size:16px; text-align:left; font-family:Helvetica, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;">
                                    </label>
                                    <div class="col-lg-4 col-md-4 mc-field-group mt10">
                                        <strong>Lista en Español</strong>
                                        <ul>
                                            <li>
                                                <input type="checkbox" class="input_replaced" name="NEWSLETTER_INTEREST_ES[]" id="newsletter-interest-es-boletin-de-noticias" data-value="Boletín de Noticias" value="Boletín de Noticias" />
                                                <label for="newsletter-interest-es-boletin-de-noticias">Boletín de noticias</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" class="input_replaced" name="NEWSLETTER_INTEREST_ES[]" id="newsletter-interest-es-eventos" data-value="Eventos" value="Eventos" />
                                                <label for="newsletter-interest-es-eventos">Eventos</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" class="input_replaced" name="NEWSLETTER_INTEREST_ES[]" id="newsletter-interest-es-seguridad" data-value="Seguridad" value="Seguridad" />
                                                <label for="newsletter-interest-es-seguridad">Seguridad</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" class="input_replaced" name="NEWSLETTER_INTEREST_ES[]" id="newsletter-interest-es-freelancers" data-value="Freelancers" value="Freelancers" />
                                                <label for="newsletter-interest-es-freelancers">Freelancers</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden">
                                <input type="text" name="email_address_check" value="" class="input--hidden">
                                <input type="hidden" name="locale" value="en">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php $this->start('css') ?>
    <style>
        .mc-field-group ul {
            list-style-type: none;
            padding:0;
            margin:0;
        }

        .mc-field-group strong {
            color: white;
        }

        .mc-field-group .mc-field-group input[type="radio"]:checked:before {
            border: 2px solid white;
        }

        label {
            display: inline;
            font-size: 12px;
            font-weight: bold;
            color: white;
        }

        form .form-control {
            height: 50px !important;
        }

        form .label {
            display: block;
            font-weight: 500;
            font-size: 11px;
            letter-spacing: 0.03em;
            color: white;
        }
    </style>
<?php $this->end('css') ?>
<?php $this->start('script') ?>
    <script>
        window.REQUIRED_CODE_ERROR_MESSAGE = 'Choose country code';
        window.LOCALE = 'en';
        window.EMAIL_INVALID_MESSAGE = window.SMS_INVALID_MESSAGE = "The information you provided is not valid. Please check the field format and try again.";

        window.REQUIRED_ERROR_MESSAGE = "This field cannot be left empty. ";

        window.GENERIC_INVALID_MESSAGE = "The information you provided is not valid. Please check the field format and try again.";




        window.translation = {
            common: {
                selectedList: '{quantity} selected list',
                selectedLists: '{quantity} selected lists',
                selectedOption: '{quantity} selected',
                selectedOptions: '{quantity} selected',
            }
        };

        var AUTOHIDE = Boolean(0);
        <?php $this->end('script') ?>
<?php $this->Html->script('https://sibforms.com/forms/end-form/build/main.js');
