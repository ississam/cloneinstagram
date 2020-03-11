@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <img src="https://instagram.fcmn2-1.fna.fbcdn.net/v/t51.2885-19/s150x150/83213956_3360255157381124_5752385570823208960_n.jpg?_nc_ht=instagram.fcmn2-1.fna.fbcdn.net&_nc_ohc=EAD_lLwp4MgAX8IISxV&oh=b7fa7648eb74fb8845ba41cdf3947b41&oe=5EA72FBA" class="rounded-circle" alt="">
            </div>
            <div class="col-9 pt-5">


                <div class="d-flex justify-content-between ">
                     <h1> {{$user->username}}</h1>
             <a href="/p/create">Add New Post</a>
                 </div>

             <a href="/profile/{{$user->id}}/edit">Edit Profil</a>
                <div class="d-flex" >
                 <div class="pr-5"><strong>{{$user->posts->count()}}</strong>posts</div>
                 <div class="pr-5"><strong>23k</strong>followers</div>
                 <div class="pr-5"><strong>212</strong>following</div>
             </div>
             <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{ $user->profile->description}}</div>
            <div><a href="#">{{ $user->profile->url}}</a> </div>
            </div>
        </div>
    <div class="row pt-5">
            @foreach ($user->posts as $post )
                <div class="col-4 pb-5">
                <a href="/p/{{$post->id}}">
                <img src="/storage/{{ $post->image}}" class="w-100">
                    </a>
            </div>
            @endforeach
    </div>
</div>
@endsection
