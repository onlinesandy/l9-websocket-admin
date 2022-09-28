@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="list-group">
            @foreach ($errors->all() as $error)
                <a class="list-group-item list-group-item-danger" href="#" style="margin-bottom: 5px;"><i class="ti-close" style="margin-right: 5px;"></i> {{ $error }}</a>
            @endforeach

        </div>

    </div>
@endif
