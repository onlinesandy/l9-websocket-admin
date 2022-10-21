<x-app-layout>
    @include('includes.page-title')

    <div class="col-sm-12">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('permissions.index') }}"> Back</a>
                </div>
            </h3>
            </div>

            <!--===================================================-->
            <div class="panel-body">
                <div class="permission-box-panel">
                    <div class="panel panel-purple panel-colorful">
                        <div class="pad-all text-center">
                            <span class="text-2x text-thin">1</span>
                            <p>{{ $permission->name }}</p>
                            <i class="demo-pli-shopping-bag icon-lg"></i>
                        </div>
                    </div>
                </div>

            </div>
            <!--===================================================-->
            <!-- End Striped Table -->

        </div>
    </div>

    </x-app-layout>
