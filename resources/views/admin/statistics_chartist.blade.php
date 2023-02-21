@extends('admin.inc.layout')
@section('title','Statistics Chartist.js')
@section('menustatistics','active open')
@section('menustatistics_chartist','active')
@section('content')
    <main id="js-page-content" role="main" class="page-content">
        <ol class="breadcrumb page-breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">SmartAdmin</a></li>
            <li class="breadcrumb-item">Statistics</li>
            <li class="breadcrumb-item active">Chartist.js</li>
            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
        </ol>
        <div class="subheader">
            <h1 class="subheader-title">
                <i class='subheader-icon fal fa-chart-pie'></i> Chartist.js <sup class='badge badge-primary fw-500'>ADDON</sup>
                <small>
                    Simple responsive charts
                </small>
            </h1>
        </div>
        <div class="alert alert-primary">
            <div class="d-flex flex-start w-100">
                <div class="mr-2 hidden-md-down">
                    <span class="icon-stack icon-stack-lg">
                        <i class="base base-6 icon-stack-3x opacity-100 color-primary-500"></i>
                        <i class="base base-10 icon-stack-2x opacity-100 color-primary-300 fa-flip-vertical"></i>
                        <i class="ni ni-blog-read icon-stack-1x opacity-100 color-white"></i>
                    </span>
                </div>
                <div class="d-flex flex-fill">
                    <div class="flex-fill">
                        <span class="h5">About</span>
                        <p>Chartist's goal is to provide a simple, lightweight and unintrusive library to responsively craft charts on your website. Chartist leverages the power of browsers today and say good bye to the idea of solving all problems ourselves.
                        </p>
                        <p>
                            Chartist works with inline-SVG and therefore leverages the power of the DOM to provide parts of its functionality. This also means that Chartist does not provide it's own event handling, labels, behaviors or anything else that can just be done with plain HTML, JavaScript and CSS. The single and only responsibility of Chartist is to help you drawing "Simple responsive Charts" using inline-SVG in the DOM, CSS to style and JavaScript to provide an API for configuring your charts.</p>
                        <p class="m-0">
                            Find tutorials, guidelines and more on their <a href="https://gionkunz.github.io/chartist-js/getting-started.html" target="_blank">official documentation</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <!-- Line Chart -->
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Area <span class="fw-300"><i>Chart</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Example of line area chart with a color filler
                            </div>
                            <div id="lineChartArea" class="ct-chart" style="width:100%; height:300px;"></div>
                        </div>
                    </div>
                </div>
                <!-- Line Scattered -->
                <div id="panel-2" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Line <span class="fw-300"><i>Scattered</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                This advanced example uses a line chart to draw a scatter diagram. The data object is created with a functional style random mechanism. There is a mobile first responsive configuration using the responsive options to show less labels on small screens.
                            </div>
                            <div id="lineScattered" class="ct-chart" style="width:100%; height:300px;"></div>
                        </div>
                    </div>
                </div>
                <!-- Using Events -->
                <div id="panel-3" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Using <span class="fw-300"><i>Events</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Chartist has fixed graphical representations that are chosen because of their flexibility and to provide a high level of separation of the concerns. However, sometimes you probably would like to use different shapes or even images for your charts. One way to achieve this is by using the draw events and replace or add custom SVG shapes.
                            </div>
                            <div id="usingEvents" class="ct-chart" style="width:100%; height:300px;"></div>
                        </div>
                    </div>
                </div>
                <!-- Bipolar Line Chart -->
                <div id="panel-4" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Bipolar <span class="fw-300"><i>Line Chart</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                You can also only draw the area shapes of the line chart. Area shapes will always be constructed around their areaBase which also allows you to draw nice bi-polar areas.
                            </div>
                            <div id="bipolar" class="ct-chart" style="width:100%; height:300px;"></div>
                        </div>
                    </div>
                </div>
                <!-- Advanced SMIL Animation -->
                <div id="panel-5" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Advanced <span class="fw-300"><i>SMIL Animation</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Chartist provides simple API to animate the Chart elements using SMIL. You can do most animation with CSS but in some cases you'd like to animate SVG properties that are not available in CSS
                            </div>
                            <div id="smileAnimation" class="ct-chart" style="width:100%; height:300px;"></div>
                        </div>
                    </div>
                </div>
                <!-- Horizontal Bar -->
                <div id="panel-6" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Horizontal <span class="fw-300"><i>Bar</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Guess what! Creating horizontal bar charts is as simple as it can get. There's no new chart type you need to learn, just passing an additional option is enough
                            </div>
                            <div id="horizontalBar" class="ct-chart" style="width:100%; height:300px;"></div>
                        </div>
                    </div>
                </div>
                <!-- Peak Circles -->
                <div id="panel-7" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Peak <span class="fw-300"><i>Circles</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                With the help of draw events we are able to add a custom SVG shape to the peak of our bars.
                            </div>
                            <div id="peakCircles" class="ct-chart" style="width:100%; height:300px;"></div>
                        </div>
                    </div>
                </div>
                <!-- Pie Chart -->
                <div id="panel-8" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Pie <span class="fw-300"><i>Chart</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Basic pie chart with label interpolation to show percentage instead of the actual data value
                            </div>
                            <div id="pieChart" class="ct-chart" style="width:100%; height:300px;"></div>
                        </div>
                    </div>
                </div>
                <!-- Overlap Bar (Mobile) -->
                <div id="panel-9" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Overlap <span class="fw-300"><i>Bar (Mobile)</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                This example makes use of label interpolation and the seriesBarDistance property that allows you to make bars overlap over each other. This then can be used to use the available space on mobile better. Resize your browser to see the effect of the responsive configuration.
                            </div>
                            <div id="overlapBarMobile" class="ct-chart" style="width:100%; height:300px;"></div>
                        </div>
                    </div>
                </div>
                <!-- Extream Responsive -->
                <div id="panel-10" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Extream <span class="fw-300"><i>Responsive</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Customized responsive configuration, you can create a chart that adopts to every media condition!
                            </div>
                            <div id="extreamResponsive" class="ct-chart" style="width:100%; height:300px;"></div>
                        </div>
                    </div>
                </div>
                <!-- Gauge Chart -->
                <div id="panel-11" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Gauge <span class="fw-300"><i>Chart</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                This pie chart uses donut, startAngle and total to draw a gauge chart.
                            </div>
                            <div id="gaugeChart" class="ct-chart" style="width:100%; height:300px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <!-- Line Interpolation -->
                <div id="panel-12" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Line <span class="fw-300"><i>Interpolation</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                By default Chartist uses a cardinal spline algorithm to smooth the lines
                            </div>
                            <div id="lineInterpolation" class="ct-chart" style="width:100%; height:300px;"></div>
                        </div>
                    </div>
                </div>
                <!-- Muti Labels -->
                <div id="panel-13" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Muti <span class="fw-300"><i>Labels</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Chartist will figure out if your browser supports foreignObject and it will use them to create labels that are based on regular HTML text elements. Multi-line and regular CSS styles are just two of many benefits while using foreignObjects!
                            </div>
                            <div id="multiLineLabels" class="ct-chart" style="width:100%; height:300px;"></div>
                        </div>
                    </div>
                </div>
                <!-- Series Overrides -->
                <div id="panel-14" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Series <span class="fw-300"><i>Overrides</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                By naming your series using the series object notation with a name property, you can enable the individual configuration of series specific settings. <code>showLine</code>, <code>showPoint</code>, <code>showArea</code> and even the smoothing function can be overriden per series! And guess what? You can even override those series settings in the responsive configuration!
                            </div>
                            <div id="seriesOverrides" class="ct-chart" style="width:100%; height:300px;"></div>
                        </div>
                    </div>
                </div>
                <!-- Stacked Bar -->
                <div id="panel-15" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Stacked <span class="fw-300"><i>Bar</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                You can also set your bar chart to stack the series bars on top of each other easily by using the <code>stackBars</code> property in your configuration.
                            </div>
                            <div id="stackedBar" class="ct-chart" style="width:100%; height:300px;"></div>
                        </div>
                    </div>
                </div>
                <!-- Path Animation -->
                <div id="panel-16" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Path <span class="fw-300"><i>Animation</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Path animation is made easy with the SVG Path API. The API allows you to modify complex SVG paths and transform them for different animation morphing states.
                            </div>
                            <div id="pathAnimation" class="ct-chart" style="width:100%; height:300px;"></div>
                        </div>
                    </div>
                </div>
                <!-- Label Placement -->
                <div id="panel-17" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Label <span class="fw-300"><i>Placement</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                You can change the position of the labels on line and bar charts easily by using the <code>position</code> option inside of the axis configuration.
                            </div>
                            <div id="labelPlacement" class="ct-chart" style="width:100%; height:300px;"></div>
                        </div>
                    </div>
                </div>
                <!-- Bar Chart -->
                <div id="panel-18" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Bar <span class="fw-300"><i>Chart</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                A simple barchart with default configuration
                            </div>
                            <div id="barChart" class="ct-chart" style="width:100%; height:300px;"></div>
                        </div>
                    </div>
                </div>
                <!-- Pie Chart (labels) -->
                <div id="panel-19" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Pie <span class="fw-300"><i>Chart (labels)</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                This pie chart is configured with custom labels specified in the data object
                            </div>
                            <div id="pieChartLabels" class="ct-chart" style="width:100%; height:300px;"></div>
                        </div>
                    </div>
                </div>
                <!-- Distributed Series -->
                <div id="panel-20" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Distributed <span class="fw-300"><i>Series</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Sometime it's desired to have bar charts that show one bar per series distributed along the x-axis. If this option is enabled, you need to make sure that you pass a single series array to Chartist that contains the series values. In this example you can see T-shirt sales of a store categorized by size.
                            </div>
                            <div id="distributedSeries" class="ct-chart" style="width:100%; height:300px;"></div>
                        </div>
                    </div>
                </div>
                <!-- Donut Fill -->
                <div id="panel-21" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Donut <span class="fw-300"><i>Fill</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                This pie chart uses donut and donutSolid to draw a donut chart
                            </div>
                            <div id="donutFill" class="ct-chart" style="width:100%; height:300px;"></div>
                        </div>
                    </div>
                </div>
                <!-- Gauge Fill -->
                <div id="panel-22" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Gauge <span class="fw-300"><i>Fill</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                This pie chart uses total, startAngle, donut and donutSolid to draw a gauge chart.
                            </div>
                            <div id="gaugeChartFill" class="ct-chart" style="width:100%; height:300px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('plugin')
        <!-- plugin Chartist.js : MIT license -->
        <script src="js/statistics/chartist/chartist.js"></script>
        <script>
            /* line chart area */
            var lineChartArea = function()
            {
                new Chartist.Line('#lineChartArea',
                {
                    labels: [1, 2, 3, 4, 5, 6, 7, 8],
                    series: [
                        [5, 9, 7, 8, 5, 3, 5, 4, ]
                    ]
                },
                {
                    low: 0,
                    showArea: true,
                    fullWidth: true
                });
            }
            /* line chart area -- end */

            /* line scattered chart */
            var lineScattered = function()
            {
                var times = function(n)
                {
                    return Array.apply(null, new Array(n));
                };

                var data = times(52).map(Math.random).reduce(function(data, rnd, index)
                {
                    data.labels.push(index + 1);
                    data.series.forEach(function(series)
                    {
                        series.push(Math.random() * 100)
                    });

                    return data;
                },
                {
                    labels: [],
                    series: times(4).map(function()
                    {
                        return new Array()
                    })
                });

                var options = {
                    showLine: false,
                    axisX:
                    {
                        labelInterpolationFnc: function(value, index)
                        {
                            return index % 13 === 0 ? 'W' + value : null;
                        }
                    }
                };

                var responsiveOptions = [
                    ['screen and (min-width: 640px)',
                    {
                        axisX:
                        {
                            labelInterpolationFnc: function(value, index)
                            {
                                return index % 4 === 0 ? 'W' + value : null;
                            }
                        }
                    }]
                ];

                new Chartist.Line('#lineScattered', data, options, responsiveOptions);
            }
            /* line scattered chart -- end */

            /* using events */
            var usingEvents = function()
            {
                var chart = new Chartist.Line('#usingEvents',
                {
                    labels: [1, 2, 3, 4, 5],
                    series: [
                        [12, 9, 7, 8, 5]
                    ]
                });

                // Listening for draw events that get emitted by the Chartist chart
                chart.on('draw', function(data)
                {
                    // If the draw event was triggered from drawing a point on the line chart
                    if (data.type === 'point')
                    {
                        // We are creating a new path SVG element that draws a triangle around the point coordinates
                        var triangle = new Chartist.Svg('path',
                        {
                            d: ['M',
                                data.x,
                                data.y - 15,
                                'L',
                                data.x - 15,
                                data.y + 8,
                                'L',
                                data.x + 15,
                                data.y + 8,
                                'z'
                            ].join(' '),
                            style: 'fill-opacity: 1'
                        }, 'ct-area');

                        // With data.element we get the Chartist SVG wrapper and we can replace the original point drawn by Chartist with our newly created triangle
                        data.element.replace(triangle);
                    }
                });
            }
            /* using events -- end */

            /* bipolar */
            var bipolar = function()
            {
                new Chartist.Line('#bipolar',
                {
                    labels: [1, 2, 3, 4, 5, 6, 7, 8],
                    series: [
                        [1, 2, 3, 1, -2, 0, 1, 0],
                        [-2, -1, -2, -1, -2.5, -1, -2, -1],
                        [0, 0, 0, 1, 2, 2.5, 2, 1],
                        [2.5, 2, 1, 0.5, 1, 0.5, -1, -2.5]
                    ]
                },
                {
                    high: 3,
                    low: -3,
                    showArea: true,
                    showLine: false,
                    showPoint: false,
                    fullWidth: true,
                    axisX:
                    {
                        showLabel: false,
                        showGrid: false
                    }
                });
            }
            /* bipolar -- end */

            /* smile animation */
            var smileAnimation = function()
            {
                var chart = new Chartist.Line('#smileAnimation',
                {
                    labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
                    series: [
                        [12, 9, 7, 8, 5, 4, 6, 2, 3, 3, 4, 6],
                        [4, 5, 3, 7, 3, 5, 5, 3, 4, 4, 5, 5],
                        [5, 3, 4, 5, 6, 3, 3, 4, 5, 6, 3, 4],
                        [3, 4, 5, 6, 7, 6, 4, 5, 6, 7, 6, 3]
                    ]
                },
                {
                    low: 0
                });

                // Let's put a sequence number aside so we can use it in the event callbacks
                var seq = 0,
                    delays = 80,
                    durations = 500;

                // Once the chart is fully created we reset the sequence
                chart.on('created', function()
                {
                    seq = 0;
                });

                // On each drawn element by Chartist we use the Chartist.Svg API to trigger SMIL animations
                chart.on('draw', function(data)
                {
                    seq++;

                    if (data.type === 'line')
                    {
                        // If the drawn element is a line we do a simple opacity fade in. This could also be achieved using CSS3 animations.
                        data.element.animate(
                        {
                            opacity:
                            {
                                // The delay when we like to start the animation
                                begin: seq * delays + 2000,
                                // Duration of the animation
                                dur: durations,
                                // The value where the animation should start
                                from: 0,
                                // The value where it should end
                                to: 1
                            }
                        });
                    }
                    else if (data.type === 'label' && data.axis === 'x')
                    {
                        data.element.animate(
                        {
                            y:
                            {
                                begin: seq * delays,
                                dur: durations,
                                from: data.y + 100,
                                to: data.y,
                                // We can specify an easing function from Chartist.Svg.Easing
                                easing: 'easeOutQuart'
                            }
                        });
                    }
                    else if (data.type === 'label' && data.axis === 'y')
                    {
                        data.element.animate(
                        {
                            x:
                            {
                                begin: seq * delays,
                                dur: durations,
                                from: data.x - 100,
                                to: data.x,
                                easing: 'easeOutQuart'
                            }
                        });
                    }
                    else if (data.type === 'point')
                    {
                        data.element.animate(
                        {
                            x1:
                            {
                                begin: seq * delays,
                                dur: durations,
                                from: data.x - 10,
                                to: data.x,
                                easing: 'easeOutQuart'
                            },
                            x2:
                            {
                                begin: seq * delays,
                                dur: durations,
                                from: data.x - 10,
                                to: data.x,
                                easing: 'easeOutQuart'
                            },
                            opacity:
                            {
                                begin: seq * delays,
                                dur: durations,
                                from: 0,
                                to: 1,
                                easing: 'easeOutQuart'
                            }
                        });
                    }
                    else if (data.type === 'grid')
                    {
                        // Using data.axis we get x or y which we can use to construct our animation definition objects
                        var pos1Animation = {
                            begin: seq * delays,
                            dur: durations,
                            from: data[data.axis.units.pos + '1'] - 30,
                            to: data[data.axis.units.pos + '1'],
                            easing: 'easeOutQuart'
                        };

                        var pos2Animation = {
                            begin: seq * delays,
                            dur: durations,
                            from: data[data.axis.units.pos + '2'] - 100,
                            to: data[data.axis.units.pos + '2'],
                            easing: 'easeOutQuart'
                        };

                        var animations = {};
                        animations[data.axis.units.pos + '1'] = pos1Animation;
                        animations[data.axis.units.pos + '2'] = pos2Animation;
                        animations['opacity'] = {
                            begin: seq * delays,
                            dur: durations,
                            from: 0,
                            to: 1,
                            easing: 'easeOutQuart'
                        };

                        data.element.animate(animations);
                    }
                });

                // For the sake of the example we update the chart every time it's created with a delay of 10 seconds
                chart.on('created', function()
                {
                    if (window.__exampleAnimateTimeout)
                    {
                        clearTimeout(window.__exampleAnimateTimeout);
                        window.__exampleAnimateTimeout = null;
                    }
                    window.__exampleAnimateTimeout = setTimeout(chart.update.bind(chart), 12000);
                });
            }
            /* smile animation -- end */

            /* path animation */
            var pathAnimation = function()
            {
                var chart = new Chartist.Line('#pathAnimation',
                {
                    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                    series: [
                        [1, 5, 2, 5, 4, 3],
                        [2, 3, 4, 8, 1, 2],
                        [5, 4, 3, 2, 1, 0.5]
                    ]
                },
                {
                    low: 0,
                    showArea: true,
                    showPoint: false,
                    fullWidth: true
                });

                chart.on('draw', function(data)
                {
                    if (data.type === 'line' || data.type === 'area')
                    {
                        data.element.animate(
                        {
                            d:
                            {
                                begin: 2000 * data.index,
                                dur: 2000,
                                from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                                to: data.path.clone().stringify(),
                                easing: Chartist.Svg.Easing.easeOutQuint
                            }
                        });
                    }
                });
            }
            /* path animation -- end */

            /* line interpolation */
            var lineInterpolation = function()
            {
                var chart = new Chartist.Line('#lineInterpolation',
                {
                    labels: [1, 2, 3, 4, 5],
                    series: [
                        [1, 5, 10, 0, 1],
                        [10, 15, 0, 1, 2]
                    ]
                },
                {
                    // Remove this configuration to see that chart rendered with cardinal spline interpolation
                    // Sometimes, on large jumps in data values, it's better to use simple smoothing.
                    lineSmooth: Chartist.Interpolation.simple(
                    {
                        divisor: 2
                    }),
                    fullWidth: true,
                    chartPadding:
                    {
                        right: 20
                    },
                    low: 0
                });
            }
            /* line interpolation -- end */

            /* series overrides */
            var seriesOverrides = function()
            {
                var chart = new Chartist.Line('#seriesOverrides',
                {
                    labels: ['1', '2', '3', '4', '5', '6', '7', '8'],
                    // Naming the series with the series object array notation
                    series: [
                    {
                        name: 'series-1',
                        data: [5, 2, -4, 2, 0, -2, 5, -3]
                    },
                    {
                        name: 'series-2',
                        data: [4, 3, 5, 3, 1, 3, 6, 4]
                    },
                    {
                        name: 'series-3',
                        data: [2, 4, 3, 1, 4, 5, 3, 2]
                    }]
                },
                {
                    fullWidth: true,
                    // Within the series options you can use the series names
                    // to specify configuration that will only be used for the
                    // specific series.
                    series:
                    {
                        'series-1':
                        {
                            lineSmooth: Chartist.Interpolation.step()
                        },
                        'series-2':
                        {
                            lineSmooth: Chartist.Interpolation.simple(),
                            showArea: true
                        },
                        'series-3':
                        {
                            showPoint: false
                        }
                    }
                }, [
                    // You can even use responsive configuration overrides to
                    // customize your series configuration even further!
                    ['screen and (max-width: 320px)',
                    {
                        series:
                        {
                            'series-1':
                            {
                                lineSmooth: Chartist.Interpolation.none()
                            },
                            'series-2':
                            {
                                lineSmooth: Chartist.Interpolation.none(),
                                showArea: false
                            },
                            'series-3':
                            {
                                lineSmooth: Chartist.Interpolation.none(),
                                showPoint: true
                            }
                        }
                    }]
                ]);
            }
            /* series overrides -- end */

            /* bar chart */
            var barChart = function()
            {
                var data = {
                    labels: ['W1', 'W2', 'W3', 'W4', 'W5', 'W6', 'W7', 'W8', 'W9', 'W10'],
                    series: [
                        [1, 2, 4, 8, 6, -2, -1, -4, -6, -2]
                    ]
                };

                var options = {
                    high: 10,
                    low: -10,
                    axisX:
                    {
                        labelInterpolationFnc: function(value, index)
                        {
                            return index % 2 === 0 ? value : null;
                        }
                    }
                };

                new Chartist.Bar('#barChart', data, options);
            }
            /* bar chart end */

            /* overlap bar mobile */
            var overlapBarMobile = function()
            {
                var data = {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    series: [
                        [5, 4, 3, 7, 5, 10, 3, 4, 8, 10, 6, 8],
                        [3, 2, 9, 5, 4, 6, 4, 6, 7, 8, 7, 4]
                    ]
                };

                var options = {
                    seriesBarDistance: 10
                };

                var responsiveOptions = [
                    ['screen and (max-width: 640px)',
                    {
                        seriesBarDistance: 5,
                        axisX:
                        {
                            labelInterpolationFnc: function(value)
                            {
                                return value[0];
                            }
                        }
                    }]
                ];

                new Chartist.Bar('#overlapBarMobile', data, options, responsiveOptions);
            }
            /* overlap bar mobile -- end */

            /* peak circles */
            var peakCircles = function()
            {
                // Create a simple bi-polar bar chart
                var chart = new Chartist.Bar('#peakCircles',
                {
                    labels: ['W1', 'W2', 'W3', 'W4', 'W5', 'W6', 'W7', 'W8', 'W9', 'W10'],
                    series: [
                        [1, 2, 4, 8, 6, -2, -1, -4, -6, -2]
                    ]
                },
                {
                    high: 10,
                    low: -10,
                    axisX:
                    {
                        labelInterpolationFnc: function(value, index)
                        {
                            return index % 2 === 0 ? value : null;
                        }
                    }
                });

                // Listen for draw events on the bar chart
                chart.on('draw', function(data)
                {
                    // If this draw event is of type bar we can use the data to create additional content
                    if (data.type === 'bar')
                    {
                        // We use the group element of the current series to append a simple circle with the bar peek coordinates and a circle radius that is depending on the value
                        data.group.append(new Chartist.Svg('circle',
                        {
                            cx: data.x2,
                            cy: data.y2,
                            r: Math.abs(Chartist.getMultiValue(data.value)) * 2 + 5
                        }, 'ct-slice-pie'));
                    }
                });
            }
            /* peak circles -- end */

            /* multi line labels */
            var multiLineLabels = function()
            {
                new Chartist.Bar('#multiLineLabels',
                {
                    labels: ['First quarter of the year', 'Second quarter of the year', 'Third quarter of the year', 'Fourth quarter of the year'],
                    series: [
                        [60000, 40000, 80000, 70000],
                        [40000, 30000, 70000, 65000],
                        [8000, 3000, 10000, 6000]
                    ]
                },
                {
                    seriesBarDistance: 10,
                    axisX:
                    {
                        offset: 60
                    },
                    axisY:
                    {
                        offset: 80,
                        labelInterpolationFnc: function(value)
                        {
                            return value + ' CHF'
                        },
                        scaleMinSpace: 15
                    }
                });
            }
            /* multi line labels -- end */

            /* stacked bar */
            var stackedBar = function()
            {
                new Chartist.Bar('#stackedBar',
                {
                    labels: ['Q1', 'Q2', 'Q3', 'Q4'],
                    series: [
                        [800000, 1200000, 1400000, 1300000],
                        [200000, 400000, 500000, 300000],
                        [100000, 200000, 400000, 600000]
                    ]
                },
                {
                    stackBars: true,
                    axisY:
                    {
                        labelInterpolationFnc: function(value)
                        {
                            return (value / 1000) + 'k';
                        }
                    }
                }).on('draw', function(data)
                {
                    if (data.type === 'bar')
                    {
                        data.element.attr(
                        {
                            style: 'stroke-width: 30px'
                        });
                    }
                });
            }
            /* stacked bar -- end */

            /* horizontal bar */
            var horizontalBar = function()
            {
                new Chartist.Bar('#horizontalBar',
                {
                    labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                    series: [
                        [5, 4, 3, 7, 5, 10, 3],
                        [3, 2, 9, 5, 4, 6, 4]
                    ]
                },
                {
                    seriesBarDistance: 10,
                    reverseData: true,
                    horizontalBars: true,
                    axisY:
                    {
                        offset: 70
                    }
                });
            }
            /* horizontal bar -- end */

            /* extream responsive */
            var extreamResponsive = function()
            {
                new Chartist.Bar('#extreamResponsive',
                {
                    labels: ['Quarter 1', 'Quarter 2', 'Quarter 3', 'Quarter 4'],
                    series: [
                        [5, 4, 3, 7],
                        [3, 2, 9, 5],
                        [1, 5, 8, 4],
                        [2, 3, 4, 6],
                        [4, 1, 2, 1]
                    ]
                },
                {
                    // Default mobile configuration
                    stackBars: true,
                    axisX:
                    {
                        labelInterpolationFnc: function(value)
                        {
                            return value.split(/\s+/).map(function(word)
                            {
                                return word[0];
                            }).join('');
                        }
                    },
                    axisY:
                    {
                        offset: 20
                    }
                }, [
                    // Options override for media > 400px
                    ['screen and (min-width: 400px)',
                    {
                        reverseData: true,
                        horizontalBars: true,
                        axisX:
                        {
                            labelInterpolationFnc: Chartist.noop
                        },
                        axisY:
                        {
                            offset: 60
                        }
                    }],
                    // Options override for media > 800px
                    ['screen and (min-width: 800px)',
                    {
                        stackBars: false,
                        seriesBarDistance: 10
                    }],
                    // Options override for media > 1000px
                    ['screen and (min-width: 1000px)',
                    {
                        reverseData: false,
                        horizontalBars: false,
                        seriesBarDistance: 15
                    }]
                ]);
            }
            /* extream responsive -- end */

            /* distributed series */
            var distributedSeries = function()
            {
                new Chartist.Bar('#distributedSeries',
                {
                    labels: ['XS', 'S', 'M', 'L', 'XL', 'XXL', 'XXXL'],
                    series: [20, 60, 120, 200, 180, 20, 10]
                },
                {
                    distributeSeries: true
                });
            }
            /* distributed series -- end */

            /* label palcement */
            var labelPlacement = function()
            {
                new Chartist.Bar('#labelPlacement',
                {
                    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                    series: [
                        [5, 4, 3, 7, 5, 10, 3],
                        [3, 2, 9, 5, 4, 6, 4]
                    ]
                },
                {
                    axisX:
                    {
                        // On the x-axis start means top and end means bottom
                        position: 'start'
                    },
                    axisY:
                    {
                        // On the y-axis start means left and end means right
                        position: 'end'
                    }
                });
            }
            /* label palcement -- end */

            /* pie chart */
            var pieChart = function()
            {
                var data = {
                    series: [5, 3, 4]
                };

                var sum = function(a, b)
                {
                    return a + b
                };

                new Chartist.Pie('#pieChart', data,
                {
                    labelInterpolationFnc: function(value)
                    {
                        return Math.round(value / data.series.reduce(sum) * 100) + '%';
                    }
                });
            }
            /* pie chart -- end */

            /* pie chart labels */
            var pieChartLabels = function()
            {
                var data = {
                    labels: ['Bananas', 'Apples', 'Grapes'],
                    series: [20, 15, 40]
                };

                var options = {
                    labelInterpolationFnc: function(value)
                    {
                        return value[0]
                    }
                };

                var responsiveOptions = [
                    ['screen and (min-width: 640px)',
                    {
                        chartPadding: 30,
                        labelOffset: 100,
                        labelDirection: 'explode',
                        labelInterpolationFnc: function(value)
                        {
                            return value;
                        }
                    }],
                    ['screen and (min-width: 1024px)',
                    {
                        labelOffset: 80,
                        chartPadding: 20
                    }]
                ];

                new Chartist.Pie('#pieChartLabels', data, options, responsiveOptions);
            }
            /* pie chart labels -- end */

            /* guage chart */
            var gaugeChart = function()
            {
                new Chartist.Pie('#gaugeChart',
                {
                    series: [20, 10, 30, 40]
                },
                {
                    donut: true,
                    donutWidth: 60,
                    startAngle: 270,
                    total: 200,
                    showLabel: false
                });
            }
            /* guage chart -- end */

            /* donut fill */
            var donutFill = function()
            {
                new Chartist.Pie('#donutFill',
                {
                    series: [20, 10, 30, 40]
                },
                {
                    donut: true,
                    donutWidth: 60,
                    donutSolid: true,
                    startAngle: 270,
                    showLabel: true
                });
            }
            /* donut fill -- end */

            /* guage chart fill */
            var gaugeChartFill = function()
            {
                new Chartist.Pie('#gaugeChartFill',
                {
                    series: [20, 10, 30, 40]
                },
                {
                    donut: true,
                    donutWidth: 60,
                    donutSolid: true,
                    startAngle: 270,
                    total: 200,
                    showLabel: true
                });
            }
            /* guage chart fill -- end */

            /* initilize all charts on DOM ready */
            $(document).ready(function()
            {
                lineChartArea();
                lineScattered();
                usingEvents();
                bipolar();
                smileAnimation();
                pathAnimation();
                lineInterpolation();
                seriesOverrides();
                barChart();
                overlapBarMobile();
                peakCircles();
                multiLineLabels();
                stackedBar();
                horizontalBar();
                extreamResponsive();
                distributedSeries();
                labelPlacement();
                pieChart();
                pieChartLabels();
                gaugeChart();
                donutFill();
                gaugeChartFill();
            });

        </script>
@endsection
