@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-3 p-5">
                <img
                    src="{{ $user->profile->profileImage() }}"
                    alt=""
                    class="rounded-circle w-100">
            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center mb-3">
                        <div class="h4">{{ $user->username }}</div>

                        <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                    </div>

                    @can('update', $user->profile)
                        <div>
                            <a href="{{ route('post.create') }}" class="btn btn-outline-info">Добавить пост</a>
                        </div>
                    @endcan
                </div>
                <div class="d-flex">
                    <div>
                        <span class="font-weight-bold">{{ $postCount }}</span>
                        <span>публикаций</span>
                    </div>
                    <div class="ml-5">
                        <span class="font-weight-bold">{{ $followerCount }}</span>
                        <span>подписчиков</span>
                    </div>
                    <div class="ml-5">
                        <span class="font-weight-bold">{{ $followingCount }}</span>
                        <span>подписок</span>
                    </div>
                </div>
                @can('update', $user->profile)
                    <div>
                        <a href="{{ route('profiles.edit', $user->id) }}">Редактировать профиль</a>
                    </div>
                @endcan
                <div class="pt-4">
                    <span class="font-weight-bold">{{ $user->profile->title }}</span>
                </div>
                <div>
                    <span>
                        {{ $user->profile->description }}
                    </span>
                </div>
                <div>
                    <a href="#">{{ $user->profile->url }}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            @foreach($user->posts as $post)
                <div class="col-4 pb-5">
                    <a href="/p/{{ $post->id }}">
                        <img
                            src="/storage/{{ $post->image }}"
                            class="w-100">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
