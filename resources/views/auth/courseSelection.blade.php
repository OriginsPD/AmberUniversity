@extends("layouts.app")

@section("content")
<div class="bg-black">

    <!-- component -->
    <div class="p-9 text-gray-700 font-sans quicksand ">

        <h1 class="text-4xl mb-4"><span class=" border-b-4 border-pink-400 text-white text-center">Courses
                Offered</span></h1>

        <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-3  gap-4  ">


            @foreach($courses as $course)
          
            <div class="bg-gray-300 overflow-hidden hover:bg-pink-100 border border-gray-200 p-5 rounded">
                <div class="m-2  text-justify text-sm">

                    <div class="flex justify-between items-center">
                        <h2 class="font-bold text-lg mb-5 h-3">Course Name: {{$course["course_name"]}} </h2>
                        <p class="text-right text-xs"></p>

                    </div>
                    <div>
                        <h2 class="font-bold text-xs mb-5">Course Category: {{$course["type_of_course"]["course_type"]}}
                        </h2>
                    </div>
                    <p class="text-xs">
                        <span class="font-extrabold  mb-5">Course Description:</span>
                        {{$course["type_of_course"]["desc"]}}
                    </p>

                </div>
                <div class="w-full flex items-center justify-between mt-4">

                @if(!empty($course["student_selection"]))
                    @if ($course["student_selection"]["user_id"] == Auth::id())
                    <div
                        class="text-white text-xl flex justify-center text-center bg-green-500 w-full rounded py-2 inline-flex items-center md:mb-2 lg:mb-0">
                        <button class="h-full w-full outline-none focus:outline-none">Already Applied</button>
                    </div>
                    @else
                    <form method="post" action="{{route("Course-Selection-Apply",$course["id"])}}"
                        class="text-white text-xl flex justify-center text-center bg-pink-500 w-full rounded py-2 inline-flex items-center md:mb-2 lg:mb-0">
                        @csrf
                        <button class="h-full w-full outline-none focus:outline-none">Apply</button>
                    </form>
                    @endif
                    @else
                    <form method="post" action="{{route("Course-Selection-Apply",$course["id"])}}"
                        class="text-white text-xl flex justify-center text-center bg-pink-500 w-full rounded py-2 inline-flex items-center md:mb-2 lg:mb-0">
                        @csrf
                        <button class="h-full w-full outline-none focus:outline-none">Apply</button>
                    </form>
@endif

                </div>
            </div>
            @endforeach



        </div>
    </div>
</div>

@endsection