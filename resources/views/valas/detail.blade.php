@extends('layouts.app')

@section('content')
<div class="pagetitle">
    <h1>Detail Valas</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
        <li class="breadcrumb-item"><a href="/valas">Valas</a></li>
        <li class="breadcrumb-item active">Detail</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Area Chart</h5>
    
                  <!-- Area Chart -->
                  <div id="areaChart" style="min-height: 365px;">
                    <div id="apexchartspyneyfis" class="apexcharts-canvas apexchartspyneyfis apexcharts-theme-light" style="width: 546px; height: 350px;">
                        <svg id="SvgjsSvg1097" width="546" height="350" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                    <foreignObject x="0" y="0" width="546" height="350">
                        <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 175px;">
                        </div>
                </foreignObject>
                    <text id="SvgjsText1100" font-family="Helvetica, Arial, sans-serif" x="10" y="44.5" text-anchor="start" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-subtitle-text" style="font-family: Helvetica, Arial, sans-serif; opacity: 1;">Price Movements</text>

                    <rect id="SvgjsRect1104" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1198" class="apexcharts-yaxis" rel="0" transform="translate(514.234375, 0)"><g id="SvgjsG1199" class="apexcharts-yaxis-texts-g">
                        <text id="SvgjsText1201" font-family="Helvetica, Arial, sans-serif" x="-20" y="50.6" text-anchor="start" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                        <tspan id="SvgjsTspan1202">9600.00</tspan>
                        <title>9600.00</title></text>
                        <text id="SvgjsText1204" font-family="Helvetica, Arial, sans-serif" x="-20" y="95.46666666666667" text-anchor="start" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1205">9300.00</tspan><title>9300.00</title></text><text id="SvgjsText1207" font-family="Helvetica, Arial, sans-serif" x="-20" y="140.33333333333334" text-anchor="start" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1208">9000.00</tspan><title>9000.00</title></text><text id="SvgjsText1210" font-family="Helvetica, Arial, sans-serif" x="-20" y="185.20000000000002" text-anchor="start" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1211">8700.00</tspan><title>8700.00</title></text><text id="SvgjsText1213" font-family="Helvetica, Arial, sans-serif" x="-20" y="230.0666666666667" text-anchor="start" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1214">8400.00</tspan><title>8400.00</title></text><text id="SvgjsText1216" font-family="Helvetica, Arial, sans-serif" x="-20" y="274.9333333333334" text-anchor="start" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1217">8100.00</tspan><title>8100.00</title></text><text id="SvgjsText1219" font-family="Helvetica, Arial, sans-serif" x="-20" y="319.80000000000007" text-anchor="start" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1220">7800.00</tspan><title>7800.00</title></text></g></g><g id="SvgjsG1099" class="apexcharts-inner apexcharts-graphical" transform="translate(14, 49)"><defs id="SvgjsDefs1098"><clipPath id="gridRectMaskpyneyfis"><rect id="SvgjsRect1133" width="477.234375" height="273.2" x="-4" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskpyneyfis"></clipPath><clipPath id="nonForecastMaskpyneyfis"></clipPath><clipPath id="gridRectMarkerMaskpyneyfis"><rect id="SvgjsRect1134" width="473.234375" height="273.2" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1139" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1140" stop-opacity="0.65" stop-color="rgba(0,143,251,0.65)" offset="0"></stop><stop id="SvgjsStop1141" stop-opacity="0.5" stop-color="rgba(128,199,253,0.5)" offset="1"></stop><stop id="SvgjsStop1142" stop-opacity="0.5" stop-color="rgba(128,199,253,0.5)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1105" x1="168.424375" y1="0" x2="168.424375" y2="269.2" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="168.424375" y="0" width="1" height="269.2" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><line id="SvgjsLine1149" x1="61.78252604166667" y1="270.2" x2="61.78252604166667" y2="276.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1150" x1="118.09065104166666" y1="270.2" x2="118.09065104166666" y2="276.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1151" x1="174.39877604166665" y1="270.2" x2="174.39877604166665" y2="276.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1152" x1="230.70690104166664" y1="270.2" x2="230.70690104166664" y2="276.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1153" x1="287.01502604166666" y1="270.2" x2="287.01502604166666" y2="276.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1154" x1="343.32315104166673" y1="270.2" x2="343.32315104166673" y2="276.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1155" x1="399.6312760416668" y1="270.2" x2="399.6312760416668" y2="276.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1156" x1="455.9394010416669" y1="270.2" x2="455.9394010416669" y2="276.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><g id="SvgjsG1145" class="apexcharts-grid"><g id="SvgjsG1146" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1158" x1="0" y1="44.86666666666667" x2="469.234375" y2="44.86666666666667" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1159" x1="0" y1="89.73333333333333" x2="469.234375" y2="89.73333333333333" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1160" x1="0" y1="134.6" x2="469.234375" y2="134.6" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1161" x1="0" y1="179.46666666666667" x2="469.234375" y2="179.46666666666667" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1162" x1="0" y1="224.33333333333334" x2="469.234375" y2="224.33333333333334" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1147" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1165" x1="0" y1="269.2" x2="469.234375" y2="269.2" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1164" x1="0" y1="1" x2="0" y2="269.2" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1135" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1136" class="apexcharts-series" seriesName="STOCKxABC" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1143" d="M0 269.20000000000005L0 223.15932222222227L18.769375 220.14577777777777L37.53875 220.90851111111124L56.308125 214.53744444444442L75.0775 188.33531111111097L131.385625 175.92219999999998L150.155 175.9521111111112L168.924375 162.37246666666692L187.69375 167.2255444444445L206.463125 166.35064444444447L262.77125 163.47917777777798L281.540625 145.6371999999999L300.31 139.2437L319.079375 149.21157777777785L337.84875 148.4264111111113L394.156875 162.58184444444464L412.92625 165.0719444444444L431.695625 149.4583444444445L450.465 107.51548888888897L469.234375 38.75732222222223C469.234375 38.75732222222223 469.234375 269.20000000000005 469.234375 269.20000000000005M469.234375 38.75732222222223C469.234375 38.75732222222223 469.234375 38.75732222222223 469.234375 38.75732222222223 " fill="url(#SvgjsLinearGradient1139)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskpyneyfis)" pathTo="M 0 269.2 L 0 223.15932222222227 L 18.769375 220.14577777777777 L 37.53875 220.90851111111124 L 56.308125 214.53744444444442 L 75.0775 188.33531111111097 L 131.385625 175.92219999999998 L 150.155 175.9521111111112 L 168.924375 162.37246666666692 L 187.69375 167.2255444444445 L 206.463125 166.35064444444447 L 262.77125 163.47917777777798 L 281.540625 145.6371999999999 L 300.31 139.2437 L 319.079375 149.21157777777785 L 337.84875 148.4264111111113 L 394.156875 162.58184444444464 L 412.92625 165.0719444444444 L 431.695625 149.4583444444445 L 450.465 107.51548888888897 L 469.234375 38.75732222222223 L 469.234375 269.2M 469.234375 38.75732222222223z" pathFrom="M -1 1435.7333333333333 L -1 1435.7333333333333 L 18.769375 1435.7333333333333 L 37.53875 1435.7333333333333 L 56.308125 1435.7333333333333 L 75.0775 1435.7333333333333 L 131.385625 1435.7333333333333 L 150.155 1435.7333333333333 L 168.924375 1435.7333333333333 L 187.69375 1435.7333333333333 L 206.463125 1435.7333333333333 L 262.77125 1435.7333333333333 L 281.540625 1435.7333333333333 L 300.31 1435.7333333333333 L 319.079375 1435.7333333333333 L 337.84875 1435.7333333333333 L 394.156875 1435.7333333333333 L 412.92625 1435.7333333333333 L 431.695625 1435.7333333333333 L 450.465 1435.7333333333333 L 469.234375 1435.7333333333333"></path><path id="SvgjsPath1144" d="M0 223.15932222222227L18.769375 220.14577777777777L37.53875 220.90851111111124L56.308125 214.53744444444442L75.0775 188.33531111111097L131.385625 175.92219999999998L150.155 175.9521111111112L168.924375 162.37246666666692L187.69375 167.2255444444445L206.463125 166.35064444444447L262.77125 163.47917777777798L281.540625 145.6371999999999L300.31 139.2437L319.079375 149.21157777777785L337.84875 148.4264111111113L394.156875 162.58184444444464L412.92625 165.0719444444444L431.695625 149.4583444444445L450.465 107.51548888888897L469.234375 38.75732222222223C469.234375 38.75732222222223 469.234375 38.75732222222223 469.234375 38.75732222222223 " fill="none" fill-opacity="1" stroke="#008ffb" stroke-opacity="1" stroke-linecap="butt" stroke-width="4" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskpyneyfis)" pathTo="M 0 223.15932222222227 L 18.769375 220.14577777777777 L 37.53875 220.90851111111124 L 56.308125 214.53744444444442 L 75.0775 188.33531111111097 L 131.385625 175.92219999999998 L 150.155 175.9521111111112 L 168.924375 162.37246666666692 L 187.69375 167.2255444444445 L 206.463125 166.35064444444447 L 262.77125 163.47917777777798 L 281.540625 145.6371999999999 L 300.31 139.2437 L 319.079375 149.21157777777785 L 337.84875 148.4264111111113 L 394.156875 162.58184444444464 L 412.92625 165.0719444444444 L 431.695625 149.4583444444445 L 450.465 107.51548888888897 L 469.234375 38.75732222222223" pathFrom="M -1 1435.7333333333333 L -1 1435.7333333333333 L 18.769375 1435.7333333333333 L 37.53875 1435.7333333333333 L 56.308125 1435.7333333333333 L 75.0775 1435.7333333333333 L 131.385625 1435.7333333333333 L 150.155 1435.7333333333333 L 168.924375 1435.7333333333333 L 187.69375 1435.7333333333333 L 206.463125 1435.7333333333333 L 262.77125 1435.7333333333333 L 281.540625 1435.7333333333333 L 300.31 1435.7333333333333 L 319.079375 1435.7333333333333 L 337.84875 1435.7333333333333 L 394.156875 1435.7333333333333 L 412.92625 1435.7333333333333 L 431.695625 1435.7333333333333 L 450.465 1435.7333333333333 L 469.234375 1435.7333333333333" fill-rule="evenodd"></path><g id="SvgjsG1137" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1224" r="0" cx="168.924375" cy="162.37246666666692" class="apexcharts-marker wk19s14cl no-pointer-events" stroke="#ffffff" fill="#008ffb" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1138" class="apexcharts-datalabels" data:realIndex="0"></g></g><g id="SvgjsG1148" class="apexcharts-grid-borders"><line id="SvgjsLine1157" x1="0" y1="0" x2="469.234375" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1163" x1="0" y1="269.2" x2="469.234375" y2="269.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1197" x1="0" y1="270.2" x2="469.234375" y2="270.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line></g><line id="SvgjsLine1166" x1="0" y1="0" x2="469.234375" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1167" x1="0" y1="0" x2="469.234375" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1168" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1169" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1171" font-family="Helvetica, Arial, sans-serif" x="5.474401041666667" y="298.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1172"></tspan><title></title></text><text id="SvgjsText1174" font-family="Helvetica, Arial, sans-serif" x="61.78252604166667" y="298.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1175">16 Nov</tspan><title>16 Nov</title></text><text id="SvgjsText1177" font-family="Helvetica, Arial, sans-serif" x="118.09065104166666" y="298.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1178">19 Nov</tspan><title>19 Nov</title></text><text id="SvgjsText1180" font-family="Helvetica, Arial, sans-serif" x="174.39877604166665" y="298.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1181">22 Nov</tspan><title>22 Nov</title></text><text id="SvgjsText1183" font-family="Helvetica, Arial, sans-serif" x="230.70690104166664" y="298.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1184">25 Nov</tspan><title>25 Nov</title></text><text id="SvgjsText1186" font-family="Helvetica, Arial, sans-serif" x="287.01502604166666" y="298.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1187">28 Nov</tspan><title>28 Nov</title></text><text id="SvgjsText1189" font-family="Helvetica, Arial, sans-serif" x="343.32315104166673" y="298.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1190">Dec '17</tspan><title>Dec '17</title></text><text id="SvgjsText1192" font-family="Helvetica, Arial, sans-serif" x="399.6312760416668" y="298.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1193">04 Dec</tspan><title>04 Dec</title></text><text id="SvgjsText1195" font-family="Helvetica, Arial, sans-serif" x="455.9394010416669" y="298.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1196">07 Dec</tspan><title>07 Dec</title></text></g></g><g id="SvgjsG1221" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1222" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1223" class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light" style="left: 193.924px; top: 165.372px;"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">21 Nov</div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 143, 251);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">STOCK ABC: </span><span class="apexcharts-tooltip-text-y-value">8514.30</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light" style="left: 152.409px; top: 320.2px;"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; min-width: 35.353px;">21 Nov</div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-right apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div><div class="apexcharts-toolbar" style="top: 0px; right: 3px;"><div class="apexcharts-menu-icon" title="Menu"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path></svg></div><div class="apexcharts-menu"><div class="apexcharts-menu-item exportSVG" title="Download SVG">Download SVG</div><div class="apexcharts-menu-item exportPNG" title="Download PNG">Download PNG</div><div class="apexcharts-menu-item exportCSV" title="Download CSV">Download CSV</div></div></div></div></div>
    
                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      const series = {
                        "monthDataSeries1": {
                          "prices": [
                            8107.85,
                            8128.0,
                            8122.9,
                            8165.5,
                            8340.7,
                            8423.7,
                            8423.5,
                            8514.3,
                            8481.85,
                            8487.7,
                            8506.9,
                            8626.2,
                            8668.95,
                            8602.3,
                            8607.55,
                            8512.9,
                            8496.25,
                            8600.65,
                            8881.1,
                            9340.85
                          ],
                          "dates": [
                            "13 Nov 2017",
                            "14 Nov 2017",
                            "15 Nov 2017",
                            "16 Nov 2017",
                            "17 Nov 2017",
                            "20 Nov 2017",
                            "21 Nov 2017",
                            "22 Nov 2017",
                            "23 Nov 2017",
                            "24 Nov 2017",
                            "27 Nov 2017",
                            "28 Nov 2017",
                            "29 Nov 2017",
                            "30 Nov 2017",
                            "01 Dec 2017",
                            "04 Dec 2017",
                            "05 Dec 2017",
                            "06 Dec 2017",
                            "07 Dec 2017",
                            "08 Dec 2017"
                          ]
                        }
                      }
                      new ApexCharts(document.querySelector("#areaChart"), {
                        series: [{
                          name: "STOCK ABC",
                          data: {{ $valas_nilai_jual }},
                        }],
                        chart: {
                          type: 'area',
                          height: 350,
                          zoom: {
                            enabled: false
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'straight'
                        },
                        subtitle: {
                          text: 'Price Movements',
                          align: 'left'
                        },
                        labels: {{ $valas_tanggal_rate }},
                        xaxis: {
                          type: 'datetime',
                        },
                        yaxis: {
                          opposite: true
                        },
                        legend: {
                          horizontalAlign: 'left'
                        }
                      }).render();
                    });
                  </script>
                  <!-- End Area Chart -->
    
                </div>
              </div>
        </div>
    </div>
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Valas</h5>
                
                <!-- Valas -->
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th data-sortable="true">#</th>
                            <th data-sortable="true">Nama</th>
                            <th data-sortable="true">Nilai Jual</th>
                            <th data-sortable="true">Nilai Beli</th>
                            <th data-sortable="true">Tanggal Rate</th>
                            <th data-sortable="true">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($valas as $va)
                        <tr data-index="{{ $loop->iteration }}">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $va->nama }}</td>
                            <td>{{ $va->nilai_jual }}</td>
                            <td>{{ $va->nilai_beli }}</td>
                            <td>{{ $va->tanggal_rate }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic outlined example">
                                  <a href="/valas/{{ $va->id }}/edit" class="btn btn-outline-warning">Edit</a>
                                  <form action="/valas/{{ $va->id }}/delete" method="POST" onsubmit="return confirm('Are you sure you want to delete this valas?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
              <!-- End Table with hoverable rows -->

            </div>
          </div>

      </div>
    </div>
  </section>
  @endsection
