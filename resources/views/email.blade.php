<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('CAZZ') }}
        </h2>
    </x-slot>

   <div class="container">
    <h1 class="mb-5 fs-3 fw-bold mt-5">Halaman Undang Teman</h1>
    <div class="container-fluid">
        <form action="{{ route('send-email') }}" method="post" class="flex gap-2 mt-5">
        @csrf
        <div class="container">     
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 mb-3">
                <div class="sm:col-span-4">
                    <label for="nama" class="block text-sm font-medium leading-6 text-gray-900">Nama</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                            <input type="text" name="nama" id="nama" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 mb-3">
                <div class="sm:col-span-4">
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                            <input type="email" name="email" id="email" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900" id="email    " required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 mb-3">
                <div class="sm:col-span-4">
                    <label for="subjek" class="block text-sm font-medium leading-6 text-gray-900">Subjek</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                            <input type="text" name="subjek" id="subjek" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900" id="subjek" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <label for="subjek" class="block text-sm font-medium leading-6 text-gray-900">Pesan</label>
                    <div class="mt-2">
                        <textarea name="pesan" class="form-control" cols="4" rows="4"></textarea>
                    </div>
                </div>
            </div>
            <button class="bg-danger mt-3 px-3 py-2 rounded-md text-white">Kirim</button>
        </div>
    </form>
    </div>
    
   </div>

        
</x-app-layout> 