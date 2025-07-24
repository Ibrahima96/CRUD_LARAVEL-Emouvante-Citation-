@extends('base')
@section('content')
    <section class="max-w-4xl mx-auto px-8">
        <h2 class="mb-8 font-thin sm:text-2xl text-gray-600">
            @if (empty($citation))
                Ajouter une
            @else
                Modification d'une
            @endif
            Citations

        </h2>
        <form action="{{ empty($citation) ? route('citation.store') : route('citation.update', $citation->id) }}" method="post"
            class="space-y-8">
            @csrf
            @if (!empty($citation))
                @method('PUT')
            @endif
            <label class="floating-label ">
                <span>Auteur</span>
                <input type="text" name="auteur" placeholder="Auteur"
                    class="input w-full focus:outline-0 focus:outline-zinc-800 " required
                    @if (!empty($citation)) value="{{ old('auteur', $citation->auteur) }}" @endif />
            </label>


            <label class="floating-label ">
                <span>Description De La Citation</span>
                <textarea class="textarea  w-full focus:outline-0 focus:outline-zinc-800" name="description"
                    placeholder="description de la citation" required>
                 {{ !empty($citation) ? old('description', $citation->description) : '' }}
                </textarea>
            </label>

            <label>
                <input type="checkbox" name="status" class="checkbox font-thin "
                    {{ !empty($citation) && $citation->status ? 'checked' : '' }} />
                <span class="font-thin text-gray-600">Status</span>
            </label>
            <button type="submit"
                class="cursor-pointer btn btn-info btn-block mt-8 text-gray-600 font-xs font-thin">{{ empty($citation) ? 'Ajouter' : 'Modifier' }}</button>
        </form>
    </section>
@endsection
