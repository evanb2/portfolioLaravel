    <div class="form-group">
        {!! Form::label('trail_name', 'Trail Name: ') !!}
        {!! Form::text('trail_name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('location', 'Location: ') !!}
        {!! Form::text('location', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('rating', 'Rating: ') !!}
        {!! Form::input('number', 'rating', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('difficulty', 'Difficulty: ') !!}
        {!! Form::input('text', 'difficulty', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Description: ') !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('directions', 'Directions: ') !!}
        {!! Form::textarea('directions', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('length', 'Length (mi): ') !!}
        {!! Form::input('number', 'length', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('elevation_gain', 'Elevation Gain (ft): ') !!}
        {!! Form::input('number', 'elevation_gain', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('is_loop', 'Loop: ') !!}
        <label class="radio-inline">
            {!! Form::radio('is_loop', 'Out-and-Back') !!}Out-and-Back
        </label>
        <label class="radio-inline">
            {!! Form::radio('is_loop', 'Loop') !!}Loop
        </label>
    </div>

    <div class="form-group">
        {!! Form::label('dog_friendly', 'Dog Friendly: ') !!}
        <label class="radio-inline">
            {!! Form::radio('dog_friendly', 'Yes') !!}Yes
        </label>
        <label class="radio-inline">
            {!! Form::radio('dog_friendly', 'No') !!}No
        </label>
    </div>

    <div class="form-group">
        {!! Form::label('hiked_on', 'Date Hiked: ') !!}
        {!! Form::input('date', 'hiked_on', date('Y-m-d'), ['class' => 'form-control']) !!}
    </div>

    <!-- Add Adventure Form Input -->
    <div class="form-group">
        {!! Form::submit($submitBtnText, ['class' => 'btn btn-primary form-control']) !!}
    </div>
