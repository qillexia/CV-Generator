
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Data Pribadi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container mt-5 shadow p-5 w-50 rounded-3 bg-white mb-3">
        <div class="mb-3 d-flex align-items-center">
            <i class="bi bi-person-workspace text-primary fs-3 me-3"></i>
            <h2 class="judul text-primary fw-bold fs-3 mb-0">Data Pribadi | CV Generator</h2>
        </div>
        <div class="sub">
            <p>Isilah data anda dengan benar!</p>
            <hr class="">
        </div>

        <form action="pendidikan.php" method="post">
            <input type="hidden" name="step" value="1">
            <?php include 'data/save_data.php'; ?>            

            <div class="mb-3">
                <label class="form-label label-custom">Nama</label>
                <input type="text" name="name" class=" input-custom form-control bg-semi-gray border border-dark" value="<?php echo $_POST['name'] ?? ''; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label label-custom">Posisi</label>
                <input type="text" name="position" class="input-custom form-control bg-semi-gray border border-dark" value="<?php echo $_POST['position'] ?? ''; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label label-custom">Email</label>
                <input type="email" name="email" class="input-custom form-control bg-semi-gray border border-dark" value="<?php echo $_POST['email'] ?? ''; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label label-custom">Telepon</label>
                <input type="text" name="phone" class="input-custom form-control bg-semi-gray border border-dark" value="<?php echo $_POST['phone'] ?? ''; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label label-custom">Alamat</label>
                <input type="text" name="address" class="input-custom form-control bg-semi-gray border border-dark" value="<?php echo $_POST['address'] ?? ''; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label label-custom">Ringkasan Profil</label>
                <textarea name="explainSelf" class="input-custom form-control bg-semi-gray border border-dark" rows="4" required><?php echo $_POST['explainSelf'] ?? ''; ?></textarea>
            </div>

            <button type="submit" class="button btn btn-primary mt-3">Next</button>
        </form>
    </div>


</body>

</html>