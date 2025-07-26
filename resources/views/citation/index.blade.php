@extends('base')

@section('content')
    <div>
        <a href="{{ route('citation.create') }}" class="btn bg-blue-500 text-gray-100 px-12 mb-8">Ajouter</a>

        @if (session('success'))
            <div role="alert" class="alert alert-success alert-soft mb-5" id ="alert">
                <span>{{ session('success') }}</span>
            </div>
        @endif
        <div class="overflow-x-auto">

            <table class="table">
                <!-- head -->
                <thead>
                    <tr>
                        <th>Auteur</th>
                        <th>Citation (description)</th>
                        <th>Favorite (status)</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($citations as $citation)
                        <tr class="even:hover:bg-base-300">
                            <td>{{ $citation->auteur }}</td>
                            <td>{{ $citation->description }} </td>
                            <td>
                                @if ($citation->status == 1)
                                    <span class="badge bg-green-400  rounded-full text-gray-100 text-xs">complets 😘</span>
                                @else
                                    <span class="badge bg-yellow-400  rounded-full text-gray-100 text-xs">no complets</span>
                                @endif

                            </td>
                            <td class="flex items-center gap-2">
                                <a href="{{ route('citation.edit', $citation->id) }}"
                                    class="text-info font-thin">Modifier</a>
                                <form action="{{ route('citation.destroy', $citation->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="text-error font-thin cursor-pointer hover:underline"
                                        onclick=" return confirm ('voulez-vous Supprimer la citation ?')" value="Supprimer">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('script')
  <script>
      let hiddenAlert = document.querySelector('#alert');
      setTimeout(() => {
        hiddenAlert.classList.add('hidden')
      }, 5000);
    </script>
@endsection
