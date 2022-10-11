<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-barroc_yellow border border-transparent rounded-md text-sm text-barroc_grey uppercase tracking-widest font-semibold hover:text-barroc_yellow hover:bg-barroc_grey active:bg-gray-900 focus:outline-none disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
