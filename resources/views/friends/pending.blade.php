<div id="pending-request-tab" class="tab-pane fade">
    <p class="text-main text-semibold">Pending Request</p>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($getFriendRequests as $f)
                    <tr>
                        <td><a href="#" class="btn-link">
                                {{ App\Models\User::findOrFail($f->sender_id)->name }}</a></td>
                        <td>Pending</td>

                        <td>
                            <a id="approve-friend-btn"  href="javascript:void(0);" sender_id="{{$f->sender_id}}">
                                <div class="label label-table label-success" >Approve</div>
                            </a>
                            <a href="#">
                                <div class="label label-table label-warning">Reject</div>
                            </a>
                            <a href="#">
                                <div class="label label-table label-danger">Block</div>
                            </a>
                        </td>

                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>


</div>
