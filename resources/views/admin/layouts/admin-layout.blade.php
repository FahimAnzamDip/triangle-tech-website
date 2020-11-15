<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? config('app.name', 'Triangle Technologies Ltd') }}</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('frontend') }}/images/favicon.png"/>
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <!-- Template CSS -->
    @notifyCss
    <link rel="stylesheet" href="{{ asset('backend') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/css/components.css">
    @yield('backend-styles')
</head>

<body>
<!--Laravel Notify-->
<x:notify-messages />

<div id="app">
    @guest
        @yield('login-form')
    @else
        <div class="main-wrapper">

            @include('admin.includes.header')

            <!-- Main Content -->
            <div class="main-content">
                @yield('main-content')
            </div>

            @include('admin.includes.footer')

        </div>
    @endguest
</div>

<!-- General JS Scripts -->
<script src="//code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="{{ asset('backend') }}/js/stisla.js"></script>

<!-- JS Libraies -->
<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- Template JS File -->
@notifyJs
<script src="{{ asset('backend') }}/js/scripts.js"></script>
<script src="{{ asset('backend') }}/js/custom.js"></script>
<!-- Page Specific JS File -->
<script>
    $(document).ready(function () {
        $('#datatable').DataTable({
            "ordering": false
        });
        $('#datatableUser').DataTable({
            "ordering": false,
            "lengthChange": true
        });
    });
</script>
<script>
    $(document).on("click", "#delete", function (e) {
        e.preventDefault();
        var link = $(this).attr("href");
        Swal.fire({
            icon: "warning",
            title: "Are you sure?",
            text: "You won't be able to revert this after deleting!",
            type: "warning",
            showCancelButton: true,
            buttonsStyling: false,
            confirmButtonClass: "btn btn-danger btn-lg mr-3",
            confirmButtonText: "Yes, delete it!",
            cancelButtonClass: "btn btn-secondary btn-lg",
            allowOutsideClick: false
        }).then((willDelete) => {
            if (willDelete.value) {
                window.location.href = link;
            }
        });
    });
    $(document).on("click", "#logout", function (e) {
        e.preventDefault();
        Swal.fire({
            icon: "warning",
            title: "Are you sure?",
            type: "warning",
            showCancelButton: true,
            buttonsStyling: false,
            confirmButtonClass: "btn btn-danger btn-lg mr-3",
            confirmButtonText: "Yes, Log out!",
            cancelButtonClass: "btn btn-secondary btn-lg",
            allowOutsideClick: false
        }).then((willLogout) => {
            if (willLogout.value) {
                $('#logout-form').submit();
            }
        });
    });
</script>
@yield('backend-scripts')
</body>
</html>
