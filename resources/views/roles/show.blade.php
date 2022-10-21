<x-app-layout>
    @include('includes.page-title')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Role</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $role->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <p>Permissions:</p>
                @if(!empty($rolePermissions))
                    @foreach($rolePermissions as $v)
                    <div class="permission-box-panel">
                        <div class="panel panel-purple panel-colorful">
                            <div class="pad-all text-center">
                                <span class="text-2x text-thin">1</span>
                                <p>{{ $v->name }}</p>
                                <i class="demo-pli-shopping-bag icon-lg"></i>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif

        </div>
    </div>
</x-app-layout>
