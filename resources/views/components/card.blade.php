@props(['title' => null])

<div class="p-6 border-2 rounded-2xl dark:bg-indigo-950 dark:text-amber-50 bg-indigo-100 text-black">
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
    @if($title)
    <h2 class="font-bold text-2xl mb-1">
        {{ $title }}
    </h2>
    @endif
    {{ $slot }}
</div>
