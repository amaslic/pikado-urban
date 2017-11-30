@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <select class="selectpicker" name="name1" id="p1pick">
            <option disabled selected>Izaberite meč</option>
            <optgroup label="Meč">
            
                @foreach ($match as $i) 
                    <option data-player1 = "{{ $i->player1_id }}" data-player2 = "{{ $i->player2_id }}" data-match = "{{ $i->id }}" data-players="{{ $i->player1 }} vs {{ $i->player2 }}">{{ $i->player1 }} vs {{ $i->player2 }}</option>
                @endforeach
            </optgroup>
        </select>


    

        <form action="{{ route('addpoints') }}" method="post">
             {{ csrf_field() }}
              
                   
                    <input id="m_id" name="m_id"  type="hidden" />
               
                        
                        <input id="p1_id" name="p1_id" type="hidden" />
                        <input id="p1" name="p1" disabled />
                
                        <input name="points1"  />
                
                         <input id="p2_id" name="p2_id" type="hidden" />
                        <input id="p2" name="p2" disabled />
                 
                        <input name="points2" />
                  
                        <input type="submit" value="Dodjeli poene" class="btn btn-primary" />
                       
          
               </form>
         {!! Session::has('msg') ? Session::get("msg") : '' !!}   
    </div>
</div>

<script>




 $(document).on("change", "#p1pick", function() {

    var match_id = $( this ).find(':selected').data("match");
    var player1 = $( this ).find(':selected').data("player1");
    var player2 = $( this ).find(':selected').data("player2");

    var pl1 = $(this).find(':selected').data("players");
    var p1 = pl1.split('vs')[0];
    //console.log(p1);
    var p2 = pl1.split('vs')[1];

    $("#p1_id").val(player1);
    $("#p2_id").val(player2);
    $("#p1").val(p1);
    $("#p2").val(p2);
    $("#m_id").val(match_id);
  });
 
</script>
@endsection