@if ($items)
    @foreach ($items as $item)

    @if(count($item->subAccess))

        <li class="treeview">
        @include('partials.option',array('carret' => '<i class="fa fa-angle-left pull-right"> </i>'))
    @else
        <li>
            @include('partials.option')
            @endif

  @if(count($item->subsections))
      <ul class="$ul">
          <li><a href="{{action($item->section->instruction)}}"> <i class="{{$item->section->icon}}"> </i> <span> Panel de control </span></a></li>
    @include('partials.section', array("items" => $item->subAccess, "ul" => 'treeview-menu' ))
      </ul>
   @endif
    </li>
    @endforeach
    @endif