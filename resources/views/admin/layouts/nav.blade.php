@foreach(config('nav.NAV') as $k=>$v)
    @if(checkMenu($v))
        @continue
        @endif
<li class="nav-body">
    <a href="#">
        <i class="fa fa-{{ $v['icon'] }}"></i>
        <span class="nav-label">{{ $v['name'] }}</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="nav nav-second-level">
        @foreach($v['access'] as $access)
            @if(!checkPri($access['access']))
        <li>
            <a class="J_menuItem" href="{{ url($access['access']) }}" data-index="0">{{ $access['name'] }}</a>
        </li>
        @else
            @continue
        @endif
        @endforeach
    </ul>

</li>
@endforeach
