<?php include("header.php") ?>

<body>
    <?php include("navbar.php") ?>

    <div class="row">
        <div class="card">
            <div class="column foto">
                <img class="img" src="images.jpg" alt="" width="100%" />
                <p class="judul-foto">Avatar</p>
            </div>
            <div class="column user">
                <h1>Arif Setiawan</h1>
                <p style="margin-top: 10px; color: #969191;">Back End Developer</p>
                <div class="row top">
                    <button class="btn warning">Kontak</button>
                    <button class="btn success">Resume</button>
                </div>
            </div>
            <div class="column user-detail">
                <table>
                    <tr>
                        <td style="font-weight: bolder;">Availability</td>
                        <td style="padding-inline: 20px;"></td>
                        <td>Full Time</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bolder;">Usia</td>
                        <td style="padding-inline: 20px;"></td>
                        <td>29 Tahun</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bolder;">Lokasi</td>
                        <td style="padding-inline: 20px;"></td>
                        <td>Bandar Lampung, Indonesia</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bolder;">Pengalaman</td>
                        <td style="padding-inline: 20px;"></td>
                        <td>2 Tahun</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bolder;">Email</td>
                        <td style="padding-inline: 20px;"></td>
                        <td>arifswn1@gmail.com</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="card-form">
        <form onsubmit="return confirm('Do you really want to submit the form?');">
            <?php
            $arr = ['Nama', 'Role', 'Availability', 'Age', 'Lokasi', 'Years Experience', 'Email'];
            $no = 0;
            foreach ($arr as $key => $value) {
                $no++; ?>

                <label for="<?= strtolower($value) ?>"><?= $value ?></label>
                <input type="text" name="<?= strtolower($value) ?>" placeholder="Masukkan <?= $value ?> Anda..."
                    required /><br />

            <?php } ?>
            <input type="submit" value="Submit" />
        </form>
    </div>
</body>

</html>