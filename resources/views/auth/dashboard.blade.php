@extends("layouts.app")


@section("content")

    <div class="bg-blue-700 ">

        <!-- component -->
        <div class="p-9   text-gray-700 font-sans quicksand ">

            <h1 class="text-4xl mb-4"><span class=" border-b-4 border-blue-400 text-white text-center">Dashboard</span></h1>

            <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-3 overflow-y-auto gap-4  ">


                @foreach($courses as $course)
                    <div class="bg-gray-300 overflow-hidden hover:bg-pink-100 border border-gray-200 p-5 rounded">
                        <div class="m-2  text-justify text-sm">

                            <div class="flex justify-between items-center">
                                <h2 class="font-bold text-lg mb-5 h-3">Course: {{$course['course']["course_name"]}}  </h2>
                                <p class="text-right text-xs"></p>

                            </div>
                            <div>
                                <h2 class="font-bold text-xs mb-5">Category: {{$course['course']["type_of_course"]["course_type"]}}</h2>
                            </div>
                            <p class="text-xs">
                                <span class="font-extrabold  mb-7">Course Description:</span>
                                {{$course['course']["type_of_course"]["desc"]}}
                            </p>

                            <div class="text-xs justify-between flex">
                                <span>
                                    <span class="font-extrabold mb-5">Application:</span>
                                    {{$course["enroll_dt"]}}
                                    </span>

                            @if ($course["is_approved"] === 2)
                                <span>
                                    <span class="font-extrabold mb-5 text-red-600">Date Rejected:</span>
                                    {{date("d-m-Y",strtotime($course["updated_at"]))}}
                                    </span>

                                @elseif ($course["is_approved"] === 1)
                                    <span>
                                    <span class="font-extrabold text-green-500 mb-5">Date Accepted:</span>
                                    {{date("d-m-Y",strtotime($course["updated_at"]))}}
                                    </span>

                                @elseif ($course["is_approved"] === 0)
                                <span>

                                    <span class="font-extrabold text-yellow-500 mb-5">Pending</span>
                                </span>
                                @endif
                            </div>



                        </div>
                        <div class="w-full flex items-center justify-between mt-4">

                            @if ($course["is_approved"] === 0)

                                    <div
                                        class="text-white text-xl flex justify-center text-center bg-yellow-500 w-full rounded py-2 inline-flex items-center md:mb-2 lg:mb-0">
                                        <button class="h-full w-full outline-none focus:outline-none">Pending</button>
                                    </div>

                            @elseif($course["is_approved"] === 2)

                                <div
                                    class="text-white text-xl flex justify-center text-center bg-red-600 w-full rounded py-2 inline-flex items-center md:mb-2 lg:mb-0">
                                    <button class="h-full w-full outline-none focus:outline-none">Rejected</button>
                                </div>

                            @else

                                <div
                                    class="text-white text-xl flex justify-center text-center bg-green-500 w-full rounded py-2 inline-flex items-center md:mb-2 lg:mb-0">
                                    <button class="h-full w-full outline-none focus:outline-none">Accepted</button>
                                </div>

                            @endif


                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </div>

@endsection
