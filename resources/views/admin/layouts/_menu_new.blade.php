<div class="menu">
    <ul class="list">
        <li>
            <div class="sidebar-profile clearfix">
                <div class="profile-img">
                    <img src="{{asset('atrio1.4/assets/images/user.jpg')}}" alt="profile">
                </div>
                <div class="profile-info">
                    <h3>{{auth()->user()->name ?:auth()->user()->username}}</h3>
                    <p>你好，管理员!</p>
                </div>
            </div>
        </li>
        <li class="header">菜单</li>
        @foreach($current_user_menus as $item)
        <li class="{{$item['active']?'active':''}}">
            <a href="{{isset($item['url'])?url($item['url']):'javascript:void(0)'}}" class="{{isset($item['url'])?:'menu-toggle'}}">
                <i class="menu-icon {{$item['icon']}}"></i>
                <span>{{$item['text']}}</span>
            </a>
            @if(isset($item['children']))
            <ul class="ml-menu">
                @foreach($item['children'] as $child)
                <li class="{{$child['active']?'active':''}}">
                    <a href="{{isset($child['url'])?url($child['url']):'javascript:void(0)'}}">{{$child['text']}}</a>
                </li>
                @endforeach
            </ul>
            @endif
        </li>
        @endforeach
    </ul>
</div>