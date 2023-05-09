<?php
/**
 * @var \App\View\AppView
 */
?>
<section class="whats-new pt-120">
    <div class="container">
        <div class="visible-md-block visible-lg-block artwork">
            <?= $this->Html->image('whats_new.svg', ['alt' => 'Whats new']) ?>
        </div>
        <div>
            <div class="mb50">
                <h2>What's new in version 4.4</h2>
                <p>The migration guide has a complete list of what's new in 4.4.0. We recommend you give that page a read when upgrading. A few highlights from 4.4.0 are:
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
                    <a href="https://book.cakephp.org/4/en/appendices/4-4-migration-guide.html" class="learn-more">Learn more</a>
                </div>
            </div>

            <div>
                <h2>Business Solutions</h2>
                <p>CakeDC, the commercial entity behind the CakePHP framework, was established by Larry Masters, the
                   founder of CakePHP. CakeDC offers CakePHP development, consultancy, CakePHP training and code review Services.
                    From startups and social networks, to e-commerce and enterprise level applications, CakeDC provides
                   the highest quality CakePHP development available.
                </p>
                <div>
                    <a href="https://www.cakedc.com" class="learn-more">Chat to the top CakePHP developers</a>
                </div>
            </div>
        </div>
    </div>
</section>
