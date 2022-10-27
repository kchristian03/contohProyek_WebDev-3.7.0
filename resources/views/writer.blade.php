@extends('layouts.app')

    @section('container')
        <h1 class="mx-auto text-center m-3 font-black text-5xl">{{ $maintitle }}</h1>
        @php
            for ($i=0; $i < count($writers); $i++) {
                if ($i+1 == 1) {
                    $country[$i] = 'Lebanon';
                }elseif ($i+1 == count($writers)) {
                    $country[$i] = 'Brunei';
                }elseif ($i+1 == count($writers)/2) {
                    $country[$i] = 'Indonesia';
                }else {
                    if (($i+1)%2 == 0) {
                        $country[$i] = 'Prancis';
                    }else{
                        $country[$i] = 'Rusia';
                    }
                }
            }
        @endphp

        <table class="table">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Country</th>
                <th scope="col">Description</th>
                <th scope="col">Contact</th>
                <th scope="col">Photo</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            @php($i = 0)
            @php($k = 0)
            @foreach($writers as $writer)
                <tr>
                    <th scope="row"> {{$loop->iteration}} </th>
                    <td> <a href="/writer/{{$writer['id']}}">{{$writer['name']}}</a></td>
                    <td> {{$country[$i]}} </td>
                    <td>
                        @if ($loop->first)
                            Urutan teratas
                        @elseif($loop->last)
                            Urutan terakhir
                        @elseif($loop->iteration==$loop->count/2)
                            Urutan tengah
                        @elseif($loop->even)
                            Urutan genap
                        @elseif($loop->odd)
                            Urjutan ganil
                        @endif
                    </td>
                    <td>
                        {{$writer['contact']}}
                    </td>
                    <td>
                        <img src="/image/{{$writer['images']}}" class="mx-auto d-block rounded-3" width="300px" height="200px">
                    </td>
                </tr>
                @php($i++)
            @endforeach

            </tbody>
        </table>
    @endsection
