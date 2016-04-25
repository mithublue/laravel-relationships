{{ Form::open(array('route'=>'tags.store')) }}

{{ Form::text('name',null) }}
{{ Form::submit('Save') }}
{{ Form::close() }}