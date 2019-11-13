@extends('layout')

@section('content')
    <h1>Create a New Project</h1>

    <form action="/projects" method="POST">
        @csrf 
        {{--kada submitujem formu i inspectujem u browseru mogu da vidim da je ovaj 
        //csfr napravio jedan input tipa hidden, i parom name=>value(token=>vrednost tokena)
        //extra sekjuriti i proteksn--}}

        <div>
            <input type="text" name="title" placeholder="Project title">
        </div>

        <div>
            <textarea name="description" cols="30" rows="10" placeholder="project description"></textarea>
        </div>

        <div>
            <button type="submit">Create Project</button>
        </div>
    </form>
@endsection