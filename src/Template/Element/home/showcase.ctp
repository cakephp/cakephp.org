<section>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="images/companies/tribehr.jpg" alt="">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="images/companies/copify.jpg" alt="">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="images/companies/affilo.jpg" alt="">
                <div class="carousel-caption">
                </div>
            </div>
        </div>

        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="fa icon-carousel fa-angle-left"></i>
            <span class="sr-only"><?= __("Previous") ?></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa icon-carousel fa-angle-right"></i>
            <span class="sr-only"><?= __("Next") ?></span>
        </a>
    </div>
</section>

<section id="companies">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3><?= __("Companies using CakePHP") ?></h3>
                <?= $this->Html->link(
                	__("View the Showcase"),
                	['plugin' => "showcase", 'controller' => 'projects', 'action' => 'index'],
                	['class' => 'btn btn-red mt40']
                ) ?>
            </div>
        </div>
    </div>
</section>

<section id="companies-logos">
    <div class="container-fluid p0">
        <div class="row col-p0 max_height sm_max_height">
            <div class="col-sm-12 p0">

                <div class="owl-carousel owl-columns5 owl-p10">
                    <div class="owl-el">
                        <img src="images/companies/logos/1.jpg" alt="">
                    </div>
                    <div class="owl-el">
                        <img src="images/companies/logos/2.jpg" alt="">
                    </div>
                    <div class="owl-el">
                        <img src="images/companies/logos/3.jpg" alt="">
                    </div>
                    <div class="owl-el">
                        <img src="images/companies/logos/4.jpg" alt="">
                    </div>
                    <div class="owl-el">
                        <img src="images/companies/logos/5.jpg" alt="">
                    </div>
                    <div class="owl-el">
                        <img src="images/companies/logos/6.jpg" alt="">
                    </div>
                    <div class="owl-el">
                        <img src="images/companies/logos/7.jpg" alt="">
                    </div>
                    <div class="owl-el">
                        <img src="images/companies/logos/8.jpg" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
