<div class="col-md-12">
    <div class="col-md-3">
        <div class="panel">
            <div class="tab-pane fade in active" id="demo-asd-tab-1">
                <p class="pad-hor mar-top text-semibold text-main">
                    Friends
                </p>
                <hr />

                <!--Family-->
                <div class="list-group bg-trans">
                    @forelse ($userlist as $usr)
                        @php
                            $friend = \App\Models\User::find($usr->id);
                            $checkFriendStatus_outter = auth()
                                ->user()
                                ->getFriendship($friend);
                        @endphp
                        <div class="list-group-item">
                            <div class="media-left pos-rel">
                                <img class="img-circle img-xs"
                                    src="{{ Vite::asset('resources/img/profile-photos/2.png') }}" alt="Profile Picture">

                                <i class="badge badge-success badge-stat badge-icon pull-left"></i>
                            </div>
                            <div class="media-body">
                                <div class="col-md-6">

                                    <p class="mar-no1" style="margin-top: 10px;">
                                        {{ $usr->name }}
                                    </p>

                                </div>
                                <div class="col-md-6">
                                    @if (!isset($checkFriendStatus_outter->status))
                                        <a href="/sendfriendrequest/{{ $usr->id }}">
                                            <span class="btn btn-info btn-labeled fa fa-solid fa-question pull-right">
                                                Send Request</span>
                                        </a>
                                    @elseif(isset($checkFriendStatus_outter->status) &&
                                        $checkFriendStatus_outter->status != 'accepted' &&
                                        $checkFriendStatus_outter->sender_id != Auth::id())
                                        <a href="/acceptfriendrequest/{{ $usr->id }}">
                                            <span
                                                class="chat-outter-icon btn btn-success btn-labeled fa fa-check pull-right">
                                                Accept </span>
                                        </a>
                                    @elseif(isset($checkFriendStatus_outter->status) &&
                                        $checkFriendStatus_outter->status != 'accepted' &&
                                        $checkFriendStatus_outter->sender_id == Auth::id())
                                        <span
                                            class="chat-outter-icon  btn btn-warning btn-labeled fa fa-solid fa-exclamation pull-right">Pending</span>
                                    @endif
                                    @if (isset($checkFriendStatus_outter->status) &&
                                        $checkFriendStatus_outter->status != 'blocked' &&
                                        $checkFriendStatus_outter->status == 'accepted')
                                        <span wire:click="checkfriend({{ $usr->id }})" wire:loading.attr="disabled"
                                            class="chat-outter-icon  btn btn-success btn-labeled fa fa-paper-plane-o pull-right"
                                            style="padding: 0px 58px 0px 10px;">
                                            <span wire:loading.attr="disabled"
                                                wire:target="checkfriend({{ $usr->id }})">Chat</span>
                                            {{-- <span wire:loading wire:target="checkfriend({{ $usr->id }})"><i class="fa fa-spinner fa-spin"></i></span> --}}
                                        </span>
                                    @endif
                                </div>

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
    </div>
    <div class="col-md-9">
        <div wire:loading.remove id="checkfriendisselecteddiv"
            class="bg-gray @if (!$showOverlay) hide @endif">
            <div class="checkfriendisselectedinside text-info"><i class="fa fa-user"></i> Please selet User to Chat
            </div>
        </div>
        <div wire:loading.delay.long class="chatloader bg-gray">
            <div class="chatloaderinside text-info"><i class="fa fa-spinner fa-spin"></i> Loading...</div>
        </div>
        <div class="panel">
            <!--Heading-->
            <div class="panel-heading">
                <div class="panel-control">
                    <div class="btn-group">
                        <button wire:click="checkfriend({{ $friend_id }})" type="button" class="btn btn-default">
                            <i class="ti-reload icon-lg"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="dropdown">
                            <i class="demo-pli-gear icon-lg"></i>
                        </button>

                        <ul class="dropdown-menu dropdown-menu-right">
                            @if (is_bool($checkfriend) && $checkfriend === true)
                                @if ($checkFriendStatus->status == 'pending')
                                    @if ($checkFriendStatus->sender_id == auth()->id())
                                        <li>
                                            <a href="javascript:void(0);">Pending</a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="/acceptfriendrequest/{{ $usr->id }}">
                                                Accept Request
                                            </a>
                                        </li>
                                    @endif
                                @elseif (isset($checkFriendStatus->status) &&
                                    ($checkFriendStatus->status == 'denied' || $checkFriendStatus->status == 'blocked'))
                                    <li>
                                        <a href="javascript:void(0);">Waiting</a>
                                    </li>
                                @else
                                    @if (isset($checkFriendStatus->status) && (is_bool($checkfriend) && $checkfriend === true))
                                        <li>
                                            <a wire:click="$emit('triggerUnfriend',{{ $usr->id }})"
                                                href="javascript:void(0);"><i class="fa-solid fa-user-xmark"></i>
                                                Unfriend</a>
                                        </li>
                                        <li>
                                            <a href="/blockfriend/{{ $usr->id }}"><i
                                                    class="fa-solid fa-user-lock"></i> Block</a>
                                        </li>
                                    @endif
                                @endif

                            @endif
                        </ul>

                    </div>
                </div>
                <h3 class="panel-title">
                    {{ $friendname }}

                    @error('chat-message')
                        <span class="text-danger pull-right" style="font-size:10px;">{{ $message }}</span>
                    @enderror
                </h3>
            </div>
            <div>
                <div class="nano" style="height:300px">
                    <div class="nano-content pad-all" id="chat-body-div">
                        <ul class="list-unstyled media-block">
                            @php
                                $prevDate = '';
                                $unread = false;
                                $unreadline = 0;
                            @endphp
                            @forelse ($messages as $m)
                                @php
                                    if ($m->read_status == 0) {
                                        $unread = true;
                                        $unreadline++;
                                    }
                                @endphp
                                @if ($m->created_at->format('Y-m-d') != $prevDate || $unread)
                                    @if ($m->created_at->format('Y-m-d') != $prevDate)
                                        @php
                                            $prevDate = $m->created_at->format('Y-m-d');

                                        @endphp
                                        <p class="chatDateDivider">
                                            @if ($unread && $unreadline == 1 && $m->from_id != Auth::id())
                                                <span class="chatDateDivider_unread">Unread Messages</span><br /><br />
                                            @endif
                                            <span class="chatDateDivider_dt">
                                                {{ $m->created_at->format('Y-m-d') }}
                                            </span>
                                        </p>
                                    @elseif($unread && $unreadline == 1 && $m->from_id != Auth::id())
                                        <p class="chatDateDivider">
                                            @if ($unread)
                                                <span class="chatDateDivider_unread">Unread Messages</span><br /><br />
                                            @endif
                                        </p>
                                    @endif
                                @endif


                                <li class="mar-btm">
                                    <div
                                        class="hide @if ($m->from_id == Auth::id()) media-right @else media-left @endif">
                                        <img src="{{ Vite::asset('resources/img/profile-photos/1.png') }}"
                                            class="img-circle img-sm" alt="Profile Picture">
                                    </div>
                                    <div
                                        class="media-body pad-hor @if ($m->from_id == Auth::id()) speech-right @endif">
                                        <div class="speech">
                                            <a href="#" class="media-heading hide">{{ $m->from_id }}</a>
                                            <p> <strong>{{ $m->message }}</strong></p>
                                            <p class="speech-time" style="margin-bottom: 0px;">
                                                <i
                                                    class="demo-pli-clock icon-fw"></i>{{ $m->created_at->format('h:i A') }}
                                                @if ($m->read_status != 0 && $m->from_id == Auth::id())
                                                    <i class="fa fa-check"></i>
                                                @endif
                                            </p>
                                        </div>
                                    </div>

                                </li>
                            @empty
                                <li class="mar-btm">
                                    No Messages yet....
                                </li>
                            @endforelse

                        </ul>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-xs-11">
                            <input wire:keydown.enter="sendMessage" wire:model="msg" type="text"
                                placeholder="Enter Message" class="form-control chat-input" style="height: 32px;" />
                        </div>
                        <div class="col-xs-1">
                            <button wire:click="sendMessage" class="btn btn-primary" type="submit"> <i
                                    class="fa fa-paper-plane-o"></i> Send </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<script>
    window.addEventListener('DOMContentLoaded', function() {
        console.log("chat page");
        window.Echo.private(`chat-{{ auth()->id() }}`)
            .listen(`chat-sendmsg`, (e) => {
                console.log('chat room event fired', e);
            }).notification((res) => {
                let msg = JSON.parse(res.message);
                // Livewire.emit('NewMessage', JSON.parse(res.message))
                $.niftyNoty({
                    type: 'dark',
                    title: 'Message from '+ res.from,
                    message: msg.message,
                    container: 'floating',
                    timer: 5000
                });
            });


    });
</script>
