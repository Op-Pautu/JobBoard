<div>
    @if($allOption)
      <label for="{{ $name }}_all" class="mb-1 flex items-center">
        <input type="radio" name="{{ $name }}" value=""
          @checked(!request($name)) id="{{ $name }}_all"/>
        <span class="ml-2">All</span>
      </label>
    @endif  
    @foreach ($optionsWithLabels as $label => $option)
      <label for="{{ $name }}_{{ $option }}" class="mb-1 flex items-center">
        <input type="radio" name="{{ $name }}" id="{{ $name }}_{{ $option }}" value="{{ $option }}"
          @checked($option === ($value ?? request($name))) />
        <span class="ml-2">{{ $label }}</span>
      </label>
    @endforeach
  </div>