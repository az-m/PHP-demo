<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="hidden md:block">
                    <div class="flex items-baseline space-x-4">
                        <a href="/" class="<?= isUrl('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'?> px-3 py-2 rounded-md text-sm font-medium">Home</a>
                        <a href="/about" class="<?= isUrl('/about') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'?> px-3 py-2 rounded-md text-sm font-medium">About</a>
                        <a href="/notes" class="<?= isUrl('/notes') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'?> px-3 py-2 rounded-md text-sm font-medium">Notes</a>
                        <a href="/contact" class="<?= isUrl('/contact') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'?> px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</nav>