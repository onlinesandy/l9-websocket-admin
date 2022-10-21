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
                <div class="row form-group" id="permission-tab-panel">
                    <div class="col-sm-12">
                        <label class="col-lg-2 control-label">Permission:</label>
                        <div class="col-lg-12">
                            @foreach ($permission as $value)
                                <div class="permission-box-panel @if (in_array($value->id, $rolePermissions) ? true : false) permissionAssigned @endif"
                                    id="{{ $value->id }}">
                                    <div
                                        class="permission-panel panel @if (in_array($value->id, $rolePermissions) ? true : false) panel-purple @else bg-trans-dark @endif  panel-colorful">
                                        <div class="pad-all text-center">
                                            <span class="text-2x text-thin">1</span>
                                            <p>{{ $value->name }}</p>
                                            <i class="demo-pli-shopping-bag icon-lg"></i>
                                        </div>
                                    </div>
                                    <input type="checkbox" name="permission[]" class="p_checkbox" value="{{ $value->id }}"
                                        id="p_checkbox{{ $value->id }}"
                                        @if (in_array($value->id, $rolePermissions) ? true : false) checked="checked" @endif />
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
<script>
    $(document).ready(function() {
        ////////////////////////
        let permission_selected = new Array();

        //////////////
        $('#permission-tab-panel').on('click', ".permission-box-panel", function() {
            let p_id = this.id;
            let p_box = $(this)
            let p_panel = $(this).find('.permission-panel');
            let p_checkbox = $(this).find('.p_checkbox');

            if (p_box.is('.permissionAssigned')) {
                if (!p_box.is('.permissionselected')) {
                    p_box.addClass('permissionselected');
                    p_panel.addClass('panel-pink');
                    permission_selected.push(p_id);
                    p_checkbox.prop('checked', false);
                } else {
                    p_box.removeClass('permissionselected');
                    p_panel.removeClass('panel-pink');
                    p_checkbox.prop('checked', true);
                    let p_index = permission_selected.indexOf(p_id);
                    if (p_index > -1) {
                        permission_selected.splice(p_index, 1);
                    }
                }
            } else if (!p_box.is('.permissionAssigned')) {
                if (!p_box.is('.permissionselected')) {
                    p_box.addClass('permissionselected');
                    p_panel.addClass('panel-warning');
                    permission_selected.push(p_id);
                    p_checkbox.prop('checked', true);
                } else {
                    p_box.removeClass('permissionselected');
                    p_panel.removeClass('panel-warning');
                    p_checkbox.prop('checked', false);
                    let p_index = permission_selected.indexOf(p_id);
                    if (p_index > -1) {
                        permission_selected.splice(p_index, 1);
                    }
                }
            }

        })

        ///////////////////

    })
</script>
