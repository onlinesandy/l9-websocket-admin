<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;

class SearchRole extends Component
{
    use WithPagination;
    public $search = '';
    public $srno;

    public function updatingsearchRole()
    {
        $this->resetPage();
    }

    public function render()
    {
        $search = '%'.$this->search.'%';
        $list_per_page = 10;
        $this->srno = 0;
        $roles = Role::where('name','like', $search)->orderBy('id','DESC')->paginate($list_per_page);
        return view('livewire.search-role',['roles'=>$roles,'title'=>'Role Listing']);
    }
}
