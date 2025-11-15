<x-layouts.app :title="'Detail Post'">

    <div class="bg-white p-6 rounded shadow">
        <p><strong>ID:</strong> {{ $post->id }}</p>
        <p><strong>Judul:</strong> {{ $post->judul }}</p>

        <a href="{{ route('posts.index') }}" 
           class="mt-4 inline-block px-4 py-2 bg-gray-700 text-white rounded hover:bg-gray-800">
           Kembali
        </a>
    </div>

</x-layouts.app>
