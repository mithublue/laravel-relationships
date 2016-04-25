<div>
    {{ $post->title }}
    @foreach($post->tags as $tag )
            <div>{{ $tag['name'] }}</div>
        @endforeach
</div>