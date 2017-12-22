<div class="modal fade" id="{{$id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content pb-4 p-2">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{$title}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="col-lg-10 col-sm-12 mx-auto">
		{{$slot}}
      </div>
    </div>
  </div>
</div>