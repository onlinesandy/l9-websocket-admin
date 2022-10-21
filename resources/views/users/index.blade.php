<x-app-layout>
    @include('includes.page-title')
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">User Listing</h3>
        </div>

        <!--Data Table-->
        <!--===================================================-->
        <div class="panel-body">
            <div class="pad-btm form-inline">
                <div class="row">
                    <div class="col-sm-6 table-toolbar-left">
                        <a class="btn btn-success btn-labeled demo-pli-add" href="{{ route('users.create') }}">Add New User</a>
                    </div>
                    <div class="col-sm-6 table-toolbar-right">
                        <div class="form-group">
                            <input id="demo-input-search2" type="text" placeholder="Search" class="form-control"
                                autocomplete="off">
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-default"><i class="demo-pli-download-from-cloud"></i></button>
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
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
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Roles</th>
                            <th>Created At</th>
                            <th width="300px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $user)
                            <tr>
                                <td>1</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if (!empty($user->getRoleNames()))
                                        @foreach ($user->getRoleNames() as $v)
                                            <label class="badge badge-success">{{ $v }}</label>
                                        @endforeach
                                    @endif
                                </td>
                                <td>
                                        <i class="ti-time mar-rgt-5"></i>{{ $user->created_at }}
                                </td>
                                <td>

                                    <a class="btn btn-info btn-labeled fa fa-eye" href="{{ route('users.show', $user->id) }}">Show</a>
                                    <a class="btn btn-warning btn-labeled fa fa-edit" href="{{ route('users.edit', $user->id) }}">Edit</a>
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id], 'style' => 'display:inline']) !!}
                                    <button class='btn btn-danger btn-labeled fa fa-trash-o'> Delete </button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $data->links() !!}
            </div>
        </div>
        <!--===================================================-->
        <!--End Data Table-->

    </div>
</x-app-layout>
