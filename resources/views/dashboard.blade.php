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

				<a href="{{ env('APP_URL') }}/dashboard/all">Zobrazit všechny</a>

                    <table class="table table-striped">
                        <thead>
	                        <th>ID</th>
                            <th>Název pozice</th>
                            <!--<th>Firma</th>-->
                            <!--<th>Telefon</th>-->
                            <!--<th>E-mail</th>
                            <th>Přeloženo</th>-->
                            <th>Stav</th>
                            <th>Datum vložení</th>
                            <th>Upravit</th>
                        </thead>
                        <tbody>
                            @foreach ($jobs AS $thisJob)
                                <tr>
                                    <td>{{$thisJob->id}}</td>
                                    <td>{{$thisJob->positionName}}</td>
                                    <!--<td>{{$thisJob->companyName}}</td>-->
                                    <!--<td>{{$thisJob->companyContactPhone}}</td>
                                    <td>{{$thisJob->companyContactEmail}}</td>
                                    <td>{{$thisJob->translation}}</td>-->
                                    <td>{{$thisJob->status}}</td>
                                    <td>{{$thisJob->created_at}}</td>
                                    <td><a href="{{ route('Upravit práci', $thisJob->id) }}">Upravit</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
