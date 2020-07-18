@extends('layouts.new_private.master')
@section('content')
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    Home</h3>
                <span class="kt-subheader__separator kt-hidden"></span>
                <div class="kt-subheader__breadcrumbs">
                    <a href="{{ asset('private') }}" class="kt-subheader__breadcrumbs-home">
                        <i class="flaticon2-shelter"></i>
                    </a>
                   
                </div>
            </div>
           
        </div>
    </div>
    
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row pt-4">
            <div class="col-lg-6 mb-4">
                <section class="card">
                    <header class="card-header">
                        <div class="card-actions">
                            <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
                        </div>
        
                        <h2 class="card-title">Vigencia PAP cada 3 y 1 año</h2>
                        <p class="card-subtitle">Los resultados están detallados por grupo de edad.</p>
                    </header>
                    <div class="card-body">
                        <div class="chart chart-md" id="flotDashBasic" style="padding: 0px; position: relative;">
                            <canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 514.6px; height: 350px;" width="643" height="437">
                            </canvas>
                            <div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                                <div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;">
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 32px; text-align: center;">15-19
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 79px; text-align: center;">20-24
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 126px; text-align: center;">25-29
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 173px; text-align: center;">30-34
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 221px; text-align: center;">35-49
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 268px; text-align: center;">40-44
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 315px; text-align: center;">45-49
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 362px; text-align: center;">50-54
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 409px; text-align: center;">55-59
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 456px; text-align: center;">60-64
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 500px; text-align: center;">65 y más
                                    </div>
                                </div>
                                <div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;z-index: 999;">
                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 301px; left: 13px; text-align: right;">0
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 226px; left: 7px; text-align: right;">50
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 151px; left: 1px; text-align: right;">100
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 75px; left: 1px; text-align: right;">150
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 0px; left: 1px; text-align: right;">200
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 0px; left: 1px; text-align: right;">250
                                    </div>
                                </div>
                        </div>
                        <canvas class="flot-overlay" width="643" height="437" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 514.6px; height: 350px;">
                        </canvas>
                        <div class="legend">
                            <div style="position: absolute; width: 57.6px; height: 69.6px; top: 16px; right: 13px; background-color: rgb(255, 255, 255); opacity: 0.85;"> 
                            </div>
                            <table style="position:absolute;top:16px;right:13px;;font-size:smaller;color:#545454">
                                <tbody>
                                    <tr>
                                        <td class="legendColorBox">
                                            <div style="border:1px solid #ccc;padding:1px">
                                                <div style="width:4px;height:0;border:5px solid #CCCCCC;overflow:hidden"></div>
                                            </div>
                                        </td>
                                        <td class="legendLabel">Vigente</td>
                                    </tr>
                                    <tr>
                                        <td class="legendColorBox">
                                            <div style="border:1px solid #ccc;padding:1px">
                                                <div style="width:4px;height:0;border:5px solid #734ba9;overflow:hidden"></div>
                                            </div>
                                        </td>
                                        <td class="legendLabel">No Vigente</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                        <script>
                            var flotDashBasicData = [{
                                data: [
                                    [0, 170],
                                    [1, 169],
                                    [2, 173],
                                    [3, 188],
                                    [4, 147],
                                    [5, 113],
                                    [6, 128],
                                    [7, 169],
                                    [8, 173],
                                    [9, 128],
                                    [10, 128]
                                ],
                                label: "Vigente",
                                color: "#CCCCCC"
                            }, {
                                data: [
                                    [0, 70],
                                    [1, 69],
                                    [2, 73],
                                    [3, 88],
                                    [4, 47],
                                    [5, 13],
                                    [6, 28],
                                    [7, 69],
                                    [8, 73],
                                    [9, 28],
                                    [10, 28]
                                ],
                                label: "No Vigente",
                                color: "#734ba9"
                            }];
                        </script>
        
                    </div>
                </section>
            </div>


            <div class="col-lg-6 mb-4">
                <section class="card">
                    <header class="card-header">
                        <div class="card-actions">
                            <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
                        </div>
        
                        <h2 class="card-title">Vigencia EFM cada 3 y 1 año</h2>
                        <p class="card-subtitle">Los resultados están detallados por grupo de edad.</p>
                    </header>
                    <div class="card-body">
                        <div class="chart chart-md" id="flotDashBasic2" style="padding: 0px; position: relative;">
                            <canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 514.6px; height: 350px;" width="643" height="437">
                            </canvas>
                            <div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                                <div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;">
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 32px; text-align: center;">35-49
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 79px; text-align: center;">40-44
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 126px; text-align: center;">45-49
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 173px; text-align: center;">50-54
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 221px; text-align: center;">55-59
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 268px; text-align: center;">60-64
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 315px; text-align: center;">65 y más
                                    </div>
                                </div>
                                <div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;z-index: 999;">
                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 301px; left: 13px; text-align: right;">0
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 226px; left: 7px; text-align: right;">50
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 151px; left: 1px; text-align: right;">100
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 75px; left: 1px; text-align: right;">150
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 0px; left: 1px; text-align: right;">200
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 0px; left: 1px; text-align: right;">250
                                    </div>
                                </div>
                        </div>
                        <canvas class="flot-overlay" width="643" height="437" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 514.6px; height: 350px;">
                        </canvas>
                        <div class="legend">
                            <div style="position: absolute; width: 57.6px; height: 69.6px; top: 16px; right: 13px; background-color: rgb(255, 255, 255); opacity: 0.85;"> 
                            </div>
                            <table style="position:absolute;top:16px;right:13px;;font-size:smaller;color:#545454">
                                <tbody>
                                    <tr>
                                        <td class="legendColorBox">
                                            <div style="border:1px solid #ccc;padding:1px">
                                                <div style="width:4px;height:0;border:5px solid #CCCCCC;overflow:hidden"></div>
                                            </div>
                                        </td>
                                        <td class="legendLabel">Vigente</td>
                                    </tr>
                                    <tr>
                                        <td class="legendColorBox">
                                            <div style="border:1px solid #ccc;padding:1px">
                                                <div style="width:4px;height:0;border:5px solid #734ba9;overflow:hidden"></div>
                                            </div>
                                        </td>
                                        <td class="legendLabel">No Vigente</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                        <script>
                            var flotDashBasicData2 = [{
                                data: [
                                    [0, 170],
                                    [1, 169],
                                    [2, 173],
                                    [3, 188],
                                    [4, 147],
                                    [5, 113],
                                    [6, 128]
                                ],
                                label: "Vigente",
                                color: "#83d43285"
                            }, {
                                data: [
                                    [0, 70],
                                    [1, 69],
                                    [2, 73],
                                    [3, 88],
                                    [4, 47],
                                    [5, 13],
                                    [6, 28]
                                ],
                                label: "No Vigente",
                                color: "#1b1bb969"
                            }];
                        </script>
        
                    </div>
                </section>
            </div>


            <div class="col-lg-6 mb-4">
                <section class="card">
                    <header class="card-header">
                        <div class="card-actions">
                            <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
                        </div>
        
                        <h2 class="card-title">Prevalencia de PAP</h2>
                        <p class="card-subtitle">Los resultados están detallados por grupo de edad.</p>
                    </header>
                    <div class="card-body">
                        <div class="chart chart-md" id="flotDashBasic3" style="padding: 0px; position: relative;">
                            <canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 514.6px; height: 350px;" width="643" height="437">
                            </canvas>
                            <div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                                <div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;">
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 32px; text-align: center;">15-19
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 79px; text-align: center;">20-24
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 126px; text-align: center;">25-29
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 173px; text-align: center;">30-34
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 221px; text-align: center;">35-49
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 268px; text-align: center;">40-44
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 315px; text-align: center;">45-49
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 362px; text-align: center;">50-54
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 409px; text-align: center;">55-59
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 456px; text-align: center;">60-64
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 500px; text-align: center;">65 y más
                                    </div>
                                </div>
                                <div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;z-index: 999;">
                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 301px; left: 13px; text-align: right;">0
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 226px; left: 7px; text-align: right;">50
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 151px; left: 1px; text-align: right;">100
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 75px; left: 1px; text-align: right;">150
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 0px; left: 1px; text-align: right;">200
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 0px; left: 1px; text-align: right;">250
                                    </div>
                                </div>
                        </div>
                        <canvas class="flot-overlay" width="643" height="437" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 514.6px; height: 350px;">
                        </canvas>
                        <div class="legend">
                            <div style="position: absolute; width: 57.6px; height: 69.6px; top: 16px; right: 13px; background-color: rgb(255, 255, 255); opacity: 0.85;"> 
                            </div>
                            <table style="position:absolute;top:16px;right:13px;;font-size:smaller;color:#545454">
                                <tbody>
                                    <tr>
                                        <td class="legendColorBox">
                                            <div style="border:1px solid #ccc;padding:1px">
                                                <div style="width:4px;height:0;border:5px solid #CCCCCC;overflow:hidden"></div>
                                            </div>
                                        </td>
                                        <td class="legendLabel">Vigente</td>
                                    </tr>
                                    <tr>
                                        <td class="legendColorBox">
                                            <div style="border:1px solid #ccc;padding:1px">
                                                <div style="width:4px;height:0;border:5px solid #734ba9;overflow:hidden"></div>
                                            </div>
                                        </td>
                                        <td class="legendLabel">No Vigente</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                        <script>
                            var flotDashBasicData3 = [{
                                data: [
                                    [0, 0],
                                    [1, 8],
                                    [2, 28],
                                    [3, 18],
                                    [4, 9],
                                    [5, 8],
                                    [6, 8],
                                    [7, 8],
                                    [8, 6],
                                    [9, 3],
                                    [10, 3]
                                ],
                                label: "Prevalencia",
                                color: "#CCCCCC"
                            }];
                        </script>
        
                    </div>
                </section>
            </div>


            <div class="col-lg-6 mb-4">
                <section class="card">
                    <header class="card-header">
                        <div class="card-actions">
                            <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
                        </div>
        
                        <h2 class="card-title">Vigencia Mamografía</h2>
                        <p class="card-subtitle">Los resultados están detallados por grupo de edad.</p>
                    </header>
                    <div class="card-body">
                        <div class="chart chart-md" id="flotDashBasic4" style="padding: 0px; position: relative;">
                            <canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 514.6px; height: 350px;" width="643" height="437">
                            </canvas>
                            <div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                                <div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;">
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 32px; text-align: center;">15-19
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 79px; text-align: center;">20-24
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 126px; text-align: center;">25-29
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 173px; text-align: center;">30-34
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 221px; text-align: center;">35-49
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 268px; text-align: center;">40-44
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 315px; text-align: center;">45-49
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 362px; text-align: center;">50-54
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 409px; text-align: center;">55-59
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 456px; text-align: center;">60-64
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 500px; text-align: center;">65 y más
                                    </div>
                                </div>
                                <div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;z-index: 999;">
                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 301px; left: 13px; text-align: right;">0
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 226px; left: 7px; text-align: right;">50
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 151px; left: 1px; text-align: right;">100
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 75px; left: 1px; text-align: right;">150
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 0px; left: 1px; text-align: right;">200
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 0px; left: 1px; text-align: right;">250
                                    </div>
                                </div>
                        </div>
                        <canvas class="flot-overlay" width="643" height="437" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 514.6px; height: 350px;">
                        </canvas>
                        <div class="legend">
                            <div style="position: absolute; width: 57.6px; height: 69.6px; top: 16px; right: 13px; background-color: rgb(255, 255, 255); opacity: 0.85;"> 
                            </div>
                            <table style="position:absolute;top:16px;right:13px;;font-size:smaller;color:#545454">
                                <tbody>
                                    <tr>
                                        <td class="legendColorBox">
                                            <div style="border:1px solid #ccc;padding:1px">
                                                <div style="width:4px;height:0;border:5px solid #CCCCCC;overflow:hidden"></div>
                                            </div>
                                        </td>
                                        <td class="legendLabel">Vigente</td>
                                    </tr>
                                    <tr>
                                        <td class="legendColorBox">
                                            <div style="border:1px solid #ccc;padding:1px">
                                                <div style="width:4px;height:0;border:5px solid #734ba9;overflow:hidden"></div>
                                            </div>
                                        </td>
                                        <td class="legendLabel">No Vigente</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                        <script>
                            var flotDashBasicData4 = [{
                                data: [
                                    [0, 170],
                                    [1, 169],
                                    [2, 173],
                                    [3, 188],
                                    [4, 147],
                                    [5, 113],
                                    [6, 128],
                                    [7, 169],
                                    [8, 173],
                                    [9, 128],
                                    [10, 128]
                                ],
                                label: "Vigente",
                                color: "#CCCCCC"
                            }, {
                                data: [
                                    [0, 70],
                                    [1, 69],
                                    [2, 73],
                                    [3, 88],
                                    [4, 47],
                                    [5, 13],
                                    [6, 28],
                                    [7, 69],
                                    [8, 73],
                                    [9, 28],
                                    [10, 28]
                                ],
                                label: "No Vigente",
                                color: "#734ba9"
                            }];
                        </script>
        
                    </div>
                </section>
            </div>


            <div class="col-lg-6 mb-4">
                <section class="card">
                    <header class="card-header">
                        <div class="card-actions">
                            <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
                        </div>
        
                        <h2 class="card-title">Nunca E.F.M</h2>
                        <p class="card-subtitle">Los resultados están detallados por grupo de edad.</p>
                    </header>
                    <div class="card-body">
                        <div class="chart chart-md" id="flotDashBasic5" style="padding: 0px; position: relative;">
                            <canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 514.6px; height: 350px;" width="643" height="437">
                            </canvas>
                            <div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                                <div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;">
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 32px; text-align: center;">15-19
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 79px; text-align: center;">20-24
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 126px; text-align: center;">25-29
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 173px; text-align: center;">30-34
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 221px; text-align: center;">35-49
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 268px; text-align: center;">40-44
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 315px; text-align: center;">45-49
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 362px; text-align: center;">50-54
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 409px; text-align: center;">55-59
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 456px; text-align: center;">60-64
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 46px; top: 327px; left: 500px; text-align: center;">65 y más
                                    </div>
                                </div>
                                <div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;z-index: 999;">
                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 301px; left: 13px; text-align: right;">0
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 226px; left: 7px; text-align: right;">50
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 151px; left: 1px; text-align: right;">100
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 75px; left: 1px; text-align: right;">150
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 0px; left: 1px; text-align: right;">200
                                    </div>
                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 0px; left: 1px; text-align: right;">250
                                    </div>
                                </div>
                        </div>
                        <canvas class="flot-overlay" width="643" height="437" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 514.6px; height: 350px;">
                        </canvas>
                        <div class="legend">
                            <div style="position: absolute; width: 57.6px; height: 69.6px; top: 16px; right: 13px; background-color: rgb(255, 255, 255); opacity: 0.85;"> 
                            </div>
                            <table style="position:absolute;top:16px;right:13px;;font-size:smaller;color:#545454">
                                <tbody>
                                    <tr>
                                        <td class="legendColorBox">
                                            <div style="border:1px solid #ccc;padding:1px">
                                                <div style="width:4px;height:0;border:5px solid #CCCCCC;overflow:hidden"></div>
                                            </div>
                                        </td>
                                        <td class="legendLabel">Vigente</td>
                                    </tr>
                                    <tr>
                                        <td class="legendColorBox">
                                            <div style="border:1px solid #ccc;padding:1px">
                                                <div style="width:4px;height:0;border:5px solid #734ba9;overflow:hidden"></div>
                                            </div>
                                        </td>
                                        <td class="legendLabel">No Vigente</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                        <script>
                            var flotDashBasicData5 = [{
                                data: [
                                    [0, 10],
                                    [1, 13],
                                    [2, 16],
                                    [3, 17],
                                    [4, 16],
                                    [5, 1],
                                    [6, 16]
                                ],
                                label: "Nunca E.F.M",
                                color: "#ff000057"
                            }];
                        </script>
        
                    </div>
                </section>
            </div>


































            {{--
            <div class="col-12">
                <section class="card">
                    <header class="card-header">
                        <div class="card-actions">
                            <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
                            <a href="#" class="card-action card-action-dismiss" data-card-dismiss=""></a>
                        </div>
        
                        <h2 class="card-title">EFM cada 3 y 1 año</h2>
                        <p class="card-subtitle">Los resultados están detallados por grupo de edad.</p>
                    </header>
                    <div class="card-body">
                        <div class="chart chart-md" id="morrisBar" style="position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                            <svg height="350" version="1.1" width="1099.2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; top: -0.2px;">
                                <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Creado por Alvaro Rios C.</desc>
                                    <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>
                                    <text x="32.53125" y="311.375" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                                        <tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan>
                                    </text>
                                    <path fill="none" stroke="#aaaaaa" d="M45.03125,311.375H1074.2" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                    <text x="32.53125" y="239.78125" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                                        <tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">25</tspan>
                                    </text>
                                    <path fill="none" stroke="#aaaaaa" d="M45.03125,239.78125H1074.2" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                    <text x="32.53125" y="168.1875" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                                        <tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">50</tspan>
                                    </text>
                                    <path fill="none" stroke="#aaaaaa" d="M45.03125,168.1875H1074.2" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                    <text x="32.53125" y="96.59375" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                                        <tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">75</tspan>
                                    </text>
                                    <path fill="none" stroke="#aaaaaa" d="M45.03125,96.59375H1074.2" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                    <text x="32.53125" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                                        <tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">100</tspan>
                                    </text>
                                    <path fill="none" stroke="#aaaaaa" d="M45.03125,25H1074.2" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                    <text x="1027.4196022727274" y="323.875" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.8125)">
                                        <tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2017</tspan>
                                    </text>
                                    <text x="933.8588068181817" y="323.875" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.8125)">
                                        <tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2017</tspan>
                                    </text>
                                    <text x="840.2980113636364" y="323.875" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.8125)">
                                        <tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan>
                                    </text>
                                    <text x="746.7372159090909" y="323.875" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.8125)">
                                        <tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011</tspan>
                                    </text>
                                    <text x="653.1764204545455" y="323.875" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.8125)">
                                        <tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2010</tspan>
                                    </text>
                                    <text x="559.615625" y="323.875" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.8125)">
                                        <tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2009</tspan>
                                    </text>
                                    <text x="466.0548295454546" y="323.875" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.8125)">
                                        <tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2008</tspan>
                                    </text>
                                    <text x="372.4940340909091" y="323.875" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.8125)">
                                        <tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2007</tspan>
                                    </text>
                                    <text x="278.9332386363636" y="323.875" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.8125)">
                                        <tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2006</tspan>
                                    </text>
                                    <text x="185.3724431818182" y="323.875" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.8125)">
                                        <tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2005</tspan>
                                    </text>
                                    <text x="91.81164772727273" y="323.875" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.8125)">
                                        <tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2004</tspan>
                                    </text>
                                    <rect x="56.72634943181818" y="282.7375" width="33.58529829545455" height="28.63749999999999" rx="0" ry="0" fill="#0088cc" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                                    <rect x="93.31164772727273" y="225.4625" width="33.58529829545455" height="85.9125" rx="0" ry="0" fill="#2baab1" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                                    <rect x="150.28714488636365" y="25" width="33.58529829545455" height="286.375" rx="0" ry="0" fill="#0088cc" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                                    <rect x="186.8724431818182" y="239.78125" width="33.58529829545455" height="71.59375" rx="0" ry="0" fill="#2baab1" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                                    <rect x="243.84794034090908" y="139.55" width="33.58529829545455" height="171.825" rx="0" ry="0" fill="#0088cc" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                                    <rect x="280.4332386363636" y="239.78125" width="33.58529829545455" height="71.59375" rx="0" ry="0" fill="#2baab1" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                                    <rect x="337.40873579545456" y="96.59375" width="33.58529829545455" height="214.78125" rx="0" ry="0" fill="#0088cc" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                                    <rect x="373.9940340909091" y="211.14375" width="33.58529829545455" height="100.23124999999999" rx="0" ry="0" fill="#2baab1" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                                    <rect x="430.96953125" y="53.63749999999999" width="33.58529829545455" height="257.7375" rx="0" ry="0" fill="#0088cc" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                                    <rect x="467.55482954545454" y="254.1" width="33.58529829545455" height="57.275000000000006" rx="0" ry="0" fill="#2baab1" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                                    <rect x="524.5303267045455" y="96.59375" width="33.58529829545455" height="214.78125" rx="0" ry="0" fill="#0088cc" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                                    <rect x="561.115625" y="268.41875" width="33.58529829545455" height="42.95625000000001" rx="0" ry="0" fill="#2baab1" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                                    <rect x="618.091122159091" y="168.1875" width="33.58529829545455" height="143.1875" rx="0" ry="0" fill="#0088cc" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                                    <rect x="654.6764204545456" y="282.7375" width="33.58529829545455" height="28.63749999999999" rx="0" ry="0" fill="#2baab1" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                                    <rect x="711.6519176136364" y="96.59375" width="33.58529829545455" height="214.78125" rx="0" ry="0" fill="#0088cc" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                                    <rect x="748.237215909091" y="239.78125" width="33.58529829545455" height="71.59375" rx="0" ry="0" fill="#2baab1" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                                    <rect x="805.2127130681819" y="225.4625" width="33.58529829545455" height="85.9125" rx="0" ry="0" fill="#0088cc" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                                    <rect x="841.7980113636364" y="282.7375" width="33.58529829545455" height="28.63749999999999" rx="0" ry="0" fill="#2baab1" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                                    <rect x="898.7735085227273" y="96.59375" width="33.58529829545455" height="214.78125" rx="0" ry="0" fill="#0088cc" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                                    <rect x="935.3588068181818" y="297.05625" width="33.58529829545455" height="14.318750000000023" rx="0" ry="0" fill="#2baab1" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                                    <rect x="992.3343039772727" y="139.55" width="33.58529829545455" height="171.825" rx="0" ry="0" fill="#0088cc" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                                    <rect x="1028.9196022727274" y="288.465" width="33.58529829545455" height="22.910000000000025" rx="0" ry="0" fill="#2baab1" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                            </svg>
                            <div class="morris-hover morris-default-style" style="left: 141.679px; top: 130px;">
                                <div class="morris-hover-row-label">2005</div>
                                <div class="morris-hover-point" style="color: #0088cc">
                                    Series A:
                                    100
                                </div>
                                <div class="morris-hover-point" style="color: #2baab1">
                                    Series B:
                                    25
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
        
                            var morrisBarData.Bar = [{
                                y: '2004',
                                a: 10,
                                b: 30
                            }, {
                                y: '2005',
                                a: 100,
                                b: 25
                            }, {
                                y: '2006',
                                a: 60,
                                b: 25
                            }, {
                                y: '2007',
                                a: 75,
                                b: 35
                            }, {
                                y: '2008',
                                a: 90,
                                b: 20
                            }, {
                                y: '2009',
                                a: 75,
                                b: 15
                            }, {
                                y: '2010',
                                a: 50,
                                b: 10
                            }, {
                                y: '2011',
                                a: 75,
                                b: 25
                            }, {
                                y: '2012',
                                a: 30,
                                b: 10
                            }, {
                                y: '2017',
                                a: 75,
                                b: 5
                            }, {
                                y: '2017',
                                a: 60,
                                b: 8
                            }];
                        </script>
                    </div>
                </section>
            </div>--}}
        </div>
    </div>
</div>
@stop
