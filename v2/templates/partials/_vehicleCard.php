<?php
/**
 * Reused the search result markup.
 * A partial template that shows one vehicle in the search results. Can be used also as a standalone.
 *
 * This template can be overriden by copying this file to your-theme/biltorvet-dealer-tools/_VehicleCard.php
 *
 * @author 		Biltorvet A/S
 * @package 	Biltorvet Dealer Tools
 * @version     1.0.0
 */

use Biltorvet\Controller\PriceController;
use Biltorvet\Model\Property;
use Biltorvet\Model\Vehicle;

if (!defined( 'ABSPATH' )) exit; // Exit if accessed directly

/** @var string $basePage */
/** @var Vehicle $vehicle */
/** @var Property[] $vehicleProperties */
/** @var PriceController $priceController */

?>

<div class="col-sm-6 col-md-4">
    <div class="bdt">
        <div class="vehicleCard">
            <a href="<?= get_permalink($basePage) . $vehicle->getUri() ?>">
                <span class="vehicleThumb">
                    <img src="<?= $vehicle->getImages()[0] ?>" class="img-responsive" />
                    <?php if ($vehicle->getLabels()) : ?>
                    <?php foreach ($vehicle->getLabels() as $label) : ?>

                        <?php if ($label->getKey() === LABEL_SOLD) : ?>
                            <span class="vehicleLabel sold"><?= $label->getValue(); ?></span>
                        <?php endif; ?>

                        <?php if ($label->getKey() === LABEL_NEW) : ?>
                            <span class="vehicleLabel new"><?= $label->getValue(); ?></span>
                        <?php endif; ?>

                    <?php endforeach; ?>
                    <?php endif; ?>
                </span>
                <span class="vehicleDescription">
                    <span class="vehicleTitle"><?= $vehicle->getMakeName() .' '. $vehicle->getModel() .' '. $vehicle->getVariant() ?></span>
                    <span class="price bdt_color">
                        <?= $priceController->getCardPrioritizedPrice() ?>
                    </span>
                    <span class="priceLabel bdt_color">
                        <?= $priceController->getCardLabel() ?>
                    </span>
                    <span class="row">
                        <span class="col-4">
                            <span class="vehicleParamValue"><?= $vehicleProperties['ModelYear']->getValue() ? $vehicleProperties['ModelYear']->getValue() : '-'; ?></span>
                            <span class="vehicleParamLabel"><?php _e('Year of the car', 'biltorvet-dealer-tools'); ?></span>
                        </span>
                        <span class="col-4">
                            <span class="vehicleParamValue"><?= $vehicleProperties['Mileage']->getValueFormatted() ? $vehicleProperties['Mileage']->getValueFormatted() : '-'; ?></span>
                            <span class="vehicleParamLabel"><?php _e('Mileage', 'biltorvet-dealer-tools'); ?></span>
                        </span>
                        <span class="col-4">
                            <span class="vehicleParamValue"><?= $vehicle->getPropellant() ?? '-' ?></span>
                            <span class="vehicleParamLabel"><?php _e('Propellant', 'biltorvet-dealer-tools'); ?></span>
                        </span>
                    </span>
                </span>
            </a>
        </div>
    </div>
</div>