<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center p-4 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 mb-5']) }}>
    {{ $slot }}
</button>
