@extends('layouts.app')
<?php $titleTag = htmlspecialchars($post->title); ?>
@section('title', "| $titleTag")
@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100" style="max-width: 40px;">
                    </div>
                    <div>
                         <div class="font-weight-bold">
                             <a href="/profile/{{ $post->user->id }}">
                               <span class="text-dark">{{ $post->user->username }}</span>  
                             </a>
                             
                         </div> 
                    </div>
                </div>
                
                <hr>
                
                
                
                <p>
                    <span class="font-weight-bold">
                        <a href="/profile/{{ $post->user->id }}">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                    </span> {{ $post->caption }}
                </p>
            </div>
            <div class="interaction">
                        <a href="#" class="like">{{ Auth::user()->likes()->where('post_id', $post->id)->first() ? Auth::user()->likes()->where('post_id', $post->id)->first()->like == 1 ? 'Ten post Ci się podoba' : 'Lubię to !' : 'Lubię to !'  }}</a> |
                        <a href="#" class="like">{{ Auth::user()->likes()->where('post_id', $post->id)->first() ? Auth::user()->likes()->where('post_id', $post->id)->first()->like == 0 ? 'Ten post Ci się nie podoba' : 'Słabe' : 'Słabe'  }}</a>
                
            </div>
           
            
                    
                
            <hr>
             
        <h3>Komentarze</h3>
        @if (Auth::check())

            {{ Form::open(['route' => ['comments.store'], 'method' => 'POST']) }}
            <p>{{ Form::textarea('body', old('body')) }}</p>
            {{ Form::hidden('post_id', $post->id) }}
            <p>{{ Form::submit('Zatwierdź') }}</p>
          {{ Form::close() }}
          @endif
          @forelse ($post->comments as $comment)
          <div>
            <p>{{ $comment->user->name }} {{$comment->created_at}}</p>
            <p>{{ $comment->body }}</p>
            
            @push('body')
            <script>
               alert($comment->user->name);
               alert(Auth::user()->name);
                
                </script>
                @endpush
           @if($comment->user->name==Auth::user()->name || $post->user_id==Auth::user()->id)
         {{ Form::open(['route' => ['comments.destroy', $comment->id, $post->id], 'method' => 'DELETE']) }}
				{{ Form::submit('usuń komentarz', ['class' => 'btn btn-mid btn-block btn-danger']) }}
			{{ Form::close() }}
                        @endif
            <hr></div>
          @empty
            <p>Nie ma jeszcze żadnego komentarza.</p>
          @endforelse
	
<span>{{$post->comments->count()}} {{ str_plural('comment', $post->comments->count()) }}</span>
        </div>
    </div>
</div>
 <script type="text/javascript">
        var token = '{{ Session::token() }}';
        var urlLike = '{{ route('like')}}';
        </script> 
@endsection
