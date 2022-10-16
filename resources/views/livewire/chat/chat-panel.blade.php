<div class="col-md-9">
    <div class="panel">
        <!--Heading-->
        <div class="panel-heading">
            <div class="panel-control">
                <div class="btn-group">
                    <button type="button" class="btn btn-default" data-toggle="dropdown"><i
                            class="demo-pli-gear icon-lg"></i></button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#">Available</a></li>
                        <li><a href="#">Busy</a></li>
                        <li><a href="#">Away</a></li>
                        <li class="divider"></li>
                        <li><a id="demo-connect-chat" href="#" class="disabled-link"
                                data-target="#demo-chat-body">Connect</a></li>
                        <li><a id="demo-disconnect-chat" href="#" data-target="#demo-chat-body">Disconect</a>
                        </li>
                    </ul>
                </div>
            </div>
            <h3 class="panel-title">Chat</h3>
        </div>
        <div>
            <div class="nano" style="height:300px">
                <div class="nano-content pad-all" x-data="{{ json_encode(['messages' => $messages, 'messageBody' => '']) }}" x-init="Echo.join('chat')
                    .listen('.MessageSentEvent', (e) => {
                        @this.call('incomingMessage', e)
                    })">
                    <ul class="list-unstyled media-block">
                        <template x-if="messages.length > 0">
                            <template x-for="message in messages" :key="message.id">
                                <li class="mar-btm">
                                    <div class="media-left">
                                        <img src="img/profile-photos/1.png" class="img-circle img-sm"
                                            alt="Profile Picture">
                                    </div>
                                    <div class="media-body pad-hor">
                                        <div class="speech">
                                            <a href="#" class="media-heading"><span
                                                    x-text="message.user.name"></span></a>
                                            <p x-text="message.body"></p>
                                            <p class="speech-time">
                                                <i class="demo-pli-clock icon-fw"></i><span
                                                    x-text="message.created_at"></span>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </template>
                        </template>
                        <template x-if="messages.length == 0">
                            <li class="mar-btm">
                                It's quiet in here...
                            </li>
                        </template>
                    </ul>
                </div>
            </div>
            <div class="panel-footer">
                <div class="row">
                    <div class="col-xs-9">
                        <h4>{{$msg}}</h4>
                        <input
                            @keydown.enter="
                                    @this.call('sendMessage', msg)
                                    msg = ''
                                    "
                            x-model="msg" type="text" placeholder="Enter Message" class="form-control chat-input" />
                    </div>
                    <div class="col-xs-3">
                        <button
                            @click="
                        @this.call('sendMessage', msg)
                        msg = ''
                        "
                            class="btn btn-primary btn-block" type="submit">Send</button>
                    </div>
                </div>
            </div>
            @error('chat-message')
                <div class="error mt-2">{{ $message }}</div>
            @enderror
        </div>



    </div>
</div>
