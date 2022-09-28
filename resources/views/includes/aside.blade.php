<aside id="aside-container">
    <div id="aside">
        <div class="nano has-scrollbar">
            <div class="nano-content" tabindex="0" style="right: -15px;">

                <!--Nav tabs-->
                <!--================================-->
                <ul class="nav nav-tabs nav-justified">
                    <li class="active">
                        <a href="#demo-asd-tab-1" data-toggle="tab">
                            <i class="demo-pli-speech-bubble-7"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#demo-asd-tab-2" data-toggle="tab">
                            <i class="demo-pli-information icon-fw"></i> Report
                        </a>
                    </li>
                    <li>
                        <a href="#demo-asd-tab-3" data-toggle="tab">
                            <i class="demo-pli-wrench icon-fw"></i> Settings
                        </a>
                    </li>
                </ul>
                <!--================================-->
                <!--End nav tabs-->



                <!-- Tabs Content -->
                <!--================================-->
                <div class="tab-content">
                    <livewire:onlineusers>
                        </livewire:onlinusers>
                        <div class="tab-pane fade" id="demo-asd-tab-2">

                            <!--Simple Menu-->
                            <div class="list-group bg-trans">
                                <a href="#" class="list-group-item"><i
                                        class="demo-pli-information icon-lg icon-fw"></i> Service Information</a>
                                <a href="#" class="list-group-item"><i class="demo-pli-mine icon-lg icon-fw"></i>
                                    Usage Profile</a>
                                <a href="#" class="list-group-item"><span
                                        class="label label-info pull-right">New</span><i
                                        class="demo-pli-credit-card-2 icon-lg icon-fw"></i> Payment Options</a>
                                <a href="#" class="list-group-item"><i
                                        class="demo-pli-support icon-lg icon-fw"></i> Message Center</a>
                            </div>


                            <hr>

                            <div class="text-center">
                                <div><i class="demo-pli-old-telephone icon-3x"></i></div>
                                Questions?
                                <p class="text-lg text-semibold text-main"> (415) 234-53454 </p>
                                <small><em>We are here 24/7</em></small>
                            </div>
                        </div>
                        <!--End second tab (Custom layout)-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


                        <!--Third tab (Settings)-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <div class="tab-pane fade" id="demo-asd-tab-3">

                            <ul class="list-group pad-btm bg-trans">
                                <li class="list-header">
                                    <p class="text-semibold text-main mar-no">Public Settings</p>
                                </li>
                                <li class="list-group-item">
                                    <div class="pull-right">
                                        <input class="toggle-switch" id="demo-switch-4" type="checkbox" checked="">
                                        <label for="demo-switch-4"></label>
                                    </div>
                                    Online status
                                </li>
                                <li class="list-group-item">
                                    <div class="pull-right">
                                        <input class="toggle-switch" id="demo-switch-5" type="checkbox" checked="">
                                        <label for="demo-switch-5"></label>
                                    </div>
                                    Show offline contact
                                </li>
                                <li class="list-group-item">
                                    <div class="pull-right">
                                        <input class="toggle-switch" id="demo-switch-6" type="checkbox">
                                        <label for="demo-switch-6"></label>
                                    </div>
                                    Show my device icon
                                </li>
                            </ul>

                        </div>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--Third tab (Settings)-->

                </div>
            </div>
            <div class="nano-pane" style="display: none;">
                <div class="nano-slider" style="height: 1508px; transform: translate(0px, 0px);"></div>
            </div>
        </div>
    </div>
</aside>
