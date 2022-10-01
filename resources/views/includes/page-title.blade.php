@if (session('login-success'))
    <div class="alert alert-success" role="alert">
        {{ session('login-success') }}
    </div>
@endif

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif


<div id="page-title">
    <h1 class="page-header text-overflow">{{ $title }}</h1>

    <div class="searchbox" style="padding: 15px 10px 2px 10px;">
        {{ Breadcrumbs::render() }}
    </div>
</div>


