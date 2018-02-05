<div class="ribbon" id="program">
    <div class="container">
        <h2 class="ribbon__header">
            Program
        </h2>

        <div class="agenda my-5">
            @php
            $morning = true;
            @endphp
            <ul class="programme-list agenda-list list-unstyled mb-3" style="
                       ">
                <li class="agenda-item d-flex d-flex align-items-end">
                    <h3 class="section-header">Morning</h3>
                </li>

                @foreach ($page->agenda as $event)
                    @php
                    $hour = substr($event->time, 0, 2);
                    $minute = substr($event->time, 2, 4);
                    @endphp

                    @if ($morning && $hour >= 13)
                        <li class="agenda-item d-flex d-flex align-items-end">
                            <h3 class="section-header">Afternoon</h3>
                        </li>
                    @endif

                    <li class="agenda-item d-flex d-flex align-items-end">
                        <div class="agenda-item__date align-self-start">
                            <h5 class="agenda-item__date-day">
                                {{ $hour }}
                                <span class="agenda-item__date-month">
                                    {{ $minute }}
                                </span>
                            </h5>
                        </div>

                        <div class="agenda-item__body">
                            <h5 class="agenda-item__header">
                                {{ $event->title }}
                            </h5>
                            <p class="agenda-item__description">
                                {{ $event->subTitle }}
                            </p>
                        </div>
                    </li>
                    @php
                    if ($hour >= 13) {
                    $morning = false;
                    }
                    @endphp
                @endforeach
            </ul>
        </div>
    </div>
</div>
