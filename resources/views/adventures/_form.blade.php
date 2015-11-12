    <div class="form-group">
        {!! Form::label('trail_name', 'Trail Name: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-5">
            {!! Form::text('trail_name', null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('location', 'Location: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-5">
            {!! Form::text('location', null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('rating', 'Rating: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-3">
            {!! Form::input('number', 'rating', null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('difficulty', 'Difficulty: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-3">
            {!! Form::input('text', 'difficulty', null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Description: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-8">
            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('directions', 'Directions: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-8">
            {!! Form::textarea('directions', null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('length', 'Length (mi): ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-2">
            {!! Form::input('number', 'length', null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('elevation_gain', 'Elevation Gain (ft): ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-2">
            {!! Form::input('number', 'elevation_gain', null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('is_loop', 'Loop: ', ['class' => 'col-sm-3 control-label']) !!}
        <label class="radio-inline">
            {!! Form::radio('is_loop', 'Out-and-Back') !!}Out-and-Back
        </label>
        <label class="radio-inline">
            {!! Form::radio('is_loop', 'Loop') !!}Loop
        </label>
    </div>

    <div class="form-group">
        {!! Form::label('dog_friendly', 'Dog Friendly: ', ['class' => 'col-sm-3 control-label']) !!}
        <label class="radio-inline">
            {!! Form::radio('dog_friendly', 'Yes') !!}Yes
        </label>
        <label class="radio-inline">
            {!! Form::radio('dog_friendly', 'No') !!}No
        </label>
    </div>

    <div class="form-group">
        {!! Form::label('hiked_on', 'Date Hiked: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-2">
            {!! Form::input('date', 'hiked_on', date('Y-m-d'), ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('img', 'Image Path: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('img', $imagePath, ['class' => 'form-control']) !!}
        </div>
    </div>

    <!-- Add Adventure Form Input -->
    <div class="form-group">
        {!! Form::submit($submitBtnText, ['class' => 'btn btn-primary form-control']) !!}
    </div>
