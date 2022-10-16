<x-app-layout>
    @include('includes.page-title')
    <div class="row">
        <div class="tab-base">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a data-toggle="tab" href="#friend-list-tab">Friends</a>
                </li>
                <li>
                    <a data-toggle="tab" href="#pending-request-tab">Pending Request
                        @if (count(auth()->user()->getFriendRequests()) > 0)
                            <span class="badge badge-purple">{{ count(auth()->user()->getFriendRequests()) }}</span>
                        @endif
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" href="#blocked-user-tab">Blocked</a>
                </li>
            </ul>

            <div class="tab-content">
                @include('friends.friend-list')
                @include('friends.pending')
                @include('friends.blocked')
            </div>
        </div>
    </div>
</x-app-layout>
