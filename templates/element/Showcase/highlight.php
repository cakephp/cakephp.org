<?php if (isset($highlights[$index])) : ?>
    <section class="section-bg p0 m0 <?= $class ?>">
        <div class="row col-p0">
            <div class="col-sm-5">
                <div class="box-services-d p0 bg03">
                    <?= $this->Showcase->image($highlights[$index]->perspective_image, ['class' => 'img-responsive pull-right']) ?>
                </div>
            </div>
        </div>
        <div class="section-caption">
            <div class="container">
                <div class="row col-p0">
                    <div class="col-sm-6 col-sm-offset-6 get-height">
                        <div class="mb50 mt50">
                            <h3><?= $highlights[$index]->title ?></h3>
                            <p><?= $highlights[$index]->description ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
