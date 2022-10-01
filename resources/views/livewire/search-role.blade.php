<div class="panel-body">

    <div class="pad-btm form-inline">
        <div class="row">
            <div class="col-sm-6 table-toolbar-left">
                @can('role-create')
                    <a class="btn btn-purple" href="{{ route('roles.create') }}">
                        <i class="demo-pli-add"></i> Create New Role
                    </a>
                @endcan
                <div class="btn-group">
                    <button class="btn btn-default"><i class="demo-pli-exclamation-circle"></i></button>
                    <button class="btn btn-default"><i class="demo-pli-recycling"></i></button>
                </div>
            </div>
            <div class="col-sm-6 table-toolbar-right">
                <div class="form-group">
                    <input wire:model="search" id="search" type="text" placeholder="Search"
                        class="form-control" autocomplete="off">
                </div>
                <div class="btn-group">
                    <a class="btn btn-default" href="{{ route('file-export') }}"><i class="demo-pli-download-from-cloud"></i></a>
                    <div class="btn-group">
                        <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" aria-expanded="false">
                            <i class="demo-pli-gear"></i>
                            <span class="caret"></span>
                        </button>
                        <ul role="menu" class="dropdown-menu dropdown-menu-right">
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
                    <th>Sr No.</th>
                    <th>Role</th>
                    <th>Assigned Permissions</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $key => $role)
                    <tr>
                        <td>{{ ++$srno }}</td>
                        <td>{{ $role->name }}</td>
                        <td>{{ $role->name }}</td>
                        <td><i class="demo-pli-clock"></i> {{ $role->name }}</td>
                        <td>
                            <a class="btn btn-info" href="{{ route('roles.show', $role->id) }}">Show</a>
                            @can('role-edit')
                                <a class="btn btn-primary" href="{{ route('roles.edit', $role->id) }}"><i
                                        class="fa fa-edit">
                                        Edit</i></a>
                            @endcan
                            @can('role-delete')
                                {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id], 'style' => 'display:inline']) !!}
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash-o"></i> Delete
                                </button>
                                {!! Form::close() !!}
                            @endcan
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        {{ $roles->links() }}
    </div>

</div>
