

    <div class="col-md-8">
        @foreach ($adventures as $adventure)
            <!-- Modal -->
            <div class="modal fade" id="{{ $adventure->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">{{ $adventure->trail_name }}</h4>
                        </div>
                        <div class="modal-body">
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
