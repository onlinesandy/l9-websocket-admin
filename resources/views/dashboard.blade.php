<x-app-layout>


    <div class="row">
        <livewire:offline></livewire:offline>
        <div class="col-lg-7">

            <!--Network Line Chart-->
            <!--===================================================-->
            <div id="demo-panel-network" class="panel">
                <div class="panel-heading">
                    <div class="panel-control">
                        <button id="demo-panel-network-refresh" data-toggle="panel-overlay" data-target="#demo-panel-network" class="btn"><i class="demo-pli-repeat-2 icon-lg"></i></button>
                        <div class="btn-group">
                            <button class="dropdown-toggle btn" data-toggle="dropdown" aria-expanded="false"><i class="demo-pli-gear icon-lg"></i></button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                    </div>
                    <h3 class="panel-title">Network</h3>
                </div>

                <!--Morris line chart placeholder-->
                <div id="morris-chart-network" class="morris-full-content" style="position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="200" version="1.1" width="634" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; top: -0.296875px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="none" stroke="#000000" d="M25,175H609" stroke-opacity="0" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#000000" d="M25,137.5H609" stroke-opacity="0" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#000000" d="M25,100H609" stroke-opacity="0" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#000000" d="M25,62.5H609" stroke-opacity="0" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#000000" d="M25,25H609" stroke-opacity="0" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="#cce5f9" stroke="none" d="M25,157C27.807692307692307,155.125,33.42307692307692,150.34375,36.230769230769226,149.5C39.03846153846153,148.65625,44.65384615384615,149.125,47.46153846153846,150.25C50.26923076923077,151.375,55.88461538461539,158.03125,58.69230769230769,158.5C61.5,158.96875,67.11538461538461,157.5625,69.92307692307692,154C72.73076923076923,150.4375,78.34615384615384,133,81.15384615384615,130C83.96153846153845,127,89.57692307692308,130.9375,92.38461538461539,130C95.1923076923077,129.0625,100.8076923076923,123.15625,103.61538461538461,122.5C106.42307692307692,121.84375,112.03846153846153,126.25,114.84615384615384,124.75C117.65384615384615,123.25,123.26923076923076,112.28125,126.07692307692307,110.5C128.88461538461536,108.71875,134.5,113.03125,137.3076923076923,110.5C140.1153846153846,107.96875,145.73076923076923,94.375,148.53846153846155,90.25C151.34615384615387,86.125,156.96153846153845,77.59375,159.76923076923077,77.5C162.5769230769231,77.40625,168.19230769230768,84.8125,171,89.5C173.80769230769232,94.1875,179.4230769230769,114.53125,182.23076923076923,115C185.03846153846155,115.46875,190.65384615384613,95.125,193.46153846153845,93.25C196.26923076923077,91.375,201.88461538461536,99.625,204.69230769230768,100C207.5,100.375,213.11538461538458,97.1875,215.9230769230769,96.25C218.73076923076923,95.3125,224.3461538461538,92.21875,227.15384615384613,92.5C229.96153846153845,92.78125,235.57692307692304,98.21875,238.38461538461536,98.5C241.19230769230768,98.78125,246.80769230769226,90.8125,249.61538461538458,94.75C252.4230769230769,98.6875,258.0384615384615,126.25000000000001,260.8461538461538,130C263.65384615384613,133.75,269.2692307692308,126.25000000000001,272.0769230769231,124.75C274.88461538461536,123.25000000000001,280.5,118.5625,283.30769230769226,118C286.1153846153846,117.4375,291.7307692307692,121.9375,294.53846153846155,120.25C297.34615384615387,118.5625,302.96153846153845,110.3125,305.7692307692308,104.5C308.5769230769231,98.6875,314.1923076923077,79.375,317,73.75C319.8076923076923,68.125,325.4230769230769,58.09375,328.2307692307692,59.5C331.03846153846155,60.90625,336.65384615384613,79.9375,339.46153846153845,85C342.2692307692308,90.0625,347.88461538461536,100.9375,350.6923076923077,100C353.5,99.0625,359.1153846153846,77.5,361.9230769230769,77.5C364.7307692307692,77.5,370.3461538461538,93.4375,373.15384615384613,100C375.96153846153845,106.5625,381.57692307692304,127.1875,384.38461538461536,130C387.1923076923077,132.8125,392.80769230769226,123.15625,395.6153846153846,122.5C398.4230769230769,121.84375,404.0384615384615,126.25,406.8461538461538,124.75C409.65384615384613,123.25,415.2692307692307,112.28125,418.07692307692304,110.5C420.88461538461536,108.71875,426.49999999999994,113.03125,429.30769230769226,110.5C432.1153846153846,107.96875,437.73076923076917,94.375,440.5384615384615,90.25C443.3461538461538,86.125,448.9615384615384,77.59375,451.7692307692307,77.5C454.57692307692304,77.40625,460.1923076923076,84.8125,462.99999999999994,89.5C465.80769230769226,94.1875,471.42307692307685,114.53125,474.23076923076917,115C477.0384615384615,115.46875,482.65384615384613,95.125,485.46153846153845,93.25C488.2692307692308,91.375,493.88461538461536,99.625,496.6923076923077,100C499.5,100.375,505.1153846153846,97.1875,507.9230769230769,96.25C510.7307692307692,95.3125,516.3461538461538,92.21875,519.1538461538462,92.5C521.9615384615385,92.78125,527.5769230769231,98.21875,530.3846153846154,98.5C533.1923076923076,98.78125,538.8076923076923,90.81250000000001,541.6153846153845,94.75C544.4230769230769,98.68750000000001,550.0384615384614,126.25,552.8461538461538,130C555.6538461538462,133.75,561.2692307692307,126.25000000000001,564.0769230769231,124.75C566.8846153846154,123.25000000000001,572.5,118.5625,575.3076923076923,118C578.1153846153845,117.4375,583.7307692307693,121.93750000000001,586.5384615384615,120.25C589.3461538461538,118.56250000000001,594.9615384615385,105.0625,597.7692307692307,104.5C600.5769230769231,103.9375,606.1923076923076,112.9375,609,115.75L609,175L25,175Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path><path fill="none" stroke="#82c4f8" d="M25,157C27.807692307692307,155.125,33.42307692307692,150.34375,36.230769230769226,149.5C39.03846153846153,148.65625,44.65384615384615,149.125,47.46153846153846,150.25C50.26923076923077,151.375,55.88461538461539,158.03125,58.69230769230769,158.5C61.5,158.96875,67.11538461538461,157.5625,69.92307692307692,154C72.73076923076923,150.4375,78.34615384615384,133,81.15384615384615,130C83.96153846153845,127,89.57692307692308,130.9375,92.38461538461539,130C95.1923076923077,129.0625,100.8076923076923,123.15625,103.61538461538461,122.5C106.42307692307692,121.84375,112.03846153846153,126.25,114.84615384615384,124.75C117.65384615384615,123.25,123.26923076923076,112.28125,126.07692307692307,110.5C128.88461538461536,108.71875,134.5,113.03125,137.3076923076923,110.5C140.1153846153846,107.96875,145.73076923076923,94.375,148.53846153846155,90.25C151.34615384615387,86.125,156.96153846153845,77.59375,159.76923076923077,77.5C162.5769230769231,77.40625,168.19230769230768,84.8125,171,89.5C173.80769230769232,94.1875,179.4230769230769,114.53125,182.23076923076923,115C185.03846153846155,115.46875,190.65384615384613,95.125,193.46153846153845,93.25C196.26923076923077,91.375,201.88461538461536,99.625,204.69230769230768,100C207.5,100.375,213.11538461538458,97.1875,215.9230769230769,96.25C218.73076923076923,95.3125,224.3461538461538,92.21875,227.15384615384613,92.5C229.96153846153845,92.78125,235.57692307692304,98.21875,238.38461538461536,98.5C241.19230769230768,98.78125,246.80769230769226,90.8125,249.61538461538458,94.75C252.4230769230769,98.6875,258.0384615384615,126.25000000000001,260.8461538461538,130C263.65384615384613,133.75,269.2692307692308,126.25000000000001,272.0769230769231,124.75C274.88461538461536,123.25000000000001,280.5,118.5625,283.30769230769226,118C286.1153846153846,117.4375,291.7307692307692,121.9375,294.53846153846155,120.25C297.34615384615387,118.5625,302.96153846153845,110.3125,305.7692307692308,104.5C308.5769230769231,98.6875,314.1923076923077,79.375,317,73.75C319.8076923076923,68.125,325.4230769230769,58.09375,328.2307692307692,59.5C331.03846153846155,60.90625,336.65384615384613,79.9375,339.46153846153845,85C342.2692307692308,90.0625,347.88461538461536,100.9375,350.6923076923077,100C353.5,99.0625,359.1153846153846,77.5,361.9230769230769,77.5C364.7307692307692,77.5,370.3461538461538,93.4375,373.15384615384613,100C375.96153846153845,106.5625,381.57692307692304,127.1875,384.38461538461536,130C387.1923076923077,132.8125,392.80769230769226,123.15625,395.6153846153846,122.5C398.4230769230769,121.84375,404.0384615384615,126.25,406.8461538461538,124.75C409.65384615384613,123.25,415.2692307692307,112.28125,418.07692307692304,110.5C420.88461538461536,108.71875,426.49999999999994,113.03125,429.30769230769226,110.5C432.1153846153846,107.96875,437.73076923076917,94.375,440.5384615384615,90.25C443.3461538461538,86.125,448.9615384615384,77.59375,451.7692307692307,77.5C454.57692307692304,77.40625,460.1923076923076,84.8125,462.99999999999994,89.5C465.80769230769226,94.1875,471.42307692307685,114.53125,474.23076923076917,115C477.0384615384615,115.46875,482.65384615384613,95.125,485.46153846153845,93.25C488.2692307692308,91.375,493.88461538461536,99.625,496.6923076923077,100C499.5,100.375,505.1153846153846,97.1875,507.9230769230769,96.25C510.7307692307692,95.3125,516.3461538461538,92.21875,519.1538461538462,92.5C521.9615384615385,92.78125,527.5769230769231,98.21875,530.3846153846154,98.5C533.1923076923076,98.78125,538.8076923076923,90.81250000000001,541.6153846153845,94.75C544.4230769230769,98.68750000000001,550.0384615384614,126.25,552.8461538461538,130C555.6538461538462,133.75,561.2692307692307,126.25000000000001,564.0769230769231,124.75C566.8846153846154,123.25000000000001,572.5,118.5625,575.3076923076923,118C578.1153846153845,117.4375,583.7307692307693,121.93750000000001,586.5384615384615,120.25C589.3461538461538,118.56250000000001,594.9615384615385,105.0625,597.7692307692307,104.5C600.5769230769231,103.9375,606.1923076923076,112.9375,609,115.75" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="25" cy="157" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="36.230769230769226" cy="149.5" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="47.46153846153846" cy="150.25" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="58.69230769230769" cy="158.5" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="69.92307692307692" cy="154" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="81.15384615384615" cy="130" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="92.38461538461539" cy="130" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="103.61538461538461" cy="122.5" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="114.84615384615384" cy="124.75" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="126.07692307692307" cy="110.5" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="137.3076923076923" cy="110.5" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="148.53846153846155" cy="90.25" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="159.76923076923077" cy="77.5" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="171" cy="89.5" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="182.23076923076923" cy="115" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="193.46153846153845" cy="93.25" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="204.69230769230768" cy="100" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="215.9230769230769" cy="96.25" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="227.15384615384613" cy="92.5" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="238.38461538461536" cy="98.5" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="249.61538461538458" cy="94.75" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="260.8461538461538" cy="130" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="272.0769230769231" cy="124.75" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="283.30769230769226" cy="118" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="294.53846153846155" cy="120.25" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="305.7692307692308" cy="104.5" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="317" cy="73.75" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="328.2307692307692" cy="59.5" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="339.46153846153845" cy="85" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="350.6923076923077" cy="100" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="361.9230769230769" cy="77.5" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="373.15384615384613" cy="100" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="384.38461538461536" cy="130" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="395.6153846153846" cy="122.5" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="406.8461538461538" cy="124.75" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="418.07692307692304" cy="110.5" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="429.30769230769226" cy="110.5" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="440.5384615384615" cy="90.25" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="451.7692307692307" cy="77.5" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="462.99999999999994" cy="89.5" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="474.23076923076917" cy="115" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="485.46153846153845" cy="93.25" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="496.6923076923077" cy="100" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="507.9230769230769" cy="96.25" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="519.1538461538462" cy="92.5" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="530.3846153846154" cy="98.5" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="541.6153846153845" cy="94.75" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="552.8461538461538" cy="130" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="564.0769230769231" cy="124.75" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="575.3076923076923" cy="118" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="586.5384615384615" cy="120.25" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="597.7692307692307" cy="104.5" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="609" cy="115.75" r="0" fill="#82c4f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><path fill="#4aa8f3" stroke="none" d="M25,173.5C27.807692307692307,169.75,33.42307692307692,158.96875,36.230769230769226,158.5C39.03846153846153,158.03125,44.65384615384615,168.25,47.46153846153846,169.75C50.26923076923077,171.25,55.88461538461539,171.4375,58.69230769230769,170.5C61.5,169.5625,67.11538461538461,163.09375,69.92307692307692,162.25C72.73076923076923,161.40625,78.34615384615384,163.75,81.15384615384615,163.75C83.96153846153845,163.75,89.57692307692308,161.5,92.38461538461539,162.25C95.1923076923077,163,100.8076923076923,169.84375,103.61538461538461,169.75C106.42307692307692,169.65625,112.03846153846153,162.53125,114.84615384615384,161.5C117.65384615384615,160.46875,123.26923076923076,161.5,126.07692307692307,161.5C128.88461538461536,161.5,134.5,162.53125,137.3076923076923,161.5C140.1153846153846,160.46875,145.73076923076923,153.71875,148.53846153846155,153.25C151.34615384615387,152.78125,156.96153846153845,155.96875,159.76923076923077,157.75C162.5769230769231,159.53125,168.19230769230768,167.40625,171,167.5C173.80769230769232,167.59375,179.4230769230769,158.21875,182.23076923076923,158.5C185.03846153846155,158.78125,190.65384615384613,168.25,193.46153846153845,169.75C196.26923076923077,171.25,201.88461538461536,171.4375,204.69230769230768,170.5C207.5,169.5625,213.11538461538458,163.09375,215.9230769230769,162.25C218.73076923076923,161.40625,224.3461538461538,163.75,227.15384615384613,163.75C229.96153846153845,163.75,235.57692307692304,161.5,238.38461538461536,162.25C241.19230769230768,163,246.80769230769226,169.84375,249.61538461538458,169.75C252.4230769230769,169.65625,258.0384615384615,162.53125,260.8461538461538,161.5C263.65384615384613,160.46875,269.2692307692308,161.5,272.0769230769231,161.5C274.88461538461536,161.5,280.5,162.53125,283.30769230769226,161.5C286.1153846153846,160.46875,291.7307692307692,152.78125,294.53846153846155,153.25C297.34615384615387,153.71875,302.96153846153845,162.71875,305.7692307692308,165.25C308.5769230769231,167.78125,314.1923076923077,174.34375,317,173.5C319.8076923076923,172.65625,325.4230769230769,158.96875,328.2307692307692,158.5C331.03846153846155,158.03125,336.65384615384613,168.25,339.46153846153845,169.75C342.2692307692308,171.25,347.88461538461536,171.4375,350.6923076923077,170.5C353.5,169.5625,359.1153846153846,163.09375,361.9230769230769,162.25C364.7307692307692,161.40625,370.3461538461538,163.75,373.15384615384613,163.75C375.96153846153845,163.75,381.57692307692304,161.5,384.38461538461536,162.25C387.1923076923077,163,392.80769230769226,169.84375,395.6153846153846,169.75C398.4230769230769,169.65625,404.0384615384615,162.53125,406.8461538461538,161.5C409.65384615384613,160.46875,415.2692307692307,161.5,418.07692307692304,161.5C420.88461538461536,161.5,426.49999999999994,162.53125,429.30769230769226,161.5C432.1153846153846,160.46875,437.73076923076917,153.71875,440.5384615384615,153.25C443.3461538461538,152.78125,448.9615384615384,155.96875,451.7692307692307,157.75C454.57692307692304,159.53125,460.1923076923076,167.40625,462.99999999999994,167.5C465.80769230769226,167.59375,471.42307692307685,158.21875,474.23076923076917,158.5C477.0384615384615,158.78125,482.65384615384613,168.25,485.46153846153845,169.75C488.2692307692308,171.25,493.88461538461536,171.4375,496.6923076923077,170.5C499.5,169.5625,505.1153846153846,163.09375,507.9230769230769,162.25C510.7307692307692,161.40625,516.3461538461538,163.75,519.1538461538462,163.75C521.9615384615385,163.75,527.5769230769231,161.5,530.3846153846154,162.25C533.1923076923076,163,538.8076923076923,169.84375,541.6153846153845,169.75C544.4230769230769,169.65625,550.0384615384614,162.53125,552.8461538461538,161.5C555.6538461538462,160.46875,561.2692307692307,161.5,564.0769230769231,161.5C566.8846153846154,161.5,572.5,162.53125,575.3076923076923,161.5C578.1153846153845,160.46875,583.7307692307693,152.78125,586.5384615384615,153.25C589.3461538461538,153.71875,594.9615384615385,164.78125,597.7692307692307,165.25C600.5769230769231,165.71875,606.1923076923076,159.0625,609,157L609,175L25,175Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path><path fill="none" stroke="#0d92fc" d="M25,173.5C27.807692307692307,169.75,33.42307692307692,158.96875,36.230769230769226,158.5C39.03846153846153,158.03125,44.65384615384615,168.25,47.46153846153846,169.75C50.26923076923077,171.25,55.88461538461539,171.4375,58.69230769230769,170.5C61.5,169.5625,67.11538461538461,163.09375,69.92307692307692,162.25C72.73076923076923,161.40625,78.34615384615384,163.75,81.15384615384615,163.75C83.96153846153845,163.75,89.57692307692308,161.5,92.38461538461539,162.25C95.1923076923077,163,100.8076923076923,169.84375,103.61538461538461,169.75C106.42307692307692,169.65625,112.03846153846153,162.53125,114.84615384615384,161.5C117.65384615384615,160.46875,123.26923076923076,161.5,126.07692307692307,161.5C128.88461538461536,161.5,134.5,162.53125,137.3076923076923,161.5C140.1153846153846,160.46875,145.73076923076923,153.71875,148.53846153846155,153.25C151.34615384615387,152.78125,156.96153846153845,155.96875,159.76923076923077,157.75C162.5769230769231,159.53125,168.19230769230768,167.40625,171,167.5C173.80769230769232,167.59375,179.4230769230769,158.21875,182.23076923076923,158.5C185.03846153846155,158.78125,190.65384615384613,168.25,193.46153846153845,169.75C196.26923076923077,171.25,201.88461538461536,171.4375,204.69230769230768,170.5C207.5,169.5625,213.11538461538458,163.09375,215.9230769230769,162.25C218.73076923076923,161.40625,224.3461538461538,163.75,227.15384615384613,163.75C229.96153846153845,163.75,235.57692307692304,161.5,238.38461538461536,162.25C241.19230769230768,163,246.80769230769226,169.84375,249.61538461538458,169.75C252.4230769230769,169.65625,258.0384615384615,162.53125,260.8461538461538,161.5C263.65384615384613,160.46875,269.2692307692308,161.5,272.0769230769231,161.5C274.88461538461536,161.5,280.5,162.53125,283.30769230769226,161.5C286.1153846153846,160.46875,291.7307692307692,152.78125,294.53846153846155,153.25C297.34615384615387,153.71875,302.96153846153845,162.71875,305.7692307692308,165.25C308.5769230769231,167.78125,314.1923076923077,174.34375,317,173.5C319.8076923076923,172.65625,325.4230769230769,158.96875,328.2307692307692,158.5C331.03846153846155,158.03125,336.65384615384613,168.25,339.46153846153845,169.75C342.2692307692308,171.25,347.88461538461536,171.4375,350.6923076923077,170.5C353.5,169.5625,359.1153846153846,163.09375,361.9230769230769,162.25C364.7307692307692,161.40625,370.3461538461538,163.75,373.15384615384613,163.75C375.96153846153845,163.75,381.57692307692304,161.5,384.38461538461536,162.25C387.1923076923077,163,392.80769230769226,169.84375,395.6153846153846,169.75C398.4230769230769,169.65625,404.0384615384615,162.53125,406.8461538461538,161.5C409.65384615384613,160.46875,415.2692307692307,161.5,418.07692307692304,161.5C420.88461538461536,161.5,426.49999999999994,162.53125,429.30769230769226,161.5C432.1153846153846,160.46875,437.73076923076917,153.71875,440.5384615384615,153.25C443.3461538461538,152.78125,448.9615384615384,155.96875,451.7692307692307,157.75C454.57692307692304,159.53125,460.1923076923076,167.40625,462.99999999999994,167.5C465.80769230769226,167.59375,471.42307692307685,158.21875,474.23076923076917,158.5C477.0384615384615,158.78125,482.65384615384613,168.25,485.46153846153845,169.75C488.2692307692308,171.25,493.88461538461536,171.4375,496.6923076923077,170.5C499.5,169.5625,505.1153846153846,163.09375,507.9230769230769,162.25C510.7307692307692,161.40625,516.3461538461538,163.75,519.1538461538462,163.75C521.9615384615385,163.75,527.5769230769231,161.5,530.3846153846154,162.25C533.1923076923076,163,538.8076923076923,169.84375,541.6153846153845,169.75C544.4230769230769,169.65625,550.0384615384614,162.53125,552.8461538461538,161.5C555.6538461538462,160.46875,561.2692307692307,161.5,564.0769230769231,161.5C566.8846153846154,161.5,572.5,162.53125,575.3076923076923,161.5C578.1153846153845,160.46875,583.7307692307693,152.78125,586.5384615384615,153.25C589.3461538461538,153.71875,594.9615384615385,164.78125,597.7692307692307,165.25C600.5769230769231,165.71875,606.1923076923076,159.0625,609,157" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="25" cy="173.5" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="36.230769230769226" cy="158.5" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="47.46153846153846" cy="169.75" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="58.69230769230769" cy="170.5" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="69.92307692307692" cy="162.25" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="81.15384615384615" cy="163.75" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="92.38461538461539" cy="162.25" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="103.61538461538461" cy="169.75" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="114.84615384615384" cy="161.5" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="126.07692307692307" cy="161.5" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="137.3076923076923" cy="161.5" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="148.53846153846155" cy="153.25" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="159.76923076923077" cy="157.75" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="171" cy="167.5" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="182.23076923076923" cy="158.5" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="193.46153846153845" cy="169.75" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="204.69230769230768" cy="170.5" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="215.9230769230769" cy="162.25" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="227.15384615384613" cy="163.75" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="238.38461538461536" cy="162.25" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="249.61538461538458" cy="169.75" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="260.8461538461538" cy="161.5" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="272.0769230769231" cy="161.5" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="283.30769230769226" cy="161.5" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="294.53846153846155" cy="153.25" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="305.7692307692308" cy="165.25" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="317" cy="173.5" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="328.2307692307692" cy="158.5" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="339.46153846153845" cy="169.75" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="350.6923076923077" cy="170.5" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="361.9230769230769" cy="162.25" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="373.15384615384613" cy="163.75" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="384.38461538461536" cy="162.25" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="395.6153846153846" cy="169.75" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="406.8461538461538" cy="161.5" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="418.07692307692304" cy="161.5" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="429.30769230769226" cy="161.5" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="440.5384615384615" cy="153.25" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="451.7692307692307" cy="157.75" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="462.99999999999994" cy="167.5" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="474.23076923076917" cy="158.5" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="485.46153846153845" cy="169.75" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="496.6923076923077" cy="170.5" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="507.9230769230769" cy="162.25" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="519.1538461538462" cy="163.75" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="530.3846153846154" cy="162.25" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="541.6153846153845" cy="169.75" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="552.8461538461538" cy="161.5" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="564.0769230769231" cy="161.5" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="575.3076923076923" cy="161.5" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="586.5384615384615" cy="153.25" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="597.7692307692307" cy="165.25" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="609" cy="157" r="0" fill="#0d92fc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="left: 45.8077px; top: 78px; display: none;"><div class="morris-hover-row-label">Oct-22</div><div class="morris-hover-point" style="color: #82c4f8">
