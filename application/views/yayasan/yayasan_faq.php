<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <!-- Body Section -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mt-3">
                <!-- List of FAQ Section -->
                <?php foreach ($list_faq as $faq): ?>
                <div class="media border-bottom p-2 my-3 mx-1">
                    <div class="media-body mx-3">
                        <a class="text-decoration-none" data-toggle="collapse" href="#faq<?= $faq['id_faq']; ?>"
                           role="button" aria-expanded="false" aria-controls="faq<?= $faq['id_faq']; ?>">
                            <h5 class="text-left text-danger"><?= $faq['pertanyaan_faq']; ?></h5>
                        </a>
                        <p class="collapse text-secondary text-justify" id="faq<?= $faq['id_faq']; ?>">
                            <?= $faq['jawaban_faq']; ?>
                        </p>
                    </div>
                </div>
                <?php endforeach; ?>
                <!-- End List of FAQ Section -->
            </div>
        </div>
    </div>

    <!-- Page JS  -->
    <script src=""></script>

</body>
</html>