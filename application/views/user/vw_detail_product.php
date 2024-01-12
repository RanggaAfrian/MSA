
    <!-- Section -->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row">
                <!-- Display product details -->
                <div class="col-lg-6">
                    <img class="img-fluid" src="<?= base_url('assets/images/produk/') . $produk['gambar']; ?>" alt="Product Image" />
                </div>
                <div class="col-lg-6">
                    <h2 class="fw-bolder"><?= $produk['nama_produk']; ?></h2>
                    <p><?= $produk['deskripsi']; ?></p>
                    <p>Harga: <?= $produk['harga']; ?></p>
                    <!-- You can add more details if needed -->
                    <a href="<?= base_url('user'); ?>" class="btn btn-outline-dark">Home</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <section class="py-5">
        <!-- Your footer content goes here -->
    </section>