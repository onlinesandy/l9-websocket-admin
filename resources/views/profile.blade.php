<x-app-layout>
    @include('includes.page-title')
    <div class="row">

        <div class="col-md-3 eq-box-md">
            <div class="panel widget">
                <div class="panel-body text-center">
                    <img alt="Profile Picture" class="img-lg img-circle mar-btm" src="{{ Vite::asset('resources/img/profile-photos/1.png') }}">
                    <p class="text-lg text-semibold mar-no text-main">{{ auth()->user()->name }}</p>
                    <p class="text-muted">{{ auth()->user()->email }}</p>
                    <div class="mar-top">
                        <button class="btn btn-mint">Follow</button>
                        <button class="btn btn-mint">Message</button>
                    </div>
                </div>
                <div class="widget-body1">

                    <div class="list-group bg-trans mar-no">
                        <a class="list-group-item list-item-sm" href="#">
                            <span class="label label-primary pull-right">15</span>
                            Recent Activity
                        </a>
                        <a class="list-group-item list-item-sm" href="#">
                            <span class="label label-success pull-right">100</span>
                            Following
                        </a>
                        <a class="list-group-item list-item-sm" href="#">
                            <span class="label label-danger pull-right">300</span>
                            Photos
                        </a>

                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-9">
            <div id="panel" style="background-color: white">
                <div class="eq-height clearfix">
                    <div class="eq-box-md eq-no-panel col-md-12">
                        <div id="demo-main-wz">
                          <ul class="row wz-step wz-icon-bw wz-nav-off mar-top wz-steps">
                                <li class="col-xs-3 active">
                                    <a data-toggle="tab" href="#demo-main-tab1" aria-expanded="true">
                                        <span class="text-danger"><i class="demo-pli-information icon-2x"></i></span>
                                        <p class="text-semibold mar-no">Account</p>
                                    </a>
                                </li>
                                <li class="col-xs-3">
                                    <a data-toggle="tab" href="#demo-main-tab2" aria-expanded="false">
                                        <span class="text-warning"><i class="demo-pli-male icon-2x"></i></span>
                                        <p class="text-semibold mar-no">Profile</p>
                                    </a>
                                </li>
                                <li class="col-xs-3">
                                    <a data-toggle="tab" href="#demo-main-tab3" aria-expanded="false">
                                        <span class="text-info"><i class="demo-pli-home icon-2x"></i></span>
                                        <p class="text-semibold mar-no">Address</p>
                                    </a>
                                </li>
                                <li class="col-xs-3">
                                    <a data-toggle="tab" href="#demo-main-tab4" aria-expanded="false">
                                        <span class="text-success"><i class="demo-pli-medal-2 icon-2x"></i></span>
                                        <p class="text-semibold mar-no">Finish</p>
                                    </a>
                                </li>
                            </ul>

                            <!--progress bar-->
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-primary"
                                    style="width: 25%; left: 0%; position: relative; transition: all 0.5s ease 0s;">
                                </div>
                            </div>


                            <!--form-->
                            <form class="form-horizontal">
                                <div class="panel-body">
                                    <div class="tab-content">

                                        <!--First tab-->
                                        <div id="demo-main-tab1" class="tab-pane active in">
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Username</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="username"
                                                        placeholder="Username">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Email address</label>
                                                <div class="col-lg-9">
                                                    <input type="email" class="form-control" name="email"
                                                        placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Password</label>
                                                <div class="col-lg-9 pad-no">
                                                    <div class="clearfix">
                                                        <div class="col-lg-4">
                                                            <input type="password" class="form-control mar-btm"
                                                                name="password" placeholder="Password">
                                                        </div>
                                                        <div class="col-lg-4 text-lg-right"><label
                                                                class="control-label">Retype password</label></div>
                                                        <div class="col-lg-4"><input type="password"
                                                                class="form-control" name="password2"
                                                                placeholder="Retype password"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Second tab-->
                                        <div id="demo-main-tab2" class="tab-pane fade">
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">First name</label>
                                                <div class="col-lg-9 pad-no">
                                                    <div class="clearfix">
                                                        <div class="col-lg-4">
                                                            <input type="text" placeholder="First name"
                                                                name="firstName" class="form-control">
                                                        </div>
                                                        <div class="col-lg-4 text-lg-right"><label
                                                                class="control-label">Last name</label></div>
                                                        <div class="col-lg-4"><input type="text"
                                                                placeholder="Last name" name="lastName"
                                                                class="form-control"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Company</label>
                                                <div class="col-lg-9">
                                                    <input type="text" placeholder="Company" name="company"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Member Type</label>
                                                <div class="col-lg-9">
                                                    <div class="radio">
                                                        <input id="demo-radio-1" class="magic-radio" type="radio"
                                                            name="memberType" value="free">
                                                        <label for="demo-radio-1">Free</label>

                                                        <input id="demo-radio-2" class="magic-radio" type="radio"
                                                            name="memberType" value="personal">
                                                        <label for="demo-radio-2">Personal</label>

                                                        <input id="demo-radio-3" class="magic-radio" type="radio"
                                                            name="memberType" value="bussines">
                                                        <label for="demo-radio-3">Bussiness</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Third tab-->
                                        <div id="demo-main-tab3" class="tab-pane">
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Phone Number</label>
                                                <div class="col-lg-9">
                                                    <input type="text" placeholder="Phone number"
                                                        name="phoneNumber" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Address</label>
                                                <div class="col-lg-9">
                                                    <input type="text" placeholder="Address" name="address"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">City</label>
                                                <div class="col-lg-9 pad-no">
                                                    <div class="clearfix">
                                                        <div class="col-lg-5">
                                                            <input type="text" placeholder="City" name="city"
                                                                class="form-control">
                                                        </div>
                                                        <div class="col-lg-3 text-lg-right"><label
                                                                class="control-label">Poscode</label></div>
                                                        <div class="col-lg-4"><input type="text"
                                                                placeholder="Poscode" name="poscode"
                                                                class="form-control"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Fourth tab-->
                                        <div id="demo-main-tab4" class="tab-pane">
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Bio</label>
                                                <div class="col-lg-9">
                                                    <textarea placeholder="Tell us your story..." rows="4" name="bio" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-9 col-lg-offset-2">
                                                    <div class="checkbox">
                                                        <input id="demo-checkbox-1" class="magic-checkbox"
                                                            type="checkbox" name="acceptTerms">
                                                        <label for="demo-checkbox-1"> Accept the terms and
                                                            policies</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!--Footer buttons-->
                                <div class="pull-right pad-rgt mar-btm">
                                    <button type="button" class="previous btn btn-primary disabled">Previous</button>
                                    <button type="button" class="next btn btn-primary"
                                        style="display: inline-block;">Next</button>
                                    <button type="button" class="finish btn btn-success" style="display: none;"
                                        disabled="">Finish</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



</x-app-layout>
