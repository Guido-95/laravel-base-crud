@extends('layouts.main')


@section('main-content')
    <table class="comics-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Serie</th>
                <th>Nome</th>
                <th colspan="3"> Azioni </th>
            </tr>    
        </thead>
        @foreach ($comics as $comic)
        <tbody>
            <tr>
                <td>{{$comic->id}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->title}}</td>
                <td>
                    <a href="" class="btn btn-success">SHOW</a>
                </td>
                <td>EDIT</td>
                <td>DELETE</td>
            </tr>
        </tbody>
            
            
            {{-- @dump($comics) --}}


        
        @endforeach
    </table>
 
    {{ $comics->links() }}
    
    
@endsection