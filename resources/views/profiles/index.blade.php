@extends('layouts.app')

@section('content')
<div class="container">
    <div class ="row">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100">
    </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="h4"><strong>{{ $user->username }}</strong></div>
                
                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                </div>
                
                @can('update', $user->profile)
                    <a href="/p/create">Dodaj nowego posta</a>
                @endcan 
                
                
            </div>
            
            @can('update', $user->profile)
            <a href="/profile/{{ $user->id }}/edit">Edytuj swój profil</a>
              @endcan 
              
                    <div class="d-flex">
                        <div class="pr-5">Posty: <strong>{{ $postCount }}</strong></div>
                        <div class="pr-5"><strong>{{ $followersCount }} </strong>obserwujących</div>
                        <div class="pr-5">Obserwowni: <strong>{{ $followingCount }}</strong></div>
                    </div> 
                    <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
                    <div>{{ $user->profile->description }}</div>
                        <div><a href="#">{{ $user->profile->url }}</a></div>
                  
    </div>
    </div>
            <div class="row pt-5">
               @foreach($user->posts as $post)
               
               <div class="col-4 pb-4">
                   <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                   </a>
               </div>
               
               @endforeach
                
                
            </div>       
     </div>
@endsection
