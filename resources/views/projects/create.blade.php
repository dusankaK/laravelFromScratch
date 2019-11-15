@extends('layout')

@section('content')
    <h1 class="title">Create a New Project</h1>

    <form action="/projects" method="POST">
        @csrf 
        {{--kada submitujem formu i inspectujem u browseru mogu da vidim da je ovaj 
        //csfr napravio jedan input tipa hidden, i parom name=>value(token=>vrednost tokena)
        //extra sekjuriti i proteksn--}}


        {{--value="{{ old('title')}}" kada napisemo nekoliko karaktera u title input, a ti karakteri
        imaju manje nego sto je odredjeno validacijom, posle submita ostaju nam ti isti karakteri u old input polju--}}

        <div class="field">
            <input type="text" class="input {{ $errors->has('title') ? 'is-danger' : ''}}"
                   name="title" placeholder="Project title" value="{{ old('title')}}">
        </div>

        <div class="field">
            <textarea name="description" class="textarea {{ $errors->has('description') ? 'is-danger' : ''}}" 
                      cols="30" rows="10" placeholder="Project description">{{ old('description')}}
            </textarea>
        </div>

        <div class="field">
            <button type="submit" class="button is-link">Create Project</button>
        </div>

        @include('errors')
    </form>
@endsection