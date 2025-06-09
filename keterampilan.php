<?php include 'data/data.php'; ?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Data Pendidikan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container mt-5 shadow p-5 w-50 rounded-3 bg-white mb-3">
        <div class="mb-3 d-flex align-items-center">
            <i class="bi bi-file-earmark-person-fill text-primary fs-2 me-3"></i>
            <h2 class="judul text-primary fw-bold fs-3 mb-0">Data Keterampilan | CV Generator</h2>
        </div>
        <div class="sub">
            <p>Isilah data anda dengan benar!</p>
            <hr class="">
        </div>

        <form action="generate_pdf.php" method="post">
            <input type="hidden" name="step" value="2">
            <!-- Simpan data sebelumnya -->
            <?php include 'data/save_data.php'; ?>

            <div class="mb-3">
                <label class="form-label label-custom">Keterampilan 1</label>
                <input type="text" name="skill1" class=" input-custom form-control bg-semi-gray border border-dark" value="<?php echo $_POST['skill1'] ?? ''; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label label-custom">Keterampilan 2</label>
                <input type="text" name="skill2" class=" input-custom form-control bg-semi-gray border border-dark" value="<?php echo $_POST['skill2'] ?? ''; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label label-custom">Keterampilan 3</label>
                <input type="text" name="skill3" class=" input-custom form-control bg-semi-gray border border-dark" value="<?php echo $_POST['skill3'] ?? ''; ?>" required>
            </div>


            <div class="d-flex align-items-center">
                <!-- Tombol Previous -->
                <button type="submit" formaction="pengalaman.php" class="button btn btn-secondary me-3 mt-3">Previous</button>

                <button type="submit" class="button btn btn-primary mt-3">Generate PDF</button>
            </div>

        </form>
    </div>
</body>

</html>