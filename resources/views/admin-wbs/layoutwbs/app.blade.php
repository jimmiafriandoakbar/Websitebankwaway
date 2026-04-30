<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WBS Dashboard</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        .nav-link:hover {
            background-color: rgba(255,255,255,0.1);
            border-radius: 5px;
        }

        .pagination {
            justify-content: end;
        }

        td {
    vertical-align: middle;
    font-size: 14px;
}

.card {
    border-radius: 12px;
}

.table td, .table th {
    vertical-align: middle;
    font-size: 14px;
}

.input-group .form-control:focus {
    box-shadow: none;
}

.badge {
    font-size: 12px;
}
    </style>
</head>
<body>

    @include('admin-wbs.layoutwbs.sidebar-wbs')

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>
</html>