<?php


// Custom Vehicle Types (Icon based search)

$customVehicleTypeMicro = "style='display: none;'";;
$customVehicleTypeHatchback = "style='display: none;'";;
$customVehicleTypeFamilyCar = "style='display: none;'";;
$customVehicleTypeStationcar = "style='display: none;'";;
$customVehicleTypeSuv = "style='display: none;'";;
$customVehicleTypeElectricAndHybrid = "style='display: none;'";;
$customVehicleTypeVan = "style='display: none;'";;
$customVehicleTypeTruck = "style='display: none;'";;

if(!empty($initialFilterOptions->customVehicleTypes))
{
    foreach($initialFilterOptions->customVehicleTypes as $cvt)
    {
        switch($cvt->name)
        {
            case "Micro":
                $customVehicleTypeMicro = "";
                break;
            case "Hatchback":
                $customVehicleTypeHatchback = "";
                break;
            case "FamilyCar":
                $customVehicleTypeFamilyCar = "";
                break;
            case "Stationcar":
                $customVehicleTypeStationcar = "";
                break;
            case "SUV":
                $customVehicleTypeSuv = "";
                break;
            case "ElectricAndHybrid":
                $customVehicleTypeElectricAndHybrid = "";
                break;
            case "Van":
                $customVehicleTypeVan = "";
                break;
            case "Truck":
                $customVehicleTypeTruck = "";
                break;
        }
    }
}

