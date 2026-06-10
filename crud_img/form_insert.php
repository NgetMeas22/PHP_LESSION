<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between gap-3 mb-4">
            <div>
                
                <h1 class="h2 mb-2">Add Product</h1>
                <p class="text-muted mb-0">Fill in the product details and upload a clear image.</p>
            </div>
            <a href="index.php" class="btn btn-outline-secondary">Back to List</a>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="insert.php" method="POST" enctype="multipart/form-data">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Product name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter product name" required>
                        </div>
                        <div class="col-md-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" id="price" name="price" class="form-control" placeholder="0.00" min="0" step="0.01" required>
                        </div>
                        <div class="col-md-3">
                            <label for="qty" class="form-label">Quantity</label>
                            <input type="number" id="qty" name="qty" class="form-control" placeholder="0" min="0" required>
                        </div>
                        <div class="col-12">
                            <label for="img" class="form-label">Product image</label>
                            <input type="file" id="img" name="img" class="form-control" accept="image/*" required>
                        </div>
                        <div class="col-12">
                            <label for="des" class="form-label">Description</label>
                            <textarea id="des" name="des" class="form-control" rows="5" placeholder="Enter product description" required></textarea>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2 mt-4">
                        <a href="index.php" class="btn btn-light">Cancel</a>
                        <button type="submit" class="btn btn-primary">Save Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
