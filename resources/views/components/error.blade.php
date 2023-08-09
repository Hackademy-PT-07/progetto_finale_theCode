@if(session()->has('error'))
      <div class="error-component">
        <i class="bi bi-envelope-at"></i>
        {{session('error')}}
     </div>
@endif