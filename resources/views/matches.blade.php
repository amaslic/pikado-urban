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
            <form action="{{ route('addpoints') }}" method="post" id="{{ $i->id }}">
            {{ csrf_field() }}
                <tr>
                
                <th scope="row">
                    {{ $loop->iteration }}
                    <input name="m_id" value="{{ $i->id }}" type="hidden" />
                </th>

                    <td>
                        <input name="p1{{ $i->id }}" value="{{ $i->player1 }}" type="hidden" />
                        <input name="p1_id{{ $i->id }}" value="{{ $i->player1_id }}" type="hidden" />
                        {{ $i->player1 }}
                    </td>
                    <td>
                        
                        <input name="points1{{ $i->id }}" />
                    </td>
                    <td>
                        <input name="p2{{ $i->id }}" value="{{ $i->player2 }}" type="hidden" />
                         <input name="p2_id{{ $i->id }}" value="{{ $i->player2_id }}" type="hidden" />
                        {{ $i->player2 }}
                    </td>
                    <td>

                        <input name="points2{{ $i->id }}" />
                    </td>
                    <td>
                        <button onClick="$('#{{$i->id}}').submit()">Dodjeli poene</button>
                        
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