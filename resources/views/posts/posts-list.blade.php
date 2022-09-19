@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">LMS:POSTS section!</h1>
                        <p>Enjoy reading our posts. Click on a post to read!</p>
                    </div>
                    <div class="col-4">
                        <p>Create new Post</p>
                        <a href="{{route('posts.index')}}" class="btn btn-primary btn-sm">Add Post</a>
                    </div>

                </div>
                @forelse($posts as $post)
                    <ul>
{{--                        @dd($post)--}}
{{--                        <li>   <form action="{{ route('posts.show',$post->id )  }}"> </form> </li>--}}
                         <li><a   href="{{ route('posts.show',$post->id )  }}"> {{ ucfirst($post->title) }}</a></li>
{{--                        <li><a action href="{{ route('posts.show',$post->id )  }}">{{ ucfirst($post->title) }}</a></li>--}}

                    </ul>
                @empty
                    <p class="text-warning">No blog Posts available</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection














{{--<h1>HOLLA ya post</h1>--}}

{{--@extends('layouts.app')--}}
{{--@section('content')--}}

{{--    <div class="container-xl">--}}
{{--        <div class="table-responsive">--}}
{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="text-xl font-semibold leading-tight text-gray-800">--}}
{{--            PostList--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

{{--    <div class="py-12">--}}
{{--        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">--}}
{{--            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 bg-white border-b border-gray-200">--}}
{{--                    <div>--}}
{{--                        <h4 class="mb-4 text-2xl font-bold">Post </h4>--}}
{{--                        @if (session()->has('message'))--}}
{{--                            <div class="px-4 py-4 text-green-800 bg-green-200 border-l-4 border-green-900 rounded">--}}
{{--                                {{ session('message') }}--}}
{{--                            </div>--}}
{{--                        @endif--}}
{{--                        <div>--}}
{{--                            <div class="flex flex-col mt-8">--}}
{{--                                <div class="py-2">--}}
{{--                                    <div class="min-w-full border-b border-gray-200 shadow">--}}
{{--                                        <table class="min-w-full">--}}
{{--                                            <thead>--}}
{{--                                            <tr>--}}
{{--                                                <th--}}
{{--                                                    class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">--}}
{{--                                                    #--}}
{{--                                                </th>--}}
{{--                                                <th--}}
{{--                                                    class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">--}}
{{--                                                    Title--}}
{{--                                                </th>--}}
{{--                                                <th--}}
{{--                                                    class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">--}}
{{--                                                    Description--}}
{{--                                                </th>--}}
{{--                                                <th--}}
{{--                                                    class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">--}}
{{--                                                    Action--}}
{{--                                                </th>--}}
{{--                                            </tr>--}}
{{--                                            </thead>--}}

{{--                                            <tbody class="bg-white">--}}
{{--                                            <tr scope="row">--}}
{{--                                                <td>--}}
{{--                                                    pppppppppppp--}}
{{--                                                </td>--}}
{{--                                                <td>aaaaaaaaaaaaaaa</td>--}}

{{--                                                <td>dddddddddddddddddddd</td>--}}
{{--                                            </tr>--}}
{{--                                            @foreach($posts as $post)--}}
{{--                                                <tr>--}}
{{--                                                    <td class="px-6 py-4 border-b border-gray-200">--}}
{{--                                                        <div class="flex items-center">--}}
{{--                                                            <div class="ml-4">--}}
{{--                                                                <div class="text-sm text-gray-900">--}}
{{--                                                                    {{ $post->id }}--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </td>--}}

{{--                                                    <td class="px-6 py-4 border-b border-gray-200">--}}
{{--                                                        <div class="text-sm text-gray-900">--}}
{{--                                                            {{ $post->title }}--}}
{{--                                                        </div>--}}
{{--                                                    </td>--}}

{{--                                                    <td class="px-6 py-4 border-b border-gray-200">--}}
{{--                                                        {{ $post->description }}--}}
{{--                                                    </td>--}}

{{--                                                    <td--}}
{{--                                                        class="px-6 py-4 text-sm text-gray-500 border-b border-gray-200 ">--}}
{{--                                                        <form action="{{ route('like.posts', $post->id) }}"--}}
{{--                                                              method="post">--}}
{{--                                                            @csrf--}}
{{--                                                            <button--}}
{{--                                                                class="{{ $post->liked() ? 'bg-blue-600' : '' }} px-4 py-2 text-white bg-gray-600">--}}
{{--                                                                like {{ $post->likeCount }}--}}
{{--                                                            </button>--}}
{{--                                                        </form>--}}

{{--                                                    </td>--}}
{{--                                                    <td--}}
{{--                                                        class="px-6 py-4 text-sm text-gray-500 border-b border-gray-200">--}}
{{--                                                        <form action="{{ route('unlike.posts', $post->id) }}"--}}
{{--                                                              method="post">--}}
{{--                                                            @csrf--}}
{{--                                                            <button--}}
{{--                                                                class="{{ $post->liked() ? 'block' : 'hidden'  }} px-4 py-2 text-white bg-red-600">--}}
{{--                                                                unlike--}}
{{--                                                            </button>--}}
{{--                                                        </form>--}}
{{--                                                    </td>--}}

{{--                                                </tr>--}}
{{--                                            @endforeach--}}
{{--                                            </tbody>--}}
{{--                                        </table>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-app-layout>--}}

{{--@endsection--}}
