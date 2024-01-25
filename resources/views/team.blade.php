<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('CAZZ') }}
        </h2>
    </x-slot>

    <div class="container flex">
        <div class="row mt-5 flex">
            <div class="col-md-2 inline">
                <img src="{{ asset('image/angga.JPG') }}" alt="Gambar 1" class="img-fluid">          
            </div>  
            <div class="col-md-10">
                <p class="fw-bold fs-5">Namazu Manggara</p>
                <p class="fst-italic fs-6">Member</p>
            </div>   
            <span class="border  border-dark mt-5 mb-5"></span> 
        </div>  
        
    </div>
    <div class="container">
        <div class="row">
            <h2 class="mb-3">Halaman Kerja Anda</h2>
            <div class="col-md-2 inline">
                <img src="{{ asset('image/workspace-1.jpg') }}" alt="Gambar 1" class="img-fluid">          
            </div> 
            <div class="col-md-2 inline">
                <img src="{{ asset('image/workspace-2.jpg') }}" alt="Gambar 1" class="img-fluid">          
            </div> 
     </div>
    </div>
    
        


</x-app-layout>