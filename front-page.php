<?php get_header(); ?>
<main>
  <section class="p-mv">
    <div class="p-mv__row">
      <figure class="p-mv__img js-mv-img">
        <picture>
          <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/mv_1.webp" media="(min-width: 768px)" width="900" height="900" />
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/mv_1_sp.webp" alt="" width="355" height="227">
        </picture>
      </figure>
      <div class="p-mv__column">
        <figure class="p-mv__column-img js-mv-img">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/mv_2.webp" media="(min-width: 768px)" width="480" height="480" />
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/mv_2_sp.webp" alt="" width="480" height="480">
          </picture>
        </figure>
        <figure class="p-mv__column-img js-mv-img">
          <picture>
            <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/mv_3.webp" media="(min-width: 768px)" width="480" height="404" />
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/mv_3_sp.webp" alt="" width="480" height="404">
          </picture>
        </figure>
      </div>
    </div>
    <div class="l-inner">
      <div class="p-mv__titles">
        <h1 class="p-mv__title">
          <span class="p-mv__title-en js-en-title">The era <br class="u-mobile">of hire</span>
          <span class="p-mv__title-ja js-ja-title">ハイヤー時代、到来。</span>
          <span class="p-mv__title-en p-mv__title-en--last js-en-title">cars has <br class="u-mobile">arrived.</span>
        </h1>
      </div>
    </div>
    <div class="p-mv__ribbon u-desktop">

      <svg class="js-mv-ribbon" viewBox="0 0 1440 443" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_113_1530)">
          <g filter="url(#filter0_n_113_1530)">
            <path d="M2163.22 389.214C2151.72 388.979 2140.23 388.508 2128.75 387.802C2117.3 387.086 2105.87 386.135 2094.45 384.928C2083 383.722 2071.57 382.261 2060.16 380.534C2048.73 378.808 2037.32 376.817 2025.95 374.552C2014.59 372.286 2003.26 369.746 1991.99 366.911C1980.73 364.087 1969.52 360.978 1958.35 357.564C1947.22 354.161 1936.15 350.454 1925.14 346.442C1914.17 342.441 1903.24 338.125 1892.42 333.486C1881.61 328.857 1870.89 323.904 1860.27 318.627C1849.74 313.4 1839.32 307.849 1829.01 301.964C1818.63 296.03 1808.37 289.773 1798.25 283.162C1788.13 276.552 1778.14 269.588 1768.32 262.281C1758.47 254.955 1748.79 247.285 1739.29 239.262C1729.68 231.151 1720.27 222.677 1711.02 213.939C1701.69 205.151 1692.51 196.108 1683.4 186.938C1674.28 177.767 1665.23 168.479 1656.18 159.191C1647.14 149.913 1638.1 140.645 1628.98 131.494C1619.9 122.392 1610.73 113.418 1601.42 104.699C1592.11 95.9894 1582.66 87.5351 1572.98 79.4927C1563.32 71.46 1553.44 63.8099 1543.32 56.7287C1533.52 49.8828 1523.49 43.5666 1513.21 37.9074C1503.14 32.3562 1492.87 27.4229 1482.43 23.0976C1472.01 18.7821 1461.45 15.0748 1450.77 11.9657C1440.09 8.85662 1429.29 6.36543 1418.44 4.46271C1407.55 2.55999 1396.61 1.27516 1385.64 0.598418C1377.38 0.0786031 1369.12 -0.0979381 1360.87 0.0687952L1175.68 3.75654C1183.94 3.58981 1192.2 3.76635 1200.45 4.28617C1211.42 4.97271 1222.37 6.24773 1233.25 8.15045C1244.11 10.0532 1254.9 12.5444 1265.58 15.6534C1276.26 18.7625 1286.83 22.4699 1297.24 26.7853C1307.67 31.1106 1317.95 36.0439 1328.02 41.5952C1338.29 47.2543 1348.33 53.5705 1358.13 60.4164C1368.26 67.4977 1378.14 75.138 1387.8 83.1804C1397.46 91.2228 1406.93 99.6772 1416.23 108.387C1425.55 117.096 1434.71 126.08 1443.79 135.182C1452.91 144.332 1461.96 153.611 1471 162.879C1480.05 172.167 1489.09 181.455 1498.21 190.625C1507.32 199.796 1516.5 208.838 1525.83 217.626C1535.1 226.355 1544.5 234.839 1554.1 242.95C1563.6 250.973 1573.28 258.643 1583.13 265.969C1592.95 273.276 1602.94 280.24 1613.06 286.85C1623.19 293.451 1633.45 299.718 1643.83 305.652C1654.13 311.536 1664.55 317.088 1675.08 322.315C1685.7 327.592 1696.43 332.545 1707.23 337.174C1718.06 341.803 1728.97 346.129 1739.95 350.13C1750.96 354.151 1762.04 357.849 1773.17 361.252C1784.32 364.665 1795.53 367.784 1806.8 370.599C1818.08 373.434 1829.41 375.974 1840.76 378.239C1852.13 380.505 1863.54 382.496 1874.97 384.222C1886.37 385.948 1897.81 387.4 1909.27 388.616C1920.69 389.822 1932.12 390.774 1943.56 391.49C1955.04 392.196 1966.54 392.667 1978.03 392.902C1989.86 393.147 2001.7 393.128 2013.52 392.902L2198.71 389.214C2186.88 389.45 2175.05 389.469 2163.22 389.214Z" fill="url(#paint0_linear_113_1530)" />
          </g>
          <g filter="url(#filter1_n_113_1530)">
            <path d="M687.918 438.338C676.747 438.034 665.576 437.171 654.456 435.788C643.285 434.415 632.165 432.522 621.105 430.149C609.968 427.766 598.891 424.892 587.909 421.557C576.892 418.223 565.962 414.417 555.134 410.19C544.298 405.953 533.573 401.284 522.978 396.214C512.425 391.163 501.993 385.71 491.698 379.864C481.429 374.028 471.297 367.81 461.32 361.219C451.034 354.413 440.911 347.253 430.917 339.779C420.871 332.267 410.972 324.44 401.21 316.329C391.456 308.228 381.858 299.842 372.388 291.221C362.935 282.619 353.637 273.773 344.451 264.72C335.23 255.628 326.147 246.311 317.175 236.836C308.187 227.333 299.31 217.642 290.545 207.815C281.762 197.968 273.083 187.964 264.498 177.852C255.931 167.76 247.458 157.55 239.062 147.252C230.615 136.885 222.245 126.43 213.918 115.886C205.599 105.362 197.341 94.7503 189.109 84.099C180.893 73.4574 172.704 62.7669 164.549 52.0567C156.411 41.3564 148.29 30.6462 140.17 19.9263L-45 23.6336C-36.8793 34.3438 -28.7672 45.0638 -20.6207 55.7641C-12.4656 66.4743 -4.2847 77.1648 3.93914 87.8063C12.163 98.4576 20.4212 109.06 28.7481 119.594C37.0665 130.127 45.445 140.592 53.8923 150.959C62.2966 161.257 70.761 171.477 79.3286 181.559C87.9134 191.671 96.5927 201.675 105.375 211.522C114.14 221.35 123.009 231.03 132.006 240.544C140.977 250.028 150.061 259.336 159.281 268.427C168.459 277.48 177.765 286.327 187.218 294.928C196.679 303.549 206.287 311.935 216.04 320.036C225.794 328.138 235.693 335.964 245.747 343.487C255.742 350.96 265.865 358.12 276.151 364.927C286.119 371.518 296.259 377.736 306.528 383.571C316.814 389.417 327.255 394.86 337.808 399.921C348.412 405.002 359.137 409.67 369.964 413.897C380.792 418.134 391.723 421.93 402.739 425.265C413.73 428.599 424.799 431.473 435.936 433.856C446.995 436.23 458.115 438.123 469.286 439.496C480.415 440.869 491.577 441.732 502.749 442.046C505.421 442.124 508.085 442.164 510.758 442.173C513.43 442.183 516.094 442.173 518.767 442.114L703.954 438.427C698.617 438.535 693.281 438.505 687.944 438.358L687.918 438.338Z" fill="url(#paint1_linear_113_1530)" />
          </g>
          <g filter="url(#filter2_n_113_1530)">
            <path d="M1171.12 3.83492C1167.82 3.90358 1164.52 4.02127 1161.23 4.19781C1150.28 4.77647 1139.35 5.95341 1128.48 7.72863C1117.64 9.49404 1106.85 11.8479 1096.18 14.8001C1085.54 17.7326 1075.01 21.2634 1064.62 25.3827C1054.18 29.5216 1043.9 34.249 1033.81 39.5747C1023.75 44.8905 1013.87 50.7654 1004.25 57.2484C1001.88 58.8471 999.524 60.4752 997.178 62.1425C996.387 62.7114 995.605 63.2998 994.806 63.8687C993.268 64.9868 991.721 66.0951 990.191 67.2426C990.131 67.2916 990.071 67.3308 990.002 67.3799C988.559 68.4588 987.141 69.5769 985.714 70.6851C984.975 71.254 984.236 71.813 983.506 72.3917C981.289 74.1375 979.089 75.9127 976.897 77.7174C968.356 84.7594 960.037 92.2133 951.917 100.001C943.762 107.818 935.813 115.958 928.027 124.344C920.199 132.769 912.542 141.458 905.014 150.315C897.495 159.171 890.105 168.185 882.792 177.326C875.427 186.525 868.149 195.833 860.904 205.18C853.643 214.537 846.425 223.933 839.198 233.328C832.005 242.656 824.804 251.973 817.534 261.202C810.255 270.451 802.917 279.612 795.466 288.635C788.05 297.609 780.522 306.436 772.831 315.057C765.226 323.58 757.466 331.897 749.517 339.91C741.543 347.953 733.379 355.691 724.992 363.047C723.016 364.773 721.03 366.48 719.028 368.167C718.384 368.716 717.731 369.246 717.078 369.785C715.72 370.923 714.353 372.051 712.987 373.159C712.205 373.787 711.423 374.404 710.641 375.032C709.378 376.033 708.123 377.033 706.851 378.023C706.026 378.671 705.193 379.299 704.359 379.936C702.649 381.24 700.931 382.545 699.203 383.81C690.077 390.509 680.719 396.688 671.129 402.268C661.057 408.124 650.728 413.312 640.219 417.843C629.803 422.345 619.199 426.18 608.475 429.387C597.785 432.585 586.974 435.154 576.095 437.106C565.156 439.068 554.139 440.411 543.105 441.186C537.734 441.559 532.355 441.804 526.967 441.912L712.154 438.224C717.533 438.116 722.912 437.881 728.292 437.498C739.326 436.723 750.342 435.38 761.282 433.418C772.161 431.466 782.963 428.897 793.662 425.699C804.377 422.492 814.982 418.657 825.405 414.156C835.915 409.624 846.236 404.446 856.316 398.581C865.906 393 875.264 386.821 884.39 380.122C885.473 379.328 886.547 378.524 887.63 377.719C888.274 377.239 888.91 376.739 889.546 376.248C890.38 375.611 891.213 374.973 892.038 374.336C893.31 373.355 894.573 372.355 895.828 371.344C896.61 370.717 897.392 370.099 898.174 369.471C899.549 368.363 900.907 367.235 902.264 366.097C902.917 365.558 903.57 365.018 904.215 364.479C906.217 362.792 908.202 361.085 910.179 359.359C918.566 352.003 926.73 344.265 934.704 336.223C942.662 328.21 950.421 319.883 958.018 311.369C965.7 302.748 973.228 293.921 980.653 284.947C988.103 275.924 995.451 266.763 1002.72 257.515C1009.99 248.285 1017.19 238.968 1024.38 229.641C1031.62 220.255 1038.83 210.859 1046.09 201.492C1053.34 192.136 1060.62 182.828 1067.98 173.638C1075.29 164.507 1082.68 155.484 1090.2 146.627C1097.73 137.771 1105.39 129.081 1113.21 120.656C1121 112.261 1128.95 104.12 1137.1 96.313C1145.22 88.5256 1153.54 81.0618 1162.08 74.0296C1164.27 72.225 1166.48 70.4498 1168.69 68.704C1169.42 68.1351 1170.15 67.576 1170.88 67.017C1172.38 65.8597 1173.87 64.6925 1175.38 63.5646C1176.91 62.4171 1178.45 61.3088 1179.99 60.1908C1180.78 59.6219 1181.57 59.0236 1182.36 58.4646C1184.7 56.7972 1187.07 55.1691 1189.44 53.5705C1199.06 47.0973 1208.94 41.2126 1219 35.8967C1229.08 30.5711 1239.36 25.8437 1249.81 21.7048C1260.19 17.5855 1270.73 14.0547 1281.37 11.1221C1292.04 8.16999 1302.83 5.82591 1313.66 4.05069C1324.53 2.27548 1335.46 1.09853 1346.42 0.519872C1349.71 0.343331 1353.01 0.225637 1356.3 0.156982L1171.12 3.84473V3.83492Z" fill="#044396" />
          </g>
        </g>
        <defs>
          <filter id="filter0_n_113_1530" x="1175.68" y="0.00805664" width="1023.03" height="393.071" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix" />
            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
            <feTurbulence type="fractalNoise" baseFrequency="1 1" stitchTiles="stitch" numOctaves="3" result="noise" seed="5530" />
            <feColorMatrix in="noise" type="luminanceToAlpha" result="alphaNoise" />
            <feComponentTransfer in="alphaNoise" result="coloredNoise1">
              <feFuncA type="discrete" tableValues="1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 " />
            </feComponentTransfer>
            <feComposite operator="in" in2="shape" in="coloredNoise1" result="noise1Clipped" />
            <feFlood flood-color="rgba(0, 0, 0, 0.15)" result="color1Flood" />
            <feComposite operator="in" in2="noise1Clipped" in="color1Flood" result="color1" />
            <feMerge result="effect1_noise_113_1530">
              <feMergeNode in="shape" />
              <feMergeNode in="color1" />
            </feMerge>
          </filter>
          <filter id="filter1_n_113_1530" x="-45" y="19.9263" width="748.954" height="422.25" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix" />
            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
            <feTurbulence type="fractalNoise" baseFrequency="1 1" stitchTiles="stitch" numOctaves="3" result="noise" seed="5530" />
            <feColorMatrix in="noise" type="luminanceToAlpha" result="alphaNoise" />
            <feComponentTransfer in="alphaNoise" result="coloredNoise1">
              <feFuncA type="discrete" tableValues="1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 " />
            </feComponentTransfer>
            <feComposite operator="in" in2="shape" in="coloredNoise1" result="noise1Clipped" />
            <feFlood flood-color="rgba(0, 0, 0, 0.15)" result="color1Flood" />
            <feComposite operator="in" in2="noise1Clipped" in="color1Flood" result="color1" />
            <feMerge result="effect1_noise_113_1530">
              <feMergeNode in="shape" />
              <feMergeNode in="color1" />
            </feMerge>
          </filter>
          <filter id="filter2_n_113_1530" x="526.967" y="0.156982" width="829.336" height="441.755" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix" />
            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
            <feTurbulence type="fractalNoise" baseFrequency="1 1" stitchTiles="stitch" numOctaves="3" result="noise" seed="5530" />
            <feColorMatrix in="noise" type="luminanceToAlpha" result="alphaNoise" />
            <feComponentTransfer in="alphaNoise" result="coloredNoise1">
              <feFuncA type="discrete" tableValues="1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 " />
            </feComponentTransfer>
            <feComposite operator="in" in2="shape" in="coloredNoise1" result="noise1Clipped" />
            <feFlood flood-color="rgba(0, 0, 0, 0.1)" result="color1Flood" />
            <feComposite operator="in" in2="noise1Clipped" in="color1Flood" result="color1" />
            <feMerge result="effect1_noise_113_1530">
              <feMergeNode in="shape" />
              <feMergeNode in="color1" />
            </feMerge>
          </filter>
          <linearGradient id="paint0_linear_113_1530" x1="1825.5" y1="215.5" x2="1428.57" y2="71.5497" gradientUnits="userSpaceOnUse">
            <stop stop-color="white" stop-opacity="0" />
            <stop offset="1" stop-color="#D2D7DD" />
          </linearGradient>
          <linearGradient id="paint1_linear_113_1530" x1="142" y1="205.313" x2="486.496" y2="437.69" gradientUnits="userSpaceOnUse">
            <stop stop-color="white" stop-opacity="0" />
            <stop offset="1" stop-color="#D2D7DD" />
          </linearGradient>
          <clipPath id="clip0_113_1530">
            <rect width="2244" height="443" fill="white" transform="translate(-45)" />
          </clipPath>
        </defs>
      </svg>
    </div>
    <div class="p-mv__ribbon u-mobile">

      <svg class="js-mv-ribbon" viewBox="0 0 375 128" fill="none" xmlns="http://www.w3.org/2000/svg">
        <mask id="mask0_310_1471" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="375" height="128">
          <rect width="375" height="128" fill="#D9D9D9" />
        </mask>
        <g mask="url(#mask0_310_1471)">
          <g filter="url(#filter0_n_310_1471)">
            <path d="M509.907 111.821C506.663 111.755 503.422 111.622 500.184 111.423C496.955 111.221 493.731 110.952 490.509 110.612C487.278 110.272 484.054 109.859 480.835 109.372C477.611 108.885 474.392 108.323 471.185 107.684C467.98 107.045 464.785 106.328 461.605 105.528C458.429 104.731 455.266 103.854 452.117 102.891C448.978 101.93 445.853 100.884 442.748 99.7525C439.652 98.6234 436.571 97.4057 433.517 96.0967C430.47 94.7904 427.445 93.3929 424.449 91.904C421.479 90.4289 418.539 88.8626 415.632 87.2021C412.704 85.5278 409.81 83.7622 406.954 81.8969C404.099 80.0316 401.282 78.0667 398.511 76.005C395.733 73.9377 393.001 71.7736 390.323 69.5098C387.613 67.2211 384.958 64.83 382.348 62.3642C379.715 59.8846 377.126 57.333 374.557 54.7455C371.985 52.1579 369.432 49.5371 366.88 46.9163C364.33 44.2983 361.779 41.6831 359.205 39.1011C356.643 36.5329 354.059 34.0007 351.431 31.5404C348.806 29.0829 346.139 26.6974 343.41 24.4281C340.683 22.1615 337.898 20.0029 335.042 18.0048C332.279 16.0731 329.447 14.2909 326.548 12.6941C323.707 11.1277 320.81 9.73567 317.865 8.51523C314.927 7.29755 311.948 6.25146 308.935 5.37418C305.922 4.49689 302.877 3.79396 299.816 3.25708C296.744 2.72019 293.656 2.35766 290.563 2.1667C288.233 2.02003 285.904 1.97021 283.574 2.01726L231.336 3.05782C233.665 3.01077 235.997 3.06059 238.324 3.20726C241.418 3.40098 244.506 3.76075 247.577 4.29764C250.639 4.83452 253.683 5.53745 256.696 6.41474C259.707 7.29202 262.689 8.33811 265.627 9.55579C268.569 10.7762 271.469 12.1683 274.31 13.7346C277.206 15.3315 280.038 17.1137 282.804 19.0454C285.659 21.0435 288.447 23.1993 291.171 25.4686C293.899 27.7379 296.567 30.1235 299.193 32.581C301.82 35.0385 304.404 37.5734 306.967 40.1416C309.539 42.7237 312.091 45.3417 314.641 47.9569C317.194 50.5777 319.744 53.1985 322.318 55.786C324.888 58.3736 327.477 60.9252 330.109 63.4048C332.722 65.8678 335.374 68.2617 338.084 70.5504C340.763 72.8141 343.495 74.9783 346.273 77.0456C349.043 79.1073 351.86 81.0722 354.716 82.9375C357.571 84.7999 360.466 86.5684 363.394 88.2427C366.3 89.9031 369.241 91.4695 372.21 92.9445C375.206 94.4334 378.232 95.831 381.279 97.1372C384.333 98.4435 387.411 99.6639 390.509 100.793C393.615 101.928 396.739 102.971 399.878 103.931C403.025 104.894 406.188 105.774 409.366 106.569C412.549 107.368 415.744 108.085 418.946 108.725C422.153 109.364 425.372 109.926 428.596 110.413C431.813 110.9 435.039 111.309 438.271 111.653C441.492 111.993 444.716 112.261 447.945 112.463C451.184 112.663 454.427 112.795 457.668 112.862C461.006 112.931 464.344 112.926 467.679 112.862L519.918 111.821C516.582 111.888 513.244 111.893 509.907 111.821Z" fill="url(#paint0_linear_310_1471)" />
          </g>
          <g filter="url(#filter1_n_310_1471)">
            <path d="M93.7457 125.682C90.5944 125.597 87.4431 125.353 84.3064 124.963C81.1551 124.576 78.0184 124.041 74.8986 123.372C71.757 122.699 68.6324 121.888 65.5345 120.947C62.4268 120.006 59.3434 118.933 56.2891 117.74C53.2324 116.544 50.2071 115.227 47.2183 113.796C44.2415 112.371 41.2987 110.832 38.3947 109.183C35.4979 107.536 32.64 105.782 29.8256 103.922C26.924 102.001 24.0685 99.9812 21.2493 97.8724C18.4156 95.7525 15.6231 93.5441 12.8693 91.2554C10.118 88.9695 7.41035 86.6034 4.73904 84.1708C2.07257 81.7437 -0.550262 79.2475 -3.14158 76.6931C-5.7426 74.1277 -8.30483 71.4986 -10.8356 68.8253C-13.3711 66.1436 -15.8752 63.4094 -18.3477 60.6364C-20.8251 57.8579 -23.2734 55.0351 -25.695 52.1818C-28.1118 49.3341 -30.502 46.4532 -32.8703 43.5474C-35.2531 40.6222 -37.6142 37.6721 -39.9631 34.6971C-42.3096 31.7276 -44.6391 28.7332 -46.9613 25.7278C-49.2787 22.7251 -51.5889 19.7086 -53.8893 16.6865C-56.1849 13.6672 -58.4756 10.6452 -60.7663 7.62036L-113 8.66646C-110.709 11.6885 -108.421 14.7133 -106.123 17.7326C-103.823 20.7547 -101.515 23.7712 -99.195 26.7739C-96.8752 29.7793 -94.5456 32.7709 -92.1967 35.7432C-89.8502 38.7154 -87.4868 41.6683 -85.1039 44.5935C-82.7332 47.4993 -80.3455 50.383 -77.9287 53.2279C-75.5071 56.0812 -73.0588 58.904 -70.5814 61.6825C-68.1088 64.4555 -65.6072 67.1869 -63.0692 69.8714C-60.5385 72.5475 -57.9763 75.1738 -55.3752 77.7392C-52.7863 80.2936 -50.1611 82.7898 -47.4946 85.2169C-44.8257 87.6494 -42.1156 90.0156 -39.3643 92.3015C-36.613 94.5874 -33.8205 96.7959 -30.9843 98.9185C-28.1652 101.027 -25.3096 103.048 -22.408 104.968C-19.5961 106.828 -16.7357 108.582 -13.839 110.229C-10.9374 111.878 -7.99213 113.414 -5.01538 114.842C-2.02409 116.276 1.00114 117.593 4.05546 118.786C7.10977 119.982 10.1932 121.053 13.3008 121.993C16.4012 122.934 19.5234 123.745 22.665 124.418C25.7847 125.087 28.9215 125.622 32.0727 126.009C35.2119 126.396 38.3607 126.64 41.512 126.729C42.2659 126.751 43.0174 126.762 43.7713 126.765C44.5251 126.767 45.2766 126.765 46.0305 126.748L98.269 125.707C96.7636 125.738 95.2583 125.73 93.753 125.688L93.7457 125.682Z" fill="url(#paint1_linear_310_1471)" />
          </g>
          <g filter="url(#filter2_n_310_1471)">
            <path d="M230.049 3.07991C229.118 3.09928 228.189 3.13249 227.261 3.1823C224.17 3.34558 221.087 3.67768 218.02 4.17858C214.964 4.67673 211.922 5.34091 208.911 6.17391C205.91 7.00138 202.938 7.99766 200.007 9.15999C197.062 10.3279 194.163 11.6618 191.317 13.1645C188.478 14.6644 185.693 16.3221 182.978 18.1514C182.309 18.6025 181.645 19.0619 180.983 19.5324C180.76 19.6929 180.54 19.8589 180.314 20.0195C179.88 20.3349 179.444 20.6477 179.013 20.9715C178.996 20.9853 178.979 20.9964 178.959 21.0102C178.552 21.3146 178.152 21.6301 177.75 21.9428C177.541 22.1033 177.333 22.2611 177.127 22.4244C176.501 22.917 175.881 23.4179 175.262 23.9271C172.853 25.9141 170.506 28.0174 168.216 30.2147C165.915 32.4204 163.673 34.7174 161.477 37.0835C159.269 39.4608 157.109 41.9127 154.985 44.4117C152.864 46.9108 150.779 49.454 148.717 52.0333C146.639 54.6292 144.586 57.2555 142.542 59.8929C140.494 62.533 138.458 65.1842 136.419 67.8354C134.39 70.4673 132.359 73.0964 130.308 75.7005C128.255 78.3102 126.185 80.895 124.083 83.4411C121.991 85.9733 119.868 88.464 117.698 90.8966C115.553 93.3015 113.364 95.6483 111.122 97.9093C108.872 100.179 106.569 102.362 104.204 104.438C103.646 104.925 103.086 105.406 102.521 105.882C102.339 106.037 102.155 106.187 101.971 106.339C101.588 106.66 101.203 106.978 100.817 107.291C100.597 107.468 100.376 107.642 100.155 107.82C99.799 108.102 99.4451 108.384 99.0864 108.664C98.8537 108.846 98.6185 109.023 98.3834 109.203C97.901 109.571 97.4162 109.939 96.929 110.296C94.3546 112.187 91.7148 113.93 89.0096 115.505C86.1686 117.157 83.2548 118.621 80.2902 119.899C77.3522 121.17 74.361 122.252 71.3357 123.157C68.3202 124.059 65.2707 124.784 62.2019 125.335C59.116 125.888 56.0084 126.267 52.8959 126.486C51.3809 126.591 49.8634 126.66 48.3435 126.691L100.582 125.65C102.099 125.62 103.617 125.553 105.134 125.445C108.247 125.227 111.355 124.848 114.44 124.294C117.509 123.743 120.556 123.018 123.574 122.116C126.597 121.211 129.588 120.129 132.529 118.859C135.493 117.58 138.405 116.119 141.248 114.464C143.953 112.889 146.593 111.146 149.167 109.256C149.473 109.032 149.776 108.805 150.081 108.578C150.263 108.442 150.443 108.301 150.622 108.163C150.857 107.983 151.092 107.803 151.325 107.623C151.684 107.346 152.04 107.064 152.394 106.779C152.614 106.602 152.835 106.427 153.056 106.25C153.443 105.938 153.826 105.619 154.21 105.298C154.394 105.146 154.578 104.994 154.76 104.842C155.325 104.366 155.885 103.884 156.442 103.397C158.808 101.322 161.111 99.138 163.36 96.8687C165.605 94.6077 167.794 92.2582 169.937 89.856C172.104 87.4234 174.227 84.9327 176.322 82.4005C178.423 79.8545 180.496 77.2697 182.547 74.66C184.598 72.0558 186.629 69.4267 188.658 66.7949C190.699 64.1464 192.733 61.4952 194.781 58.8523C196.824 56.2122 198.88 53.5858 200.955 50.9927C203.018 48.4162 205.103 45.8702 207.224 43.3712C209.347 40.8722 211.507 38.4202 213.715 36.043C215.912 33.674 218.154 31.3771 220.454 29.1742C222.745 26.9768 225.091 24.8708 227.501 22.8865C228.117 22.3773 228.74 21.8764 229.365 21.3838C229.571 21.2233 229.777 21.0656 229.983 20.9078C230.405 20.5813 230.824 20.2519 231.251 19.9337C231.682 19.6099 232.116 19.2972 232.553 18.9817C232.776 18.8212 232.996 18.6523 233.222 18.4946C233.881 18.0241 234.548 17.5647 235.217 17.1136C237.932 15.2871 240.717 13.6267 243.556 12.1267C246.399 10.624 249.301 9.29006 252.246 8.1222C255.174 6.95987 258.148 5.96359 261.149 5.13612C264.16 4.30312 267.202 3.6417 270.259 3.14079C273.325 2.63988 276.409 2.30779 279.499 2.14451C280.428 2.0947 281.359 2.06149 282.287 2.04211L230.049 3.08267V3.07991Z" fill="#044396" />
          </g>
        </g>
        <defs>
          <filter id="filter0_n_310_1471" x="231.336" y="2.00012" width="288.582" height="110.912" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix" />
            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
            <feTurbulence type="fractalNoise" baseFrequency="1 1" stitchTiles="stitch" numOctaves="3" result="noise" seed="5530" />
            <feColorMatrix in="noise" type="luminanceToAlpha" result="alphaNoise" />
            <feComponentTransfer in="alphaNoise" result="coloredNoise1">
              <feFuncA type="discrete" tableValues="1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 " />
            </feComponentTransfer>
            <feComposite operator="in" in2="shape" in="coloredNoise1" result="noise1Clipped" />
            <feFlood flood-color="rgba(0, 0, 0, 0.15)" result="color1Flood" />
            <feComposite operator="in" in2="noise1Clipped" in="color1Flood" result="color1" />
            <feMerge result="effect1_noise_310_1471">
              <feMergeNode in="shape" />
              <feMergeNode in="color1" />
            </feMerge>
          </filter>
          <filter id="filter1_n_310_1471" x="-113" y="7.62036" width="211.269" height="119.145" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix" />
            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
            <feTurbulence type="fractalNoise" baseFrequency="1 1" stitchTiles="stitch" numOctaves="3" result="noise" seed="5530" />
            <feColorMatrix in="noise" type="luminanceToAlpha" result="alphaNoise" />
            <feComponentTransfer in="alphaNoise" result="coloredNoise1">
              <feFuncA type="discrete" tableValues="1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 " />
            </feComponentTransfer>
            <feComposite operator="in" in2="shape" in="coloredNoise1" result="noise1Clipped" />
            <feFlood flood-color="rgba(0, 0, 0, 0.15)" result="color1Flood" />
            <feComposite operator="in" in2="noise1Clipped" in="color1Flood" result="color1" />
            <feMerge result="effect1_noise_310_1471">
              <feMergeNode in="shape" />
              <feMergeNode in="color1" />
            </feMerge>
          </filter>
          <filter id="filter2_n_310_1471" x="48.3435" y="2.04211" width="233.944" height="124.649" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix" />
            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
            <feTurbulence type="fractalNoise" baseFrequency="1 1" stitchTiles="stitch" numOctaves="3" result="noise" seed="5530" />
            <feColorMatrix in="noise" type="luminanceToAlpha" result="alphaNoise" />
            <feComponentTransfer in="alphaNoise" result="coloredNoise1">
              <feFuncA type="discrete" tableValues="1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 " />
            </feComponentTransfer>
            <feComposite operator="in" in2="shape" in="coloredNoise1" result="noise1Clipped" />
            <feFlood flood-color="rgba(0, 0, 0, 0.1)" result="color1Flood" />
            <feComposite operator="in" in2="noise1Clipped" in="color1Flood" result="color1" />
            <feMerge result="effect1_noise_310_1471">
              <feMergeNode in="shape" />
              <feMergeNode in="color1" />
            </feMerge>
          </filter>
          <linearGradient id="paint0_linear_310_1471" x1="414.641" y1="62.8049" x2="302.666" y2="22.2075" gradientUnits="userSpaceOnUse">
            <stop stop-color="white" stop-opacity="0" />
            <stop offset="1" stop-color="#D2D7DD" />
          </linearGradient>
          <linearGradient id="paint1_linear_310_1471" x1="-60.25" y1="59.9304" x2="36.9448" y2="125.474" gradientUnits="userSpaceOnUse">
            <stop stop-color="white" stop-opacity="0" />
            <stop offset="1" stop-color="#D2D7DD" />
          </linearGradient>
        </defs>
      </svg>

    </div>
  </section>

  <section class="p-front-news">
    <div class="l-inner p-front-news__inner">
      <div class="p-front-news__head">
        <div class="p-front-news__title">
          <p class="p-front-news__title-ja js-opacity-word">お知らせ</p>
          <p class="p-front-news__title-en js-clip-path-from-bottom">News</p>
        </div>
        <div class="p-front-news__more-pc js-opacity-word">
          <a class="c-btn c-btn--primary" href="<?php echo esc_url(home_url('/news')); ?>">
            <span class="c-btn__text">一覧を見る</span>
            <span class="c-btn__divider" aria-hidden="true"></span>
            <span class="c-btn__icon" aria-hidden="true">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.5 5L12.1 6.4L16.7 11H5V13H16.7L12.1 17.6L13.5 19L20.5 12L13.5 5Z" fill="currentColor" />
              </svg>
            </span>
          </a>
        </div>

      </div>

      <div class="p-front-news__list">
        <a class="p-front-news__item js-opacity-word" href="#">
          <div class="p-front-news__meta">
            <time class="p-front-news__date" datetime="2026-02-01">2026.02.01</time>
            <span class="p-front-news__category">TOPICS</span>
          </div>
          <div class="p-front-news__body">
            <p class="p-front-news__text">3月会社説明会のお知らせ</p>
            <span class="p-front-news__item-icon" aria-hidden="true">
              <svg viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="28" height="28" rx="3" fill="#044396" />
                <path d="M17.0847 14.5H9V13.5H17.0847L13.2872 9.7025L14 9L19 14L14 19L13.2872 18.2975L17.0847 14.5Z" fill="white" />
              </svg>

            </span>
          </div>
        </a>

        <a class="p-front-news__item js-opacity-word" href="#">
          <div class="p-front-news__meta">
            <time class="p-front-news__date" datetime="2026-02-01">2026.02.01</time>
            <span class="p-front-news__category">TOPICS</span>
          </div>
          <div class="p-front-news__body">
            <p class="p-front-news__text">
              親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。
            </p>
            <span class="p-front-news__item-icon" aria-hidden="true">
              <svg viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="28" height="28" rx="3" fill="#044396" />
                <path d="M17.0847 14.5H9V13.5H17.0847L13.2872 9.7025L14 9L19 14L14 19L13.2872 18.2975L17.0847 14.5Z" fill="white" />
              </svg>
            </span>
          </div>
        </a>

        <a class="p-front-news__item js-opacity-word" href="#">
          <div class="p-front-news__meta">
            <time class="p-front-news__date" datetime="2026-02-01">2026.02.01</time>
            <span class="p-front-news__category">TOPICS</span>
          </div>
          <div class="p-front-news__body">
            <p class="p-front-news__text">親譲りの無鉄砲で小供の時から損ばかりしている。</p>
            <span class="p-front-news__item-icon" aria-hidden="true">
              <svg viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="28" height="28" rx="3" fill="#044396" />
                <path d="M17.0847 14.5H9V13.5H17.0847L13.2872 9.7025L14 9L19 14L14 19L13.2872 18.2975L17.0847 14.5Z" fill="white" />
              </svg>
            </span>
          </div>
        </a>
      </div>
      <div class="p-front-news__more-sp js-opacity-word">

        <a class="c-btn c-btn--primary" href="<?php echo esc_url(home_url('/blog-all')); ?>">
          <span class="c-btn__text">一覧を見る</span>
          <span class="c-btn__divider" aria-hidden="true"></span>
          <span class="c-btn__icon" aria-hidden="true">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M13.5 5L12.1 6.4L16.7 11H5V13H16.7L12.1 17.6L13.5 19L20.5 12L13.5 5Z" fill="currentColor" />
            </svg>
          </span>
        </a>
      </div>
    </div>
  </section>
  <section class="p-pro">
    <div class="l-inner">
      <div class="p-pro__content">
        <div class="p-pro__left">
          <div class="p-pro__catch">
            <div class="p-pro__catch-group">
              <p class="p-pro__catch-line js-pro-word">ハイヤー時代、到来。</p>
              <p class="p-pro__catch-line js-pro-word">移動は「量」から「質」へ。</p>
            </div>
            <div class="p-pro__catch-group">
              <p class="p-pro__catch-line js-pro-word">今、選ばれるのは</p>
              <p class="p-pro__catch-line js-pro-word">プロフェッショナルドライバー。</p>
            </div>
          </div>
          <div class="p-pro__texts">
            <p class="p-pro__text js-opacity-word">
              今、「タクシー」ではなく「ハイヤー」が選ばれています。<br class="u-desktop">
              それは、単に移動するのではなく、接客力と判断力を備えたプロフェッショナルドライバーが、<br>
              移動そのものの価値を提供する仕事だからです。
            </p>
            <p class="p-pro__text js-opacity-word">
              株式会社Zは、2021年に銀座でハイヤー事業をスタート。<br class="u-desktop">
              以降、圧倒的なスピードで成長を続け、アルファードの保有台数は都内最大級クラス、<br class="u-desktop">
              拠点は都内9か所まで拡大してきました。<br class="u-desktop">
              インバウンド需要が高まる中、ハイヤー業界でも高水準の収入実績を重ねています。
            </p>
            <p class="p-pro__text js-opacity-word">
              Zの強みは、質の高い需要に集中できる環境です。<br class="u-desktop">
              世界中で利用されている配車アプリ Uber と連携し、<br class="u-desktop">
              観光・ビジネス利用を中心とした完全予約制のUber Premium専属運行。<br class="u-desktop">
              流し営業はなく、行き先案内・決済・翻訳までアプリがサポートするため、<br class="u-desktop">
              ドライバーは「運転と接客」に集中できます。<br class="u-desktop">
              その結果、平均売上・歩合率ともに高水準を実現。<br class="u-desktop">
              努力がそのまま収入に反映されやすく、高年収を目指す方に適した環境です。
            </p>
          </div>
        </div>
        <div class="p-pro__right js-pro-img">
          <figure class="p-pro__img">
            <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/pro_z.png" alt="" width="700" height="683">
          </figure>
        </div>

      </div>
      <div class="p-pro__slider js-opacity-word">
        <div class="swiper p-pro__swiper js-pro-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide p-pro__slide">
              <div class="p-pro__card">
                <figure class="p-pro__card-icon">
                  <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/pro/tokutyo-01.svg" alt="" width="64" height="64">
                </figure>
                <p class="p-pro__card-text">未経験から<br>ハイヤー<br>ドライバーへ</p>
              </div>
            </div>

            <div class="swiper-slide p-pro__slide">
              <div class="p-pro__card">
                <figure class="p-pro__card-icon">
                  <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/pro/tokutyo-02.svg" alt="" width="64" height="64">
                </figure>
                <p class="p-pro__card-text">同乗講習など段階的な<br>研修で、未経験でも<br>安心してスタート</p>
              </div>
            </div>

            <div class="swiper-slide p-pro__slide">
              <div class="p-pro__card">
                <figure class="p-pro__card-icon">
                  <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/pro/tokutyo-03.svg" alt="" width="64" height="64">
                </figure>
                <p class="p-pro__card-text">平均年収<br>約700万円<br><span>※乗務実績・勤務形態に<br class="u-mobile">より変動</span></p>
              </div>
            </div>

            <div class="swiper-slide p-pro__slide">
              <div class="p-pro__card">
                <figure class="p-pro__card-icon">
                  <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/pro/tokutyo-04.svg" alt="" width="64" height="64">
                </figure>
                <p class="p-pro__card-text">月12日前後の乗務で、<br>仕事と私生活の<br>バランスも確保</p>
              </div>
            </div>

            <div class="swiper-slide p-pro__slide">
              <div class="p-pro__card">
                <figure class="p-pro__card-icon">
                  <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/pro/tokutyo-05.svg" alt="" width="64" height="64">
                </figure>
                <p class="p-pro__card-text">最初から<br>高級車両に<br>乗務</p>
              </div>
            </div>

            <div class="swiper-slide p-pro__slide">
              <div class="p-pro__card">
                <figure class="p-pro__card-icon">
                  <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/pro/tokutyo-06.svg" alt="" width="64" height="64">
                </figure>
                <p class="p-pro__card-text">完全予約制・<br>キャッシュレス決済・<br>多言語対応</p>
              </div>
            </div>

            <div class="swiper-slide p-pro__slide">
              <div class="p-pro__card">
                <figure class="p-pro__card-icon">
                  <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/pro/tokutyo-07.svg" alt="" width="64" height="64">
                </figure>
                <p class="p-pro__card-text">無駄な待機や<br>ストレスを減らした<br>運行環境</p>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>
  <section class="p-king">
    <div class="l-inner">
      <div class="p-king__content">
        <p class="p-king__title js-opacity-word">
          業界No.1<br>
          3冠獲得。
        </p>

        <div class="p-king__cards">
          <div class="p-king__card js-opacity-word">
            <div class="p-king__card-inner">
              <p class="p-king__card-label">
                アルファード<br>
                保有台数業界
              </p>
              <p class="p-king__card-value">No.1</p>
            </div>
          </div>

          <div class="p-king__card js-opacity-word">
            <div class="p-king__card-inner">
              <p class="p-king__card-label">営業拠点数</p>
              <p class="p-king__card-value">No.1</p>
            </div>
          </div>

          <div class="p-king__card js-opacity-word">
            <div class="p-king__card-inner">
              <p class="p-king__card-label">未経験入社</p>
              <p class="p-king__card-value">80%</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="p-front-work">
    <div class="p-front-work__bg u-desktop">
      <svg class="js-ribbon" viewBox="0 0 1440 443" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_113_1530)">
          <g filter="url(#filter0_n_113_1530)">
            <path d="M2163.22 389.214C2151.72 388.979 2140.23 388.508 2128.75 387.802C2117.3 387.086 2105.87 386.135 2094.45 384.928C2083 383.722 2071.57 382.261 2060.16 380.534C2048.73 378.808 2037.32 376.817 2025.95 374.552C2014.59 372.286 2003.26 369.746 1991.99 366.911C1980.73 364.087 1969.52 360.978 1958.35 357.564C1947.22 354.161 1936.15 350.454 1925.14 346.442C1914.17 342.441 1903.24 338.125 1892.42 333.486C1881.61 328.857 1870.89 323.904 1860.27 318.627C1849.74 313.4 1839.32 307.849 1829.01 301.964C1818.63 296.03 1808.37 289.773 1798.25 283.162C1788.13 276.552 1778.14 269.588 1768.32 262.281C1758.47 254.955 1748.79 247.285 1739.29 239.262C1729.68 231.151 1720.27 222.677 1711.02 213.939C1701.69 205.151 1692.51 196.108 1683.4 186.938C1674.28 177.767 1665.23 168.479 1656.18 159.191C1647.14 149.913 1638.1 140.645 1628.98 131.494C1619.9 122.392 1610.73 113.418 1601.42 104.699C1592.11 95.9894 1582.66 87.5351 1572.98 79.4927C1563.32 71.46 1553.44 63.8099 1543.32 56.7287C1533.52 49.8828 1523.49 43.5666 1513.21 37.9074C1503.14 32.3562 1492.87 27.4229 1482.43 23.0976C1472.01 18.7821 1461.45 15.0748 1450.77 11.9657C1440.09 8.85662 1429.29 6.36543 1418.44 4.46271C1407.55 2.55999 1396.61 1.27516 1385.64 0.598418C1377.38 0.0786031 1369.12 -0.0979381 1360.87 0.0687952L1175.68 3.75654C1183.94 3.58981 1192.2 3.76635 1200.45 4.28617C1211.42 4.97271 1222.37 6.24773 1233.25 8.15045C1244.11 10.0532 1254.9 12.5444 1265.58 15.6534C1276.26 18.7625 1286.83 22.4699 1297.24 26.7853C1307.67 31.1106 1317.95 36.0439 1328.02 41.5952C1338.29 47.2543 1348.33 53.5705 1358.13 60.4164C1368.26 67.4977 1378.14 75.138 1387.8 83.1804C1397.46 91.2228 1406.93 99.6772 1416.23 108.387C1425.55 117.096 1434.71 126.08 1443.79 135.182C1452.91 144.332 1461.96 153.611 1471 162.879C1480.05 172.167 1489.09 181.455 1498.21 190.625C1507.32 199.796 1516.5 208.838 1525.83 217.626C1535.1 226.355 1544.5 234.839 1554.1 242.95C1563.6 250.973 1573.28 258.643 1583.13 265.969C1592.95 273.276 1602.94 280.24 1613.06 286.85C1623.19 293.451 1633.45 299.718 1643.83 305.652C1654.13 311.536 1664.55 317.088 1675.08 322.315C1685.7 327.592 1696.43 332.545 1707.23 337.174C1718.06 341.803 1728.97 346.129 1739.95 350.13C1750.96 354.151 1762.04 357.849 1773.17 361.252C1784.32 364.665 1795.53 367.784 1806.8 370.599C1818.08 373.434 1829.41 375.974 1840.76 378.239C1852.13 380.505 1863.54 382.496 1874.97 384.222C1886.37 385.948 1897.81 387.4 1909.27 388.616C1920.69 389.822 1932.12 390.774 1943.56 391.49C1955.04 392.196 1966.54 392.667 1978.03 392.902C1989.86 393.147 2001.7 393.128 2013.52 392.902L2198.71 389.214C2186.88 389.45 2175.05 389.469 2163.22 389.214Z" fill="url(#paint0_linear_113_1530)" />
          </g>
          <g filter="url(#filter1_n_113_1530)">
            <path d="M687.918 438.338C676.747 438.034 665.576 437.171 654.456 435.788C643.285 434.415 632.165 432.522 621.105 430.149C609.968 427.766 598.891 424.892 587.909 421.557C576.892 418.223 565.962 414.417 555.134 410.19C544.298 405.953 533.573 401.284 522.978 396.214C512.425 391.163 501.993 385.71 491.698 379.864C481.429 374.028 471.297 367.81 461.32 361.219C451.034 354.413 440.911 347.253 430.917 339.779C420.871 332.267 410.972 324.44 401.21 316.329C391.456 308.228 381.858 299.842 372.388 291.221C362.935 282.619 353.637 273.773 344.451 264.72C335.23 255.628 326.147 246.311 317.175 236.836C308.187 227.333 299.31 217.642 290.545 207.815C281.762 197.968 273.083 187.964 264.498 177.852C255.931 167.76 247.458 157.55 239.062 147.252C230.615 136.885 222.245 126.43 213.918 115.886C205.599 105.362 197.341 94.7503 189.109 84.099C180.893 73.4574 172.704 62.7669 164.549 52.0567C156.411 41.3564 148.29 30.6462 140.17 19.9263L-45 23.6336C-36.8793 34.3438 -28.7672 45.0638 -20.6207 55.7641C-12.4656 66.4743 -4.2847 77.1648 3.93914 87.8063C12.163 98.4576 20.4212 109.06 28.7481 119.594C37.0665 130.127 45.445 140.592 53.8923 150.959C62.2966 161.257 70.761 171.477 79.3286 181.559C87.9134 191.671 96.5927 201.675 105.375 211.522C114.14 221.35 123.009 231.03 132.006 240.544C140.977 250.028 150.061 259.336 159.281 268.427C168.459 277.48 177.765 286.327 187.218 294.928C196.679 303.549 206.287 311.935 216.04 320.036C225.794 328.138 235.693 335.964 245.747 343.487C255.742 350.96 265.865 358.12 276.151 364.927C286.119 371.518 296.259 377.736 306.528 383.571C316.814 389.417 327.255 394.86 337.808 399.921C348.412 405.002 359.137 409.67 369.964 413.897C380.792 418.134 391.723 421.93 402.739 425.265C413.73 428.599 424.799 431.473 435.936 433.856C446.995 436.23 458.115 438.123 469.286 439.496C480.415 440.869 491.577 441.732 502.749 442.046C505.421 442.124 508.085 442.164 510.758 442.173C513.43 442.183 516.094 442.173 518.767 442.114L703.954 438.427C698.617 438.535 693.281 438.505 687.944 438.358L687.918 438.338Z" fill="url(#paint1_linear_113_1530)" />
          </g>
          <g filter="url(#filter2_n_113_1530)">
            <path d="M1171.12 3.83492C1167.82 3.90358 1164.52 4.02127 1161.23 4.19781C1150.28 4.77647 1139.35 5.95341 1128.48 7.72863C1117.64 9.49404 1106.85 11.8479 1096.18 14.8001C1085.54 17.7326 1075.01 21.2634 1064.62 25.3827C1054.18 29.5216 1043.9 34.249 1033.81 39.5747C1023.75 44.8905 1013.87 50.7654 1004.25 57.2484C1001.88 58.8471 999.524 60.4752 997.178 62.1425C996.387 62.7114 995.605 63.2998 994.806 63.8687C993.268 64.9868 991.721 66.0951 990.191 67.2426C990.131 67.2916 990.071 67.3308 990.002 67.3799C988.559 68.4588 987.141 69.5769 985.714 70.6851C984.975 71.254 984.236 71.813 983.506 72.3917C981.289 74.1375 979.089 75.9127 976.897 77.7174C968.356 84.7594 960.037 92.2133 951.917 100.001C943.762 107.818 935.813 115.958 928.027 124.344C920.199 132.769 912.542 141.458 905.014 150.315C897.495 159.171 890.105 168.185 882.792 177.326C875.427 186.525 868.149 195.833 860.904 205.18C853.643 214.537 846.425 223.933 839.198 233.328C832.005 242.656 824.804 251.973 817.534 261.202C810.255 270.451 802.917 279.612 795.466 288.635C788.05 297.609 780.522 306.436 772.831 315.057C765.226 323.58 757.466 331.897 749.517 339.91C741.543 347.953 733.379 355.691 724.992 363.047C723.016 364.773 721.03 366.48 719.028 368.167C718.384 368.716 717.731 369.246 717.078 369.785C715.72 370.923 714.353 372.051 712.987 373.159C712.205 373.787 711.423 374.404 710.641 375.032C709.378 376.033 708.123 377.033 706.851 378.023C706.026 378.671 705.193 379.299 704.359 379.936C702.649 381.24 700.931 382.545 699.203 383.81C690.077 390.509 680.719 396.688 671.129 402.268C661.057 408.124 650.728 413.312 640.219 417.843C629.803 422.345 619.199 426.18 608.475 429.387C597.785 432.585 586.974 435.154 576.095 437.106C565.156 439.068 554.139 440.411 543.105 441.186C537.734 441.559 532.355 441.804 526.967 441.912L712.154 438.224C717.533 438.116 722.912 437.881 728.292 437.498C739.326 436.723 750.342 435.38 761.282 433.418C772.161 431.466 782.963 428.897 793.662 425.699C804.377 422.492 814.982 418.657 825.405 414.156C835.915 409.624 846.236 404.446 856.316 398.581C865.906 393 875.264 386.821 884.39 380.122C885.473 379.328 886.547 378.524 887.63 377.719C888.274 377.239 888.91 376.739 889.546 376.248C890.38 375.611 891.213 374.973 892.038 374.336C893.31 373.355 894.573 372.355 895.828 371.344C896.61 370.717 897.392 370.099 898.174 369.471C899.549 368.363 900.907 367.235 902.264 366.097C902.917 365.558 903.57 365.018 904.215 364.479C906.217 362.792 908.202 361.085 910.179 359.359C918.566 352.003 926.73 344.265 934.704 336.223C942.662 328.21 950.421 319.883 958.018 311.369C965.7 302.748 973.228 293.921 980.653 284.947C988.103 275.924 995.451 266.763 1002.72 257.515C1009.99 248.285 1017.19 238.968 1024.38 229.641C1031.62 220.255 1038.83 210.859 1046.09 201.492C1053.34 192.136 1060.62 182.828 1067.98 173.638C1075.29 164.507 1082.68 155.484 1090.2 146.627C1097.73 137.771 1105.39 129.081 1113.21 120.656C1121 112.261 1128.95 104.12 1137.1 96.313C1145.22 88.5256 1153.54 81.0618 1162.08 74.0296C1164.27 72.225 1166.48 70.4498 1168.69 68.704C1169.42 68.1351 1170.15 67.576 1170.88 67.017C1172.38 65.8597 1173.87 64.6925 1175.38 63.5646C1176.91 62.4171 1178.45 61.3088 1179.99 60.1908C1180.78 59.6219 1181.57 59.0236 1182.36 58.4646C1184.7 56.7972 1187.07 55.1691 1189.44 53.5705C1199.06 47.0973 1208.94 41.2126 1219 35.8967C1229.08 30.5711 1239.36 25.8437 1249.81 21.7048C1260.19 17.5855 1270.73 14.0547 1281.37 11.1221C1292.04 8.16999 1302.83 5.82591 1313.66 4.05069C1324.53 2.27548 1335.46 1.09853 1346.42 0.519872C1349.71 0.343331 1353.01 0.225637 1356.3 0.156982L1171.12 3.84473V3.83492Z" fill="#044396" />
          </g>
        </g>
        <defs>
          <filter id="filter0_n_113_1530" x="1175.68" y="0.00805664" width="1023.03" height="393.071" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix" />
            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
            <feTurbulence type="fractalNoise" baseFrequency="1 1" stitchTiles="stitch" numOctaves="3" result="noise" seed="5530" />
            <feColorMatrix in="noise" type="luminanceToAlpha" result="alphaNoise" />
            <feComponentTransfer in="alphaNoise" result="coloredNoise1">
              <feFuncA type="discrete" tableValues="1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 " />
            </feComponentTransfer>
            <feComposite operator="in" in2="shape" in="coloredNoise1" result="noise1Clipped" />
            <feFlood flood-color="rgba(0, 0, 0, 0.15)" result="color1Flood" />
            <feComposite operator="in" in2="noise1Clipped" in="color1Flood" result="color1" />
            <feMerge result="effect1_noise_113_1530">
              <feMergeNode in="shape" />
              <feMergeNode in="color1" />
            </feMerge>
          </filter>
          <filter id="filter1_n_113_1530" x="-45" y="19.9263" width="748.954" height="422.25" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix" />
            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
            <feTurbulence type="fractalNoise" baseFrequency="1 1" stitchTiles="stitch" numOctaves="3" result="noise" seed="5530" />
            <feColorMatrix in="noise" type="luminanceToAlpha" result="alphaNoise" />
            <feComponentTransfer in="alphaNoise" result="coloredNoise1">
              <feFuncA type="discrete" tableValues="1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 " />
            </feComponentTransfer>
            <feComposite operator="in" in2="shape" in="coloredNoise1" result="noise1Clipped" />
            <feFlood flood-color="rgba(0, 0, 0, 0.15)" result="color1Flood" />
            <feComposite operator="in" in2="noise1Clipped" in="color1Flood" result="color1" />
            <feMerge result="effect1_noise_113_1530">
              <feMergeNode in="shape" />
              <feMergeNode in="color1" />
            </feMerge>
          </filter>
          <filter id="filter2_n_113_1530" x="526.967" y="0.156982" width="829.336" height="441.755" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix" />
            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
            <feTurbulence type="fractalNoise" baseFrequency="1 1" stitchTiles="stitch" numOctaves="3" result="noise" seed="5530" />
            <feColorMatrix in="noise" type="luminanceToAlpha" result="alphaNoise" />
            <feComponentTransfer in="alphaNoise" result="coloredNoise1">
              <feFuncA type="discrete" tableValues="1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 " />
            </feComponentTransfer>
            <feComposite operator="in" in2="shape" in="coloredNoise1" result="noise1Clipped" />
            <feFlood flood-color="rgba(0, 0, 0, 0.1)" result="color1Flood" />
            <feComposite operator="in" in2="noise1Clipped" in="color1Flood" result="color1" />
            <feMerge result="effect1_noise_113_1530">
              <feMergeNode in="shape" />
              <feMergeNode in="color1" />
            </feMerge>
          </filter>
          <linearGradient id="paint0_linear_113_1530" x1="1825.5" y1="215.5" x2="1428.57" y2="71.5497" gradientUnits="userSpaceOnUse">
            <stop stop-color="white" stop-opacity="0" />
            <stop offset="1" stop-color="#D2D7DD" />
          </linearGradient>
          <linearGradient id="paint1_linear_113_1530" x1="142" y1="205.313" x2="486.496" y2="437.69" gradientUnits="userSpaceOnUse">
            <stop stop-color="white" stop-opacity="0" />
            <stop offset="1" stop-color="#D2D7DD" />
          </linearGradient>
          <clipPath id="clip0_113_1530">
            <rect width="2244" height="443" fill="white" transform="translate(-45)" />
          </clipPath>
        </defs>
      </svg>
    </div>
    <div class="p-front-work__bg u-mobile">
      <svg class="js-ribbon" viewBox="0 0 375 128" fill="none" xmlns="http://www.w3.org/2000/svg">
        <mask id="mask0_314_3142" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="375" height="128">
          <rect width="375" height="128" fill="#D9D9D9" />
        </mask>
        <g mask="url(#mask0_314_3142)">
          <g filter="url(#filter0_n_314_3142)">
            <path d="M579.907 111.821C576.663 111.755 573.422 111.622 570.184 111.423C566.955 111.221 563.731 110.952 560.509 110.612C557.278 110.271 554.054 109.859 550.835 109.372C547.611 108.885 544.392 108.323 541.185 107.684C537.98 107.045 534.785 106.328 531.605 105.528C528.429 104.731 525.266 103.854 522.117 102.891C518.978 101.93 515.853 100.884 512.748 99.7524C509.652 98.6233 506.571 97.4056 503.517 96.0966C500.47 94.7904 497.445 93.3928 494.449 91.9039C491.479 90.4289 488.539 88.8625 485.632 87.202C482.704 85.5277 479.81 83.7621 476.954 81.8968C474.099 80.0316 471.282 78.0667 468.511 76.0049C465.733 73.9377 463.001 71.7735 460.323 69.5097C457.613 67.2211 454.958 64.83 452.348 62.3642C449.715 59.8845 447.126 57.333 444.557 54.7454C441.985 52.1578 439.432 49.5371 436.88 46.9163C434.33 44.2983 431.779 41.683 429.205 39.101C426.643 36.5328 424.059 34.0006 421.431 31.5403C418.806 29.0828 416.139 26.6973 413.41 24.428C410.683 22.1615 407.898 20.0028 405.042 18.0047C402.279 16.0731 399.447 14.2908 396.548 12.694C393.707 11.1276 390.81 9.73561 387.865 8.51517C384.927 7.29749 381.948 6.2514 378.935 5.37411C375.922 4.49683 372.877 3.7939 369.816 3.25702C366.744 2.72013 363.656 2.3576 360.563 2.16664C358.233 2.01997 355.904 1.97015 353.574 2.0172L301.336 3.05776C303.665 3.01071 305.997 3.06053 308.324 3.2072C311.418 3.40092 314.506 3.76069 317.577 4.29758C320.639 4.83446 323.683 5.53739 326.696 6.41467C329.707 7.29196 332.689 8.33805 335.627 9.55573C338.569 10.7762 341.469 12.1682 344.31 13.7346C347.206 15.3314 350.038 17.1136 352.804 19.0453C355.659 21.0434 358.447 23.1992 361.171 25.4686C363.899 27.7379 366.567 30.1234 369.193 32.5809C371.82 35.0384 374.404 37.5734 376.967 40.1416C379.539 42.7236 382.091 45.3416 384.641 47.9568C387.194 50.5776 389.744 53.1984 392.318 55.786C394.888 58.3735 397.477 60.9251 400.109 63.4047C402.722 65.8678 405.374 68.2616 408.084 70.5503C410.763 72.8141 413.495 74.9782 416.273 77.0455C419.043 79.1072 421.86 81.0721 424.716 82.9374C427.571 84.7999 430.466 86.5683 433.394 88.2426C436.3 89.9031 439.241 91.4694 442.21 92.9445C445.206 94.4334 448.232 95.8309 451.279 97.1372C454.333 98.4434 457.411 99.6638 460.509 100.793C463.615 101.928 466.739 102.971 469.878 103.931C473.025 104.894 476.188 105.774 479.366 106.569C482.549 107.368 485.744 108.085 488.946 108.724C492.153 109.364 495.372 109.926 498.596 110.413C501.813 110.9 505.039 111.309 508.271 111.652C511.492 111.993 514.716 112.261 517.945 112.463C521.184 112.663 524.427 112.795 527.668 112.862C531.006 112.931 534.344 112.925 537.679 112.862L589.918 111.821C586.582 111.888 583.244 111.893 579.907 111.821Z" fill="url(#paint0_linear_314_3142)" />
          </g>
          <g filter="url(#filter1_n_314_3142)">
            <path d="M163.746 125.682C160.594 125.597 157.443 125.353 154.306 124.963C151.155 124.576 148.018 124.041 144.899 123.372C141.757 122.699 138.632 121.888 135.534 120.947C132.427 120.006 129.343 118.933 126.289 117.74C123.232 116.544 120.207 115.227 117.218 113.796C114.242 112.371 111.299 110.832 108.395 109.183C105.498 107.536 102.64 105.782 99.8256 103.922C96.924 102.001 94.0685 99.9812 91.2493 97.8724C88.4156 95.7525 85.6231 93.5441 82.8693 91.2554C80.118 88.9695 77.4103 86.6034 74.739 84.1708C72.0726 81.7437 69.4497 79.2475 66.8584 76.6931C64.2574 74.1277 61.6952 71.4986 59.1644 68.8253C56.6289 66.1436 54.1248 63.4094 51.6523 60.6364C49.1749 57.8579 46.7266 55.0351 44.305 52.1818C41.8882 49.3341 39.498 46.4532 37.1297 43.5474C34.7469 40.6222 32.3858 37.6721 30.0369 34.6971C27.6904 31.7276 25.3609 28.7332 23.0387 25.7278C20.7213 22.7251 18.4111 19.7086 16.1107 16.6865C13.8151 13.6672 11.5244 10.6452 9.23365 7.62036L-43 8.66646C-40.7093 11.6885 -38.4209 14.7133 -36.1229 17.7326C-33.8225 20.7547 -31.5148 23.7712 -29.195 26.7739C-26.8752 29.7793 -24.5456 32.7709 -22.1967 35.7432C-19.8502 38.7154 -17.4868 41.6683 -15.1039 44.5935C-12.7332 47.4993 -10.3455 50.383 -7.9287 53.2279C-5.50706 56.0812 -3.05875 58.904 -0.581367 61.6825C1.89117 64.4555 4.3928 67.1869 6.93079 69.8714C9.46151 72.5475 12.0237 75.1738 14.6248 77.7392C17.2137 80.2936 19.8389 82.7898 22.5054 85.2169C25.1743 87.6494 27.8844 90.0156 30.6357 92.3015C33.387 94.5874 36.1795 96.7959 39.0157 98.9185C41.8348 101.027 44.6904 103.048 47.592 104.968C50.4039 106.828 53.2643 108.582 56.161 110.229C59.0626 111.878 62.0079 113.414 64.9846 114.842C67.9759 116.276 71.0011 117.593 74.0555 118.786C77.1098 119.982 80.1932 121.053 83.3008 121.993C86.4012 122.934 89.5234 123.745 92.665 124.418C95.7847 125.087 98.9215 125.622 102.073 126.009C105.212 126.396 108.361 126.64 111.512 126.729C112.266 126.751 113.017 126.762 113.771 126.765C114.525 126.767 115.277 126.765 116.03 126.748L168.269 125.707C166.764 125.738 165.258 125.73 163.753 125.688L163.746 125.682Z" fill="url(#paint1_linear_314_3142)" />
          </g>
          <g filter="url(#filter2_n_314_3142)">
            <path d="M300.049 3.07985C299.118 3.09922 298.189 3.13243 297.261 3.18224C294.17 3.34552 291.087 3.67762 288.02 4.17852C284.964 4.67666 281.922 5.34085 278.911 6.17385C275.91 7.00132 272.938 7.9976 270.007 9.15993C267.062 10.3278 264.163 11.6617 261.317 13.1644C258.478 14.6644 255.693 16.3221 252.978 18.1514C252.309 18.6025 251.645 19.0619 250.983 19.5323C250.76 19.6928 250.54 19.8589 250.314 20.0194C249.88 20.3349 249.444 20.6476 249.013 20.9714C248.996 20.9852 248.979 20.9963 248.959 21.0101C248.552 21.3146 248.152 21.6301 247.75 21.9428C247.541 22.1033 247.333 22.261 247.127 22.4243C246.501 22.9169 245.881 23.4178 245.262 23.927C242.853 25.9141 240.506 28.0173 238.216 30.2147C235.915 32.4203 233.673 34.7173 231.477 37.0835C229.269 39.4607 227.109 41.9127 224.985 44.4117C222.864 46.9107 220.779 49.454 218.717 52.0332C216.639 54.6291 214.586 57.2554 212.542 59.8928C210.494 62.5329 208.458 65.1842 206.419 67.8354C204.39 70.4672 202.359 73.0963 200.308 75.7005C198.255 78.3102 196.185 80.895 194.083 83.441C191.991 85.9732 189.868 88.4639 187.698 90.8965C185.553 93.3014 183.364 95.6482 181.122 97.9092C178.872 100.179 176.569 102.362 174.204 104.438C173.646 104.925 173.086 105.406 172.521 105.882C172.339 106.037 172.155 106.187 171.971 106.339C171.588 106.66 171.203 106.978 170.817 107.291C170.597 107.468 170.376 107.642 170.155 107.819C169.799 108.102 169.445 108.384 169.086 108.664C168.854 108.846 168.619 109.023 168.383 109.203C167.901 109.571 167.416 109.939 166.929 110.296C164.355 112.186 161.715 113.93 159.01 115.505C156.169 117.157 153.255 118.621 150.29 119.899C147.352 121.17 144.361 122.252 141.336 123.157C138.32 124.059 135.271 124.784 132.202 125.335C129.116 125.888 126.008 126.267 122.896 126.486C121.381 126.591 119.863 126.66 118.344 126.691L170.582 125.65C172.099 125.62 173.617 125.553 175.134 125.445C178.247 125.227 181.355 124.848 184.44 124.294C187.509 123.743 190.556 123.018 193.574 122.116C196.597 121.211 199.588 120.129 202.529 118.859C205.493 117.58 208.405 116.119 211.248 114.464C213.953 112.889 216.593 111.146 219.167 109.256C219.473 109.032 219.776 108.805 220.081 108.578C220.263 108.442 220.443 108.301 220.622 108.163C220.857 107.983 221.092 107.803 221.325 107.623C221.684 107.346 222.04 107.064 222.394 106.779C222.614 106.602 222.835 106.427 223.056 106.25C223.443 105.938 223.826 105.619 224.21 105.298C224.394 105.146 224.578 104.994 224.76 104.842C225.325 104.366 225.885 103.884 226.442 103.397C228.808 101.321 231.111 99.138 233.36 96.8687C235.605 94.6077 237.794 92.2581 239.937 89.856C242.104 87.4234 244.227 84.9327 246.322 82.4005C248.423 79.8544 250.496 77.2696 252.547 74.6599C254.598 72.0557 256.629 69.4267 258.658 66.7948C260.699 64.1464 262.733 61.4951 264.781 58.8522C266.824 56.2121 268.88 53.5858 270.955 50.9927C273.018 48.4162 275.103 45.8701 277.224 43.3711C279.347 40.8721 281.507 38.4202 283.715 36.0429C285.912 33.674 288.154 31.377 290.454 29.1741C292.745 26.9768 295.091 24.8707 297.501 22.8865C298.117 22.3773 298.74 21.8764 299.365 21.3838C299.571 21.2232 299.777 21.0655 299.983 20.9077C300.405 20.5812 300.824 20.2519 301.251 19.9336C301.682 19.6098 302.116 19.2971 302.553 18.9816C302.776 18.8211 302.996 18.6523 303.222 18.4945C303.881 18.0241 304.548 17.5647 305.217 17.1136C307.932 15.2871 310.717 13.6266 313.556 12.1266C316.399 10.6239 319.301 9.29 322.246 8.12214C325.174 6.95981 328.148 5.96353 331.149 5.13606C334.16 4.30306 337.202 3.64164 340.259 3.14073C343.325 2.63982 346.409 2.30773 349.499 2.14445C350.428 2.09463 351.359 2.06143 352.287 2.04205L300.049 3.08261V3.07985Z" fill="#044396" />
          </g>
        </g>
        <defs>
          <filter id="filter0_n_314_3142" x="301.336" y="2.00006" width="288.582" height="110.912" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix" />
            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
            <feTurbulence type="fractalNoise" baseFrequency="1 1" stitchTiles="stitch" numOctaves="3" result="noise" seed="5530" />
            <feColorMatrix in="noise" type="luminanceToAlpha" result="alphaNoise" />
            <feComponentTransfer in="alphaNoise" result="coloredNoise1">
              <feFuncA type="discrete" tableValues="1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 " />
            </feComponentTransfer>
            <feComposite operator="in" in2="shape" in="coloredNoise1" result="noise1Clipped" />
            <feFlood flood-color="rgba(0, 0, 0, 0.15)" result="color1Flood" />
            <feComposite operator="in" in2="noise1Clipped" in="color1Flood" result="color1" />
            <feMerge result="effect1_noise_314_3142">
              <feMergeNode in="shape" />
              <feMergeNode in="color1" />
            </feMerge>
          </filter>
          <filter id="filter1_n_314_3142" x="-43" y="7.62036" width="211.269" height="119.145" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix" />
            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
            <feTurbulence type="fractalNoise" baseFrequency="1 1" stitchTiles="stitch" numOctaves="3" result="noise" seed="5530" />
            <feColorMatrix in="noise" type="luminanceToAlpha" result="alphaNoise" />
            <feComponentTransfer in="alphaNoise" result="coloredNoise1">
              <feFuncA type="discrete" tableValues="1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 " />
            </feComponentTransfer>
            <feComposite operator="in" in2="shape" in="coloredNoise1" result="noise1Clipped" />
            <feFlood flood-color="rgba(0, 0, 0, 0.15)" result="color1Flood" />
            <feComposite operator="in" in2="noise1Clipped" in="color1Flood" result="color1" />
            <feMerge result="effect1_noise_314_3142">
              <feMergeNode in="shape" />
              <feMergeNode in="color1" />
            </feMerge>
          </filter>
          <filter id="filter2_n_314_3142" x="118.344" y="2.04205" width="233.944" height="124.649" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix" />
            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
            <feTurbulence type="fractalNoise" baseFrequency="1 1" stitchTiles="stitch" numOctaves="3" result="noise" seed="5530" />
            <feColorMatrix in="noise" type="luminanceToAlpha" result="alphaNoise" />
            <feComponentTransfer in="alphaNoise" result="coloredNoise1">
              <feFuncA type="discrete" tableValues="1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 " />
            </feComponentTransfer>
            <feComposite operator="in" in2="shape" in="coloredNoise1" result="noise1Clipped" />
            <feFlood flood-color="rgba(0, 0, 0, 0.1)" result="color1Flood" />
            <feComposite operator="in" in2="noise1Clipped" in="color1Flood" result="color1" />
            <feMerge result="effect1_noise_314_3142">
              <feMergeNode in="shape" />
              <feMergeNode in="color1" />
            </feMerge>
          </filter>
          <linearGradient id="paint0_linear_314_3142" x1="484.641" y1="62.8048" x2="372.666" y2="22.2075" gradientUnits="userSpaceOnUse">
            <stop stop-color="white" stop-opacity="0" />
            <stop offset="1" stop-color="#D2D7DD" />
          </linearGradient>
          <linearGradient id="paint1_linear_314_3142" x1="9.75" y1="59.9304" x2="106.945" y2="125.474" gradientUnits="userSpaceOnUse">
            <stop stop-color="white" stop-opacity="0" />
            <stop offset="1" stop-color="#D2D7DD" />
          </linearGradient>
        </defs>
      </svg>

    </div>


    <div class="l-inner">
      <div class="p-front-work__title">
        <p class="p-front-work__title-ja js-opacity-word">仕事について</p>
        <p class="p-front-work__title-en js-clip-path-from-bottom">Work</p>
      </div>

      <div class="p-front-work__cards">
        <a class="p-front-work__card p-front-work__card--large js-opacity-word" href="#">
          <div class="p-front-work__card-inner">
            <div class="p-front-work__card-content p-front-work__card-content--large">
              <figure class="p-front-work__card-img p-front-work__card-img--large js-parallax">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/work-card-large.png" alt="" width="600" height="380">
              </figure>
              <div class="p-front-work__card-body p-front-work__card-body--large">
                <div class="p-front-work__card-head">
                  <p class="p-front-work__card-subtitle p-front-work__card-subtitle--large">Job Description</p>
                  <p class="p-front-work__card-title p-front-work__card-title--large">Z MOBILITYの仕事について</p>
                </div>
                <p class="p-front-work__card-text p-front-work__card-text--large">
                  親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。
                </p>
              </div>
            </div>
            <span class="p-front-work__card-btn p-front-work__card-btn--m" aria-hidden="true">
              <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/work/work-btn-m.svg" alt="" width="48" height="48">
            </span>
          </div>
        </a>
        <div class="p-front-work__grid">

          <a class="p-front-work__card js-opacity-word" href="#">
            <div class="p-front-work__card-inner">
              <div class="p-front-work__card-content">
                <figure class="p-front-work__card-img js-parallax">
                  <picture>
                    <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/work_2.webp" media="(min-width: 768px)" width="188" height="233" />
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/work_2_sp.png" alt="車両紹介" width="188" height="233">
                  </picture>
                </figure>
                <div class="p-front-work__card-body">
                  <div class="p-front-work__card-head">
                    <p class="p-front-work__card-subtitle">Job Description</p>
                    <p class="p-front-work__card-title">車両紹介</p>
                  </div>
                  <p class="p-front-work__card-text">親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。</p>
                </div>
              </div>
              <span class="p-front-work__card-btn" aria-hidden="true">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/work/work-btn-s.svg" alt="" width="28" height="28">
              </span>
            </div>
          </a>

          <a class="p-front-work__card js-opacity-word" href="#">
            <div class="p-front-work__card-inner">
              <div class="p-front-work__card-content">
                <figure class="p-front-work__card-img js-parallax">
                  <picture>
                    <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/work_3.webp" media="(min-width: 768px)" width="188" height="233" />
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/work_3_sp.png" alt="二種免許支援教育体制" width="188" height="233">
                  </picture>
                </figure>
                <div class="p-front-work__card-body">
                  <div class="p-front-work__card-head">
                    <p class="p-front-work__card-subtitle">Job Description</p>
                    <p class="p-front-work__card-title">二種免許支援<br class="u-mobile">教育体制</p>
                  </div>
                  <p class="p-front-work__card-text">親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。</p>
                </div>
              </div>
              <span class="p-front-work__card-btn" aria-hidden="true">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/work/work-btn-s2.svg" alt="" width="28" height="28">
              </span>
            </div>
          </a>

          <a class="p-front-work__card js-opacity-word" href="#">
            <div class="p-front-work__card-inner">
              <div class="p-front-work__card-content">
                <figure class="p-front-work__card-img js-parallax">
                  <picture>
                    <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/work_4.webp" media="(min-width: 768px)" width="188" height="233" />
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/work_4_sp.png" alt="数字で見るZ" width="188" height="233">
                  </picture>
                </figure>
                <div class="p-front-work__card-body">
                  <div class="p-front-work__card-head">
                    <p class="p-front-work__card-subtitle">Job Description</p>
                    <p class="p-front-work__card-title">数字で見るZ</p>
                  </div>
                  <p class="p-front-work__card-text">親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。</p>
                </div>
              </div>
              <span class="p-front-work__card-btn" aria-hidden="true">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/work/work-btn-s3.svg" alt="" width="28" height="28">
              </span>
            </div>
          </a>

          <a class="p-front-work__card js-opacity-word" href="#">
            <div class="p-front-work__card-inner">
              <div class="p-front-work__card-content">
                <figure class="p-front-work__card-img js-parallax">
                  <picture>
                    <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/work_5.webp" media="(min-width: 768px)" width="188" height="233" />
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/work_5_sp.png" alt="よくある質問" width="188" height="233">
                  </picture>
                </figure>
                <div class="p-front-work__card-body">
                  <div class="p-front-work__card-head">
                    <p class="p-front-work__card-subtitle">Job Description</p>
                    <p class="p-front-work__card-title">よくある質問</p>
                  </div>
                  <p class="p-front-work__card-text">親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。</p>
                </div>
              </div>
              <span class="p-front-work__card-btn" aria-hidden="true">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/work/work-btn-s4.svg" alt="" width="28" height="28">
              </span>
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>
  <section class="p-top-column">
    <div class="l-inner">
      <div class="p-top-column__content">
        <div class="p-top-column__head">
          <div class="p-top-column__title">
            <p class="p-top-column__title-ja js-opacity-word">コラム</p>
            <p class="p-top-column__title-en js-clip-path-from-bottom">Column</p>
          </div>

          <div class="p-top-column__actions">

            <div class="p-top-column__nav" aria-label="コラムスライダーナビゲーション">
              <button class="swiper-button-prev p-top-column__prev" type="button" aria-label="前へ">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M13.8426 23.0002L38.0001 23.0002L38.0001 25.0002L13.8426 25.0002L25.4271 36.5847L24.0001 38.0002L10.0001 24.0002L24.0001 10.0002L25.4271 11.4157L13.8426 23.0002Z" fill="white" />
                </svg>
              </button>
              <button class="swiper-button-next p-top-column__next" type="button" aria-label="次へ">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M34.1575 25H10V23H34.1575L22.573 11.4155L24 10L38 24L24 38L22.573 36.5845L34.1575 25Z" fill="white" />
                </svg>
              </button>
            </div>
            <a class="c-btn c-btn--light" href="#">
              <span class="c-btn__text">一覧を見る</span>
              <span class="c-btn__divider" aria-hidden="true"></span>
              <span class="c-btn__icon" aria-hidden="true">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/column/column-arrow.svg" alt="" width="20" height="20">
              </span>
            </a>
          </div>
        </div>
        <div class="p-top-column__right js-opacity-word">
          <div class="swiper p-top-column__swiper js-top-column-swiper">
            <div class="swiper-wrapper p-top-column__cards">
              <div class="swiper-slide p-top-column__slide">
                <a class="p-top-column__card" href="#">
                  <figure class="p-top-column__card-img js-parallax">
                    <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/column/column-1.png" alt="" width="395" height="222">
                  </figure>
                  <p class="p-top-column__card-text">
                    親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。
                  </p>
                  <div class="p-top-column__meta">
                    <time class="p-top-column__date" datetime="2026-01-30">2026.01.30</time>
                    <span class="p-top-column__category">カテゴリ</span>
                  </div>
                </a>
              </div>

              <div class="swiper-slide p-top-column__slide">
                <a class="p-top-column__card" href="#">
                  <figure class="p-top-column__card-img js-parallax">
                    <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/column/column-2.png" alt="" width="395" height="222">
                  </figure>
                  <p class="p-top-column__card-text">
                    親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。
                  </p>
                  <div class="p-top-column__meta">
                    <time class="p-top-column__date" datetime="2026-01-30">2026.01.30</time>
                    <span class="p-top-column__category">カテゴリ</span>
                  </div>
                </a>
              </div>

              <div class="swiper-slide p-top-column__slide">
                <a class="p-top-column__card" href="#">
                  <figure class="p-top-column__card-img js-parallax">
                    <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/column/column-3.png" alt="" width="395" height="222">
                  </figure>
                  <p class="p-top-column__card-text">
                    親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。
                  </p>
                  <div class="p-top-column__meta">
                    <time class="p-top-column__date" datetime="2026-01-30">2026.01.30</time>
                    <span class="p-top-column__category">カテゴリ</span>
                  </div>
                </a>
              </div>

              <div class="swiper-slide p-top-column__slide">
                <a class="p-top-column__card" href="#">
                  <figure class="p-top-column__card-img js-parallax">
                    <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/column/column-4.png" alt="" width="395" height="222">
                  </figure>
                  <p class="p-top-column__card-text">
                    親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。
                  </p>
                  <div class="p-top-column__meta">
                    <time class="p-top-column__date" datetime="2026-01-30">2026.01.30</time>
                    <span class="p-top-column__category">カテゴリ</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="p-top-column__more-sp">

          <a class="c-btn c-btn--light" href="#">
            <span class="c-btn__text">一覧を見る</span>
            <span class="c-btn__divider" aria-hidden="true"></span>
            <span class="c-btn__icon" aria-hidden="true">
              <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/column/column-arrow.svg" alt="" width="20" height="20">
            </span>
          </a>
        </div>


      </div>
    </div>
  </section>
  <section class="p-top-interview">
    <div class="l-inner">
      <div class="p-top-interview__content">
        <div class="p-top-interview__bg js-news-ribbon">
          <svg viewBox="0 0 1440 443" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_113_1535)">
              <g filter="url(#filter0_n_113_1535)">
                <path d="M-309.218 389.214C-297.72 388.979 -286.231 388.508 -274.75 387.802C-263.304 387.086 -251.875 386.135 -240.454 384.928C-228.999 383.722 -217.57 382.261 -206.158 380.534C-194.729 378.808 -183.317 376.817 -171.948 374.552C-160.588 372.286 -149.262 369.746 -137.987 366.911C-126.73 364.087 -115.516 360.978 -104.353 357.564C-93.2245 354.161 -82.1475 350.454 -71.1395 346.442C-60.1657 342.441 -49.2437 338.125 -38.4161 333.486C-27.6143 328.857 -16.8896 323.904 -6.26825 318.627C4.25861 313.4 14.6823 307.849 24.9857 301.964C35.3665 296.03 45.627 289.773 55.7499 283.162C65.8729 276.552 75.8584 269.588 85.6806 262.281C95.5286 254.955 105.213 247.285 114.709 239.262C124.316 231.151 133.726 222.677 142.981 213.939C152.313 205.151 161.491 196.108 170.6 186.938C179.718 177.767 188.766 168.479 197.815 159.191C206.855 149.913 215.896 140.645 225.022 131.494C234.105 122.392 243.265 113.418 252.581 104.699C261.887 95.9894 271.34 87.5351 281.016 79.4927C290.684 71.46 300.557 63.8099 310.68 56.7287C320.477 49.8828 330.514 43.5666 340.791 37.9074C350.863 32.3562 361.132 27.4229 371.573 23.0976C381.988 18.7821 392.549 15.0748 403.231 11.9657C413.912 8.85662 424.705 6.36543 435.559 4.46271C446.447 2.55999 457.395 1.27516 468.36 0.598418C476.618 0.0786031 484.876 -0.0979381 493.134 0.0687952L678.321 3.75654C670.063 3.58981 661.796 3.76635 653.546 4.28617C642.581 4.97271 631.633 6.24773 620.746 8.15045C609.892 10.0532 599.099 12.5444 588.417 15.6534C577.744 18.7625 567.175 22.4699 556.76 26.7853C546.327 31.1106 536.049 36.0439 525.978 41.5952C515.709 47.2543 505.672 53.5705 495.867 60.4164C485.744 67.4977 475.862 75.138 466.203 83.1804C456.535 91.2228 447.074 99.6772 437.767 108.387C428.452 117.096 419.292 126.08 410.208 135.182C401.091 144.332 392.042 153.611 383.002 162.879C373.953 172.167 364.913 181.455 355.787 190.625C346.678 199.796 337.5 208.838 328.168 217.626C318.904 226.355 309.503 234.839 299.896 242.95C290.4 250.973 280.715 258.643 270.867 265.969C261.045 273.276 251.06 280.24 240.937 286.85C230.814 293.451 220.553 299.718 210.172 305.652C199.869 311.536 189.445 317.088 178.918 322.315C168.297 327.592 157.573 332.545 146.771 337.174C135.943 341.803 125.03 346.129 114.047 350.13C103.039 354.151 91.9622 357.849 80.8339 361.252C69.6797 364.665 58.4655 367.784 47.1996 370.599C35.9165 373.434 24.5905 375.974 13.2386 378.239C1.86963 380.505 -9.54242 382.496 -20.9716 384.222C-32.3749 385.948 -43.8126 387.4 -55.2676 388.616C-66.6881 389.822 -78.1174 390.774 -89.5638 391.49C-101.044 392.196 -112.542 392.667 -124.032 392.902C-135.865 393.147 -147.698 393.128 -159.522 392.902L-344.709 389.214C-332.884 389.45 -321.051 389.469 -309.218 389.214Z" fill="url(#paint0_linear_113_1535)" />
              </g>
              <g filter="url(#filter1_n_113_1535)">
                <path d="M1166.08 438.338C1177.25 438.034 1188.42 437.171 1199.54 435.788C1210.72 434.415 1221.84 432.522 1232.89 430.149C1244.03 427.766 1255.11 424.892 1266.09 421.557C1277.11 418.223 1288.04 414.417 1298.87 410.19C1309.7 405.953 1320.43 401.284 1331.02 396.214C1341.58 391.163 1352.01 385.71 1362.3 379.864C1372.57 374.028 1382.7 367.81 1392.68 361.219C1402.97 354.413 1413.09 347.253 1423.08 339.779C1433.13 332.267 1443.03 324.44 1452.79 316.329C1462.54 308.228 1472.14 299.842 1481.61 291.221C1491.07 282.619 1500.36 273.773 1509.55 264.72C1518.77 255.628 1527.85 246.311 1536.82 236.836C1545.81 227.333 1554.69 217.642 1563.46 207.815C1572.24 197.968 1580.92 187.964 1589.5 177.852C1598.07 167.76 1606.54 157.55 1614.94 147.252C1623.39 136.885 1631.76 126.43 1640.08 115.886C1648.4 105.362 1656.66 94.7503 1664.89 84.099C1673.11 73.4574 1681.3 62.7669 1689.45 52.0567C1697.59 41.3564 1705.71 30.6462 1713.83 19.9263L1899 23.6336C1890.88 34.3438 1882.77 45.0638 1874.62 55.7641C1866.47 66.4743 1858.28 77.1648 1850.06 87.8063C1841.84 98.4576 1833.58 109.06 1825.25 119.594C1816.93 130.127 1808.55 140.592 1800.11 150.959C1791.7 161.257 1783.24 171.477 1774.67 181.559C1766.09 191.671 1757.41 201.675 1748.62 211.522C1739.86 221.35 1730.99 231.03 1721.99 240.544C1713.02 250.028 1703.94 259.336 1694.72 268.427C1685.54 277.48 1676.23 286.327 1666.78 294.928C1657.32 303.549 1647.71 311.935 1637.96 320.036C1628.21 328.138 1618.31 335.964 1608.25 343.487C1598.26 350.96 1588.14 358.12 1577.85 364.927C1567.88 371.518 1557.74 377.736 1547.47 383.571C1537.19 389.417 1526.74 394.86 1516.19 399.921C1505.59 405.002 1494.86 409.67 1484.04 413.897C1473.21 418.134 1462.28 421.93 1451.26 425.265C1440.27 428.599 1429.2 431.473 1418.06 433.856C1407 436.23 1395.89 438.123 1384.71 439.496C1373.59 440.869 1362.42 441.732 1351.25 442.046C1348.58 442.124 1345.91 442.164 1343.24 442.173C1340.57 442.183 1337.91 442.173 1335.23 442.114L1150.05 438.427C1155.38 438.535 1160.72 438.505 1166.06 438.358L1166.08 438.338Z" fill="url(#paint1_linear_113_1535)" />
              </g>
              <g filter="url(#filter2_n_113_1535)">
                <path d="M682.884 3.83492C686.184 3.90358 689.475 4.02127 692.766 4.19781C703.723 4.77647 714.654 5.95341 725.524 7.72863C736.361 9.49404 747.145 11.8479 757.818 14.8001C768.457 17.7326 778.992 21.2634 789.381 25.3827C799.822 29.5216 810.1 34.249 820.189 39.5747C830.251 44.8905 840.125 50.7654 849.75 57.2484C852.122 58.8471 854.476 60.4752 856.822 62.1425C857.613 62.7114 858.395 63.2998 859.194 63.8687C860.732 64.9868 862.279 66.0951 863.809 67.2426C863.869 67.2916 863.929 67.3308 863.998 67.3799C865.441 68.4588 866.859 69.5769 868.286 70.6851C869.025 71.254 869.764 71.813 870.494 72.3917C872.711 74.1375 874.911 75.9127 877.103 77.7174C885.644 84.7594 893.963 92.2133 902.083 100.001C910.238 107.818 918.187 115.958 925.973 124.344C933.801 132.769 941.458 141.458 948.986 150.315C956.505 159.171 963.895 168.185 971.208 177.326C978.573 186.525 985.851 195.833 993.096 205.18C1000.36 214.537 1007.58 223.933 1014.8 233.328C1021.99 242.656 1029.2 251.973 1036.47 261.202C1043.74 270.451 1051.08 279.612 1058.53 288.635C1065.95 297.609 1073.48 306.436 1081.17 315.057C1088.77 323.58 1096.53 331.897 1104.48 339.91C1112.46 347.953 1120.62 355.691 1129.01 363.047C1130.98 364.773 1132.97 366.48 1134.97 368.167C1135.62 368.716 1136.27 369.246 1136.92 369.785C1138.28 370.923 1139.65 372.051 1141.01 373.159C1141.79 373.787 1142.58 374.404 1143.36 375.032C1144.62 376.033 1145.88 377.033 1147.15 378.023C1147.97 378.671 1148.81 379.299 1149.64 379.936C1151.35 381.24 1153.07 382.545 1154.8 383.81C1163.92 390.509 1173.28 396.688 1182.87 402.268C1192.94 408.124 1203.27 413.312 1213.78 417.843C1224.2 422.345 1234.8 426.18 1245.53 429.387C1256.22 432.585 1267.03 435.154 1277.9 437.106C1288.84 439.068 1299.86 440.411 1310.89 441.186C1316.27 441.559 1321.65 441.804 1327.03 441.912L1141.85 438.224C1136.47 438.116 1131.09 437.881 1125.71 437.498C1114.67 436.723 1103.66 435.38 1092.72 433.418C1081.84 431.466 1071.04 428.897 1060.34 425.699C1049.62 422.492 1039.02 418.657 1028.59 414.156C1018.08 409.624 1007.76 404.446 997.684 398.581C988.094 393 978.736 386.821 969.61 380.122C968.527 379.328 967.453 378.524 966.37 377.719C965.726 377.239 965.09 376.739 964.454 376.248C963.62 375.611 962.787 374.973 961.962 374.336C960.69 373.355 959.427 372.355 958.172 371.344C957.39 370.717 956.608 370.099 955.826 369.471C954.451 368.363 953.093 367.235 951.736 366.097C951.083 365.558 950.43 365.018 949.785 364.479C947.783 362.792 945.798 361.085 943.821 359.359C935.434 352.003 927.27 344.265 919.296 336.223C911.338 328.21 903.579 319.883 895.982 311.369C888.3 302.748 880.772 293.921 873.347 284.947C865.897 275.924 858.549 266.763 851.279 257.515C844.009 248.285 836.808 238.968 829.616 229.641C822.38 220.255 815.17 210.859 807.909 201.492C800.665 192.136 793.377 182.828 786.021 173.638C778.708 164.507 771.318 155.484 763.799 146.627C756.271 137.771 748.615 129.081 740.786 120.656C733.001 112.261 725.052 104.12 716.897 96.313C708.776 88.5256 700.458 81.0618 691.916 74.0296C689.733 72.225 687.524 70.4498 685.307 68.704C684.577 68.1351 683.846 67.576 683.116 67.017C681.621 65.8597 680.134 64.6925 678.622 63.5646C677.092 62.4171 675.554 61.3088 674.007 60.1908C673.217 59.6219 672.435 59.0236 671.635 58.4646C669.298 56.7972 666.935 55.1691 664.563 53.5705C654.938 47.0973 645.065 41.2126 635.002 35.8967C624.922 30.5711 614.636 25.8437 604.195 21.7048C593.814 17.5855 583.27 14.0547 572.631 11.1221C561.958 8.16999 551.174 5.82591 540.338 4.05069C529.467 2.27548 518.536 1.09853 507.58 0.519872C504.289 0.343331 500.989 0.225637 497.697 0.156982L682.884 3.84473V3.83492Z" fill="#044396" />
              </g>
            </g>
            <defs>
              <filter id="filter0_n_113_1535" x="-344.709" y="0.00805664" width="1023.03" height="393.071" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                <feTurbulence type="fractalNoise" baseFrequency="1 1" stitchTiles="stitch" numOctaves="3" result="noise" seed="5530" />
                <feColorMatrix in="noise" type="luminanceToAlpha" result="alphaNoise" />
                <feComponentTransfer in="alphaNoise" result="coloredNoise1">
                  <feFuncA type="discrete" tableValues="1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 " />
                </feComponentTransfer>
                <feComposite operator="in" in2="shape" in="coloredNoise1" result="noise1Clipped" />
                <feFlood flood-color="rgba(0, 0, 0, 0.15)" result="color1Flood" />
                <feComposite operator="in" in2="noise1Clipped" in="color1Flood" result="color1" />
                <feMerge result="effect1_noise_113_1535">
                  <feMergeNode in="shape" />
                  <feMergeNode in="color1" />
                </feMerge>
              </filter>
              <filter id="filter1_n_113_1535" x="1150.05" y="19.9263" width="748.954" height="422.25" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                <feTurbulence type="fractalNoise" baseFrequency="1 1" stitchTiles="stitch" numOctaves="3" result="noise" seed="5530" />
                <feColorMatrix in="noise" type="luminanceToAlpha" result="alphaNoise" />
                <feComponentTransfer in="alphaNoise" result="coloredNoise1">
                  <feFuncA type="discrete" tableValues="1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 " />
                </feComponentTransfer>
                <feComposite operator="in" in2="shape" in="coloredNoise1" result="noise1Clipped" />
                <feFlood flood-color="rgba(0, 0, 0, 0.15)" result="color1Flood" />
                <feComposite operator="in" in2="noise1Clipped" in="color1Flood" result="color1" />
                <feMerge result="effect1_noise_113_1535">
                  <feMergeNode in="shape" />
                  <feMergeNode in="color1" />
                </feMerge>
              </filter>
              <filter id="filter2_n_113_1535" x="497.697" y="0.156982" width="829.336" height="441.755" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                <feTurbulence type="fractalNoise" baseFrequency="1 1" stitchTiles="stitch" numOctaves="3" result="noise" seed="5530" />
                <feColorMatrix in="noise" type="luminanceToAlpha" result="alphaNoise" />
                <feComponentTransfer in="alphaNoise" result="coloredNoise1">
                  <feFuncA type="discrete" tableValues="1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 " />
                </feComponentTransfer>
                <feComposite operator="in" in2="shape" in="coloredNoise1" result="noise1Clipped" />
                <feFlood flood-color="rgba(0, 0, 0, 0.1)" result="color1Flood" />
                <feComposite operator="in" in2="noise1Clipped" in="color1Flood" result="color1" />
                <feMerge result="effect1_noise_113_1535">
                  <feMergeNode in="shape" />
                  <feMergeNode in="color1" />
                </feMerge>
              </filter>
              <linearGradient id="paint0_linear_113_1535" x1="28.4998" y1="215.5" x2="425.429" y2="71.5497" gradientUnits="userSpaceOnUse">
                <stop stop-color="white" stop-opacity="0" />
                <stop offset="1" stop-color="#D2D7DD" />
              </linearGradient>
              <linearGradient id="paint1_linear_113_1535" x1="1712" y1="205.313" x2="1367.5" y2="437.69" gradientUnits="userSpaceOnUse">
                <stop stop-color="white" stop-opacity="0" />
                <stop offset="1" stop-color="#D2D7DD" />
              </linearGradient>
              <clipPath id="clip0_113_1535">
                <rect width="2244" height="443" fill="white" transform="matrix(-1 0 0 1 1899 0)" />
              </clipPath>
            </defs>
          </svg>

        </div>

        <div class="p-top-interview__head">
          <div class="p-top-interview__title">
            <p class="p-top-interview__title-ja js-opacity-word">インタビュー動画</p>
            <p class="p-top-interview__title-en js-clip-path-from-bottom">Interview<br>Movie</p>
          </div>

          <div class="p-top-interview__actions">


            <div class="p-top-interview__nav" aria-label="インタビュースライダーナビゲーション">
              <button class="p-top-interview__prev" type="button" aria-label="前へ">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M13.8426 23.0002L38.0001 23.0002L38.0001 25.0002L13.8426 25.0002L25.4271 36.5847L24.0001 38.0002L10.0001 24.0002L24.0001 10.0002L25.4271 11.4157L13.8426 23.0002Z" fill="#044396" />
                </svg>
              </button>
              <button class="p-top-interview__next" type="button" aria-label="次へ">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M34.1575 25H10V23H34.1575L22.573 11.4155L24 10L38 24L24 38L22.573 36.5845L34.1575 25Z" fill="#044396" />
                </svg>
              </button>
            </div>

            <a class="c-btn c-btn--primary" href="#">
              <span class="c-btn__text">一覧を見る</span>
              <span class="c-btn__divider" aria-hidden="true"></span>
              <span class="c-btn__icon" aria-hidden="true">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/interview/interview-arrow.svg" alt="" width="20" height="20">
              </span>
            </a>
          </div>
        </div>
        <div class="p-top-interview__right js-opacity-word">
          <div class="swiper p-top-interview__swiper js-top-interview-swiper">
            <div class="swiper-wrapper p-top-interview__tracks">
              <div class="swiper-slide p-top-interview__slide">
                <a class="p-top-interview__card" href="#">
                  <figure class="p-top-interview__thumb js-parallax">
                    <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/interview/interview-1.png" alt="" width="339" height="460">
                  </figure>
                  <p class="p-top-interview__text">親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の。</p>
                  <p class="p-top-interview__name">田中 太郎</p>
                </a>
              </div>

              <div class="swiper-slide p-top-interview__slide">
                <a class="p-top-interview__card" href="#">
                  <figure class="p-top-interview__thumb js-parallax">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/interview/interview-2.png" alt="" width="339" height="460">
                  </figure>
                  <p class="p-top-interview__text">親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の。</p>
                  <p class="p-top-interview__name">田中 太郎</p>
                </a>
              </div>

              <div class="swiper-slide p-top-interview__slide">
                <a class="p-top-interview__card" href="#">
                  <figure class="p-top-interview__thumb js-parallax">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/interview/interview-1.png" alt="" width="339" height="460">
                  </figure>
                  <p class="p-top-interview__text">親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の。</p>
                  <p class="p-top-interview__name">田中 太郎</p>
                </a>
              </div>

              <div class="swiper-slide p-top-interview__slide">
                <a class="p-top-interview__card" href="#">
                  <figure class="p-top-interview__thumb js-parallax">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/interview/interview-2.png" alt="" width="339" height="460">
                  </figure>
                  <p class="p-top-interview__text">親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の。</p>
                  <p class="p-top-interview__name">田中 太郎</p>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="p-top-interview__bottom-sp">
          <a class="c-btn c-btn--primary" href="#">
            <span class="c-btn__text">一覧を見る</span>
            <span class="c-btn__divider" aria-hidden="true"></span>
            <span class="c-btn__icon" aria-hidden="true">
              <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/interview/interview-arrow.svg" alt="" width="20" height="20">
            </span>
          </a>
        </div>


      </div>
    </div>
  </section>

  <section class="p-company">
    <div class="l-inner">
      <div class="p-company__head">
        <p class="p-company__title-ja js-opacity-word">会社情報</p>
        <p class="p-company__title-en js-clip-path-from-bottom">Company</p>
      </div>

      <div class="p-company__cards">
        <a class="p-company__card js-opacity-word" href="<?php echo esc_url(home_url('/company/message')); ?>">
          <div class="p-company__card-inner">
            <div class="p-company__card-body">
              <div class="p-company__card-texts">
                <p class="p-company__card-title">代表メッセージ</p>
                <p class="p-company__card-text">
                  親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。
                </p>
              </div>
              <span class="p-company__card-btn" aria-hidden="true">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/company/company-btn.svg" alt="" width="28" height="28">
              </span>
            </div>

            <div class="p-company__card-media js-parallax">
              <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/company/company-message-2367a4.png" alt="" width="230" height="320">
              <span class="p-company__card-label" aria-hidden="true">Message</span>
            </div>
          </div>
        </a>

        <span class="p-company__divider" aria-hidden="true"></span>

        <a class="p-company__card js-opacity-word" href="<?php echo esc_url(home_url('/company/information')); ?>">
          <div class="p-company__card-inner">
            <div class="p-company__card-body">
              <div class="p-company__card-texts">
                <p class="p-company__card-title">会社概要</p>
                <p class="p-company__card-text">
                  親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。
                </p>
              </div>
              <span class="p-company__card-btn" aria-hidden="true">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/company/company-btn.svg" alt="" width="28" height="28">
              </span>
            </div>

            <div class="p-company__card-media js-parallax">
              <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/company/company-information.png" alt="" width="230" height="320">
              <span class="p-company__card-label p-company__card-label--left" aria-hidden="true">Information</span>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>

  <?php get_template_part('includes/submit'); ?>

</main>
<?php get_footer() ?>