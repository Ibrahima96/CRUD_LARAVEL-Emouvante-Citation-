@extends('base')

@section('content')
    <div>
        <a href="{{ route('create') }}" class="btn bg-blue-500 text-gray-100 px-12 mb-8">Ajouter</a>

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
                                <a href="" class="text-info font-thin">Modifier</a>
                                <a href="" class="text-error font-thin"
                                    onclick="confirm('voulez-vous Supprimer la citation ?')">Supprimer</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
