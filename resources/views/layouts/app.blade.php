<!DOCTYPE html>
<html lang="en">

<head>

    @include('layouts.__parts.metas')

    <title>WEDO APP</title>

    @include('layouts.__parts.fonts_links')

    @include('layouts.__parts.css_files')

</head>

<body>

    <main class="main-page {{ request()->routeIs('blog') ? 'blog-page' : 'homepage' }}">


        @include('layouts.__sections.topBar')

        @include('layouts.__sections.header')


        @yield('content')


        @include('layouts.__sections.footer')

    </main>

    @include('layouts.__parts.js_files')
</body>

</html>
