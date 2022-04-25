<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Formulir - Portal PMB Oline UNIPA</title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="col-sm-6">
        <div class="form-group">
            <label>Nama SMTA *</label>
            <select name="namasmta" id="namasmta" class="form-select" style="width:300px">
            </select>
            <small>Pilih nama SMTA Anda.</small>
        </div>
    </div>
</body>

</html>

<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#namasmta').select2({
            placeholder: '-- Pilih SMTA --',
            minimumInputLength: 1,
            ajax: {
                url: "<?php echo site_url('register/searchSMTA'); ?>",
                dataType: 'json',
                delay: 250,
                processResults: function(data) {
                    return {
                        results: data
                    };
                },
                cache: true
            }
        });
    });
</script>