@if(session()->has('success'))
     <div class="success-component">
        <i class="bi bi-envelope-at"></i>
        {{session('success')}}
    </div>
@endif