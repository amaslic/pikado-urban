@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <table class="table">
        <thead>
            <tr>
            <th>#</th>
            <th>Igrač 1</th>
            <th>Igrač 1 poena</th>
            <th></th>
            <th>Igrač 2 poena</th>
            <th>Igrač 2</th>

          
            </tr>
        </thead>
        <tbody>
          
            @foreach ($match as $i) 
          <!--  <form action="addpoints" method="post">-->
                <tr>
                
                <th scope="row">
                    {{ $loop->iteration }}
                </th>
                
                    <td>
                        
                        {{ $i->player1 }}
                    </td>
                     <td>
                        
                        {{ $i->player1_points }}
                    </td>
                    <td>
                        
                    
                    </td>
                     <td>
                        
                        {{ $i->player2_points }}
                    </td>
                    <td>{{ $i->player2 }}</td>
             
                </tr>
           <!--  </form> -->
            @endforeach
        </tbody>
        </table>

    </div>
</div>
@endsection