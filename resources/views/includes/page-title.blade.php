@if (session('login-success'))
        <div class="alert alert-success" role="alert">
            {{ session('login-success') }}
        </div>
    @endif


<div id="page-title">
    <h1 class="page-header text-overflow">Dashboard</h1>

    <!--Searchbox-->
    <div class="searchbox">
        <div class="input-group custom-search-form">
            <input type="text" class="form-control" placeholder="Search..">
            <span class="input-group-btn">
                <button class="text-muted" type="button"><i class="demo-pli-magnifi-glass"></i></button>
            </span>
        </div>
    </div>
</div>
