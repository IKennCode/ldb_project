<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
        <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
            <div class="row">
                <div class="col-sm-8">
                <h2>Employee <b>Details</b></h2>
                </div>
                <div class="col-sm-4">
                <button type="button" class="btn btn-info add-new">
                    <i class="fa fa-plus"></i> Add New
                </button>
                </div>
            </div>
            </div>
            <table class="table table-bordered">
            <thead>
                <tr>
                <th>Name</th>
                <th>Department</th>
                <th>Phone</th>
                <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>Subhash</td>
                <td>Administration</td>
                <td>88***88***</td>
                <td>
                    <a class="add" title="Add" data-toggle="tooltip"
                    ><i class="material-icons"></i></a
                    >
                    <a class="edit" title="Edit" data-toggle="tooltip"
                    ><i class="material-icons"></i></a
                    >
                    <a class="delete" title="Delete" data-toggle="tooltip"
                    ><i class="material-icons"></i></a
                    >
                </td>
                </tr>
                <tr>
                <td>Subhash</td>
                <td>Administration</td>
                <td>88***88***</td>
                <td>
                    <a class="add" title="Add" data-toggle="tooltip"
                    ><i class="material-icons"></i></a
                    >
                    <a class="edit" title="Edit" data-toggle="tooltip"
                    ><i class="material-icons"></i></a
                    >
                    <a class="delete" title="Delete" data-toggle="tooltip"
                    ><i class="material-icons"></i></a
                    >
                </td>
                </tr>
                <tr>
                <td>Subhash</td>
                <td>Administration</td>
                <td>88***88***</td>
                <td>
                    <a class="add" title="Add" data-toggle="tooltip"
                    ><i class="material-icons"></i></a
                    >
                    <a class="edit" title="Edit" data-toggle="tooltip"
                    ><i class="material-icons"></i></a
                    >
                    <a class="delete" title="Delete" data-toggle="tooltip"
                    ><i class="material-icons"></i></a
                    >
                </td>
                </tr>
            </tbody>
            </table>
        </div>
        </div>
    
</body>
</html>