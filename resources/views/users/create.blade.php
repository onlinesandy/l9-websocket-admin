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

    <div class="col-sm-4">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">{{ $title }}
                    <span class="pull-right">
                        <a class="btn btn-primary" href="{{ route('users.index') }}">
                            Back

                        </a>
                        <a href="#" class="add-tooltip demo-pli-question-circle icon-lg unselectable" data-html="true"
                            data-title="<h4>Information</h4><p style='width:150px'>Password should be <br/> min 8 and max 20 character.</p>"
                            data-original-title="" title=""></a>
                    </span>

                </h3>
            </div>


            <!--Block Styled Form -->
            <!--===================================================-->
            {!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
            <div class="panel-body">
                <div class="form-group has-feedback">
                    {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                    <i class="fa fa-user icon-lg form-control-feedback"></i>
                </div>

                <div class="form-group has-feedback">
                    {!! Form::text('email', null, ['placeholder' => 'Email', 'class' => 'form-control']) !!}
                    <i class="fa fa-envelope icon-lg form-control-feedback"></i>
                </div>

                <div class="form-group has-feedback">
                    {!! Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) !!}
                    <i class="fa fa-key icon-lg form-control-feedback"></i>
                </div>

                <div class="form-group has-feedback">
                    {!! Form::password('confirm-password', ['placeholder' => 'Confirm Password', 'class' => 'form-control']) !!}
                    <i class="fa fa-key icon-lg form-control-feedback"></i>
                </div>

                <div class="form-group has-feedback">
                    {!! Form::select('roles[]', $roles, [], ['class' => 'form-control', 'multiple', 'id' => 'user-role-selects']) !!}
                </div>

            </div>
            <div class="panel-footer text-right">
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
            {!! Form::close() !!}
            <!--===================================================-->
            <!--End Block Styled Form -->

        </div>
    </div>

</x-app-layout>
