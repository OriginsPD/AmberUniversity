@extends('layouts.admin')

@section('content')

    <div
        class=" flex flex-col flex-auto flex-shrink-0 antialiased dark:bg-gray-700 text-black dark:text-white">

        <div>


            <div id="applicant-view" class="grid grid-cols-1 hidden lg:grid-cols-1 p-4 gap-4">

                <!-- Social Traffic -->
                <div
                    class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
                    <div class="rounded-t mb-0 px-0  border-0">
                        <div class="flex flex-wrap items-center top-0 sticky bg-gray-100   px-4 py-4">
                            <div class="relative w-full max-w-full flex-grow   flex-1">
                                <h3 class="font-semibold text-base  text-2xl text-center text-gray-900  dark:text-gray-50">
                                    Applicants</h3>
                            </div>

                        </div>
                        <div class="block w-full">
                            <table class="items-center w-full bg-transparent border-collapse">
                                <thead class="top-15 sticky">
                                <tr>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Name
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Email
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Telephone Number
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center min-w-140-px">
                                        Course
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center min-w-140-px">
                                        Course Category
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center min-w-140-px">
                                        Enrolled Date
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center min-w-140-px">
                                        Action
                                    </th>
                                </tr>
                                </thead>

                                <tbody>

                                @forelse($applicants as $applicant)
                                <tr>

                                    <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        {{$applicant['user']["name"]}}
                                    </td>

                                    <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        {{$applicant['user']["email"]}}
                                    </td>

                                    <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        {{$applicant['user']["tele"]}}
                                    </td>

                                    <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        {{$applicant["course"]["course_name"]}}
                                    </td>

                                    <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        {{$applicant["course"]["type_of_course"]["course_type"]}}
                                    </td>

                                    <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        {{$applicant['enroll_dt']}}
                                    </td>

                                    <td>
                                        <div class="flex gap-3">
                                            <form action="{{route("Admin-Applicant-Action",$applicant["id"])}}" method="post">
                                                @csrf
                                                <button name="accept" value="1" class="bg-green-400 hover:bg-green-600 duration-300 rounded text-white py-1 px-2">Accept</button>
                                                <button name="reject" value="2" class="bg-red-500 hover:bg-red-600 duration-300 rounded py-1 text-white px-2">Reject</button>
                                            </form>

                                        </div>
                                    </td>




                                </tr>
                                    @empty

                                @endforelse


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- ./Social Traffic -->

                <!-- Recent Activities -->
                <!-- ./Recent Activities -->
            </div>

            <div id="course-view" class="grid grid-cols-1 hidden lg:grid-cols-1 p-4 gap-4">

                <!-- Social Traffic -->
                <div
                    class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
                    <div class="rounded-t mb-0 px-0  border-0">
                        <div class="flex flex-wrap items-center top-0 sticky bg-gray-100   px-4 py-4">
                            <div class="relative w-full max-w-full flex-grow   flex-1">
                                <div
                                    class="font-semibold z-50 flex gap-10 justify-around text-base text-2xl text-center text-gray-900  dark:text-gray-50">
                                    <button id="show-course-btn"
                                            class="bg-red-400  duration-300 font-bold rounded py-2 h-full w-1/2">Course
                                    </button>
                                    <button id="add-course-btn"
                                            class="bg-pink-400 duration-300 font-bold rounded py-2 h-full w-1/2">Add
                                        Course
                                    </button>
                                </div>
                            </div>

                        </div>

                        <div class="block w-full">
                            <table id="show-course-view" class="items-center  w-full bg-transparent border-collapse">
                                <thead class="top-20 sticky">
                                <tr>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Course
                                    </th>

                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Course Type ID
                                    </th>

                                </tr>
                                </thead>

                                <tbody>


                                @forelse($courses as $course)

                                    <tr>


                                        <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                            {{$course["course_name"]}}
                                        </td>

                                        <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                            {{$course["course_type_id"]}}

                                        </td>


                                    </tr>
                                @empty
                                    <tr>


                                        <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                            N/A
                                        </td>

                                        <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                            N/A
                                        </td>


                                    </tr>
                                @endforelse


                                </tbody>
                            </table>

                            <div id="add-course-view" class="h-full hidden">

                                <!-- component -->
                                <form method="post" action="{{route("Admin-Add-Course")}}" class="rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
                                    @csrf
                                    <div class="-mx-3 md:flex mb-6">
                                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-course_start">
                                            Course Name
                                            </label>
                                            <input name="course_nm" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-course_start" type="text">
                                        </div>
                                        <div class="md:w-1/2 px-3">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
                                                Course Type
                                            </label>
                                            <div>
                                                <select name="course_type" class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="grid-state">
                                                    @forelse($courseTypes as $courseType)
                                                    <option value="{{$courseType['id']}}">{{$courseType['course_type']}}</option>
                                                        @empty
                                                        <option>No Available Course Type</option>

                                                    @endforelse
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="bg-blue-400 text-2xl font-bold py-3 rounded" type="submit">Create Course</button>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
        </div>

            <div id="institution-view" class="grid grid-cols-1 hidden lg:grid-cols-1 p-4 gap-4">

                <!-- Social Traffic -->
                <div
                    class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
                    <div class="rounded-t mb-0 px-0  border-0">
                        <div class="flex flex-wrap items-center top-0 sticky bg-gray-100   px-4 py-4">
                            <div class="relative w-full max-w-full flex-grow   flex-1">
                                <div
                                    class="font-semibold flex gap-10 justify-around text-base text-2xl text-center text-gray-900  dark:text-gray-50">
                                    <button id="show-institution-btn" class="bg-red-400 font-bold rounded py-2 h-full w-1/2">
                                        Courses Type
                                    </button>
                                    <button id="add-institution-btn" class="bg-pink-400 font-bold rounded py-2 h-full w-1/2">
                                        Add Course Type
                                    </button>
                                </div>
                            </div>

                        </div>

                        <div class="block w-full">
                            <table id="show-institution-view" class="items-center w-full bg-transparent border-collapse">
                                <thead class="top-20 sticky">
                                <tr>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Course
                                    </th>

                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Course Description
                                    </th>

                                </tr>
                                </thead>

                                <tbody>

                                @forelse($courseTypes as $courseType)

                                    <tr>


                                        <td class="border-t-0 font-bold px-4 text-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                            {{$courseType["course_type"]}}
                                        </td>

                                        <td class="border-t-0 font-bold px-4 text-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                            {{$courseType["desc"]}}
                                        </td>


                                    </tr>
                                @empty
                                    <tr>



                                        <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                            N/A
                                        </td>

                                        <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                            N/A

                                        </td>



                                    </tr>
                                @endforelse


                                </tbody>
                            </table>


                            <div id="add-institution-view" class="h-full  hidden">

                                <!-- component -->
                                <form method="post" action="{{route("Admin-Add-Course-Type")}}" class="rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
                                    @csrf
                                    <div class="-mx-3 md:flex mb-6">

                                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-Institution_Address">
                                                Course Type
                                            </label>
                                            <input name="course_type" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-Institution_Address" type="text">
                                        </div>
                                        <div class="md:w-1/2 px-3">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-telephone_nbr">
                                                Description
                                            </label>
                                            <input name="description" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-telephone_nbr" type="text">
                                        </div>
                                    </div>


                                    <button class="bg-pink-400 text-2xl font-bold py-3 rounded" type="submit">Create Course Type</button>

                                </form>

                            </div>


                        </div>
                    </div>
                </div>
                <!-- ./Social Traffic -->
            {{--                    <div class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">--}}
            {{--                        <div class="rounded-t mb-0 px-0  border-0">--}}
            {{--                            <div class="flex flex-wrap items-center top-0 sticky bg-gray-100   px-4 py-4">--}}
            {{--                                <div class="relative w-full max-w-full flex-grow   flex-1">--}}
            {{--                                    <h3 class="font-semibold text-base  text-2xl text-center text-gray-900  dark:text-gray-50">Courses</h3>--}}
            {{--                                </div>--}}

            {{--                            </div>--}}
            {{--                            <div class="block w-full">--}}
            {{--                                <table class="items-center w-full bg-transparent border-collapse">--}}
            {{--                                    <thead class="top-15 sticky">--}}
            {{--                                    <tr>--}}
            {{--                                        <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Course Name</th>--}}
            {{--                                        <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Institution</th>--}}
            {{--                                        <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Award Type</th>--}}
            {{--                                        <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center min-w-140-px">Action</th>--}}
            {{--                                    </tr>--}}
            {{--                                    </thead>--}}

            {{--                                    <tbody>--}}


            {{--                                    @foreach($applicants as $applicant)--}}
            {{--                                        <tr>--}}
            {{--                                            <td class="border-t-0 font-bold px-4 text-center align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">{{$applicant['student'][0]['first_nm']}}</td>--}}
            {{--                                            <td class="border-t-0 font-bold px-4 text-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">--}}
            {{--                                                {{$applicant['student'][0]['last_nm']}}</td>--}}
            {{--                                            <td class="border-t-0 px-4 text-center text-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">--}}
            {{--                                                <div class="flex justify-center items-center">--}}
            {{--                                                    <span class="mr-2 font-bold text-center">{{$applicant['student'][0]['tele_nbr']}}</span>--}}
            {{--                                                </div>--}}
            {{--                                            </td>--}}

            {{--                                            <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">--}}
            {{--                                                {{\App\Models\Course::find($applicant['course_id'])->course_nm}}--}}
            {{--                                            </td>--}}

            {{--                                        </tr>    <tr>--}}
            {{--                                            <td class="border-t-0 font-bold px-4 text-center align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">{{$applicant['student'][0]['first_nm']}}</td>--}}
            {{--                                            <td class="border-t-0 font-bold px-4 text-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">--}}
            {{--                                                {{$applicant['student'][0]['last_nm']}}</td>--}}
            {{--                                            <td class="border-t-0 px-4 text-center text-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">--}}
            {{--                                                <div class="flex justify-center items-center">--}}
            {{--                                                    <span class="mr-2 font-bold text-center">{{$applicant['student'][0]['tele_nbr']}}</span>--}}
            {{--                                                </div>--}}
            {{--                                            </td>--}}

            {{--                                            <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">--}}
            {{--                                                {{\App\Models\Course::find($applicant['course_id'])->course_nm}}--}}
            {{--                                            </td>--}}

            {{--                                        </tr>--}}

            {{--                                    @endforeach--}}

            {{--                                    </tbody>--}}
            {{--                                </table>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}

            <!-- Recent Activities -->
                <!-- ./Recent Activities -->
            </div>


        </div>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
@endsection
