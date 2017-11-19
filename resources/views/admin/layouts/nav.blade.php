@foreach($menu as $k=>$v)
<li class="nav-body">
    <a href="#">
        <i class="fa fa-{{ $v['icon'] }}"></i>
        <span class="nav-label">{{ $v['name'] }}</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="nav nav-second-level">
        @foreach($v['access'] as $access)
        <li class="nav_menu">
            <a class="J_menuItem" href="{{ url($access['access']) }}" data-index="0">{{ $access['name'] }}</a>
        </li>
        @endforeach
    </ul>
</li>
@endforeach
