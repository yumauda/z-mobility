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
          <p class="p-front-news__title-ja">お知らせ</p>
          <p class="p-front-news__title-en">News</p>
        </div>
        <div class="p-front-news__more-pc">

          <a class="p-front-news__more" href="<?php echo esc_url(home_url('/blog-all')); ?>">
            <span class="p-front-news__more-text">一覧を見る</span>
            <span class="p-front-news__more-divider" aria-hidden="true"></span>
            <span class="p-front-news__more-icon" aria-hidden="true">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.5 5L12.1 6.4L16.7 11H5V13H16.7L12.1 17.6L13.5 19L20.5 12L13.5 5Z" fill="currentColor" />
              </svg>
            </span>
          </a>
        </div>

      </div>

      <div class="p-front-news__list">
        <a class="p-front-news__item" href="#">
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

        <a class="p-front-news__item" href="#">
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

        <a class="p-front-news__item" href="#">
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
      <div class="p-front-news__more-sp">

        <a class="p-front-news__more" href="<?php echo esc_url(home_url('/blog-all')); ?>">
          <span class="p-front-news__more-text">一覧を見る</span>
          <span class="p-front-news__more-divider" aria-hidden="true"></span>
          <span class="p-front-news__more-icon" aria-hidden="true">
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
              <p class="p-pro__catch-line">ハイヤー時代、到来。</p>
              <p class="p-pro__catch-line">移動は「量」から「質」へ。</p>
            </div>
            <div class="p-pro__catch-group">
              <p class="p-pro__catch-line">今、選ばれるのは</p>
              <p class="p-pro__catch-line">プロフェッショナルドライバー。</p>
            </div>
          </div>
          <div class="p-pro__texts">
            <p class="p-pro__text">
              今、「タクシー」ではなく「ハイヤー」が選ばれています。<br class="u-desktop">
              それは、単に移動するのではなく、接客力と判断力を備えたプロフェッショナルドライバーが、<br>
              移動そのものの価値を提供する仕事だからです。
            </p>
            <p class="p-pro__text">
              株式会社Zは、2021年に銀座でハイヤー事業をスタート。<br class="u-desktop">
              以降、圧倒的なスピードで成長を続け、アルファードの保有台数は都内最大級クラス、<br class="u-desktop">
              拠点は都内9か所まで拡大してきました。<br class="u-desktop">
              インバウンド需要が高まる中、ハイヤー業界でも高水準の収入実績を重ねています。
            </p>
            <p class="p-pro__text">
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
        <div class="p-pro__right">
          <figure class="p-pro__img">
            <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/pro_z.png" alt="" width="700" height="683">
          </figure>
        </div>

      </div>
      <div class="p-pro__slider">
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
        <p class="p-king__title">
          業界No.1<br>
          3冠獲得。
        </p>

        <div class="p-king__cards">
          <div class="p-king__card">
            <div class="p-king__card-inner">
              <p class="p-king__card-label">
                アルファード<br>
                保有台数業界
              </p>
              <p class="p-king__card-value">No.1</p>
            </div>
          </div>

          <div class="p-king__card">
            <div class="p-king__card-inner">
              <p class="p-king__card-label">営業拠点数</p>
              <p class="p-king__card-value">No.1</p>
            </div>
          </div>

          <div class="p-king__card">
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
    <div class="p-front-work__bg">
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


    <div class="l-inner">
      <div class="p-front-work__title">
        <p class="p-front-work__title-ja">仕事について</p>
        <p class="p-front-work__title-en">Work</p>
      </div>

      <div class="p-front-work__cards">
        <a class="p-front-work__card p-front-work__card--large" href="#">
          <div class="p-front-work__card-inner">
            <div class="p-front-work__card-content p-front-work__card-content--large">
              <figure class="p-front-work__card-img p-front-work__card-img--large">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/work/work-card-large.png" alt="" width="600" height="380">
              </figure>
              <div class="p-front-work__card-body p-front-work__card-body--large">
                <div class="p-front-work__card-head">
                  <p class="p-front-work__card-subtitle">Job Description</p>
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

        <a class="p-front-work__card" href="#">
          <div class="p-front-work__card-inner">
            <div class="p-front-work__card-content">
              <figure class="p-front-work__card-img">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/work/work-card-1.png" alt="" width="188" height="233">
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

        <a class="p-front-work__card" href="#">
          <div class="p-front-work__card-inner">
            <div class="p-front-work__card-content">
              <figure class="p-front-work__card-img">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/work/work-card-2.png" alt="" width="188" height="233">
              </figure>
              <div class="p-front-work__card-body">
                <div class="p-front-work__card-head">
                  <p class="p-front-work__card-subtitle">Job Description</p>
                  <p class="p-front-work__card-title">二種免許支援教育体制</p>
                </div>
                <p class="p-front-work__card-text">親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。</p>
              </div>
            </div>
            <span class="p-front-work__card-btn" aria-hidden="true">
              <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/work/work-btn-s2.svg" alt="" width="28" height="28">
            </span>
          </div>
        </a>

        <a class="p-front-work__card" href="#">
          <div class="p-front-work__card-inner">
            <div class="p-front-work__card-content">
              <figure class="p-front-work__card-img">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/work/work-card-3.png" alt="" width="188" height="233">
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

        <a class="p-front-work__card" href="#">
          <div class="p-front-work__card-inner">
            <div class="p-front-work__card-content">
              <figure class="p-front-work__card-img">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/work/work-card-4.png" alt="" width="188" height="233">
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
  </section>
  <section class="p-top-column">
    <div class="l-inner">
      <div class="p-top-column__content">
        <div class="p-top-column__head">
          <div class="p-top-column__title">
            <p class="p-top-column__title-ja">コラム</p>
            <p class="p-top-column__title-en">Column</p>
          </div>

          <div class="p-top-column__actions">

            <div class="p-top-column__nav" aria-label="コラムスライダーナビゲーション">
              <button class="swiper-button-prev p-top-column__prev" type="button" aria-label="前へ">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/column/column-arrow.svg" alt="" width="20" height="20">
              </button>
              <button class="swiper-button-next p-top-column__next" type="button" aria-label="次へ">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/column/column-arrow.svg" alt="" width="20" height="20">
              </button>
            </div>
            <a class="p-top-column__more" href="#">
              <span class="p-top-column__more-text">一覧を見る</span>
              <span class="p-top-column__more-divider" aria-hidden="true"></span>
              <span class="p-top-column__more-icon" aria-hidden="true">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/column/column-arrow.svg" alt="" width="20" height="20">
              </span>
            </a>
          </div>
        </div>
        <div class="p-top-column__right">
          <div class="swiper p-top-column__swiper js-top-column-swiper">
            <div class="swiper-wrapper p-top-column__cards">
              <div class="swiper-slide p-top-column__slide">
                <a class="p-top-column__card" href="#">
                  <figure class="p-top-column__card-img">
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
                  <figure class="p-top-column__card-img">
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
                  <figure class="p-top-column__card-img">
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
                  <figure class="p-top-column__card-img">
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
            <p class="p-top-interview__title-ja">インタビュー動画</p>
            <p class="p-top-interview__title-en">Interview<br>Movie</p>
          </div>

          <div class="p-top-interview__actions">


            <div class="p-top-interview__nav" aria-label="インタビュースライダーナビゲーション">
              <button class="p-top-interview__prev" type="button" aria-label="前へ">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/interview/interview-arrow.svg" alt="" width="20" height="20">
              </button>
              <button class="p-top-interview__next" type="button" aria-label="次へ">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/interview/interview-arrow.svg" alt="" width="20" height="20">
              </button>
            </div>

            <a class="p-top-interview__more" href="#">
              <span class="p-top-interview__more-text">一覧を見る</span>
              <span class="p-top-interview__more-divider" aria-hidden="true"></span>
              <span class="p-top-interview__more-icon" aria-hidden="true">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/interview/interview-arrow.svg" alt="" width="20" height="20">
              </span>
            </a>
          </div>
        </div>
        <div class="p-top-interview__right">
          <div class="swiper p-top-interview__swiper js-top-interview-swiper">
            <div class="swiper-wrapper p-top-interview__tracks">
              <div class="swiper-slide p-top-interview__slide">
                <a class="p-top-interview__card" href="#">
                  <figure class="p-top-interview__thumb">
                    <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/interview/interview-1.png" alt="" width="339" height="460">
                  </figure>
                  <p class="p-top-interview__text">親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の。</p>
                  <p class="p-top-interview__name">田中 太郎</p>
                </a>
              </div>

              <div class="swiper-slide p-top-interview__slide">
                <a class="p-top-interview__card" href="#">
                  <figure class="p-top-interview__thumb">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/interview/interview-2.png" alt="" width="339" height="460">
                  </figure>
                  <p class="p-top-interview__text">親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の。</p>
                  <p class="p-top-interview__name">田中 太郎</p>
                </a>
              </div>

              <div class="swiper-slide p-top-interview__slide">
                <a class="p-top-interview__card" href="#">
                  <figure class="p-top-interview__thumb">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/interview/interview-1.png" alt="" width="339" height="460">
                  </figure>
                  <p class="p-top-interview__text">親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の。</p>
                  <p class="p-top-interview__name">田中 太郎</p>
                </a>
              </div>

              <div class="swiper-slide p-top-interview__slide">
                <a class="p-top-interview__card" href="#">
                  <figure class="p-top-interview__thumb">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/interview/interview-2.png" alt="" width="339" height="460">
                  </figure>
                  <p class="p-top-interview__text">親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の。</p>
                  <p class="p-top-interview__name">田中 太郎</p>
                </a>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>

  <section class="p-company">
    <div class="l-inner">
      <div class="p-company__head">
        <p class="p-company__title-ja">会社情報</p>
        <p class="p-company__title-en">Company</p>
      </div>

      <div class="p-company__cards">
        <a class="p-company__card" href="#">
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

            <div class="p-company__card-media">
              <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/company/company-message-2367a4.png" alt="" width="230" height="320">
              <span class="p-company__card-label" aria-hidden="true">Message</span>
            </div>
          </div>
        </a>

        <span class="p-company__divider" aria-hidden="true"></span>

        <a class="p-company__card" href="#">
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

            <div class="p-company__card-media">
              <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/company/company-information.png" alt="" width="230" height="320">
              <span class="p-company__card-label p-company__card-label--left" aria-hidden="true">Information</span>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>

  <section class="p-submit">
    <div class="p-submit__bg js-ribbon">
      <svg viewBox="0 0 1440 443" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_115_1543)">
          <g filter="url(#filter0_n_115_1543)">
            <path d="M1796.54 389.206C1785.04 388.971 1773.55 388.5 1762.07 387.794C1750.63 387.078 1739.2 386.127 1727.78 384.92C1716.32 383.714 1704.89 382.253 1693.48 380.526C1682.05 378.8 1670.64 376.809 1659.27 374.544C1647.91 372.278 1636.58 369.738 1625.31 366.903C1614.05 364.079 1602.84 360.97 1591.67 357.556C1580.55 354.153 1569.47 350.446 1558.46 346.434C1547.49 342.433 1536.56 338.117 1525.74 333.478C1514.94 328.849 1504.21 323.896 1493.59 318.619C1483.06 313.392 1472.64 307.841 1462.34 301.956C1451.95 296.022 1441.69 289.765 1431.57 283.154C1421.45 276.544 1411.46 269.58 1401.64 262.273C1391.79 254.947 1382.11 247.277 1372.61 239.254C1363 231.143 1353.6 222.669 1344.34 213.93C1335.01 205.143 1325.83 196.1 1316.72 186.929C1307.6 177.759 1298.55 168.471 1289.51 159.183C1280.47 149.905 1271.43 140.636 1262.3 131.486C1253.22 122.384 1244.06 113.41 1234.74 104.691C1225.43 95.9814 1215.98 87.527 1206.3 79.4846C1196.64 71.452 1186.76 63.8019 1176.64 56.7206C1166.84 49.8747 1156.81 43.5585 1146.53 37.8994C1136.46 32.3481 1126.19 27.4148 1115.75 23.0895C1105.33 18.7741 1094.77 15.0667 1084.09 11.9576C1073.41 8.84856 1062.62 6.35737 1051.76 4.45465C1040.87 2.55193 1029.93 1.2671 1018.96 0.590362C1010.7 0.0705464 1002.44 -0.105995 994.187 0.0607385L809 3.74849C817.258 3.58175 825.525 3.75829 833.775 4.27811C844.74 4.96466 855.688 6.23968 866.575 8.1424C877.429 10.0451 888.222 12.5363 898.904 15.6454C909.577 18.7545 920.146 22.4618 930.562 26.7773C940.994 31.1025 951.272 36.0359 961.343 41.5871C971.612 47.2462 981.649 53.5625 991.454 60.4084C1001.58 67.4896 1011.46 75.1299 1021.12 83.1723C1030.79 91.2148 1040.25 99.6691 1049.55 108.379C1058.87 117.088 1068.03 126.072 1077.11 135.174C1086.23 144.324 1095.28 153.602 1104.32 162.871C1113.37 172.159 1122.41 181.447 1131.53 190.617C1140.64 199.788 1149.82 208.83 1159.15 217.618C1168.42 226.347 1177.82 234.831 1187.43 242.942C1196.92 250.965 1206.61 258.635 1216.45 265.961C1226.28 273.268 1236.26 280.231 1246.38 286.842C1256.51 293.443 1266.77 299.71 1277.15 305.644C1287.45 311.528 1297.88 317.079 1308.4 322.307C1319.02 327.584 1329.75 332.537 1340.55 337.166C1351.38 341.795 1362.29 346.12 1373.27 350.122C1384.28 354.143 1395.36 357.841 1406.49 361.244C1417.64 364.657 1428.86 367.776 1440.12 370.591C1451.4 373.426 1462.73 375.966 1474.08 378.231C1485.45 380.497 1496.86 382.488 1508.29 384.214C1519.7 385.94 1531.13 387.392 1542.59 388.608C1554.01 389.814 1565.44 390.766 1576.88 391.482C1588.37 392.188 1599.86 392.659 1611.35 392.894C1623.19 393.139 1635.02 393.12 1646.84 392.894L1832.03 389.206C1820.21 389.442 1808.37 389.461 1796.54 389.206Z" fill="url(#paint0_linear_115_1543)" />
          </g>
          <g filter="url(#filter1_n_115_1543)">
            <path d="M320.918 438.338C309.747 438.034 298.576 437.171 287.456 435.788C276.285 434.415 265.165 432.522 254.105 430.149C242.968 427.766 231.891 424.892 220.909 421.557C209.892 418.223 198.962 414.417 188.134 410.19C177.298 405.953 166.573 401.284 155.978 396.214C145.425 391.163 134.993 385.71 124.698 379.864C114.429 374.028 104.297 367.81 94.3203 361.219C84.0341 354.413 73.9111 347.253 63.917 339.779C53.8714 332.267 43.9718 324.44 34.2098 316.329C24.4563 308.228 14.8575 299.842 5.3877 291.221C-4.065 282.619 -13.363 273.773 -22.5493 264.72C-31.77 255.628 -40.8531 246.311 -49.8246 236.836C-58.8132 227.333 -67.6902 217.642 -76.4554 207.815C-85.2378 197.968 -93.9171 187.964 -102.502 177.852C-111.069 167.76 -119.542 157.55 -127.938 147.252C-136.385 136.885 -144.755 126.43 -153.082 115.886C-161.401 105.362 -169.659 94.7503 -177.891 84.099C-186.107 73.4574 -194.296 62.7669 -202.451 52.0567C-210.589 41.3564 -218.71 30.6462 -226.83 19.9263L-412 23.6336C-403.879 34.3438 -395.767 45.0638 -387.621 55.7641C-379.466 66.4743 -371.285 77.1648 -363.061 87.8063C-354.837 98.4576 -346.579 109.06 -338.252 119.594C-329.933 130.127 -321.555 140.592 -313.108 150.959C-304.703 161.257 -296.239 171.477 -287.671 181.559C-279.087 191.671 -270.407 201.675 -261.625 211.522C-252.86 221.35 -243.991 231.03 -234.994 240.544C-226.023 250.028 -216.939 259.336 -207.719 268.427C-198.541 277.48 -189.235 286.327 -179.782 294.928C-170.321 303.549 -160.713 311.935 -150.96 320.036C-141.206 328.138 -131.307 335.964 -121.253 343.487C-111.258 350.96 -101.135 358.12 -90.8492 364.927C-80.881 371.518 -70.7408 377.736 -60.4717 383.571C-50.1855 389.417 -39.7446 394.86 -29.192 399.921C-18.5878 405.002 -7.86325 409.67 2.96439 413.897C13.792 418.134 24.7227 421.93 35.7394 425.265C46.7303 428.599 57.7985 431.473 68.9355 433.856C79.9951 436.23 91.115 438.123 102.286 439.496C113.415 440.869 124.577 441.732 135.749 442.046C138.421 442.124 141.085 442.164 143.758 442.173C146.43 442.183 149.094 442.173 151.767 442.114L336.954 438.427C331.617 438.535 326.281 438.505 320.944 438.358L320.918 438.338Z" fill="url(#paint1_linear_115_1543)" />
          </g>
          <g filter="url(#filter2_n_115_1543)">
            <path d="M804.116 3.83468C800.816 3.90333 797.525 4.02103 794.234 4.19757C783.277 4.77623 772.346 5.95317 761.476 7.72839C750.639 9.4938 739.855 11.8477 729.182 14.7998C718.543 17.7324 708.008 21.2632 697.619 25.3825C687.178 29.5214 676.9 34.2488 666.811 39.5744C656.749 44.8903 646.875 50.7652 637.25 57.2482C634.878 58.8468 632.524 60.4749 630.178 62.1423C629.387 62.7111 628.605 63.2996 627.806 63.8684C626.268 64.9865 624.721 66.0948 623.191 67.2423C623.131 67.2914 623.071 67.3306 623.002 67.3796C621.559 68.4585 620.141 69.5766 618.714 70.6849C617.975 71.2537 617.236 71.8128 616.506 72.3914C614.289 74.1372 612.089 75.9125 609.897 77.7171C601.356 84.7591 593.037 92.2131 584.917 100.001C576.762 107.817 568.813 115.958 561.027 124.344C553.199 132.768 545.542 141.458 538.014 150.315C530.495 159.171 523.105 168.185 515.792 177.326C508.427 186.525 501.149 195.833 493.904 205.18C486.643 214.536 479.425 223.932 472.198 233.328C465.005 242.656 457.804 251.973 450.534 261.202C443.255 270.451 435.917 279.611 428.466 288.635C421.05 297.609 413.522 306.436 405.831 315.057C398.226 323.58 390.466 331.897 382.517 339.91C374.543 347.952 366.379 355.691 357.992 363.047C356.016 364.773 354.03 366.479 352.028 368.166C351.384 368.716 350.731 369.245 350.078 369.785C348.72 370.922 347.353 372.05 345.987 373.159C345.205 373.786 344.423 374.404 343.641 375.032C342.378 376.032 341.123 377.033 339.851 378.023C339.026 378.671 338.193 379.298 337.359 379.936C335.649 381.24 333.931 382.545 332.203 383.81C323.077 390.509 313.719 396.688 304.129 402.268C294.057 408.124 283.728 413.312 273.219 417.843C262.803 422.345 252.199 426.18 241.475 429.387C230.785 432.584 219.974 435.154 209.095 437.106C198.156 439.067 187.139 440.411 176.105 441.186C170.734 441.558 165.355 441.804 159.967 441.912L345.154 438.224C350.533 438.116 355.912 437.88 361.292 437.498C372.326 436.723 383.342 435.38 394.282 433.418C405.161 431.466 415.963 428.897 426.662 425.699C437.377 422.492 447.982 418.657 458.405 414.155C468.915 409.624 479.236 404.446 489.316 398.581C498.906 393 508.264 386.821 517.39 380.122C518.473 379.328 519.547 378.523 520.63 377.719C521.274 377.239 521.91 376.738 522.546 376.248C523.38 375.611 524.213 374.973 525.038 374.336C526.31 373.355 527.573 372.354 528.828 371.344C529.61 370.716 530.392 370.099 531.174 369.471C532.549 368.363 533.907 367.235 535.264 366.097C535.917 365.557 536.57 365.018 537.215 364.479C539.217 362.792 541.202 361.085 543.179 359.359C551.566 352.003 559.73 344.265 567.704 336.222C575.662 328.209 583.421 319.882 591.018 311.369C598.7 302.748 606.228 293.921 613.653 284.947C621.103 275.924 628.451 266.763 635.721 257.514C642.991 248.285 650.192 238.968 657.384 229.641C664.62 220.254 671.83 210.859 679.091 201.492C686.335 192.135 693.623 182.828 700.979 173.638C708.292 164.507 715.682 155.483 723.201 146.627C730.729 137.77 738.385 129.081 746.214 120.656C753.999 112.26 761.948 104.12 770.103 96.3128C778.224 88.5253 786.542 81.0616 795.084 74.0294C797.267 72.2247 799.476 70.4495 801.693 68.7037C802.423 68.1349 803.154 67.5758 803.884 67.0168C805.379 65.8594 806.866 64.6923 808.378 63.5644C809.908 62.4169 811.446 61.3086 812.993 60.1905C813.783 59.6217 814.565 59.0234 815.365 58.4643C817.702 56.797 820.065 55.1689 822.437 53.5702C832.062 47.097 841.935 41.2123 851.998 35.8965C862.078 30.5708 872.364 25.8435 882.805 21.7046C893.186 17.5853 903.73 14.0544 914.369 11.1219C925.042 8.16974 935.826 5.82567 946.662 4.05045C957.533 2.27523 968.464 1.09829 979.42 0.519628C982.711 0.343087 986.011 0.225393 989.303 0.156738L804.116 3.84449V3.83468Z" fill="#616161" />
          </g>
        </g>
        <defs>
          <filter id="filter0_n_115_1543" x="809" y="0" width="1023.03" height="393.071" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix" />
            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
            <feTurbulence type="fractalNoise" baseFrequency="1 1" stitchTiles="stitch" numOctaves="3" result="noise" seed="5530" />
            <feColorMatrix in="noise" type="luminanceToAlpha" result="alphaNoise" />
            <feComponentTransfer in="alphaNoise" result="coloredNoise1">
              <feFuncA type="discrete" tableValues="1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 " />
            </feComponentTransfer>
            <feComposite operator="in" in2="shape" in="coloredNoise1" result="noise1Clipped" />
            <feFlood flood-color="rgba(0, 0, 0, 0.3)" result="color1Flood" />
            <feComposite operator="in" in2="noise1Clipped" in="color1Flood" result="color1" />
            <feMerge result="effect1_noise_115_1543">
              <feMergeNode in="shape" />
              <feMergeNode in="color1" />
            </feMerge>
          </filter>
          <filter id="filter1_n_115_1543" x="-412" y="19.9263" width="748.954" height="422.25" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix" />
            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
            <feTurbulence type="fractalNoise" baseFrequency="1 1" stitchTiles="stitch" numOctaves="3" result="noise" seed="5530" />
            <feColorMatrix in="noise" type="luminanceToAlpha" result="alphaNoise" />
            <feComponentTransfer in="alphaNoise" result="coloredNoise1">
              <feFuncA type="discrete" tableValues="1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 " />
            </feComponentTransfer>
            <feComposite operator="in" in2="shape" in="coloredNoise1" result="noise1Clipped" />
            <feFlood flood-color="rgba(0, 0, 0, 0.3)" result="color1Flood" />
            <feComposite operator="in" in2="noise1Clipped" in="color1Flood" result="color1" />
            <feMerge result="effect1_noise_115_1543">
              <feMergeNode in="shape" />
              <feMergeNode in="color1" />
            </feMerge>
          </filter>
          <filter id="filter2_n_115_1543" x="159.967" y="0.156738" width="829.336" height="441.755" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix" />
            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
            <feTurbulence type="fractalNoise" baseFrequency="1 1" stitchTiles="stitch" numOctaves="3" result="noise" seed="5530" />
            <feColorMatrix in="noise" type="luminanceToAlpha" result="alphaNoise" />
            <feComponentTransfer in="alphaNoise" result="coloredNoise1">
              <feFuncA type="discrete" tableValues="1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 " />
            </feComponentTransfer>
            <feComposite operator="in" in2="shape" in="coloredNoise1" result="noise1Clipped" />
            <feFlood flood-color="rgba(0, 0, 0, 0.3)" result="color1Flood" />
            <feComposite operator="in" in2="noise1Clipped" in="color1Flood" result="color1" />
            <feMerge result="effect1_noise_115_1543">
              <feMergeNode in="shape" />
              <feMergeNode in="color1" />
            </feMerge>
          </filter>
          <linearGradient id="paint0_linear_115_1543" x1="1458.82" y1="215.492" x2="1061.89" y2="71.5416" gradientUnits="userSpaceOnUse">
            <stop stop-color="#39393A" stop-opacity="0" />
            <stop offset="1" stop-color="#39393A" />
          </linearGradient>
          <linearGradient id="paint1_linear_115_1543" x1="-225" y1="205.313" x2="119.496" y2="437.69" gradientUnits="userSpaceOnUse">
            <stop stop-color="#39393A" stop-opacity="0" />
            <stop offset="1" stop-color="#39393A" />
          </linearGradient>
          <clipPath id="clip0_115_1543">
            <rect width="2244" height="443" fill="white" transform="translate(-412)" />
          </clipPath>
        </defs>
      </svg>

    </div>
    <div class="l-inner">
      <div class="p-submit__content">
        <div class="p-submit__cta">
          <a class="p-submit__ctaCard p-submit__ctaCard--reservation" href="#">
            <div class="p-submit__ctaCardInner">
              <p class="p-submit__ctaJa">
                <span class="p-submit__dot" aria-hidden="true"></span>
                ハイヤーのご予約
                <span class="p-submit__dot" aria-hidden="true"></span>
              </p>
              <p class="p-submit__ctaEn">Reservation</p>
            </div>
          </a>
          <div class="p-submit__row">

            <a class="p-submit__ctaCard mt0" href="#">
              <div class="p-submit__ctaCardInner">
                <p class="p-submit__ctaJa p-submit__ctaJa--dark">
                  <span class="p-submit__dot" aria-hidden="true"></span>
                  募集要項
                  <span class="p-submit__dot" aria-hidden="true"></span>
                </p>
                <p class="p-submit__ctaEn p-submit__ctaEn--dark">Guidelines</p>
              </div>
            </a>

            <a class="p-submit__ctaCard p-submit__ctaCard--entry mt0" href="#">
              <div class="p-submit__ctaCardInner">
                <p class="p-submit__ctaJa">
                  <span class="p-submit__dot p-submit__dot--line" aria-hidden="true"></span>
                  エントリー
                  <span class="p-submit__dot p-submit__dot--line" aria-hidden="true"></span>
                </p>
                <p class="p-submit__ctaEn">Entry</p>
              </div>
            </a>
          </div>

        </div>


      </div>
    </div>
  </section>

</main>
<?php get_footer() ?>