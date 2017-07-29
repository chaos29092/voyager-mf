<ul class="nav navbar-nav menubar">
        @foreach ($items->sortBy('order') as $item)
                @php
                        $originalItem = $item;

                        $isActive = null;
                        $isChildren = null;

                        // Check if link is current
                        if(url($item->link()) == url()->current()){
                            $isActive = 'active';
                        }

                        if(!$originalItem->children->isEmpty()){
                                $isChildren = 'dropdown';
                        }
                @endphp

                <li class="{{ $isActive }} {{$isChildren}}">
                        @if(!$originalItem->children->isEmpty())
                                <a aria-expanded="false" aria-haspopup="true" role="button" class="dropdown-toggle" title="{{$item->title}}" href="{{$item->url}}">{{$item->title}}</a>
                                <i class="ddl-switch fa fa-angle-down"></i>
                                <ul class="dropdown-menu">
                                        @foreach($originalItem->children as $item)
                                        <li><a title="{{ $item->title }}" href="{{ $item->url }}">{{ $item->title }}</a></li>
                                        @endforeach
                                </ul>
                        @else
                        <a href="{{ $item->url }}" title="{{ $item->title }}">{{ $item->title }}</a>
                        @endif
                </li>
        @endforeach
</ul>
