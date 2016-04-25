{{ Form::open(array('route'=>'posts.store')) }}

    {{ Form::text('title',null) }}
    {{ Form::select('tag_id',$tags,null) }}
    {{ Form::submit('Save') }}

{{ Form::close() }}