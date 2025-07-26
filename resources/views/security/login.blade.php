<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
</head>

<body>
  
    <main>
        <div class="max-w-xs  mx-auto pt-10 mb-40 h-screen flex flex-col items-center justify-center w-full">
            <h2 class="text-center mb-8">Se connecter a votre compte </h2>

            <form action="" method="post"class="w-full" >
              @csrf
              <div class="mb-3">
                  <label class="floating-label w-full">
                      <span>Votre email</span>
                      <input type="email" name="email" placeholder="bicomlab@gmail.com"
                          class="input w-full focus:outline-0 focus:outline-zinc-800 " required />
                  </label>
              </div>
              <div class="mb-3">
                  <label class="floating-label ">
                      <span>Votre mot de passe</span>
                      <input type="password" name="password" placeholder="mot de passe"
                          class="input w-full focus:outline-0 focus:outline-zinc-800 " required />
                  </label>
              </div>
              <button type="submit" class="btn btn-info text-gray-100">
                  Se connecter
              </button>
            </form>
        </div>
    </main>

</body>

</html>
