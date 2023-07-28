<x-layouts.app
    title="Inicio"
    meta-description="Inicio meta descripcion"
>
    <header class="px-6 py-4 space-y-2 text-center">
        <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">
            Blog
        </h1>
        <a
            class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-900 focus:outline-none focus:border-sky-900 focus:shadow-outline-sky"
            href="{{ route('posts.create') }}">
            Crear Post
        </a>
    </header>

    <main class="grid w-full gap-4 px-4 max-w-7xl sm:grid-cols-2 md:grid-cols-3">
        @foreach($posts as $post)
            <div class="max-w-3xl px-4 py-2 space-y-4 bg-white rounded shadow dark:bg-slate-800">
                <h2 class="text-xl text-slate-600 dark:text-slate-300 hover:underline">
                    {{ $post->title }}
                </h2>
            </div>
        @endforeach
    </main>
</x-layouts.app>
