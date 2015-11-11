

    <div class="col-md-8">
        @foreach ($adventures as $adventure)
            <!-- Modal -->
            <div class="modal fade" id="{{ $adventure->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <div class="modal-title" id="myModalLabel">
                                <h4>{{ $adventure->trail_name }}</h4>
                                <div class="row">
                                    <div class="col-md-2">
                                        {{ $adventure->difficulty }}
                                    </div>
                                    <div class="col-md-2 col-md-offset-2">
                                        {{ $adventure->rating }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        {{ $adventure->location }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <img src="{{ $adventure->img }}" alt="{{ $adventure->trail_name }}" width="100%" />
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6" style="text-align: center;">
                                    {{ $adventure->length }} mi
                                </div>
                                <div class="col-md-6" style="text-align: center;">
                                    {{ $adventure->is_loop }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6" style="text-align: center;">
                                    {{ $adventure->dog_friendly }}
                                </div>
                                <div class="col-md-6" style="text-align: center;">
                                    {{ $adventure->elevation_gain }} ft
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    {{ $adventure->description }}
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <a href="/adventures/{{ $adventure->id }}/edit"><button type="button" class="btn btn-primary">Edit</button></a>
                        </div>
                    </div>
                </div>
            </div> <!-- /.modal -->
        @endforeach
    </div><!-- END MODAL COL -->
