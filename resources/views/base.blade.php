<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
      <title>@yield('title','Citation || Émouvante')</title>
      <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <h1 class="mt-10 px-4 md:px-16 max-w-6xl mx-auto font-extrabold text-gray-800 text-2xl ">Parle des Citations qui ton plus emits </h1>
    <main>
        <div class="max-w-2xl md:max-w-7xl mx-auto pt-10 mb-40 ">
            @yield('content')
        </div>
    </main>
  <footer>
    @yield('script')
  </footer>
  </body>
</html>
