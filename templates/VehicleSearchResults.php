<?php
    /**
     * A template that shows all the vehicle search results.
     *
     * This template can be overriden by copying this file to your-theme/biltorvet-dealer-tools/VehicleSearchResults.php
     *
     * @author 		Biltorvet A/S
     * @package 	Biltorvet Dealer Tools
     * @version     1.0.0
     */
    if (!defined( 'ABSPATH' )) exit; // Exit if accessed directly

    use Biltorvet\Controller\PriceController;
    use Biltorvet\Factory\StructuredDataFactory;
    use Biltorvet\Factory\VehicleFactory;
    use Biltorvet\Helper\DataHelper;
    use Biltorvet\Model\Vehicle;
    use Biltorvet\Helper\ProductHelper;
    use Biltorvet\Controller\ApiController;

    global $wp;
    $root = dirname(dirname(dirname(plugin_dir_url( __FILE__ ))));
    $currentPage = get_query_var('bdt_page', -1);
    $bdt_root_url = null;

    if(isset($this->_options) && isset($this->_options['vehiclesearch_page_id'])) {
        $bdt_root_url = rtrim(get_permalink($this->_options['vehiclesearch_page_id']),'/');
    } else {
        return '<!-- Cannot load Biltorvet vehicle search results: no root page (Vehicle search) has been set! -->';
    }

    if($currentPage === -1)
    {
        $_SESSION['bdt_filter'] = null;
        $currentPage = 1;
    }

    if(isset($atts) && isset($atts['relativepositiontosearch']))
    {
        $bdt_root_url .= $atts['relativepositiontosearch'];
    }

    if(!$this->biltorvetAPI)
    {
        die('API not set.');
    }

    try {
        $start = ($currentPage-1) * intval($this->biltorvetAPI->GetVehicleResultsPageLimit());
        $limit = intval($this->biltorvetAPI->GetVehicleResultsPageLimit());

        $filterObject = new BDTFilterObject();

        if(isset($_SESSION['bdt_filter']) && trim($_SESSION['bdt_filter']) !== '')
        {
            $filterObject = new BDTFilterObject(json_decode($_SESSION['bdt_filter'], true));
        }

        if(isset($atts) && isset($atts['makes']) && trim($atts['makes']) !== '')
        {
            $filterObject->Makes = explode(',', $atts['makes']);
        }

        $make = get_query_var('bdt_vehicle_make', -1);
        if($make !== -1)
        {
            $filterObject->Makes = array($this->biltorvetAPI->GetMakeFromSlug($make));
        }

        $urlFilter = get_query_var('bdt_filter_type', false);

        if ($urlFilter === "Fritekst") {

            $urlFilterFullTextSearch = get_query_var('bdt_filter', false);

            $filterObject->FullTextSearch = [sanitize_text_field(urldecode($urlFilterFullTextSearch))];
        }

        if ($urlFilter === "Maerke") {

            $urlFilterMake = get_query_var('bdt_filter', false);

            $filterObject->Makes = [sanitize_text_field(urldecode($urlFilterMake))];

            $urlFilterModel = get_query_var('filter_brand', false);
            if ($urlFilterModel) {
                $filterObject->Models = [sanitize_text_field(urldecode($urlFilterModel))];
            }
        }

        if ($urlFilter === "Braendstof") {

            $urlFilterPropellant = get_query_var('bdt_filter', false);

            $filterObject->Propellants = [sanitize_text_field(urldecode($urlFilterPropellant))];
        }

        if ($urlFilter === "Karrosseri") {

            $urlFilterBodyTypes = get_query_var('bdt_filter', false);

            $filterObject->BodyTypes = [sanitize_text_field(urldecode($urlFilterBodyTypes))];
        }

        if ($urlFilter === "Afdeling") {

            $urlFilterCompanyIds = get_query_var('bdt_filter', false);

            $filterObject->CompanyIds = [sanitize_text_field(urldecode($urlFilterCompanyIds))];
        }

        if ($urlFilter === "Stand") {

            $urlFilterVehicleStates = get_query_var('bdt_filter', false);

            $filterObject->VehicleStates = [sanitize_text_field(urldecode($urlFilterVehicleStates))];
        }

        if ($urlFilter === "Type") {

            $urlFilterProductTypes = get_query_var('bdt_filter', false);

            $filterObject->ProductTypes = [sanitize_text_field(urldecode($urlFilterProductTypes))];
        }

        if ($filterObject->OrderBy === null && isset($this->_options_2['default_sorting_value'])) {
            $filterObject->OrderBy = $this->_options_2['default_sorting_value'];
        }

        if($filterObject->Ascending === null && isset($this->_options_2['default_sorting_order'])) {
            $filterObject->Ascending = $this->_options_2['default_sorting_order'] === 'Ascending' ? 'true' : 'false';
        }

        $filterObject->Start = $start;
        $filterObject->Limit = $limit;

        $filterObject->HideSoldVehicles = isset($this->_options_2['hide_sold_vehicles']) && $this->_options_2['hide_sold_vehicles'] === 'on' ? 'true' : null;
        $filterObject->HideLeasingVehicles = isset($this->_options_2['hide_leasing_vehicles']) && $this->_options_2['hide_leasing_vehicles'] === 'on' ? 'true' : null;
        $filterObject->HideFlexLeasingVehicles = isset($this->_options_2['hide_flexleasing_vehicles']) && $this->_options_2['hide_flexleasing_vehicles'] === 'on' ? 'true' : null;
        $filterObject->HideWarehousesaleVehicles = isset($this->_options_2['hide_warehousesale_vehicles']) && $this->_options_2['hide_warehousesale_vehicles'] === 'on' ? 'true' : null;
        $filterObject->HideCarLiteDealerLabelVehicles = isset($this->_options_2['hide_carlite_dealer_label_vehicles']) && $this->_options_2['hide_carlite_dealer_label_vehicles'] === 'on' ? 'true' : null;
        $filterObject->HideRentalVehicles = isset($this->_options_2['hide_rental_vehicles']) && $this->_options_2['hide_rental_vehicles'] === 'on' ? 'true' : null;
        $filterObject->HideUpcomingVehicles = isset($this->_options_2['hide_upcoming_vehicles']) && $this->_options_2['hide_upcoming_vehicles'] === 'on' ? 'true' : null;
        $filterObject->HideWholesaleVehicles = isset($this->_options_2['hide_wholesale_vehicles']) && $this->_options_2['hide_wholesale_vehicles'] === 'on' ? 'true' : null;
        $filterObject->HideTrailerVehicles = isset($this->_options_2['hide_trailer_vehicles']) && $this->_options_2['hide_trailer_vehicles'] === 'on' ? 'true' : null;
        $filterObject->HideCommissionVehicles = isset($this->_options_2['hide_commission_vehicles']) && $this->_options_2['hide_commission_vehicles'] === 'on' ? 'true' : null;
        $filterObject->HideExportVehicles = isset($this->_options_2['hide_export_vehicles']) && $this->_options_2['hide_export_vehicles'] === 'on' ? 'true' : null;
        $filterObject->HideByTypeCar = isset($this->_options_2['hide_typecar_vehicles']) && $this->_options_2['hide_typecar_vehicles'] === 'on' ? 'true' : null;
        $filterObject->HideByTypeVan = isset($this->_options_2['hide_typevan_vehicles']) && $this->_options_2['hide_typevan_vehicles'] === 'on' ? 'true' : null;
        $filterObject->HideByTypeMotorcycle = isset($this->_options_2['hide_typemotorcycle_vehicles']) && $this->_options_2['hide_typemotorcycle_vehicles'] === 'on' ? 'true' : null;
        $filterObject->HideByTypeTruck = isset($this->_options_2['hide_typetruck_vehicles']) && $this->_options_2['hide_typetruck_vehicles'] === 'on' ? 'true' : null;
        $filterObject->HideByTypeBus = isset($this->_options_2['hide_typebus_vehicles']) && $this->_options_2['hide_typebus_vehicles'] === 'on' ? 'true' : null;
        $filterObject->HideBrandNewVehicles = isset($this->_options_2['hide_brandnew_vehicles']) && $this->_options_2['hide_brandnew_vehicles'] === 'on' ? 'true' : null;
        $filterObject->HideADVehicles = isset($this->_options_2['hide_ad_vehicles']) && $this->_options_2['hide_ad_vehicles'] === 'on' ? 'true' : null;
        $filterObject->HideBIVehicles = isset($this->_options_2['hide_bi_vehicles']) && $this->_options_2['hide_bi_vehicles'] === 'on' ? 'true' : null;
        $vehicleFeed = $this->biltorvetAPI->GetVehicles($filterObject);
        $orderByValues = $this->biltorvetAPI->GetOrderByValues();
    } catch(Exception $e) {
        die($e->getMessage());
    }

    $start = ($currentPage - 1) * $this->biltorvetAPI->GetVehicleResultsPageLimit();
    $end = $start + $this->biltorvetAPI->GetVehicleResultsPageLimit();
    if($end > $vehicleFeed->totalResults)
    {
        $end = $vehicleFeed->totalResults;
    }

    //$product = new ApiController()
