@foreach ($items as $item)
    <li class="{{ ($item->name == 'inicio') ? 'active' : ''}}"><a href="{{$item->link}}">
        {{ ( $item->icon != '') ? '<i class="material-icons left">'.$item->icon.'</i> ' : ''}}{{$item->title}}</a>
    </li>
@endforeach