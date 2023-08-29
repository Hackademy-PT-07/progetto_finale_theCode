@if(session()->has('error'))
      <div class="error-component w-100 my-4">
        <i class="bi bi-envelope-at"></i>
        {{session('error')}}
     </div>
@endif