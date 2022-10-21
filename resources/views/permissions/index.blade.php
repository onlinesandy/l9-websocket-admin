<x-app-layout>
    @include('includes.page-title')
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{ $title }}</h3>
        </div>

        <div class="panel-body">

            <div class="pad-btm form-inline">
                <div class="row">
                    <div class="col-sm-6 table-toolbar-left">
                        @can('roles.create')
                            <div class="input-group pad-all">
                                {!! Form::open(['route' => 'permissions.store', 'method' => 'POST']) !!}
                                {!! Form::text('name', null, ['placeholder' => 'Create New Permission', 'class' => 'form-control add-per-height']) !!}
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-success"><i class="demo-pli-add"></i></button>
                                </span>
                                {!! Form::close() !!}
                            </div>
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
                            <a class="btn btn-default" href="{{ route('roles.file-export-excel') }}"><i
                                    class="fa fa-file-excel-o"></i></a>
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn btn-default dropdown-toggle"
                                    aria-expanded="false">
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
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Permission Name</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th width="300px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $srno = $i;
                        @endphp
                        @foreach ($permissions as $key => $p)
                            <tr>
                                <td>{{ ++$srno }}</td>
                                <td>{{ $p->name }}</td>
                                <td>
                                    @if (auth()->user()->can($p->name))
                                        Permission Granted to me
                                    @else
                                    Not Granted
                                    @endif
                                </td>
                                <td><i class="ti-time"></i> {{ $p->created_at->format('d-m-Y H:i') }}</td>
                                <td>
                                    <a class="btn btn-info btn-labeled fa fa-eye" href="{{ route('permissions.show', $p->id) }}">Show</a>
                                    @can('roles.edit')
                                    <a class="btn btn-warning btn-labeled fa fa-edit" href="{{ route('permissions.edit', $p->id) }}">Edit</a>
                                    @endcan
                                    @can('roles.delete')
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $p->id], 'style' => 'display:inline']) !!}
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
                {{ $permissions->links() }}
            </div>

        </div>


    </div>

</x-app-layout>
