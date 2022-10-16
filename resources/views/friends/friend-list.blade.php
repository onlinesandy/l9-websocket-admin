<div id="friend-list-tab" class="tab-pane fade active in">
    <p class="text-main text-semibold">Friend List</p>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($getFriends as $f)
                @php
                   $checkFriendStatus =  auth()->user()->getFriendship($f);
                @endphp
                    <tr>
                        <td><a href="#" class="btn-link">
                                {{ $f->name }}</a></td>

                        <td>
                            @if($checkFriendStatus->status == 'accepted')
                            <a id="unfriend-btn"  href="javascript:void(0);" sender_id="{{$f->id}}">
                                <div class="label label-table label-warning" >Unfriend</div>
                            </a>
                            @endif


                        </td>

                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
</div>
