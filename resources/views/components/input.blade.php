<div class="form-group mt-1 mb-2">
    <label for="">{{$label}}</label>
    <input type="{{$type}}" name="{{$name}}" value="{{$value}}" id="" class="form-control" placeholder="{{$label}}"  aria-describeby="helpId">
    {{-- <span class="text-danger">
        @error('{{$name}}')
            {{$message}};
        @enderror
    </span> --}}
</div>
