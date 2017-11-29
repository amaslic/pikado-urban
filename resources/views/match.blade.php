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
        <form action="{{ route('addmatch') }}" method="post">
        {{ csrf_field() }}
        <select class="selectpicker" name="name1" id="p1pick">
            <option disabled selected>Izaberite igrača 1</option>
            <optgroup label="Igrač">
            
                @foreach ($players as $i) 
                    <option value="{{ $i->id }}">{{ $i->name }}</option>
                @endforeach
            </optgroup>
        </select>
        <select class="selectpicker" name="name2" id="p2pick">
            <option disabled selected>Izaberite igrača 2</option>
            <optgroup label="Igrač">
            
                @foreach ($players as $i) 
                    <option value="{{ $i->id }}">{{ $i->name }}</option>
                @endforeach
            </optgroup>
        </select>
        <input id="p1" value="" name="p1" type="hidden" />
    
        <input id="p2" value="" name="p2" type="hidden" />
        <button>Dodaj meč</button>
        </form>
        </div>
      

        </div>


             {!! Session::has('msg') ? Session::get("msg") : '' !!}
    </div>
</div>


<script>
     $(document).on("change", "#p1pick", function() {

     $("#p1").val( $("#p1pick :selected").text() ); 
  

  }).val( $('#p1').val() ).change();
   $(document).on("change", "#p2pick", function() {

     $("#p2").val( $("#p2pick :selected").text() ); 

  }).val( $('#p2').val() ).change();
</script>


@endsection