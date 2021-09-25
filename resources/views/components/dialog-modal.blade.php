@props(['id' => null, 'maxWidth' => null])

<x-dashboard::default-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="px-6 py-4 dark:bg-darker dark:text-primary-light">
        <div class="text-lg">
            {{ $title }}
        
        </div>

        <div class="mt-4">
            {{ $content }}
        </div>
    </div>

    <div class="px-6 py-4 bg-gray-100 text-right dark:bg-darker dark:text-primary-light">
        {{ $footer }}
    </div>
</x-dashboard::default-modal>
