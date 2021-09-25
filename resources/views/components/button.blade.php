<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-blue-500 hover:bg-blue-700 focus:outline-none  inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none  focus:ring-0 disabled:opacity-25 transition ease-in-out duration-150  dark:text-primary-lighter dark:hover:text-light  ']) }}>
    {{ $slot }}
</button>
