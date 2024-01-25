<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('CAZZ') }}
        </h2>
    </x-slot>

<div class="container mt-5 fw-bold fs-3">
    <h1>Tambah Member</h1>
</div>

@if (session('status'))
    <h6 class="alert alert-success">{{ session('status') }}</h6>
@endif

<form action="{{ url('add-member') }}" method="post" class="flex gap-2 mt-5">
        @csrf
        <div class="container">     
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <label for="nama" class="block text-sm font-medium leading-6 text-gray-900">Nama</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                            <input type="text" name="nama" id="nama" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900" required>
                        </div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">email</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                            <input type="text" name="email" id="email" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900" required>
                        </div>
                    <label for="jabatan" class="block text-sm font-medium leading-6 text-gray-900">jabatan</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                            <input type="text" name="jabatan" id="jabatan" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900" required>
                        </div>
                    <label for="tugas" class="block text-sm font-medium leading-6 text-gray-900">tugas</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                            <input type="text" name="tugas" id="tugas" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900" required>
                        </div>
                        <button class="bg-danger mt-3 px-3 py-2 rounded-md text-white">Tambah Member</button>
                        <a class="btn btn-warning py-2 px-3 rounded-md" href="/showMember">Lihat Member</a>
                    </div>
                </div>
            </div>
        </div>
    </form>



    
    
    
    
</x-app-layout>