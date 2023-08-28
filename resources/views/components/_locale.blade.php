<form action="{{route('setLanguageLocale', $lang)}}" method="POST">
    @csrf
    <button type="submit" style="background-color:transparent; border:none;">
        <span class="fi fi-{{$nation}}"></span>
    </button>
</form>