@extends('layouts.main')


@section('main-content')
    <table class="comics-table table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Serie</th>
                <th>Nome</th>
                <th colspan="3"> Azioni </th>
            </tr>    
        </thead>
        <tbody>
        @foreach ($comics as $item)
        
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->series}}</td>
                <td>{{$item->title}}</td>
                <td>
                    <a href="{{route('comics.show', $item->id)}}" class="btn btn-success"> SHOW </a>
                </td>
                <td><a href="{{route('comics.edit', $item->id)}}"  class="btn btn-primary">EDIT</a> </td>
                <td>
                    <form action="{{route('comics.destroy', $item->id)}}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button onClick="return confirm('Confermi la tua scelta?');" class="btn btn-danger" type="submit">
                            DELETE
                        </button>
                    </form>
                </td>
            </tr>
        
            
        @endforeach
        </tbody>
    </table>
 
    {{ $comics->links() }}
    
    
@endsection