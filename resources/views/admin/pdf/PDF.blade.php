<!DOCTYPE html>
<html>

<head>
    <title>Inventory</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">{{ $title }}</h1>
    <p>Date: {{ $date }}</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</p>

    <table class="table table-primary table-striped table-bordered border-dark caption-top table-responsive">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Status</th>
        </tr>
        @foreach ($categories as $Category)
            <tr>
                <td>{{ $Category->id }}</td>
                <td>{{ $Category->title }} </td>
                <td>
                    @if ($Category->status === 1)
                        <span class="badge bg-success">{{ __('Active') }}</span>
                    @else
                        <span class="badge bg-danger">{{ __('Deactive') }}</span>
                    @endif

                </td>
            </tr>
        @endforeach
    </table>

</body>

</html>
