<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('CAZZ') }}
        </h2>
    </x-slot>

    <form action="/tugas" method="post" class="flex gap-2 mt-5">
        @csrf
        <div class="container">     
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <label for="tugas" class="block text-sm font-medium leading-6 text-gray-900">Nama Tugas</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                            <input type="text" name="tugas" id="tugas" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900" required>
                        </div>
                        <button class="bg-danger mt-3 px-3 py-2 rounded-md text-white">Tambah Tugas</button>
                        <a class="btn btn-warning py-2 px-3 rounded-md" href="/halaman/tugas">Lihat Tugas</a>
                    </div>
                </div>
            </div>
        </div>
    </form>       
</x-app-layout>