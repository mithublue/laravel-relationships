<div>
    @foreach($posts as $post)
        <div>{{ $post->title }}</div>
        <a href="{{ route('posts.show',$post->id) }}">View</a><a href="{{ route('posts.edit',$post->id) }}">Edit</a>
    @endforeach
</div>