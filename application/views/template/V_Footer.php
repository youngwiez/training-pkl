    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <script>
        $(document).ready(function() {
        $('#regency').change(function() {
            let regency = $(this).val()
            let options = ''

            if (regency === 'Sleman') {
                options = '<option value="">Choose subdistrict</option>'
                options += '<option value="Godean">Godean</option>'
                options += '<option value="Gamping">Gamping</option>'
                options += '<option value="Cangkringan">Cangkringan</option>'
                options += '<option value="Depok">Depok</option>'
            } else if (regency === 'Klaten') {
                options = '<option value="">Choose subdistrict</option>'
                options += '<option value="Cawas">Cawas</option>'
                options += '<option value="Kemalang">Kemalang</option>'
                options += '<option value="Ceper">Ceper</option>'
                options += '<option value="Pedan">Pedan</option>'
            } else {
                options = '<option value="">Choose subdistrict</option>'
            }

            $('#subdistrict').html(options)
        })

        $('#checkout-form').on('submit', function(e) {
            e.preventDefault();
            alert('Berhasil Checkout')
        })

        $('#redeem-form').submit(function() {
            let value = $('#redeem-code').val()
            let redeem = 'PKLQUICK'
            if (value === redeem) {
                alert('Kode promo berhasil digunakan!')
            } else {
                alert('Kode promo gagal digunakan.')
            }
        })
    })
    </script>

</body>
</html>