<?php
    if (!defined( 'ABSPATH' )) exit; // Exit if accessed directly
    
    class BDTFilterObject {
        public $CompanyIds;
        public $Propellants;
        public $Makes;
        public $Models;
        public $MakesAndModels;
        public $BodyTypes;
        public $ProductTypes;
        public $PriceMin;
        public $PriceMax;
        public $ConsumptionMin;
        public $ConsumptionMax;
        public $Start;
        public $Limit;
        public $OrderBy;
        public $HideSoldVehicles; // Bool
        public $HideADVehicles; // Bool
        public $HideBIVehicles; // Bool
        public $Ascending; // Bool
        public $BrandNew; // Bool
        public $TotalResults; // Read only

        function __construct(array $data = null) 
        {
            if($data === null)
            {
                return;
            }
            
            foreach($data as $key => $val)
            {
                if(property_exists(__CLASS__,$key))
                {
                    $this->$key =  $val;
                }
            }
        }
    }