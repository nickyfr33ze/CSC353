<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
                <div class="p-4 bg-white border-b border-gray-200">
                    What would you like to access?
                    <div class="p-3 bg-white border-b border-gray-200 divide-y divide-gray-400">
                        <a href="documents.blade.php" id=documentsPage>
                            <button onclick="">
                                Documents
                            </button>
                        </a>
                    </div>
                    <div class="p-3 bg-white border-b border-gray-200 divide-y divide-gray-400">
                        <a href="media.documents.php" id="mediaPage">
                            <button onclick="">
                                Media
                            </button>
                        </a>
                    </div>
                    <div class="p-3 bg-white border-b border-gray-200 divide-y divide-gray-400">
                        <a href="/documents.blade.php" id=documentsPage>
                            <button onclick=>
                                Misc.
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
