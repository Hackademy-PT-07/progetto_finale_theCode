@if(session()->has('success'))
     <div class="success-component w-100 my-4">
        <i class="bi bi-envelope-at me-3 text-white"></i>
        <span class="text-white">{{session('success')}}</span>
    </div>
@endif