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
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Edit Role
                    <a class="pull-right" href="{{ route('roles.index') }}">
                        <span class="btn btn-primary">Back</span>
                    </a>
                </h3>
            </div>
            {!! Form::model($role, ['method' => 'PATCH', 'route' => ['roles.update', $role->id]]) !!}
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                        </div>
                    </div>

                </div>
                <div class="row form-group">
                    <div class="col-sm-6">
                    <label class="col-lg-2 control-label">Permission:</label>
                    <div class="col-lg-8">
                    @foreach ($permission as $value)
                        <div class="checkbox">
                            {{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, ['class' => 'name magic-checkbox', 'id' => "permission-checkbox-{$value->id}"]) }}
                            <label for="permission-checkbox-{{ $value->id }}">{{ $value->name }}</label>
                        </div>
                    @endforeach
                    </div>
                    </div>
                </div>
            </div>
            <div class="panel-footer text-right">
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
            {!! Form::close() !!}

        </div>
    </div>
</x-app-layout>