?>
    <div class="car-icon-container" data-custom-vehicle-type="0" <?= $customVehicleTypeMicro ?>>
        <a href="/" id="cvt-micro"
        ><svg
                viewBox="0 0 143 160"
                class="car"
                xmlns="http://www.w3.org/2000/svg"
            >
                <g transform="matrix(1, 0, 0, 1, -212.374512, -35)">
                    <title>Micro</title>
                    <ellipse cx="281.555" cy="186.74" rx="65.541" ry="2.075" />
                    <path style="fill: <?= $customVehicleTypeIconColor; ?>;"
                          d="M 262.213 171.839 C 262.213 179.741 255.807 186.147 247.905 186.147 C 240.003 186.147 233.597 179.741 233.597 171.839 C 233.597 163.937 240.003 157.531 247.905 157.531 C 255.807 157.531 262.213 163.937 262.213 171.839 Z M 339.036 171.794 C 339.036 179.696 332.63 186.102 324.728 186.102 C 316.826 186.102 310.42 179.696 310.42 171.794 C 310.42 163.892 316.826 157.486 324.728 157.486 C 332.63 157.486 339.036 163.892 339.036 171.794 Z M 272.74 117.309 C 290.153 113.111 331.405 116.009 331.405 116.009 C 333.081 116.065 331.015 119.065 331.015 119.065 C 334.884 124.764 340.964 132.578 343.408 140.153 C 345.555 146.808 345.487 161.027 345.487 161.027 C 345.487 161.027 348.975 161.182 349.669 161.857 C 349.669 161.857 351.087 172.359 349.378 175.309 C 347 179.415 343.523 178.13 343.523 178.13 C 343.523 178.13 343.771 166.532 340.655 161.87 C 337.151 156.626 330.554 152.327 324.248 152.447 C 317.534 152.575 311.28 157.205 307.879 162.855 C 304.633 168.247 305.739 179.706 305.739 179.706 L 266.455 179.906 C 266.455 179.906 267.478 166.815 264.545 161.853 C 261.193 156.181 255.422 152.721 248.836 152.539 C 242.105 152.353 235.118 156.302 231.355 161.886 C 228.424 166.236 229.368 177.537 229.368 177.537 L 221.81 177.593 C 223.246 174.79 222.416 164.13 222.416 164.13 C 222.897 162.933 225.099 161.34 225.099 161.34 C 225.099 161.34 221.862 155.333 226.411 149.73 C 226.411 149.73 258.587 120.721 272.74 117.309 Z M 256.086 136.182 C 256.086 136.182 260.501 135.335 263.505 136.776 C 265.233 137.605 264.076 141.542 264.076 141.542 L 313.867 140.341 C 313.748 133.773 312.588 128.938 309.058 119.953 C 309.058 119.953 281.674 119.395 274.462 121.388 C 265.633 123.828 256.086 136.182 256.086 136.182 Z M 315.261 119.89 C 314.98 126.256 322.078 139.633 322.078 139.633 L 337.573 139.482 C 338.806 134.437 325.635 120.409 325.635 120.409 Z"
                    />
                </g>
            </svg>
            <span class="caption" style="color: <?= $customVehicleTypeIconColor; ?>;">Mikrobil</span>
        </a>
        <span class="cvt-checkmark" style="display: none;" name="cvt-checkmark-0"></span>
    </div>
    <div class="car-icon-container" data-custom-vehicle-type="1" <?= $customVehicleTypeHatchback ?>>
        <a href="/" id="cvt-hatchback"
        ><svg
                viewBox="0 0 210 160"
                class="car"
                xmlns="http://www.w3.org/2000/svg"
            >
                <g transform="matrix(1, 0, 0, 1, -211.265366, -35)">
                    <title>Hatchback</title>
                    <ellipse cx="316.937" cy="186.115" rx="100.922" ry="2.3" />
                    <path style="fill: <?= $customVehicleTypeIconColor; ?>;"
                          d="M 263.787 170.174 C 263.787 178.942 256.679 186.05 247.911 186.05 C 239.143 186.05 232.035 178.942 232.035 170.174 C 232.035 161.406 239.143 154.298 247.911 154.298 C 256.679 154.298 263.787 161.406 263.787 170.174 Z M 396 170.595 C 396 179.363 388.892 186.471 380.124 186.471 C 371.356 186.471 364.248 179.363 364.248 170.595 C 364.248 161.827 371.356 154.719 380.124 154.719 C 388.892 154.719 396 161.827 396 170.595 Z M 311.058 119.442 C 328.471 115.244 370.915 120.017 370.915 120.017 C 382.304 122.54 400.579 132.384 404.102 137.105 C 407.171 141.218 407.907 162.923 407.907 162.923 C 407.907 162.923 410.023 163.145 410.717 163.82 C 410.717 163.82 412.667 171.68 409.653 175.23 C 406.583 178.847 400.518 177.976 400.518 177.976 C 400.518 177.976 401.143 165.516 397.936 160.628 C 394.114 154.803 387.163 149.631 380.196 149.577 C 372.757 149.519 364.555 155.327 361.072 161.08 C 357.826 166.441 359.206 179.79 359.206 179.79 L 269.04 179.127 C 269.04 179.127 269.782 165.798 266.595 160.729 C 262.784 154.668 256.214 150.098 248.817 149.565 C 241.288 149.023 233.786 153.936 229.466 160.126 C 226.176 164.841 227.022 176.978 227.022 176.978 C 227.022 176.978 218.707 178.44 216.012 175.925 C 212.144 172.315 213.751 160.267 213.751 160.267 C 214.395 159.557 216.448 159.522 216.448 159.522 C 216.448 159.522 217.744 153.052 221.172 150.147 C 229.362 143.207 271.666 138.303 271.666 138.303 C 271.666 138.303 296.905 122.854 311.058 119.442 Z M 287.535 136.8 C 287.535 136.8 293.759 135.815 295.483 137.924 C 296.696 139.408 295.174 143.147 295.174 143.147 L 331.758 142.122 C 331.639 135.554 334.693 122.784 334.693 122.546 C 334.693 122.308 319.464 121.704 312.252 123.697 C 303.423 126.137 287.535 136.8 287.535 136.8 Z M 340.9 122.307 C 337.774 128.025 338.035 142.122 338.035 142.122 L 378.897 139.885 C 378.505 134.628 367.789 125.464 367.789 125.464 C 359.122 120.815 340.9 122.307 340.9 122.307 Z"
                    />
                </g>
            </svg>
            <span class="caption" style="color: <?= $customVehicleTypeIconColor; ?>;">Hatchback</span>
        </a>
        <span class="cvt-checkmark" style="display: none;" name="cvt-checkmark-1"></span>
    </div>
    <div class="car-icon-container" data-custom-vehicle-type="2" <?= $customVehicleTypeFamilyCar ?>>
        <a href="/" id="cvt-familycar">
            <svg
                viewBox="0 0 219 160"
                class="car"
                xmlns="http://www.w3.org/2000/svg"
            >
                <g transform="matrix(1, 0, 0, 1, -210.975739, -35)">
                    <title>Sedan</title>
                    <ellipse cx="320.879" cy="186.539" rx="104.865" ry="2.276" />
                    <path style="fill: <?= $customVehicleTypeIconColor; ?>;"
                          d="M 263.787 170.174 C 263.787 178.942 256.679 186.05 247.911 186.05 C 239.143 186.05 232.035 178.942 232.035 170.174 C 232.035 161.406 239.143 154.298 247.911 154.298 C 256.679 154.298 263.787 161.406 263.787 170.174 Z M 311.058 119.442 C 328.471 115.244 364.269 118.179 364.269 118.179 C 375.658 120.702 386.196 127.878 397.032 133.429 C 405.214 137.621 416.497 136.847 421.171 141.406 C 424.665 144.814 423.602 160.519 423.602 160.519 C 423.602 160.519 425.436 160.883 426.13 161.558 C 426.13 161.558 427.373 170.549 424.359 174.099 C 421.289 177.716 406.315 177.694 406.315 177.694 C 406.315 177.694 407.224 164.092 403.45 159.073 C 399.127 153.325 391.048 149.505 383.873 150.001 C 376.98 150.478 370.105 155.361 366.445 161.221 C 363.218 166.387 364.297 179.366 364.297 179.366 L 269.04 179.127 C 269.04 179.127 269.782 165.798 266.595 160.729 C 262.784 154.668 256.214 150.098 248.817 149.565 C 241.288 149.023 233.786 153.936 229.466 160.126 C 226.176 164.841 227.022 176.978 227.022 176.978 C 227.022 176.978 218.707 178.44 216.012 175.925 C 212.144 172.315 213.751 160.267 213.751 160.267 C 214.395 159.557 216.448 159.522 216.448 159.522 C 216.448 159.522 216.754 152.204 220.182 149.299 C 228.372 142.359 271.666 138.303 271.666 138.303 C 271.666 138.303 296.905 122.854 311.058 119.442 Z M 287.535 136.8 C 287.535 136.8 293.759 135.815 295.483 137.924 C 296.696 139.408 295.174 143.147 295.174 143.147 L 331.758 142.122 C 331.639 135.554 334.693 122.784 334.693 122.546 C 334.693 122.308 319.464 121.704 312.252 123.697 C 303.423 126.137 287.535 136.8 287.535 136.8 Z M 340.9 122.307 C 337.774 128.025 338.035 142.122 338.035 142.122 L 367.161 140.451 C 366.769 135.194 368.355 125.888 368.355 125.888 C 359.688 121.239 340.9 122.307 340.9 122.307 Z M 370.912 126.647 C 369.668 131.238 369.689 140.451 369.689 140.451 L 380.011 140.072 C 380.011 140.072 383.654 135.864 381.808 131.602 Z M 401 170.595 C 401 179.363 393.892 186.471 385.124 186.471 C 376.356 186.471 369.248 179.363 369.248 170.595 C 369.248 161.827 376.356 154.719 385.124 154.719 C 393.892 154.719 401 161.827 401 170.595 Z"
                    />
                </g>
            </svg>
            <span class="caption" style="color: <?= $customVehicleTypeIconColor; ?>;">Familiebil</span>
        </a>
        <span class="cvt-checkmark" style="display: none;" name="cvt-checkmark-2"></span>
    </div>
    <div class="car-icon-container" data-custom-vehicle-type="3" <?= $customVehicleTypeStationcar ?>>
        <a href="/" id="cvt-stationwagon">
            <svg style="fill: <?= $customVehicleTypeIconColor; ?>;"
                 viewBox="0 0 220 160"
                 class="car"
                 xmlns="http://www.w3.org/2000/svg"
            >
                <g transform="matrix(1, 0, 0, 1, -209.585358, -35)">
                    <title>Station wagon</title>
                    <ellipse cx="320.879" cy="186.539" rx="104.865" ry="2.276" />
                    <path
                        d="M 263.787 170.174 C 263.787 178.942 256.679 186.05 247.911 186.05 C 239.143 186.05 232.035 178.942 232.035 170.174 C 232.035 161.406 239.143 154.298 247.911 154.298 C 256.679 154.298 263.787 161.406 263.787 170.174 Z M 401 170.595 C 401 179.363 393.892 186.471 385.124 186.471 C 376.356 186.471 369.248 179.363 369.248 170.595 C 369.248 161.827 376.356 154.719 385.124 154.719 C 393.892 154.719 401 161.827 401 170.595 Z M 311.058 119.442 C 328.471 115.244 399.758 115.936 409.028 121.562 C 418.314 127.198 415.584 136.065 420.258 140.624 C 423.752 144.032 423.602 160.519 423.602 160.519 C 423.602 160.519 425.436 160.883 426.13 161.558 C 426.13 161.558 427.373 170.549 424.359 174.099 C 421.289 177.716 406.315 177.694 406.315 177.694 C 406.315 177.694 407.224 164.092 403.45 159.073 C 399.127 153.325 391.048 149.505 383.873 150.001 C 376.98 150.478 370.105 155.361 366.445 161.221 C 363.218 166.387 364.297 179.366 364.297 179.366 L 269.04 179.127 C 269.04 179.127 269.782 165.798 266.595 160.729 C 262.784 154.668 256.214 150.098 248.817 149.565 C 241.288 149.023 233.786 153.936 229.466 160.126 C 226.176 164.841 227.022 176.978 227.022 176.978 C 227.022 176.978 218.707 178.44 216.012 175.925 C 212.144 172.315 213.751 160.267 213.751 160.267 C 214.395 159.557 216.448 159.522 216.448 159.522 C 216.448 159.522 216.754 152.204 220.182 149.299 C 228.372 142.359 271.666 138.303 271.666 138.303 C 271.666 138.303 296.905 122.854 311.058 119.442 Z M 287.535 136.8 C 287.535 136.8 293.759 135.815 295.483 137.924 C 296.696 139.408 295.174 143.147 295.174 143.147 L 331.758 142.122 C 331.639 135.554 334.693 122.784 334.693 122.546 C 334.693 122.308 319.464 121.704 312.252 123.697 C 303.423 126.137 287.535 136.8 287.535 136.8 Z M 340.9 122.307 C 337.774 128.025 338.035 142.122 338.035 142.122 L 371.382 140.367 C 370.99 135.11 368.777 121.92 368.777 121.92 Z M 374.457 122.426 C 374.732 128.452 377.371 139.776 377.371 139.776 L 412.849 138.89 C 412.849 138.89 410.888 128.582 406.542 125.862 C 398.608 120.896 374.457 122.426 374.457 122.426 Z"
                    />
                </g>
            </svg>
            <span class="caption" style="color: <?= $customVehicleTypeIconColor; ?>;">Stationcar</span>
        </a>
        <span class="cvt-checkmark" style="display: none;" name="cvt-checkmark-3"></span>
    </div>
    <div class="car-icon-container" data-custom-vehicle-type="4" <?= $customVehicleTypeSuv ?>>
        <a href="/" id="cvt-suv">
            <svg style="fill: <?= $customVehicleTypeIconColor; ?>;"
                 viewBox="0 0 250 160"
                 class="car"
                 xmlns="http://www.w3.org/2000/svg"
            >
                <g
                    transform="matrix(1.133006, 0, 0, 1.268357, -237.856247, -90)"
                >
                    <title>SUV</title>
                    <ellipse cx="320.879" cy="190.994" rx="104.865" ry="2.276" />
                    <path
                        d="M 412.776 175.131 C 412.776 183.94 404.781 191.082 394.919 191.082 C 385.057 191.082 377.062 183.94 377.062 175.131 C 377.062 166.322 385.057 159.18 394.919 159.18 C 404.781 159.18 412.776 166.322 412.776 175.131 Z M 269.522 175.131 C 269.522 183.94 261.527 191.082 251.665 191.082 C 241.803 191.082 233.808 183.94 233.808 175.131 C 233.808 166.322 241.803 159.18 251.665 159.18 C 261.527 159.18 269.522 166.322 269.522 175.131 Z M 309.96 119.152 C 327.373 114.954 399.758 115.936 409.028 121.562 C 418.314 127.198 415.584 136.065 420.258 140.624 C 423.752 144.032 421.979 158.634 421.979 158.634 C 421.979 158.634 425.111 159.143 425.805 159.818 C 425.805 159.818 428.571 172.927 425.333 176.274 C 423.237 178.441 418.003 176.969 418.003 176.969 C 418.003 176.969 416.965 168.297 413.191 163.278 C 408.868 157.53 401.135 154.856 394.262 155.077 C 387.436 155.296 379.187 157.961 375.527 163.821 C 372.3 168.987 371.753 177.478 371.753 177.478 L 275.371 177.387 C 275.371 177.387 273.637 166.598 270.166 162.759 C 265.929 158.072 260.435 155.174 253.038 154.641 C 245.509 154.099 237.033 157.561 232.713 163.751 C 229.423 168.466 229.295 177.558 229.295 177.558 C 229.295 177.558 218.707 178.44 216.012 175.925 C 212.144 172.315 213.751 160.267 213.751 160.267 C 214.395 159.557 216.448 159.522 216.448 159.522 C 216.448 159.522 215.618 150.174 219.046 147.269 C 227.236 140.329 271.666 138.303 271.666 138.303 C 271.666 138.303 295.807 122.564 309.96 119.152 Z M 282.644 137.146 C 282.644 137.146 291.065 135.816 292.789 137.925 C 293.932 139.324 293.187 142.726 293.097 143.111 C 297.107 142.93 330.168 142.122 331.758 142.122 C 331.639 135.554 334.254 122.392 334.254 122.154 C 334.254 121.916 317.172 121.312 309.96 123.305 C 301.131 125.745 282.644 137.146 282.644 137.146 Z M 340.9 122.307 C 337.774 128.025 338.035 142.122 338.035 142.122 L 371.382 140.367 C 370.99 135.11 368.777 121.92 368.777 121.92 Z M 374.457 122.426 C 374.732 128.452 377.371 139.776 377.371 139.776 L 412.849 138.89 C 412.849 138.89 410.888 128.582 406.542 125.862 C 398.608 120.896 374.457 122.426 374.457 122.426 Z"
                    />
                </g>
            </svg>
            <span class="caption" style="color: <?= $customVehicleTypeIconColor; ?>;">SUV</span>
        </a>
        <span class="cvt-checkmark" style="display: none;" name="cvt-checkmark-4"></span>
    </div>
    <div class="car-icon-container" data-custom-vehicle-type="5" <?= $customVehicleTypeElectricAndHybrid ?>>
        <a href="" id="cvt-electricandhybrid" >
            <svg style="fill: <?= $customVehicleTypeIconColor; ?>;"
                 viewBox="0 0 236 160"
                 class="car"
                 xmlns="http://www.w3.org/2000/svg"
            >
                <g transform="matrix(1, 0, 0, 1, -213.815369, -40)">
                    <title>El og hybrid</title>
                    <ellipse cx="320.879" cy="194.539" rx="104.865" ry="2.276" />
                    <path
                        d="M 267.787 178.174 C 267.787 186.942 260.679 194.05 251.911 194.05 C 243.143 194.05 236.035 186.942 236.035 178.174 C 236.035 169.406 243.143 162.298 251.911 162.298 C 260.679 162.298 267.787 169.406 267.787 178.174 Z M 405 178.595 C 405 187.363 397.892 194.471 389.124 194.471 C 380.356 194.471 373.248 187.363 373.248 178.595 C 373.248 169.827 380.356 162.719 389.124 162.719 C 397.892 162.719 405 169.827 405 178.595 Z M 311.058 119.442 C 315.974 118.257 324.47 117.567 334.335 117.242 C 336.8 112.308 347.665 94.225 374.456 94.225 C 388.558 94.225 397.585 110.905 411.562 112.78 C 418.663 113.733 422.543 113.448 424.598 112.998 L 423.016 108.358 C 422.475 106.77 423.323 105.044 424.911 104.502 L 433.641 101.525 L 435.226 105.946 L 443.351 103.175 C 443.759 103.036 444.203 103.255 444.342 103.663 L 444.841 105.125 C 444.98 105.533 444.762 105.977 444.354 106.116 L 436.228 108.887 L 437.667 113.106 L 445.793 110.336 C 446.201 110.197 446.645 110.415 446.784 110.823 L 447.283 112.285 C 447.422 112.693 447.203 113.137 446.795 113.276 L 438.67 116.047 L 440.068 120.37 L 431.316 123.283 C 429.728 123.825 428.001 122.976 427.46 121.388 L 425.761 116.405 C 423.269 116.951 418.616 117.493 411.351 116.575 C 397.72 114.852 387.773 97.989 374.034 98.022 C 350.481 98.078 342.062 112.273 339.88 117.099 C 364.155 116.637 393.798 118.065 399.818 119.657 C 402.339 120.324 397.074 122.341 399.234 123.885 C 406.535 129.105 416.497 136.847 421.171 141.406 C 424.665 144.814 423.602 160.519 423.602 160.519 C 423.602 160.519 426.317 160.589 427.011 161.264 C 427.011 161.264 428.841 175.248 425.827 178.798 C 422.757 182.415 410.279 180.337 410.279 180.337 C 410.279 180.337 409.007 169.272 404.918 164.506 C 400.742 159.639 394.719 157.581 387.544 158.077 C 380.651 158.554 376.419 160.353 371.878 166.213 C 368.147 171.028 368.115 180.541 368.115 180.541 L 274.179 180.302 C 274.179 180.302 273.125 171.058 269.678 166.162 C 265.72 160.541 261.206 157.733 253.809 157.2 C 246.28 156.658 241.274 159.222 235.486 165.412 C 231.559 169.611 231.28 179.915 231.28 179.915 C 231.28 179.915 222.671 181.23 219.976 178.715 C 216.108 175.105 217.715 161.588 217.715 161.588 C 218.359 160.878 221.587 159.522 221.587 159.522 C 221.587 159.522 220.278 152.204 223.706 149.299 C 231.896 142.359 273.428 139.918 273.428 139.918 C 273.428 139.918 296.905 122.854 311.058 119.442 Z M 287.535 136.8 C 287.535 136.8 293.759 135.815 295.483 137.924 C 296.696 139.408 295.174 143.147 295.174 143.147 L 331.758 142.122 C 331.639 135.554 334.693 122.784 334.693 122.546 C 334.693 122.308 319.464 121.704 312.252 123.697 C 303.423 126.137 287.535 136.8 287.535 136.8 Z M 340.9 122.307 C 337.774 128.025 338.035 142.122 338.035 142.122 L 368.336 140.451 C 368.972 131.817 366.153 125.594 366.153 125.594 C 357.486 120.945 340.9 122.307 340.9 122.307 Z M 370.766 126.794 C 372.605 132.119 372.772 140.451 372.772 140.451 L 380.892 140.366 C 380.892 140.366 381.049 136.575 380.193 134.979 C 378.226 131.312 370.766 126.794 370.766 126.794 Z M 412.583 138.41 L 395.845 125.782 L 390.412 125.636 C 390.412 125.929 400.645 139.544 412.583 138.41 Z"
                    />
                </g>
            </svg>
            <span class="caption" style="color: <?= $customVehicleTypeIconColor; ?>;">El og hybrid</span>
        </a>
        <span class="cvt-checkmark" style="display: none;" name="cvt-checkmark-5"></span>
    </div>

    <div class="car-icon-container" data-custom-vehicle-type="6" <?= $customVehicleTypeVan ?>>
        <a href="/" id="cvt-van">
            <svg style="fill: <?= $customVehicleTypeIconColor; ?>;"
                 viewBox="0 0 225 160"
                 class="car van"
                 xmlns="http://www.w3.org/2000/svg"
            >
                <g transform="translate(-212.26 -35)">
                    <title>Varebil</title>
                    <ellipse cx="320.88" cy="186.54" rx="104.86" ry="2.28" />
                    <path
                        d="M263.79 170.17a15.88 15.88 0 1 1-31.76 0 15.88 15.88 0 0 1 31.76 0Zm145.92.11c0 8.77-6.48 15.98-15.25 15.98s-16.5-6.52-16.5-15.29c0-8.76 7.42-16.25 16.19-16.25 8.76 0 15.56 6.8 15.56 15.56ZM274.66 96.42c8.46-2.56 146.25-6.3 155.52-.68 9.29 5.64 3.55 62.39 3.55 62.39s1.09 2.04 1.78 2.71c0 0 1.5 10.33-1.5 13.88-3.08 3.62-18.67 2.66-18.67 2.66s.28-14.22-3.49-19.24c-4.32-5.75-11.47-9.26-18.64-8.76-6.9.48-14.47 5.6-18.05 11.84-2.91 5.07-.9 17.52-.9 17.52l-106.46.92s1.98-13.86-1.2-18.93c-3.82-6.06-10.39-10.63-17.78-11.16-7.53-.55-15.03 4.37-19.35 10.56-3.3 4.71-2.45 16.85-2.45 16.85s-8.31 1.46-11-1.05c-3.88-3.62-2.54-17.08-2.54-17.08.65-.7 2.53-1.99 2.53-1.99s-.95-17.8 2.48-20.71c8.19-6.94 29.84-11.85 29.84-11.85s13.02-23.86 26.33-27.88Zm-17 27.65s5.7-2.04 7.42.07c1.21 1.48.75 4.69.75 4.69l26.5-4.03c-.11-6.57 2.94-23.23 2.94-23.47 0-.23-13.46-1.2-20.67.8-8.83 2.44-16.94 21.94-16.94 21.94Z" />
                </g>
            </svg>
            <span class="caption" style="color: <?= $customVehicleTypeIconColor; ?>;">Varebil</span>
        </a>
        <span class="cvt-checkmark" style="display: none;" name="cvt-checkmark-6"></span>
    </div>

    <div class="car-icon-container" data-custom-vehicle-type="7" <?= $customVehicleTypeTruck ?>>
        <a href="/" id="cvt-truck">
            <svg style="fill: <?= $customVehicleTypeIconColor; ?>;"
                 viewBox="0 0 300 160"
                 class="car truck"
                 xmlns="http://www.w3.org/2000/svg"
            >
                <g transform="translate(-210.43 -35)">
                    <title>Lastbil</title>
                    <ellipse cx="359.64" cy="191.44" rx="142.08" ry="1.79" />
                    <path
                        d="M 234.16 60.38 C 234.4 59.54 234.65 59.06 234.97 58.82 C 235.25 58.52 235.64 58.48 236.03 58.42 C 236.38 58.35 236.88 58.33 237.43 58.09 C 238.067 57.738 238.596 57.22 238.96 56.59 C 247.81 44.76 272.73 39.37 296.37 37.99 C 319.99 36.61 342.3 39.25 345.92 43.49 L 345.8 154.08 L 375.14 154.28 L 375.43 153.75 C 376.13 152.4 376.83 150.33 381.24 146.44 C 385.63 142.47 392.73 138.46 403.57 138.21 C 418.97 137.85 426.91 148.47 429.9 151.79 L 430.67 152.64 L 431.4 151.76 C 434.16 148.5 440.34 138.77 459.7 138.41 C 476.27 138.09 485.32 151.09 487.45 153.81 L 487.79 154.24 C 487.79 154.24 504.12 152.18 506.29 153.96 C 507.22 155.02 507.54 179.52 506.49 180.96 C 505.446 181.934 484.874 180.972 484.622 180.96 C 486.673 172.226 484.734 163.032 479.33 155.87 C 474.39 149.44 467.16 145.37 459.92 145.27 C 452.62 145.16 444.92 148.75 439.62 154.93 C 434.36 161.16 431.5 170 434 180.51 L 427.68 180.66 C 429.46 172.208 427.649 163.396 422.68 156.33 C 418.07 149.87 411.28 145.59 404.2 145.33 C 396.83 145.06 388.87 148.68 383.3 154.93 C 377.8 161.23 374.68 170.17 377.15 180.68 L 274.55 181.01 C 277.3 168.97 274.95 159.95 270.17 153.84 C 265.386 148.002 258.295 144.541 250.75 144.36 C 243.28 144.12 235.16 147.65 229.64 153.89 C 224.19 160.19 221.33 169.21 224.52 180.06 C 224.04 180.14 216.19 181.42 213.52 179.02 C 209.725 175.395 212.244 155.64 212.32 155.002 L 212.33 154.99 C 213.02 154.29 214.61 153.95 215.79 153.59 L 216.55 153.35 L 216.49 152.55 C 216.03 147.01 213.12 115.99 217.56 106.65 C 220.63 100.18 225.94 94.73 227.11 93.47 L 227.31 93.25 L 227.37 92.97 C 227.87 90.22 231.59 69.59 234.16 60.37 Z M 484.622 180.96 C 484.622 180.963 484.621 180.967 484.62 180.97 L 484.62 180.96 C 484.62 180.96 484.621 180.96 484.622 180.96 Z M 212.32 155.002 L 212.28 155.05 L 212.07 155.25 L 212.32 155 C 212.32 155.001 212.32 155.002 212.32 155.002 Z M 238.79 65.26 L 238.57 65.99 C 237.56 69.39 233.43 82.57 232.11 96.17 L 232.01 97.27 L 265.11 97.14 L 265.17 96.22 C 265.52 91.49 267.07 70.46 264.17 67.09 C 262.95 66.01 243.65 65.39 239.56 65.29 Z M 289.76 67.71 C 288.77 65.85 271.66 66.71 271.66 66.71 C 270.34 67.85 270.06 97.35 270.06 97.35 C 271.37 99.24 293.14 74.04 289.76 67.71 Z M 479.59 170.75 C 479.59 181.978 470.488 191.08 459.26 191.08 C 448.032 191.08 438.93 181.978 438.93 170.75 C 438.93 159.522 448.032 150.42 459.26 150.42 C 470.488 150.42 479.59 159.522 479.59 170.75 Z M 422.9 170.75 C 422.9 181.978 413.798 191.08 402.57 191.08 C 391.342 191.08 382.24 181.978 382.24 170.75 C 382.24 159.522 391.342 150.42 402.57 150.42 C 413.798 150.42 422.9 159.522 422.9 170.75 Z M 270.07 170.75 C 270.07 181.978 260.968 191.08 249.74 191.08 C 238.512 191.08 229.41 181.978 229.41 170.75 C 229.41 159.522 238.512 150.42 249.74 150.42 C 260.968 150.42 270.07 159.522 270.07 170.75 Z" />
                </g>
            </svg>
            <span class="caption" style="color: <?= $customVehicleTypeIconColor; ?>;">Lastbil</span>
        </a>
        <span class="cvt-checkmark" style="display: none;" name="cvt-checkmark-7"></span>
    </div>

