@extends("layouts.app")


@section("content")

    <section class="flex mt-40 bg-black items-center relative justify-center ">
        <div class="text-center flex flex-col gap-y-8">
            {{--                <p class="text-xl font-medium tracking-wider text-white">Welcome To <span class="text-pink-600">Pix</span>-<span class="text-blue-400">Academy</span>--}}

            <div class="flex flex-col">
                <h2 class="mt-6 text-6xl font-bold hover:text-white text-gray-300 ">Join Our Academy
                    <br>
                    <span class="text-white-400">Start</span><span class="text-gray-400"> A </span><span
                        class="text-white-700"> Course</span></h2>

                <div class="flex justify-center mt-8">
                    {{--        TODO Animated Scroll To Section--}}
                    <a class="px-8 py-2 text-lg text-center font-medium text-white transition-colors duration-300 transform bg-blue-700 rounded hover:bg-pink-600"
                       href="{{route("Course-Selection")}}">Apply Now</a>
                </div>
            </div>

        </div>
    </section>

@endsection
