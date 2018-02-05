<div class="ribbon mt-5" id="program">
    <div class="container">
        <h2 class="ribbon__header">
            Program
        </h2>

        <div class="agenda mt-5">
            <div class="row">
                <div class="col col-sm-6">
                    <h3 class="section-header">Morning</h3>
                    <ul class="agenda-list list-unstyled mb-3">
                        @foreach ($page->agenda as $event)
                        @php
                            $hour = substr($event->time, 0, 2);
                            $minute = substr($event->time, 2, 4);
                        @endphp
                        <li class="agenda-item d-flex d-flex align-items-end">
                            <div class="agenda-item__date align-self-start">
                                <h5 class="agenda-item__date-day">
                                    {{ $hour }}            
                                    {{ $minute }}            
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
                        @endforeach
                    </ul>
                </div>
                <div class="col col-sm-6">
                    <h3 class="section-header">Afternoon</h3>
                    <ul class="agenda-list list-unstyled mb-3">
                        <li class="agenda-item d-flex d-flex align-items-end">
                            <div class="agenda-item__date align-self-start">
                                <h5 class="agenda-item__date-day">
                                    13
                                    <span class="agenda-item__date-month">15</span>
                                </h5>
                            </div>

                            <div class="agenda-item__body">
                                <h5 class="agenda-item__header">Speaker 4</h5>
                                <p class="agenda-item__description">Prof...</p>
                            </div>
                        </li>
                        <li class="agenda-item d-flex d-flex align-items-end">
                            <div class="agenda-item__date align-self-start">
                                <h5 class="agenda-item__date-day">
                                    14
                                    <span class="agenda-item__date-month">00</span>
                                </h5>
                            </div>

                            <div class="agenda-item__body">
                                <h5 class="agenda-item__header">Speaker 5</h5>
                                <p class="agenda-item__description">Prof...</p>
                            </div>
                        </li>
                        <li class="agenda-item d-flex d-flex align-items-end">
                            <div class="agenda-item__date align-self-start">
                                <h5 class="agenda-item__date-day">
                                    15
                                    <span class="agenda-item__date-month">00</span>
                                </h5>
                            </div>

                            <div class="agenda-item__body">
                                <h5 class="agenda-item__header">Coffee break</h5>
                            </div>
                        </li>
                        <li class="agenda-item d-flex d-flex align-items-end">
                            <div class="agenda-item__date align-self-start">
                                <h5 class="agenda-item__date-day">
                                    15
                                    <span class="agenda-item__date-month">20</span>
                                </h5>
                            </div>

                            <div class="agenda-item__body">
                                <h5 class="agenda-item__header">Speaker 6</h5>
                                <p class="agenda-item__description">Prof...</p>
                            </div>
                        </li>

                        <li class="agenda-item d-flex d-flex align-items-end">
                            <div class="agenda-item__date align-self-start">
                                <h5 class="agenda-item__date-day">
                                    16
                                    <span class="agenda-item__date-month">05</span>
                                </h5>
                            </div>

                            <div class="agenda-item__body">
                                <h5 class="agenda-item__header">Concluding remarks</h5>
                                <p class="agenda-item__description">Prof Van der Giessen</p>
                            </div>
                        </li>
                        <li class="agenda-item d-flex d-flex align-items-end">
                            <div class="agenda-item__date align-self-start">
                                <h5 class="agenda-item__date-day">
                                    16
                                    <span class="agenda-item__date-month">20</span>
                                </h5>
                            </div>

                            <div class="agenda-item__body">
                                <h5 class="agenda-item__header">Reception</h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <a href="#top" class="h3 my-5 d-block text-center" style="color: white">Go to top</a>
</div>
