@extends('layout.app')
@section('content')

<div class="px-4 py-6">
    <h1 class="text-2xl xs:text-3xl font-bold text-gray-900 dark:text-white mb-6">
        @if(isset($category))
            {{ $category->name }}
        @else
            All Articles
        @endif
    </h1>
    
    @if($posts->count() > 0)
        <div class="grid grid-cols-1 xs:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-5 md:gap-6">
            @foreach($posts as $post)
                <a href="{{ route('articles.show', $post->slug) }}" class="flex flex-col gap-2 sm:gap-3 pb-2 sm:pb-3 group cursor-pointer">
                    <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg overflow-hidden">
                        <div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-300" style='background-image: url("{{ $post->hero_image ? asset('storage/' . $post->hero_image) : 'https://via.placeholder.com/800x450' }}");'></div>
                    </div>
                    <div class="flex flex-col gap-1 sm:gap-1.5">
                        <p class="text-gray-500 dark:text-gray-400 text-xs xs:text-sm font-medium">{{ $post->category->name }}</p>
                        <p class="text-gray-900 dark:text-white text-base xs:text-lg font-bold">{{ $post->title }}</p>
                        <p class="text-gray-600 dark:text-gray-300 text-xs xs:text-sm font-normal line-clamp-2">{{ $post->excerpt }}</p>
                    </div>
                </a>
            @endforeach
        </div>

        <div class="mt-8">
            {{ $posts->links() }}
        </div>
    @else
        <div class="text-center py-12">
            <p class="text-gray-500 dark:text-gray-400 text-lg">No articles found.</p>
        </div>
    @endif
</div>

@endsection