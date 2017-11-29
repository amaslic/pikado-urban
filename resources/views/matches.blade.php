@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <table class="table">
        <thead>
            <tr>
            <th>#</th>
            <th>Igrač 1</th>
            <th>Broj poena</th>
            <th>Igrač 2</th>
            <th>Broj poena</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
          
            @foreach ($match as $i) 
            <form action="{{ route('addpoints') }}" method="post" id="{{ $loop->iteration }}">
            {{ csrf_field() }}
                <tr>
                
                <th scope="row">
                    {{ $loop->iteration }}
                    <input name="match_id" value="{{ $i->id }}" type="hidden" />
                </th>

                    <td>
                        <input name="p1" value="{{ $i->player1 }}" type="hidden" />
                        <input name="p1_id" value="{{ $i->player1_id }}" type="hidden" />
                        {{ $i->player1 }}
                    </td>
                    <td>
                        
                        <input name="points1" />
                    </td>
                    <td>
                        <input name="p2" value="{{ $i->player2 }}" type="hidden" />
                         <input name="p2_id" value="{{ $i->player2_id }}" type="hidden" />
                        {{ $i->player2 }}
                    </td>
                    <td>

                        <input name="points2" />
                    </td>
                    <td>
                        <button onclick="$('#{{ $loop->iteration }}').submit();">Dodjeli poene</button>
                        <input type="submit" value="Test" />
                    </td>
                </tr>
             </form>
               {!! Session::has('msg') ? Session::get("msg") : '' !!}
            @endforeach
        </tbody>
        </table>

    </div>
</div>
@endsection