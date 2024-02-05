<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5 col-md-6">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h2 class="mb-0">Library </h2>
        </div>
        <div class="card-body">
            <form method="post" action="/search">
                @csrf

                <div class="form-group">
                    <label for="username">Username Search:</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>

                <div class="form-group">
                    <label for="book_category">Book Category:</label>
                    <select class="form-control" id="book_category" name="book_category" required>
                        <option value="fiction">Fiction</option>
                        <option value="nonfiction">Non-Fiction</option>
                        <option value="science">Science</option>
                        <!-- Add more categories as needed -->
                    </select>
                </div>

                <div class="form-group">
                    <label for="search_by">Book Search By:</label>
                    <select class="form-control" id="search_by" name="search_by" required>
                        <option value="book_name">Book Name</option>
                        <option value="author_name">Author Name</option>
                        <option value="publish_year">Publish Year</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>

                <div class="form-group">
                    <label for="book_name">Book Search:</label>
                    <input type="text" class="form-control" id="book_name" name="book_name" placeholder="Enter Book Name">
                </div>

                <div class="form-group">
                    <label for="receive_date">Book Receive Date:</label>
                    <input type="date" class="form-control" id="receive_date" name="receive_date" required>
                </div>

                <div class="form-group">
                    <label for="return_date">Book Return Date:</label>
                    <input type="date" class="form-control" id="return_date" name="return_date" required>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<!-- Include Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
