    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('CAZZ') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        <h1 class="mt-5 mb-5 fs-2 fw-bold">Halaman Tambah Upload File</h1>

        <form action="{{ url('file_upload') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="image">Upload Image</label>
                            <input type="file" name="image" required class="course form-control" id="image">
                        </div>
                        <button class="bg-danger mt-3 px-3 py-2 rounded-md text-white">Tambah File</button>
                         <a class="btn btn-warning py-2 px-3 rounded-md" href="/showFile">Lihat File</a>
                    </form>
                   
    </div>


</x-app-layout>