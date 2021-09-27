<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script defer src="{{asset("js/adminFormControl.js")}}"></script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>


<div class=" flex h-screen border border-black">

    <div>


        <div class="flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-black h-full text-white transition-all duration-300 border-none z-10 sidebar">
            <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
                <ul id="list" class="flex flex-col py-5 space-y-2">
                    <li class="px-5 mt-4 hidden md:block">
                        <div class="flex flex-col items-center h-8 ">
                            <a href="{{route("Admin")}}"><p class="text-2xl font-extrabold"><span class="text-pink-600">Pix</span>-<span class="text-yellow-400">Ac</span><span class="text-green-400">ade</span><span class="text-gray-600">my</span></p></a>
                        </div>
                    </li>


                    <li class="pt-36">
                        <button id="applicants-btn" class="relative w-full flex flex-row items-center inactive h-11 focus:outline-none hover:bg-pink-800 duration-500 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-pink-500 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Applicants</span>
                        </button>
                    </li>

                    <li>
                        <button id="course-btn" class="relative w-full flex flex-row items-center inactive h-11 focus:outline-none hover:bg-pink-800 duration-500 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-pink-500 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Courses</span>
                        </button>
                    </li>

                    <li>
                        <button id="institution-btn" class="relative w-full flex flex-row items-center inactive h-11 focus:outline-none hover:bg-pink-800 duration-500 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-pink-500 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Type Of Course</span>
                        </button>
                    </li>

                    <li>
                        <form method="post" action="{{route("Logout")}}"  class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-red-600 dark:hover:bg-gray-600 text-white-600 duration-500 hover:text-white-800 border-l-4 border-transparent hover:border-pink-500 dark:hover:border-gray-800 pr-6 w-full">
                            @csrf
                            <button class="inline-flex w-full h-full outline-none focus:outline-none  justify-start items-center ml-4">
                <span>
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
</svg>
                    </span>
                                <span class="ml-2 text-sm tracking-wide truncate">Logout</span>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>

        <script>
            let dashboard_btn = $("#dashboard-btn");
            let profile_customize_btn = $("#customize-profile-btn");
            console.log($("#list"));

            function activeTab() {
                profile_customize_btn[0].classList.replace("inactive","active")
            }
        </script>
    </div>


    <div class="w-full h-full flex flex-col ">

        <div>
            <div class="grid grid-cols-1 sm:grid-cols-2  lg:grid-cols-3 p-4 gap-4">
                <div
                    class="bg-black cursor-pointer hover:bg-gray-800 duration-300 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-pink-600 dark:border-gray-600 text-white font-medium group">
                    <div
                        class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                        <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl">{{$studentCount}}</p>
                        <p>Students</p>
                    </div>
                </div>
                <div
                    id="course_card_btn"
                    class="bg-black cursor-pointer hover:bg-gray-800 duration-300  dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-pink-600 dark:border-gray-600 text-white font-medium group">
                    <div
                        class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                        <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                    </div>
                    <div class="text-right">
                        <p style="color: #FBE5F1" class="text-2xl">
                            {{$courseCount}}
                        </p>
                        <p>Courses</p>
                    </div>
                </div>

                <div
                    id="payment_activity_card_btn"
                    class="bg-black cursor-pointer hover:bg-gray-800 duration-300 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-pink-600 dark:border-gray-600 text-white font-medium group">
                    <div
                        class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                        <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="text-right cursor-pointer">
                        <p class="text-2xl">
                            {{$applicationCount}}

                        </p>
                        <p>Applications</p>
                    </div>
                </div>
            </div>
        </div>
        @if (session()->has("message"))

            <div class="w-full bg-green-300 py-4 text-2xl font-bold text-center">{{session("message")}}</div>

        @endif

        <div class="overflow-y-auto">
            @yield('content')
        </div>
    </div>

</div>


</body>
</html>
