<div class="col-md-3">
    <div class="panel">
        <p class="pad-hor mar-top text-semibold text-main">
            Online Users
            <span class="pull-right label label-warning ">{{ count($here) }}</span>
            <a href="#"><span class="label label-success pull-right mar-rgt">Create Group</span></a>
        </p>

        <div class="list-group bg-trans">
            <div class="form-group has-feedback">
                <input type="text" id="demo-oi-definput" placeholder="Search Users" class="form-control">
                <i class="ti-search form-control-feedback" style="line-height: 30px;"></i>
            </div>
            @forelse($here as $authData)
                @php
                    $friend = \App\Models\User::find($authData['id']);
                @endphp
                <div class="list-group-item">
                    <div class="media-left pos-rel">
                        <img class="img-circle img-xs" src="{{ Vite::asset('resources/img/profile-photos/9.png') }}"
                            alt="Profile Picture">
                        <i class="badge badge-success badge-stat badge-icon pull-left"></i>
                    </div>
                    <div class="media-body">
                        <span class="mar-no">{{ $authData['name'] }}</span>
                        @if (auth()->user()->getFriendship($friend))
                            <button class="btn btn-info btn-icon pull-right"><i
                                    class="demo-psi-speech-bubble-3 icon-lg"></i> </button>
                        @else
                            <p><a href="/sendfriendrequest/{{ $authData['id'] }}"><span
                                        class="label label-success mar-rgt">Send Request</span></a></p>
                        @endif
                    </div>
                </div>
            @empty
                <div class="py-4 text-gray-600">
                    It's quiet in here...
                </div>
            @endforelse

        </div>
    </div>
    <hr />
    <div class="tab-pane fade in active" id="demo-asd-tab-1">
        <p class="pad-hor mar-top text-semibold text-main">
            You May Know Following Users
        </p>
        <hr />

        <!--Family-->
        <div class="list-group bg-trans">
            @forelse ($userlist as $usr)
                @php
                    $friend = \App\Models\User::find($usr->id);
                    $checkFriendStatus = auth()
                        ->user()
                        ->getFriendship($friend);
                @endphp
                <div class="list-group-item">
                    <div class="media-left pos-rel">
                        <img class="img-circle img-xs" src="{{ Vite::asset('resources/img/profile-photos/2.png') }}"
                            alt="Profile Picture">
                        <i class="badge badge-success badge-stat badge-icon pull-left"></i>
                    </div>
                    <div class="media-body">
                        <p class="mar-no">{{ $usr->name }}</p>
                        @if (auth()->user()->getFriendship($friend))
                            @if ($checkFriendStatus->status == 'pending')
                                <span class="label label-warning mar-rgt">Pending</span>
                            @else
                                <button class="btn btn-info btn-icon pull-right"><i
                                        class="demo-psi-speech-bubble-3 icon-lg"></i> </button>
                            @endif
                        @else
                            <p><a href="/sendfriendrequest/{{ $usr->id }}"><span
                                        class="label label-success mar-rgt">Send Request</span></a></p>
                        @endif
                    </div>
                </div>
                @empty
                <div class="py-4 text-gray-600">
                    No Friends Yet
                </div>
            @endforelse
        </div>

    </div>
</div>
