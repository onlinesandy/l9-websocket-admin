<div id="friend-list-tab" class="tab-pane fade active in">
    <p class="text-main text-semibold">Friend List</p>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Avatar</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $u)
                    @php
                        $checkFriendStatus = auth()
                            ->user()
                            ->getFriendship($u);
                    @endphp
                    <tr>
                        <td>
                            <a href="#" class="btn-link">
                                <img src="{{ Vite::asset('resources/img/profile-photos/1.png') }}"
                                    class="img-circle img-sm" alt="{{ $u->name }}">
                            </a>
                        </td>

                        <td><a href="#" class="btn-link">{{ $u->name }}</a></td>

                        <td>
                            @if (isset($checkFriendStatus->status) && $checkFriendStatus->status == 'accepted')
                                <a id="unfriend-btn" href="javascript:void(0);" sender_id="{{ $u->id }}">
                                    <div class="label label-table label-warning">Unfriend</div>
                                </a>
                            @endif


                        </td>

                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
</div>
