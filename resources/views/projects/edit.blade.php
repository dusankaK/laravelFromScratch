@extends('layout')

@section('content')

    <h1 class="title">Edit Project</h1>

    <form action="/projects/{{ $project->id }}" method="POST">

        {{ method_field('PATCH')}}
        @csrf
        

        <div class="field">
            <label class="label" for="title">Title</label>

            <div class="control">
                <input type="text" class="input" name="title" placeholder="title" value=" {{ $project->title}}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Description</label>
    
            <div class="control">
                <textarea name="description" class="textarea">{{ $project->description }}</textarea> 
           </div>
        </div>
        <div class="fiel">
            <div class="control">
                <button type="submit" class="button is-link">Update Project</button>
            </div>
        </div>
    </form>

@endsection