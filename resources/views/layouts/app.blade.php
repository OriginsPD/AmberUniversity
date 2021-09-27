<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{mix("css/app.css")}}">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("page_title")</title>
</head>
<body>

<div class="h-screen bg-black">
<div class="bg-black justify-between items-center border-b-2 border-white flex h-14">

    <div class="pl-4 text-white text-xl w-52"><a href="{{route("Profile")}}" class="p-2">{{Auth::user()->name}}</a></div>

    <div class="flex text-white h-full items-center gap-1 w-96 justify-around">
        <div><a href="/" class="p-2 bg-gray-800 rounded-md hover:text-black hover:bg-white duration-300 px-9">Home</a></div>
        <div><a href="{{route('Dashboard')}}" class="p-2 bg-gray-800 px-6 hover:text-black hover:bg-white duration-300 rounded-md">Dashboard</a></div>
        <div><a href="{{route("Course-Selection")}}" class="p-2 bg-gray-800  hover:text-black hover:bg-white duration-300 rounded-md">Course Selection</a></div>
    </div>

    <div class="flex  items-center  justify-end pr-4 gap-5  w-52">

        @auth
                <form action="{{route('Logout')}}" method="post">
                    @csrf
                    <button class="py-2 px-4 text-white rounded bg-red-600 hover:text-black hover:bg-white duration-300">Logout</button>

                </form>

            @else
        <a href="{{route("Login")}}" class="py-1 px-2 text-white rounded bg-gray-800">Log In</a>
        <a href="{{route("Register")}}" class="py-1 px-2 text-white rounded bg-gray-800">Register</a>
        @endauth

    </div>


</div>


@yield("content")

</div>


</body>
</html>
