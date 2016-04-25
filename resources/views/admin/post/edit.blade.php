{{ Form::model($post,array('url'=>route( 'posts.update', $post->id ),'method'=>'put' ) ) }}

    {{ Form::text('title',null) }}
    {{ Form::select('tag_id',$tags,null) }}
    {{ Form::submit('Save') }}

{{ Form::close() }}