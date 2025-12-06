@extends('layout.app')
@section('content')

<article class="px-4 py-6">
    <div class="max-w-3xl mx-auto">
        <div class="mb-6">
            <a href="{{ route('articles.index') }}" class="inline-flex items-center text-sm text-gray-600 dark:text-gray-400 hover:text-primary dark:hover:text-primary transition-colors mb-4">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Back to Articles
            </a>
            
            <p class="text-primary text-sm font-medium mb-2">{{ $post->category->name }}</p>
            <h1 class="text-3xl xs:text-4xl font-bold text-gray-900 dark:text-white mb-4">{{ $post->title }}</h1>
            
            <div class="flex items-center gap-4 text-sm text-gray-500 dark:text-gray-400 mb-6">
                <span>•</span>
                <span>{{ $post->published_at->format('F j, Y') }}</span>
            </div>
        </div>
        
        @if($post->hero_image)
            <div class="w-full aspect-video bg-cover bg-center rounded-lg mb-8" style='background-image: url("{{ asset('storage/' . $post->hero_image) }}");'></div>
        @endif
        
        <div class="prose prose-gray dark:prose-invert max-w-none">
            {!! $post->content !!}
        </div>
    </div>

    @if($relatedPosts->count() > 0)
        <div class="max-w-3xl mx-auto mt-12 pt-8 border-t border-gray-200 dark:border-gray-700">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Related Articles</h2>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                @foreach($relatedPosts as $relatedPost)
                    <a href="{{ route('articles.show', $relatedPost->slug) }}" class="flex flex-col gap-2 group cursor-pointer">
                        <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg overflow-hidden">
                            <div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-300" style='background-image: url("{{ $relatedPost->hero_image ? asset('storage/' . $relatedPost->hero_image) : 'https://via.placeholder.com/400x225' }}");'></div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <p class="text-gray-500 dark:text-gray-400 text-xs font-medium">{{ $relatedPost->category->name }}</p>
                            <p class="text-gray-900 dark:text-white text-sm font-bold line-clamp-2">{{ $relatedPost->title }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    @endif
</article>

@endsection
