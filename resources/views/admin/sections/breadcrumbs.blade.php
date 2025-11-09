<div class="page-header">
    <h3 class="page-title"> {{ __(strtoupper(str_replace('-', ' ',request()->segment(3) ?? request()->segment(2) ?? request()->segment(1) ?? ''))) }} </h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        </ol>
    </nav>
</div>
