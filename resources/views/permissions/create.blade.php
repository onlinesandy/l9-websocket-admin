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
                <h3 class="panel-title">Create New Permission
                    <a class="pull-right" href="{{ route('permissions.index') }}">
                        <span class="btn btn-primary">Back</span>
                    </a>
                </h3>
            </div>
            {!! Form::open(['route' => 'permissions.store', 'method' => 'POST']) !!}
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
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
