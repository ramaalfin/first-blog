@extends('frontend.layouts.app')
@section('title')
    All Posts
@endsection
@section('content')
    <section class="px-4 md:px-20 mb-14">
        <div class="flex flex-col items-center lg:grid lg:grid-cols-3 gap-4 mb-4">
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="object-cover rounded-t-lg" src="https://picsum.photos/400/300" alt="" />
                </a>
                <div class="p-5">
                    <div class="flex items-center">
                        <p class="uppercase text-sm ">internet</p>
                        <span class="mx-4">|</span>
                        <p class="text-sm">June 28, 2021</p>
                    </div>
                    <a href="#">
                        <h5 class="mb-2 text-[24px] font-bold tracking-tight text-gray-900 dark:text-white">How to design a
                            product that can grow itself 10x in year</h5>
                    </a>
                    <p class="mb-3 font-normal text-[16px] text-gray-700 dark:text-gray-400">Auctor Porta. Augue vitae diam
                        mauris faucibus blandit elit per, feugiat leo dui orci. Etiam vestibulum. Nostra netus per conubia
                        dolor.</p>
                    <div class="user flex items-center pt-2 gap-3">
                        <div class="img">
                            <img src="{{ 'storage/assets/user/user.png' }}" class="w-12">
                        </div>
                        <div class="bio">
                            <h5 class="text-lg font-semibold">Amara</h5>
                            <p class="text-sm">Ui designer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
