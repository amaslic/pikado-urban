@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Kreiranje igrača</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('addplayer') }}" method="post">
                    {{ csrf_field() }}
                        <div class="form-group">
                                <label for="usr">Ime:</label>
                                <input type="text" class="form-control" id="usr" name="usr">
                            </div>
                            <div class="form-group">
                                <button class="form-control btn btn-success">Kreiraj igrača</button>
                            </div>
                        </div>
                    </form>
                </div>
                    
                
                           {!! Session::has('msg') ? Session::get("msg") : '' !!}
                       
                    </div>
               
            </div>

            
        </div>
    </div>
</div>
@endsection
