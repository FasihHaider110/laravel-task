@extends('layouts.app')

@section('content')


<body>
    

    <div class="text-center">
        <h1>Courses</h1>
        <br>
        <div>
            <!-- Add btn -->
            <a class="btn btn-success" href="{{route('courses.create')}}">Add new course</a>
        </div>
        <br>
        <!-- success msg -->
        @if ($message=Session::get('success'))
        <div>
            <p>{{$message}}</p>
        </div>
            
        @endif

        <div>
            <table class="table table-bordered">
                <tr>
                    <th>id</th>
                    <th>Course_Name</th>
                    <th>Edit Record</th>
                    <th>Delete Record</th>

                </tr>
                @foreach ($courses as $course )
                <tr>
                    <td>
                        {{$course->id}}
                    </td>

                    <td>
                        {{$course->course_name}}
                    </td>

                    <td>
                        <a href="{{route('courses.edit',$course->id)}}">
                            <button class="btn btn-primary">Edit</button>
                        </a>
                    </td>

                    <td>
                        <form action="{{route('courses.destroy',$course->id)}}">
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>



                </tr>


                @endforeach
            </table>
        </div>

    </div>
    </body> 
@endsection   

