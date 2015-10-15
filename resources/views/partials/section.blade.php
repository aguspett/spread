@if ($items)
    @foreach ($items as $item)
    @if(count($item->subsections))
        <li class="treeview">
        @include('partials.option',array('carret' => '<i class="fa fa-angle-left pull-right"> </i>'))
    @else
        <li>
            @include('partials.option')
            @endif

  @if(count($item->subsections))
      <ul class="treeview-menu">
          <li><a href="{{route($item->instruction)}}"> <i class="{{$item->icon}}"> </i> <span> Panel de control </span></a></li>
    @include('partials.section', array("items" => $item->subsections ))
      </ul>
   @endif
    </li>
    @endforeach
    @endif