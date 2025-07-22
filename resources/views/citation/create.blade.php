@extends('base')
@section('content')

  <section class="max-w-4xl mx-auto px-8">
      <h2 class="mb-8 font-thin sm:text-2xl text-gray-600">Ajouter les Citations</h2>
      <form action="{{ route('store') }}" method="post" class="space-y-8">
        @csrf
          <label class="floating-label ">
              <span>Auteur</span>
              <input type="text" name="auteur" placeholder="Auteur" class="input w-full focus:outline-0 focus:outline-zinc-800 " required />
          </label>


          <label class="floating-label ">
              <span>Description De La Citation</span>
              <textarea class="textarea  w-full focus:outline-0 focus:outline-zinc-800" name="description" placeholder="description de la citation" required></textarea>
          </label>

          <label>
              <input type="checkbox"  name="status" class="checkbox font-thin " />
              <span class="font-thin text-gray-600">Status</span>
          </label>
          <button type="submit" class="cursor-pointer btn btn-info btn-block mt-8 text-gray-600 font-xs font-thin">Ajouter</button>
      </form>
  </section>
@endsection
