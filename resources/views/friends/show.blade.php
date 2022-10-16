<x-app-layout>
    @include('includes.page-title')
<div class="row">
    <div class="col-lg-4">
        <!--List Todo-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="panel panel-trans">
            <div class="panel-heading">
                <h3 class="panel-title">To do list</h3>
            </div>
            <div class="pad-ver">
                <ul class="list-group bg-trans list-todo mar-no">
                    <li class="list-group-item">
                        <input id="demo-todolist-1" class="magic-checkbox" type="checkbox">
                        <label for="demo-todolist-1"><span>Find an idea. <span class="label label-danger">Important</span></span></label>
                    </li>
                    <li class="list-group-item">
                        <input id="demo-todolist-2" class="magic-checkbox" type="checkbox" checked="">
                        <label for="demo-todolist-2"><span>Do some work</span></label>
                    </li>
                    <li class="list-group-item">
                        <input id="demo-todolist-3" class="magic-checkbox" type="checkbox">
                        <label for="demo-todolist-3"><span>Read the book</span></label>
                    </li>
                    <li class="list-group-item">
                        <input id="demo-todolist-4" class="magic-checkbox" type="checkbox">
                        <label for="demo-todolist-4"><span>Upgrade server <span class="label label-warning">Warning</span></span></label>
                    </li>
                    <li class="list-group-item">
                        <input id="demo-todolist-5" class="magic-checkbox" type="checkbox" checked="">
                        <label for="demo-todolist-5"><span>Redesign my logo <span class="label label-info">2 Mins</span></span></label>
                    </li>
                </ul>
            </div>
            <div class="input-group pad-all">
                <input type="text" class="form-control" placeholder="New task" autocomplete="off">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-success"><i class="demo-pli-add"></i></button>
                </span>
            </div>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End todo list-->
    </div>
    <div class="col-lg-4">
        <div class="panel panel-trans">
            <div class="panel-heading">
                <div class="panel-control">
                    <a title="" data-html="true" data-container="body" data-original-title="<p class='h4 text-semibold'>Information</p><p style='width:150px'>This is an information bubble to help the user.</p>" href="#" class="demo-psi-information icon-lg icon-fw unselectable text-info add-tooltip"></a>
                </div>
                <h3 class="panel-title">Services</h3>
            </div>
            <div class="bord-btm">
                <ul class="list-group bg-trans">
                    <li class="list-group-item">
                        <div class="pull-right">
                            <input id="demo-online-status-checkbox" class="toggle-switch" type="checkbox" checked="">
                            <label for="demo-online-status-checkbox"></label>
                        </div>
                        Online status
                    </li>
                    <li class="list-group-item">
                        <div class="pull-right">
                            <input id="demo-show-off-contact-checkbox" class="toggle-switch" type="checkbox" checked="">
                            <label for="demo-show-off-contact-checkbox"></label>
                        </div>
                        Show offline contact
                    </li>
                    <li class="list-group-item">
                        <div class="pull-right">
                            <input id="demo-show-device-checkbox" class="toggle-switch" type="checkbox">
                            <label for="demo-show-device-checkbox"></label>
                        </div>
                        Show my device icon
                    </li>
                </ul>
            </div>
            <div class="panel-body">
                <div class="pad-btm">
                    <p class="text-semibold text-main">Upgrade Progress</p>
                    <div class="progress progress-sm">
                        <div class="progress-bar progress-bar-purple" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%;" role="progressbar">
                            <span class="sr-only">15%</span>
                        </div>
                    </div>
                    <small>15% Completed</small>
                </div>
                <div class="pad-btm">
                    <p class="text-semibold text-main">Database</p>
                    <div class="progress progress-sm">
                        <div class="progress-bar progress-bar-success" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;" role="progressbar">
                            <span class="sr-only">70%</span>
                        </div>
                    </div>
                    <small>70% Completed</small>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="panel panel-trans">
            <div class="pad-all">
                <div class="media mar-btm">
                    <div class="media-left">
                        <img src="img/profile-photos/2.png" class="img-md img-circle" alt="Avatar">
                    </div>
                    <div class="media-body">
                        <p class="text-lg text-main text-semibold mar-no">Ralph West</p>
                        <p>Project manager</p>
                    </div>
                </div>
                <blockquote class="bq-sm bq-open bq-close">Lorem ipsum dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</blockquote>
            </div>

            <div class="bord-top">
                <ul class="list-group bg-trans bord-no">
                    <li class="list-group-item list-item-sm">
                        <div class="media-left">
                            <i class="demo-psi-facebook icon-lg"></i>
                        </div>
                        <div class="media-body">
                            <a href="#" class="btn-link text-semibold">Facebook</a>
                        </div>
                    </li>
                    <li class="list-group-item list-item-sm">
                        <div class="media-left">
                            <i class="demo-psi-twitter icon-lg"></i>
                        </div>
                        <div class="media-body">
                            <a href="#" class="btn-link text-semibold">@RalphWe</a>
                            <br>
                            Design my themes with <a href="#" class="btn-link text-bold">#Bootstrap</a> Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        </div>
                    </li>
                    <li class="list-group-item list-item-sm">
                        <div class="media-left">
                            <i class="demo-psi-instagram icon-lg"></i>
                        </div>
                        <div class="media-body">
                            <a href="#" class="btn-link text-semibold">Ralphz</a>
                        </div>
                    </li>
                    <li class="list-group-item list-item-sm">
                        <div class="media-body">

                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
