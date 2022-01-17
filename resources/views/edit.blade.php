@extends('layouts.app')
@section('content')
<body>
<div class="text-center">
        <h1>Update Course</h1>
        <br>
        <form action="{{route('courses.update',$course->course_id)}}">
            <input type="text" name="course_id" value="{{$course->course_id}}">
            <input type="text" name="course_name" value="{{$course->course_name}}">

            <button type="submit"> Update  </button>

        </form>

    </div>
</body>
@endsection