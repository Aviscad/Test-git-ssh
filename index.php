<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Backbone Blogroll App</title>
</head>

<body>
    <div class="container">
        <h1>Backbone Tutorial Blogroll App</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Author</th>
                    <th>Title</th>
                    <th>URL</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td><input type="text" name="author-input" class="form-control author-input"></td>
                    <td><input type="text" name="title-input" class="form-control title-input"></td>
                    <td><input type="text" name="url-input" class="form-control url-input"></td>
                    <td><button name="submit" class="btn btn-primary add-blog">Add</button></td>
                </tr>
            </thead>
            <tbody class="blogs-list"></tbody>
        </table>
    </div>
    <script type="text/template" class="blogs-list-template">
        <td><span class="author"><%= author %></span></td>
        <td><span class="title"><%= title %></span></td>
        <td><span class="url"><%= url %></span></td>
        <td><button class="btn btn-warning edit-blog">Edit</button> <button class="btn btn-danger delete-blog">Delete</button><button class="btn btn-success update-blog" style="display:none">Update</button> <button class="btn btn-danger cancel" style="display:none">Cancel</button></td>

    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.13.2/underscore-min.js" integrity="sha512-anTuWy6G+usqNI0z/BduDtGWMZLGieuJffU89wUU7zwY/JhmDzFrfIZFA3PY7CEX4qxmn3QXRoXysk6NBh5muQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.4.1/backbone.js" integrity="sha512-cVCKajVEnGO1bx8ff7iIy2Ffv6u6F/epjJxuNXGgNmFPYOMby8/hjBwMMf/qepsDGYz1uoiGcuDRfYmfVBzJFQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="scripts.js"></script>
</body>

</html>