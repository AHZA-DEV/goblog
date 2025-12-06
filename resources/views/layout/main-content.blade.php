@extends('layout.app')

@section('content')

<div class="@container py-8 sm:py-12 md:py-16 lg:py-24">
    <div class="flex flex-col gap-8 sm:gap-10 md:gap-12 px-4 @[864px]:flex-row @[864px]:items-center">
        <div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl @[864px]:w-2/5 max-w-[400px] mx-auto @[864px]:max-w-none @[864px]:mx-0" data-alt="A professional portrait photo of John Doe, a software engineer and writer." style='background-image: url("{{ asset('storage/logo.jpg') }}");'></div>
        <div class="flex flex-col gap-4 sm:gap-5 md:gap-6 @[864px]:w-3/5 @[864px]:justify-center">
            <div class="flex flex-col gap-2 text-left">
                <h1 class="text-gray-900 dark:text-white text-2xl xs:text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black leading-tight tracking-tighter">
                    Fatz Dev
                </h1>
                <h2 class="text-gray-700 dark:text-gray-300 text-sm xs:text-base sm:text-lg font-medium">
                    Software Engineer &amp; Writer. I build elegant solutions for complex problems and share what I learn along the way.
                </h2>
            </div>
            <button class="flex min-w-[84px] max-w-[480px] w-fit cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 sm:h-11 md:h-12 px-4 sm:px-5 bg-primary text-white text-sm sm:text-base font-bold tracking-wide hover:bg-primary/90 transition-colors mt-2">
                <span class="truncate">Contact Me</span>
            </button>
        </div>
    </div>
</div>
<div class="py-6 sm:py-8">
    <h4 class="text-gray-500 dark:text-gray-400 text-xs xs:text-sm font-bold leading-normal tracking-widest uppercase px-4 py-2 text-center">Recent Writing</h4>
</div>
<div class="grid grid-cols-1 xs:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-5 md:gap-6 p-4">
    @forelse($recentPosts as $post)
        <a href="{{ route('articles.show', $post->slug) }}" class="flex flex-col gap-2 sm:gap-3 pb-2 sm:pb-3 group cursor-pointer">
            <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg overflow-hidden">
                <div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-300" style="background-image: url('{{ $post->hero_image ? asset('storage/' . $post->hero_image) : 'https://via.placeholder.com/800x450' }}');"></div>
            </div>
            <div class="flex flex-col gap-1 sm:gap-1.5">
                <p class="text-gray-500 dark:text-gray-400 text-xs xs:text-sm font-medium">{{ $post->category->name }}</p>
                <p class="text-gray-900 dark:text-white text-base xs:text-lg font-bold">{{ $post->title }}</p>
                <p class="text-gray-600 dark:text-gray-300 text-xs xs:text-sm font-normal line-clamp-2">{{ $post->excerpt }}</p>
            </div>
        </a>
    @empty
        <div class="col-span-full text-center py-8">
            <p class="text-gray-500 dark:text-gray-400">No articles published yet.</p>
        </div>
    @endforelse
</div>
<div class="px-4 pt-6 sm:pt-8 pb-4 flex justify-center">
    <a class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-9 sm:h-10 px-4 sm:px-5 bg-primary text-gray-100 dark:text-gray-200 border border-gray-300 dark:border-gray-700 text-xs xs:text-sm font-bold tracking-wide hover:bg-primary/90 dark:hover:bg-primary transition-colors" href="{{ route('articles.index') }}">
        <span class="truncate">View All Articles</span>
    </a>
</div>

@endsection