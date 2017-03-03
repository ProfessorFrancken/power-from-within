<div class="navigation__menu nav">
    @foreach ($items as $item)
        <div class="navigation__hoverable">
            <a class="navigation__menu-item nav-link active text-nowrap {{ $item['class'] or '' }}" href="{{ $item['url'] }}">
                @if ($item['icon'] != '')
                    <i class="fa fa-{{ $item['icon'] }} mr-2" aria-hidden="true"></i>
                @endif
                {{ $item['title'] }}
            </a>
        </div>
    @endforeach
</div>
