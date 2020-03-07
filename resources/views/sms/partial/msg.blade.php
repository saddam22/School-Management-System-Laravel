@if ($errors->any())
        @foreach ($errors->all() as $error)
         <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <span>
          <b> Success - </b> {{ $error }}</span>
      </div>
            @endforeach
    </div>
@endif


 @if(session('successMsg'))
<div class="alert alert-info">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
<span>
  <b> Danger - </b> {{ session('successMsg') }}</span>
</div>
@endif