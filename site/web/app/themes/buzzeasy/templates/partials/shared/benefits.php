<?php
/**
 * PARTIAL: Benefits
 *
 * FIELDS:
 *     benefits
 *         contact_centre_benefits (REPEATER)
 *             heading
 *             benefits_list (REPEATER)
 *                 benefit_item
 *         marketing_benefits (REPEATER)
 *             heading
 *             benefits_list (REPEATER)
 *                 benefit_item
 * 
 */

use Roots\Sage\Assets;
use Roots\Sage\Utils;
use Buzzeasy\App\Utilities\ValueCollection;

$fields = $fields ?? new ValueCollection();

$modifiers = $modifiers ?? new ValueCollection();

$contact_centre_benefits      = $fields->get('contact_centre_benefits');
$contact_centre_benefits_list = $contact_centre_benefits->get('benefits_list');
$marketing_benefits           = $fields->get('marketing_benefits');
$marketing_benefits_list      = $marketing_benefits->get('benefits_list');

?>

<?php if ( $contact_centre_benefits->get('benefits_heading')->has() && $marketing_benefits->get('benefits_heading')->has() ) : ?>

    <section class="benefits">
        <div class="container container--extend">
            <div class="grid grid--half-gutter">

                    <div class="gc s1-1 l1-2 benefits__contact-centre band band--100 band--blue">
                        <h2 class="benefits__heading heading--bravo heading--white">
                            <?= $contact_centre_benefits->get('benefits_heading')->escape('html'); ?>
                        </h2>

                        <?php if( $contact_centre_benefits_list->has() ) : ?>
                            <ul class="benefits__list text--white">
                                <?php foreach( $contact_centre_benefits_list as $benefit ) : ?>
                                    <li class="benefits__list-item"><?= $benefit->get('benefit_item')->escape('html'); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>


                    <div class="gc s1-1 l1-2 benefits__marketing band band--100 band--green">
                        <h2 class="benefits__heading heading--bravo heading--white">
                            <?= $marketing_benefits->get('benefits_heading')->escape('html'); ?>
                        </h2>

                        <?php if( $marketing_benefits_list->has() ) : ?>
                            <ul class="benefits__list text--white">
                                <?php foreach( $marketing_benefits_list as $benefit ) : ?>
                                    <li class="benefits__list-item"><?= $benefit->get('benefit_item')->escape('html'); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
            
            </div>
        </div>
    </section>

<?php endif; ?>

