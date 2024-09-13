@if (count($list_menu_sub)==0)
    <li class="nav-item">
        <a class="nav-link" href="{{ $menu->link }}">{{ $menu->name }}</a>
    </li>
@else
<div class="dropdown">
    <button class="nav-link" href="#">{{ $menu->name }}</button>
    <ul class="list-unstyled dropdown-content">
        @foreach ($list_menu_sub as $row_menu_sub)
        <li class="pb-3">
            <a href="{{ $row_menu_sub->link }}">{{ $row_menu_sub->name }}
                {{-- <i class="fa fa-fw fa-chevron-circle-down mt-1"></i> --}}
            </a>
        </li>
        @endforeach
    </ul>
</div>
@endif