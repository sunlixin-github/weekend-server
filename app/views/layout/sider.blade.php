<div id="sidebar">
     <ul class="nav nav-list">
     	<li>
		<a target="_self" href={{Url('home')}}><img class="nav-user-photo" src="{{Url('avatars/'.Auth::user()->photo)}}"/></a>
		</li>
        <li>{{HTML::link('concern','我关注的人',['target'=>'_self'])}}
		</li>
     </ul>     
</div>