<x-app-layout>
    @include('includes.page-title')

    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{ $title }}</h3>
        </div>

        <!--Data Table-->
        <!--===================================================-->
        <livewire:search-role>

        <!--===================================================-->
        <!--End Data Table-->

    </div>

</x-app-layout>
