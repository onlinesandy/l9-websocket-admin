<div>
@if (count($here) > 0)

<p class="pad-hor mar-top text-semibold text-main">

    Users
    <span class="pull-right label label-warning ">{{ count($here) }}</span>
    <a href="#" ><span class="label label-success pull-right mar-rgt">Create Group</span></a>

</p>

<div class="list-group bg-trans">
    <div class="form-group has-feedback">
        <input type="text" id="demo-oi-definput" placeholder="Search Users" class="form-control">
        <i class="ti-search form-control-feedback" style="line-height: 30px;"></i>
    </div>
    @foreach($here as $authData)
        <div class="list-group-item">
            <div class="media-left pos-rel">
                <img class="img-circle img-xs" src="{{ Vite::asset('resources/img/profile-photos/9.png') }}"
                    alt="Profile Picture">
                <i class="badge badge-success badge-stat badge-icon pull-left"></i>
            </div>
            <div class="media-body">
                <span class="mar-no">{{ $authData['name'] }}</span>
                <button class="btn btn-info btn-icon pull-right"><i class="demo-psi-speech-bubble-3 icon-lg"></i> </button>
                <p><a href="#" ><span class="label label-success mar-rgt">Send Request</span></a></p>

            </div>

        </div>
    @endforeach

</div>
@else
<div class="py-4 text-gray-600">
    No User
</div>

@endif
</div>
