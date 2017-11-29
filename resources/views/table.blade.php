@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <table class="table">
        <thead>
            <tr>
            <th>#</th>
            <th>Igrač</th>
            <th>Broj poena</th>
            </tr>
        </thead>
        <tbody>
          
            @foreach ($players as $i) 
                <tr>
                
                <th scope="row">
                    {{ $loop->iteration }}
                </th>
                
                    <td>{{ $i->name }}</td>
                    <td>{{ $i->points }}</td>
                
                </tr>
             
            @endforeach
        </tbody>
        </table>

    </div>
</div>
@endsection