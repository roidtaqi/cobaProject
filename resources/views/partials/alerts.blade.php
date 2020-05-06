@if(session('success'))
<div class="col-xs-11 col-sm-4 alert alert-success alert-with-icon" role="alert" data-notify="container" data-notify-position="top-center"
  style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1060; top: 20px; left: 0px; right: 0px;">
      <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
        <i class="tim-icons icon-simple-remove"></i>
      </button>
    {{ session('success') }}
  </div>
@endif

@if(session('warning'))
<div class="col-xs-11 col-sm-4 alert alert-warning alert-with-icon" role="alert" data-notify="container" data-notify-position="top-center"
  style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1060; top: 20px; left: 0px; right: 0px;">
        <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
          <i class="tim-icons icon-simple-remove"></i>
      </button>
    {{ session('warning') }}
  </div>
@endif

@if(session('error'))
<div class="col-xs-11 col-sm-4 alert alert-danger alert-with-icon" role="alert" data-notify="container" data-notify-position="top-center"
  style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1060; top: 20px; left: 0px; right: 0px;">
      <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
        <i class="tim-icons icon-simple-remove"></i>
      </button>
    {{ session('error') }}
  </div>
@endif
