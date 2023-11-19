<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>

<body>

    <div class="container-fluid ">
        <div class="progress-wrapper">
            <div class="progress">
                <ul class="list-unstyled">
                    <li>
                        <div class="progress-indicator complete">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="progress-label">Your Car</div>
                    </li>
                </ul>
            </div>

            @php
                $sectionClasses = [
                    'HiQ Centre' => 'fas fa-map-marker-alt',
                    'Services' => 'fas fa-tools',
                    'Appointment' => 'fas fa-calendar',
                    'Contact' => 'fas fa-users',
                ];

                $completeSections = [
                    'Services' => ['HiQ Centre'],
                    'Appointment' => ['HiQ Centre', 'Services'],
                    'Contact' => ['HiQ Centre', 'Services', 'Appointment'],
                ];
            @endphp

            @foreach ($sectionClasses as $sectionTitle => $icon)
                <div class="progress">
                    <ul class="list-unstyled">
                        <li>
                            @if (array_key_exists($title, $completeSections) && in_array($sectionTitle, $completeSections[$title]))
                                <div class="progress-indicator complete">
                                    <i class="fas fa-check"></i>
                                </div>
                            @else
                                <div class="progress-indicator {{ $title === $sectionTitle ? 'complete' : '' }}">
                                    <i class="{{ $icon }}"></i>
                                </div>
                            @endif
                            <div class="progress-label">{{ $sectionTitle }}</div>
                        </li>
                    </ul>
                </div>
            @endforeach
        </div>




        <main>
            @yield('content')
        </main>

    </div>

    <footer>
        <!-- Your footer content -->
    </footer>

    <!-- Scripts or other JS includes -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.11.14/jquery.timepicker.min.js"></script>

    @yield('scripts')


</body>

</html>
