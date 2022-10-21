<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class FriendController extends Controller
{
    public function acceptfriendrequest(Request $request, $id)
    {
        $getUser = User::find($id);
        if ($getUser) {
            $checkFriendStatus = auth()
                ->user()
                ->getFriendship($getUser);
            if ($checkFriendStatus->status == 'pending') {
                auth()
                    ->user()
                    ->acceptFriendRequest($getUser);
                return back()->with('success', 'Friend request Accepted!!');
            } else {
                return back()->with('error', 'Something Went wrong!');
            }
        } else {
            return back()->with('error', 'Something Went wrong!');
        }
    }
    public function unfriend(Request $request, $id)
    {
        $getUser = User::find($id);
        if ($getUser) {
            $checkFriendStatus = auth()
                ->user()
                ->getFriendship($getUser);
            if ($checkFriendStatus->status == 'accepted') {
                auth()
                    ->user()
                    ->unfriend($getUser);
                return back()->with('success', 'Unfriend Successfully!!');
            } else {
                return back()->with('error', 'Something Went wrong!');
            }
        } else {
            return back()->with('error', 'Something Went wrong!');
        }
    }
    public function blockfriend(Request $request, $id)
    {
        $getUser = User::find($id);
        if ($getUser) {
            $checkFriendStatus = auth()
                ->user()
                ->getFriendship($getUser);
            if ($checkFriendStatus) {
                auth()
                    ->user()
                    ->blockFriend($getUser);
                return back()->with('success', 'Blocked Successfully!!');
            } else {
                return back()->with('error', 'Something Went wrong!');
            }
        } else {
            return back()->with('error', 'Something Went wrong!');
        }
    }
    public function sendfriendrequest(Request $request, $id)
    {
        $getUser = User::find($id);
        if ($getUser) {
            if (
                !auth()
                    ->user()
                    ->isFriendWith($getUser)
            ) {
                auth()
                    ->user()
                    ->befriend($getUser);
            }
            return back()->with('success', 'Friend request sent Successfully!!');
        } else {
            return back()->with('error', 'Something Went wrong!');
        }
    }

    public function index(Request $request)
    {
        $getFriendRequests = auth()
            ->user()
            ->getFriendRequests();

        $getFriends = auth()
            ->user()
            ->getFriends();
        //  dd($getFriends);

        $users = User::all()->except(Auth::id());

        return view('friends.index', [
            'getFriendRequests' => $getFriendRequests,
            'getFriends' => $getFriends,
            'users'=>$users,
            'title' => 'Friend List']);
    }
}
