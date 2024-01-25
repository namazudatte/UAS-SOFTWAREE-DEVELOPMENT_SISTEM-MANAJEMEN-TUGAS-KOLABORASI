<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('CAZZ') }}
        </h2>
    </x-slot>


    <div class="container">
        <a class="btn btn-warning py-2 px-3 mt-3" href="/tugas">Kembali</a>
        <table class="table mt-3">
                    <thead>
                        <tr>
                            <th scope="col">Nama Tugas</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                       
                    </thead>
                    <tbody>
                         @foreach($tugass as $Ttugas)
                        <tr>
                            <td>        
                                <li>{{ $Ttugas->tugas }}</li>                
                            </td>
                            <td>
                                @if ($Ttugas->status == 'PENDING')   
                                <span class="p-1 bg-warning rounded-md">{{ $Ttugas->status }}</span>
                                @endif              
                                @if ($Ttugas->status == 'DONE')   
                                <span class="p-1 bg-success rounded-md text-white">{{ $Ttugas->status }}</span>
                                @endif              
                            </td>
                            <td>        
                                <li><a href="">hapus</a>/<a href="">edit</a></li>                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
        </table>
           
    </div>
          
</x-app-layout>