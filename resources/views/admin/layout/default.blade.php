<!DOCTYPE html>
<html class=" js canvas no-touch csstransforms csstransforms3d csstransitions video audio localstorage sessionstorage svg inlinesvg" lang="">
<head>
    @include('admin.layout._head')
</head>

<body>
<div class="app">
    @include('admin.layout._header')
    <section class="layout">
        @include('admin.layout._menu')
        <section class="main-content">
            <div class="fffix">
                <div class="content-wrap">
                    <div class="wrapper">
                        @yield('content')
                    </div>
                </div>
            </div>
        </section>
    </section>
</div>
@include('admin.layout._footer')
</body>
</html>