Download Speed:
86 Mb/s
</div><div class="morris-hover-point" style="color: #0d92fc">
Upload Speed:
18 Mb/s
</div></div></div>

                <!--Chart information-->
                <div class="panel-body">
                    <div class="row pad-top">
                        <div class="col-lg-8">
                            <div class="media">
                                <div class="media-left">
                                    <div class="media">
                                        <p class="text-semibold text-main">Temperature</p>
                                        <div class="media-left pad-no">
                                            <span class="text-2x text-semibold text-nowrap text-main">
                                                <i class="demo-pli-temperature"></i> 43.7
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <p class="mar-no">°C</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-body pad-lft">
                                    <div class="pad-btm">
                                        <p class="text-semibold text-main mar-no">Today Tips</p>
                                        <small>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <p class="text-semibold text-main">Bandwidth Usage</p>
                            <ul class="list-unstyled">
                                <li>
                                    <div class="media">
                                        <div class="media-left">
                                            <span class="text-2x text-semibold text-main">75.9</span>
                                        </div>
                                        <div class="media-body">
                                            <p class="mar-no">Mbps</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="clearfix">
                                        <p class="pull-left mar-no">Outcome</p>
                                        <p class="pull-right mar-no">75%</p>
                                    </div>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-info" style="width: 75%;">
                                            <span class="sr-only">75%</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
            <!--===================================================-->
            <!--End network line chart-->

        </div>
        <div class="col-lg-5">
            <div class="row">
                <div class="col-sm-6 col-lg-6">

                    <!--Sparkline Area Chart-->
                    <div class="panel panel-success panel-colorful">
                        <div class="pad-all">
                            <p class="text-lg text-semibold"><i class="demo-pli-data-storage icon-fw"></i> HDD Usage</p>
                            <p class="mar-no">
                                <span class="pull-right text-bold">132Gb</span>
                                Free Space
                            </p>
                            <p class="mar-no">
                                <span class="pull-right text-bold">1,45Gb</span>
                                Used space
                            </p>
                        </div>
                        <div class="pad-all text-center">
                            <!--Placeholder-->
                            <div id="demo-sparkline-area"><canvas width="186" height="40" style="display: inline-block; width: 186px; height: 40px; vertical-align: top;"></canvas></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6">

                    <!--Sparkline Line Chart-->
                    <div class="panel panel-info panel-colorful">
                        <div class="pad-all">
                            <p class="text-lg text-semibold"><i class="demo-pli-wallet-2 icon-fw"></i> Earning</p>
                            <p class="mar-no">
                                <span class="pull-right text-bold">$764</span>
                                Today
                            </p>
                            <p class="mar-no">
                                <span class="pull-right text-bold">$1,332</span>
                                Last 7 Day
                            </p>
                        </div>
                        <div class="pad-all text-center">

                            <!--Placeholder-->
                            <div id="demo-sparkline-line"><canvas width="186" height="40" style="display: inline-block; width: 186px; height: 40px; vertical-align: top;"></canvas></div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-6">

                    <!--Sparkline bar chart -->
                    <div class="panel panel-purple panel-colorful">
                        <div class="pad-all">
                            <p class="text-lg text-semibold"><i class="demo-pli-bag-coins icon-fw"></i> Sales</p>
                            <p class="mar-no">
                                <span class="pull-right text-bold">$764</span>
                                Today
                            </p>
                            <p class="mar-no">
                                <span class="pull-right text-bold">$1,332</span>
                                Last 7 Day
                            </p>
                        </div>
                        <div class="pad-all text-center">

                            <!--Placeholder-->
                            <div id="demo-sparkline-bar" class="box-inline"><canvas width="184" height="55" style="display: inline-block; width: 184px; height: 55px; vertical-align: top;"></canvas></div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6">

                    <!--Sparkline pie chart -->
                    <div class="panel panel-warning panel-colorful">
                        <div class="pad-all">
                            <p class="text-lg text-semibold"><i class="demo-pli-check icon-fw"></i> Task Progress</p>
                            <p class="mar-no">
                                <span class="pull-right text-bold">34</span>
                                Completed
                            </p>
                            <p class="mar-no">
                                <span class="pull-right text-bold">79</span>
                                Total
                            </p>
                        </div>
                        <div class="pad-all">
                            <ul class="list-group list-unstyled">
                                <li class="mar-btm">
                                    <span class="label label-warning pull-right">15%</span>
                                    <p>Progress</p>
                                    <div class="progress progress-md">
                                        <div style="width: 15%;" class="progress-bar progress-bar-light">
                                            <span class="sr-only">15%</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Order Status</h3>
            </div>

            <!--Data Table-->
            <!--===================================================-->
            <div class="panel-body">
                <div class="pad-btm form-inline">
                    <div class="row">
                        <div class="col-sm-6 table-toolbar-left">
                            <button class="btn btn-purple"><i class="demo-pli-add icon-fw"></i>Add</button>
                            <button class="btn btn-default"><i class="demo-pli-printer"></i></button>
                            <div class="btn-group">
                                <button class="btn btn-default"><i class="demo-pli-information"></i></button>
                                <button class="btn btn-default"><i class="demo-pli-recycling"></i></button>
                            </div>
                        </div>
                        <div class="col-sm-6 table-toolbar-right">
                            <div class="form-group">
                                <input type="text" autocomplete="off" class="form-control" placeholder="Search"
                                    id="demo-input-search2">
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-default"><i class="demo-pli-download-from-cloud"></i></button>
                                <div class="btn-group">
                                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        <i class="demo-pli-gear"></i>
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Invoice</th>
                                <th>User</th>
                                <th>Order date</th>
                                <th>Amount</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Tracking Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="#" class="btn-link"> Order #53431</a></td>
                                <td>Steve N. Horton</td>
                                <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 22, 2014</span></td>
                                <td>$45.00</td>
                                <td class="text-center">
                                    <div class="label label-table label-success">Paid</div>
                                </td>
                                <td class="text-center">-</td>
                            </tr>
                            <tr>
                                <td><a href="#" class="btn-link"> Order #53432</a></td>
                                <td>Charles S Boyle</td>
                                <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 24, 2014</span></td>
                                <td>$245.30</td>
                                <td class="text-center">
                                    <div class="label label-table label-info">Shipped</div>
                                </td>
                                <td class="text-center"><i class="fa fa-plane"></i> CGX0089734531</td>
                            </tr>
                            <tr>
                                <td><a href="#" class="btn-link"> Order #53433</a></td>
                                <td>Lucy Doe</td>
                                <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 24, 2014</span></td>
                                <td>$38.00</td>
                                <td class="text-center">
                                    <div class="label label-table label-info">Shipped</div>
                                </td>
                                <td class="text-center"><i class="fa fa-plane"></i> CGX0089934571</td>
                            </tr>
                            <tr>
                                <td><a href="#" class="btn-link"> Order #53434</a></td>
                                <td>Teresa L. Doe</td>
                                <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 15, 2014</span></td>
                                <td>$77.99</td>
                                <td class="text-center">
                                    <div class="label label-table label-info">Shipped</div>
                                </td>
                                <td class="text-center"><i class="fa fa-plane"></i> CGX0089734574</td>
                            </tr>
                            <tr>
                                <td><a href="#" class="btn-link"> Order #53435</a></td>
                                <td>Teresa L. Doe</td>
                                <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 12, 2014</span></td>
                                <td>$18.00</td>
                                <td class="text-center">
                                    <div class="label label-table label-success">Paid</div>
                                </td>
                                <td class="text-center">-</td>
                            </tr>
                            <tr>
                                <td><a href="#" class="btn-link">Order #53437</a></td>
                                <td>Charles S Boyle</td>
                                <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 17, 2014</span></td>
                                <td>$658.00</td>
                                <td class="text-center">
                                    <div class="label label-table label-danger">Refunded</div>
                                </td>
                                <td class="text-center">-</td>
                            </tr>
                            <tr>
                                <td><a href="#" class="btn-link">Order #536584</a></td>
                                <td>Scott S. Calabrese</td>
                                <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 19, 2014</span></td>
                                <td>$45.58</td>
                                <td class="text-center">
                                    <div class="label label-table label-warning">Unpaid</div>
                                </td>
                                <td class="text-center">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
                <div class="pull-right">
                    <ul class="pagination text-nowrap mar-no">
                        <li class="page-pre disabled">
                            <a href="#">&lt;</a>
                        </li>
                        <li class="page-number active">
                            <span>1</span>
                        </li>
                        <li class="page-number">
                            <a href="#">2</a>
                        </li>
                        <li class="page-number">
                            <a href="#">3</a>
                        </li>
                        <li>
                            <span>...</span>
                        </li>
                        <li class="page-number">
                            <a href="#">9</a>
                        </li>
                        <li class="page-next">
                            <a href="#">&gt;</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--===================================================-->
            <!--End Data Table-->

        </div>
    </div>
</x-app-layout>