?>
<!--    <?php /*if(ProductHelper::hasAccess("Structured Data", $product->getCompanyProducts())) : */?>

    <script type="application/ld+json">
        <?/*= StructuredDataFactory::VehicleSearchPage($vehicleFeed, $start, $end, $this->_options)*/?>
    </script>

    --><?php /*endif; */?>
    <div class="bdt">
        <div class="vehicle_search_results" data-totalResults="<?= $vehicleFeed->totalResults ?>">
            <div class="row resultsTitle">
                <div class="col-sm-8">
                    <h4>
                        <?php printf(__('Your search returned <span class="bdt_color">%d cars</span>', 'biltorvet-dealer-tools'), $vehicleFeed->totalResults); ?>
                    </h4>
                    <p class="showingResultsXofY">
                        <?php

                            printf(__('Showing results %1$d-%2$d', 'biltorvet-dealer-tools'), ($start +1), $end);
                        ?>
                    </p>
                </div>
                <div class="col-sm-4 searchFilter">
                    <div class="row">
                        <div class="col">
                            <select name="orderBy">
                                <option value=""><?php _e('- Order by -', 'biltorvet-dealer-tools'); ?></option>
                                <?php
                                foreach($orderByValues as $orderBy) : ?>
                                    <option value="<?php echo $orderBy; ?>"
                                        <?php if (isset($filterObject->OrderBy) && $filterObject->OrderBy === $orderBy) : ?>
                                            selected="selected"
                                        <?php endif; ?>
                                    ><?= _e($orderBy, 'biltorvet-dealer-tools'); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col">
                            <select name="ascDesc">
                                <option value="desc"<?php echo $filterObject->Ascending !== 'true' || isset($this->_options_2['default_sorting_order']) && isset($this->_options_2['default_sorting_order']) === "Descending" ? ' selected="selected"' : '';  ?>><?php _e('Descending', 'biltorvet-dealer-tools'); ?></option>
                                <option value="asc"<?php echo $filterObject->Ascending === 'true' || isset($this->_options_2['default_sorting_order']) && isset($this->_options_2['default_sorting_order']) === "Ascending" ? ' selected="selected"' : '';  ?>><?php _e('Ascending', 'biltorvet-dealer-tools'); ?></option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="results">
                <div class="row">
                    <?php
                        foreach($vehicleFeed->vehicles as $oVehicle)
                        {
                            $link = $bdt_root_url . '/' . $oVehicle->uri;

                            // @TODO: Refactor.
                            // For new we convert the old vehicle object to the new, so it works with the new templates
                            // PLUGIN_ROOT refers to the v2 root.

                            /** @var Vehicle $vehicle */
                            $vehicle = VehicleFactory::create(json_decode(json_encode($oVehicle), true));
                            $vehicleProperties = DataHelper::getVehiclePropertiesAssoc($vehicle->getProperties());
                            $priceController = new PriceController($vehicle);
                            $basePage = $bdt_root_url;
                            require PLUGIN_ROOT . 'templates/partials/_vehicleCard.php';
                        }
                    ?>
                </div>
            </div>
            <ul class="paging">
                <?php
                    $getUrlFilterParts = array_filter(explode("/", $_SERVER['REQUEST_URI']));

                    switch (count($getUrlFilterParts)) {
                        case 4:
                            $urlFilterPaging = "/" . $getUrlFilterParts[3] . "/" . $getUrlFilterParts[4];
                            break;
                        case 5:
                            $urlFilterPaging = "/" . $getUrlFilterParts[4] . "/" . $getUrlFilterParts[5];
                            break;
                        case 6:
                            $urlFilterPaging = "/" . $getUrlFilterParts[5] . "/" . $getUrlFilterParts[6];
                            break;
                        default:
                            $urlFilterPaging = "";
                            break;
                    }

                    for($i = 1; $i < ceil($vehicleFeed->totalResults / $this->biltorvetAPI->GetVehicleResultsPageLimit())+1; $i++)
                    {
                        $active = (isset($currentPage) && intval($currentPage) == $i) || (!isset($currentPage) && $i == 1);
                        $pageSlug = (!isset($_SESSION['bdt_filter']) && $i == 1 ? '' : '/' . $i);
                        $searchResultsPageUrl = $bdt_root_url . $pageSlug;

                        ?><li><a <?php echo $active ? ' class="active bdt_bgcolor"' : ''; ?> href="<?php echo $active ? '#' : $searchResultsPageUrl . $urlFilterPaging; ?>"><?php echo $i; ?></a></li><?php
                    }
                ?>
            </ul>
        </div>
    </div>