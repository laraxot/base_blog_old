
@php
	$menus=Theme::getXmlMenu();
@endphp
{{--  
@if(isset($menus[0]))
	@foreach($menus[0] as $el)
		<li class="nav-item {{ $el->active?'active':'' }}">
			<a href="#{{$el->id}}" class="vis{{$el->visibility}} nav-link collapsed" data-toggle="collapse{{$el->id}}" data-target="#collapse" aria-expanded="true" aria-controls="collapse{{$el->id}}">
				<i class=" fa-fw"></i>
				<span>{{$el->nome}}</span>
			</a>
			@if(isset($menus[$el->id])) <span class="fa arrow"></span> 
			<div id="collapse{{$el->id}}" class="collapse" aria-labelledby="heading{{$el->id}}" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					@foreach($menus[$el->id] as $sub_el)
					<a class="{{ $sub_el->active?'active':'' }} collapse-item" href="{{$sub_el->url}}">{{$sub_el->nome}}</a>
					@endforeach
				</div>
			</div>
			@endif
		</li>
	@endforeach
@endif
--}}
@if(isset($menus[0]))
	@foreach($menus[0] as $el)
		<li class="nav-item {{ $el->active?'active':'' }}">
			<a class="nav-link collapsed vis{{$el->visibility}}" href="#collapse{{$el->id}}" data-toggle="collapse" data-target="#collapse{{$el->id}}" aria-expanded="true" aria-controls="collapse{{$el->id}}">
				{{--  <i class="fas fa-fw fa-cog"></i> --}}
				<span>{{$el->nome}}</span>
			</a>
			<div id="collapse{{$el->id}}" class="collapse" aria-labelledby="heading{{$el->id}}" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					{{--  <h6 class="collapse-header">Custom Components:</h6> --}}
					@if(isset($menus[$el->id])) 
					@foreach($menus[$el->id] as $sub_el)
					<a class="collapse-item" href="{{$sub_el->url}}">{{$sub_el->nome}}</a>
					@endforeach
					@endif
				</div>
			</div>
		</li>
	@endforeach
@endif
