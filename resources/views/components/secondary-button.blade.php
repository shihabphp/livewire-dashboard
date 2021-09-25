
<button {{ $attributes->merge(['type' => 'button', 'class' => 'hover:bg-gray-100 inline-flex items-center px-4 py-2 bg-white border border-gray-300 font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:bg-blue-100 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition dark:border-primary-darker dark:hover:text-primary-100 dark:hover:border-primary-light dark:focus:ring-offset-dark dark:focus:ring-primary-dark dark:text-primary-light dark:bg-dark dark:hover:text-light dark:hover:bg-primary-dark']) }}>
    {{ $slot }}
</button>
