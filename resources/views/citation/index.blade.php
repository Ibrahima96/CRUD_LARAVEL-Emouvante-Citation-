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
                        <th>Citation</th>
                        <th>Favorite (status)</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->
                    <tr class="even:hover:bg-base-300">
                        <td>Cy Ganderton</td>
                        <td> Quality Control Specialist </td>
                        <td>
                            <span class="badge bg-green-400  rounded-full text-gray-100 text-xs">Approuver</span>
                        </td>
                        <td class="flex items-center gap-2">
                            <a href="" class="text-info font-thin">Modifier</a>
                            <a href="" class="text-error font-thin"
                                onclick="confirm('voulez-vous Supprimer la citation ?')">Supprimer</a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
@endsection
