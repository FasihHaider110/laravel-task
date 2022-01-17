@extends('layouts.app')
@section('content')
<body>
    <div class="text-center">
        <h1>Add Course</h1>
        <br>
        <form action="{{route('courses.store')}}">
            <input type="text" name="id" placeholder="Enter course ID">
            <input type="text" name="course_name" placeholder="Enter course name">

            <button type="submit" class="btn btn-success"> Submit </button>
        </form>
<br>
        <a href="{{route('courses.index')}}">
        <button class="btn btn-primary">Back</button>
        </a>

    </div>

</body>

@endsection