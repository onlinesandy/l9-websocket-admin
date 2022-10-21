<div class="panel-body">

    <div class="pad-btm form-inline">
        <div class="row">
            <div class="col-sm-6 table-toolbar-left">
                @can('roles.create')
                    <a class="btn btn-success btn-labeled demo-pli-add" href="{{ route('roles.create') }}">
                        Create New Role
                    </a>
                @endcan
            </div>
            <div class="col-sm-6 table-toolbar-right">
                <div class="form-group">
                    <input wire:model="search" id="search" type="text" placeholder="Search"
                        class="form-control" autocomplete="off">
                </div>
                <div class="btn-group">
                    <a class="btn btn-default" href="{{ route('roles.file-export-excel') }}"><i class="fa fa-file-excel-o"></i></a>
                    <div class="btn-group">
                        <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" aria-expanded="false">
                            <i class="demo-pli-download-from-cloud"></i>
                            <span class="caret"></span>
                        </button>
                        <ul role="menu" class="dropdown-menu dropdown-menu-right">
                            <li><a href="{{ route('roles.file-export-excel') }}">Download as Excel</a></li>
                            <li><a href="{{ route('roles.file-export-csv') }}">Download as CSv</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <div wire:loading.delay.longest wire:target="search">Processing...</div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Sr No.</th>
                    <th>Role</th>
                    <th>Assigned Permissions</th>
                    <th>Created At</th>
                    <th width="300px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $key => $role)
                    <tr>
                        <td>{{ ++$srno }}</td>
                        <td>{{ $role->name }}</td>
                        <td>{{ $role->name }}</td>
                        <td><i class="ti-time"></i> {{ $role->created_at->format('d-m-Y H:i') }}</td>
                        <td>
                            <a class="btn btn-info btn-labeled fa fa-eye" href="{{ route('roles.show', $role->id) }}">Show</a>
                            @can('roles.edit')
                            <a class="btn btn-warning btn-labeled fa fa-edit" href="{{ route('roles.edit', $role->id) }}">Edit</a>
                            @endcan
                            @can('roles.delete')
                                {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id], 'style' => 'display:inline']) !!}
                                <button type="submit" class="btn btn-danger btn-labeled fa fa-trash-o">
                                    Delete
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
