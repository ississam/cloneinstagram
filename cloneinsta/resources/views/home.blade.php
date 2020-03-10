@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <img src="https://instagram.fcmn2-1.fna.fbcdn.net/v/t51.2885-19/s150x150/83213956_3360255157381124_5752385570823208960_n.jpg?_nc_ht=instagram.fcmn2-1.fna.fbcdn.net&_nc_ohc=EAD_lLwp4MgAX8IISxV&oh=b7fa7648eb74fb8845ba41cdf3947b41&oe=5EA72FBA" class="rounded-circle" alt="">
            </div>
            <div class="col-9 pt-5">


                <div><h1>{{$user->username}}  nn</h1></div>
             <div class="d-flex" >
                 <div class="pr-5"><strong>153</strong>posts</div>
                 <div class="pr-5"><strong>23k</strong>followers</div>
                 <div class="pr-5"><strong>212</strong>following</div>
             </div>
             <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{ $user->profile->description}}</div>
            <div><a href="#">{{ $user->profile->url}}</a> </div>

            </div>
        </div>
    <div class="row pt-5">
        <div class="col-4">
        <img src="https://instagram.fcmn2-2.fna.fbcdn.net/v/t51.2885-15/e35/s240x240/88374782_543733416501650_6638052850750298038_n.jpg?_nc_ht=instagram.fcmn2-2.fna.fbcdn.net&_nc_cat=102&_nc_ohc=IypSYzxP4-gAX_eNn-3&oh=186a31a96106926dbd1284e6d7f5d039&oe=5E8F27A4" class="w-100">
        </div>

        <div class="col-4">
        <img src="https://instagram.fcmn2-2.fna.fbcdn.net/v/t51.2885-15/e35/c0.113.931.931a/s240x240/84217667_548898739065440_6328985649004661540_n.jpg?_nc_ht=instagram.fcmn2-2.fna.fbcdn.net&_nc_cat=108&_nc_ohc=U2Mk7jOzauAAX9RDxlL&oh=9dac093259a57546d43a30af21253708&oe=5E92BE7C" class="w-100">
        </div>

        <div class="col-4">
        <img src="https://instagram.fcmn2-2.fna.fbcdn.net/v/t51.2885-15/e35/c100.0.501.501a/s240x240/89260743_2658694764411607_948672185790002051_n.jpg?_nc_ht=instagram.fcmn2-2.fna.fbcdn.net&_nc_cat=107&_nc_ohc=RnyDfw94pFEAX-z157J&oh=683c02adddaf46ed8ba3d1c0bf59238c&oe=5E8EECDD" class="w-100">
        </div>

        {{-- </div> --}}
    </div>
</div>
@endsection
