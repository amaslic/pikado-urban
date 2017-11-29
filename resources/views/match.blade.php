@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Novi meč</a></li>
      <!--  <li><a data-toggle="tab" href="#menu1">Kriket</a></li>-->
    </ul>

        <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
        <form action="{{ route('addpoints') }}" method="post">
        <select class="selectpicker" name="player1">
            <option disabled selected>Izaberite igrača 1</option>
            <optgroup label="Igrač">
            
                @foreach ($players as $i) 
                    <option value="{{ $i->id }}">{{ $i->name }}</option>
                @endforeach
            </optgroup>
        </select>
        <select class="selectpicker" name="player2">
            <option disabled selected>Izaberite igrača 2</option>
            <optgroup label="Igrač">
            
                @foreach ($players as $i) 
                    <option value="{{ $i->id }}">{{ $i->name }}</option>
                @endforeach
            </optgroup>
        </select>
      <!--  <input type="text" value="" name="points1" placeholder="Igrač 1 broj poena"/>
        <input type="text" value="" name="points2" placeholder="Igrač 2 broj poena"/>-->
        <button>Dodaj meč</button>
        </form>
        </div>
      

        </div>


        
    </div>
</div>
@endsection