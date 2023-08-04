{{-- Terdapat children menu pada parent --}}
<li class="nav-item m-1 @if($menu->parent_id === 0 && count($menu->children) > 0) dropdown @endif">
    <a href="{{ url("menu/$menu->slug") }}" class="nav-link dropdown-toggle @if($menu->parent_id === 0) btn btn-dark text-light @endif" @if($menu->parent_id === 0 && count($menu->children) > 0) id="dropdown" @endif>
        {{ $menu->title }} 
        @if(count($menu->children) > 0) 
            <i class="fa fa-caret-down"></i>
        @endif
    </a>

{{-- Recursive Loop --}}
@if (count($menu->children) > 0)
    <ul class="dropdown-menu" aria-labelledby="dropdownBtn">
        @foreach($menu->children as $menu)
        @include('partials.submenu', $menu)
        @endforeach
    </ul>
@endif
</li>