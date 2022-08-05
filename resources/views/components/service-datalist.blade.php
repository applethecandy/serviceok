<datalist id="services">
    @foreach ($services as $service)
        <option value="{{ $service->title }}">
        </option>
    @endforeach
</datalist>
