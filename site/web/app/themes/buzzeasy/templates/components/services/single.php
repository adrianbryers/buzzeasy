<?php

use Roots\Sage\Assets;
use Roots\Sage\Utils;
use Buzzeasy\App\Utilities\ValueCollection;

$service   = $service ?? new ValueCollection();

$modifiers = $modifiers ?? new ValueCollection();

$content = $service->get('main_content');
$title   = $service->title;

?>

<?php if ( $title->has() && $content->has('service_copy') && $content->has('service_icon') ) : ?>

    <div class="service-listing__service band band--light-grey" id="<?= sanitize_title($title->escape('html')); ?>">
        <div class="container">
            <div class="grid">
            
                <div class="gc s1-1 m1-4">

                    <img class="service-listing__icon lazyload" data-src="<?= $content->get('service_icon')->get('url'); ?>" alt="<?= $title->escape('html'); ?>">

                    <noscript>
                        <img class="service-listing__icon" src="<?= $content->get('service_icon')->get('url'); ?>" alt="<?= $title->escape('html'); ?>">
                    </noscript>

                </div>

                <div class="gc s1-1 m3-4">

                    <h2 class="heading--bravo">
                        <?= $title->escape('html'); ?>
                    </h2>
                    
                    <p>
                        <?= $content->get('service_copy')->escape('wysiwyg'); ?>
                    </p>

                    <button class="btn btn--primary" href="<?= $content->get('service_button_link')->escape('html'); ?>">
                        <?= $content->get('service_button_text')->escape('html'); ?>
                    </button>
                </div>
            </div>
        </div>
    </div>

<? endif; ?>