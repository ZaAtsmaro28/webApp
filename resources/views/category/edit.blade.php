<x-layouts.app :title="'Edit Post'">

    <form action="{{ route('posts.update', $post->id) }}" 
          method="POST"
          class="bg-white p-6 rounded shadow">
          
        @csrf
        @method('PUT')

        <label class="block mb-2 font-semibold">Judul</label>
        <input type="text" name="judul" value="{{ $post->judul }}"
               class="w-full px-3 py-2 border rounded mb-4">

        <button class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            Update
        </button>

        <a href="{{ route('posts.index') }}" 
           class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 ml-2">
           Batal
        </a>

    </form>

</x-layouts.app>
