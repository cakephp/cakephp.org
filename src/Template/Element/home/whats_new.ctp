<?php
/**
 * @var \App\View\AppView $this
 */
?>
<section class="whats-new">
    <div class="container">
        <div class="mb50 mt50 image visible-md-block visible-lg-block artwork">
            <?= $this->Html->image('whats_new_chiffon.svg', ['alt' => 'Whats new']) ?>
        </div>
        <div class="description">
            <div class="mb50 mt50">
                <h2>What's new in version</h2>
                <p>The migration guide has a complete list of what's new in. We recommend you give that page a read when upgrading. A few highlights from 4.4.0 are:
                <ul>
                    <li> A new Error and Exception handling framework that is easier to extend and requires less application code to operate. </li>
                    <li> Controller::viewClasses() was added. This method enables controllers to take control of what content-types they can respond as. </li>
                    <li> The QueryExpression::case() builder now supports inferring the type from expressions passed to then() and else() that implement \Cake\Database\TypedResultInterface. </li>
                    <li> HttpsEnforcerMiddleware now has an hsts option that allows you to configure the Strict-Transport-Security header. </li>
                    <li> bin/cake routes now highlights collisions in route templates. </li>
                    <li> The RedisEngine now supports fast deletes with deleteAsync(). </li>
                </ul>
                <p>
                    While CakePHP 4 contains a number of breaking changes we have prepared an exhaustive migration guide
                    covering all the deprecated and removed features as well as highlighting the shiny new features.
                </p>
                <div>
                    <a href="https://book.cakephp.org/4/en/appendices/4-4-migration-guide.html" class="btn btn-home">Learn more</a>
                </div>
            </div>
        </div>
    </div>
</section>
