    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('CAZZ') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>File Upload</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->image }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
    </div>


</x-app-layout>