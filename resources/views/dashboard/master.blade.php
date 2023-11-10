<!doctype html>
<html lang="en">
@include('dashboard.partials.head')

<body class="vertical light ltr">
    <div class="wrapper">

        @include('dashboard.partials.header')

        @include('dashboard.partials.sidebar')

        <main role="main" class="main-content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </main>

    </div> <!-- .wrapper -->

    @include('dashboard.partials.scripts')
    @yield('scripts')
</body>

</html>
