<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <style>
        .sidebar-toggle:hover .hamburger,
        .sidebar-toggle:hover .hamburger:after,
        .sidebar-toggle:hover .hamburger:before {
            background: #3b7ddd;
        }

        .sidebar-toggle {
            cursor: pointer;
            display: flex;
            height: 26px;
            width: 26px;
        }

        .sidebar-toggle {
            margin-right: 1rem;
        }

        .sidebar-toggle {
            margin-right: $spacer;
        }

        .sidebar-toggle {
            cursor: pointer;
            width: 26px;
            height: 26px;
            display: flex;
        }

        .sidebar-toggle: hover {

            .hamburger,
            .hamburger: before,
            .hamburger:after {
                background: $primary;
            }
        }
    </style>
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        @include('partials.admin.sidebar')
        <!--  Main wrapper -->
        <div class="body-wrapper">
            @include('partials.admin.navbar')
            @include('partials.admin.flash')
            @yield('content')

        </div>
    </div>
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('assets/fontawesome/js/all.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        let table = new DataTable('#myTable');
    </script>
    <script>
        qa = function() {
            var e = document.getElementsByClassName("js-sidebar")[0],
                t = document.getElementsByClassName("js-sidebar-toggle")[0];
            e &&
                t &&
                t.addEventListener("click", function() {
                    e.classList.toggle("collapsed"),
                        e.addEventListener("transitionend", function() {
                            window.dispatchEvent(new Event("resize"));
                        });
                });
        };

        function getAmount() {
            var value = $('#value').val();
            var percent = $('#rate').val();
            $('#amount').val(value * percent / 100);

            var value2 = $('#value2').val();
            var percent2 = $('#rate2').val();
            $('#amount2').val(value2 * percent2 / 100);

            //get the sum of each column of each row
            var sum_value = 0;
            $('.value').each(function() {
                sum_value += +$(this).val();
                $('#total_value').val(sum_value);
            })

            var sum_rate = 0;
            $('.rate').each(function() {
                sum_rate += +$(this).val();
                $('#total_rate').val(sum_rate);
            })

            var sum_amount = 0;
            $('.amount').each(function() {
                sum_amount += +$(this).val();
                $('#total_amount').val(sum_amount);
            })
        }
    </script>
    <script>
        $('.select-field').select2({
            theme: 'bootstrap-5'
        });
    </script>
    @yield('script')

</body>

</html>
