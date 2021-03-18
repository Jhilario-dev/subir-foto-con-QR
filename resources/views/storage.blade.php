@extends('adminlte::page')

@section('content')
<body>
    <div class="card">
        <div class="card-body">
            <form action="{{route('store.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group">
                    <input type="file" name="file" id="idFile" accept="image/*">
                    @error('file')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                      </div>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-primary">subir</button>
        
            </form>
        </div>
        
    </div>
</body>

@endsection