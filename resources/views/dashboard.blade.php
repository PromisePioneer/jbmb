@include('layouts.partials.dashboard-partials.head')

<body data-sidebar="dark">

<!-- Begin page -->
<div id="layout-wrapper">
    @include('layouts.partials.dashboard-partials.topbar')
    @include('layouts.partials.dashboard-partials.sidebar')
    @include('layouts.partials.dashboard-partials.content')
</div>
@include('layouts.partials.dashboard-partials.footer')
