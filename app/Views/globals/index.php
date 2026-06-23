<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>
<div class="row d-flex justify-content-start">
<div class="col-md-4 mb-4">
    <form action="/" method="get" class="d-flex flex-row justify-content-start">
        <label for="pilih_kota" class="align-self-center me-3">Wilayah</label>
        <select class="form-select" aria-label="Default select example" style="max-width: 300px;" id="nama_kota">
        <option value="" selected>--Semua--</option>

        </select>
    </form>
</div>

    <div class="col mb-4">
        <form action="/" method="get" class="d-flex flex-row justify-content-start">
            <label for="tipe" class="align-self-center me-3">Type Kosan</label>
            <select class="form-select" aria-label="Default select example" style="max-width: 300px;" id="tipe">
                <option value="">--Semua--</option>
                <option value="Putra">Putra</option>
                <option value="Putri">Putri</option>
                <option value="Campur">Campur</option>
            </select>
        </form>
    </div>
</div>

<?= $this->include('globals/landing_page'); ?>

<?= $this->include('globals/about'); ?>
<script src="/jquery/jquery.min.js"></script>
<script>
    $.ajax({
        type: "GET",
        url: "<?= base_url() ?>/provinsi.json",
        crossDomain: true,
        dataType: "json",
        success: function(response) {
            
            for (let i = 0; i < response.length; i++) {
                var element = response[i].name;
                element = element.split(" ");
                element.shift();
                element = element.join(" ");
                $('#nama_kota').append('<option value="' + element + '">' + response[i].name + '</option>');
            }

        }
    });
</script>
<script>
    document.querySelector('#tipe').addEventListener('change', filterList);
    document.querySelector('#nama_kota').addEventListener('change', filterList);

    function filterList() {
        const searchInput = document.querySelector('#tipe');
        const searchInput2 = document.querySelector('#nama_kota');
        const filter = searchInput.value.toLowerCase();
        const filter2 = searchInput2.value.toLowerCase();
        const listItem = document.querySelectorAll('.list-group-item2');
        // const text2 = listItem.textContent;
        // console.log(text2.split(" "));


        // const card = document.querySelectorAll('.list-group-flush');

        listItem.forEach((item) => {
            let text = item.textContent;


            // console.log(text.split(" "));
            // console.log(text);
            if (text.toLowerCase().includes(filter.toLowerCase()) && text.toLowerCase().includes(filter2.toLowerCase())) {
                item.style.display = '';

            } else {
                item.style.display = 'none';
                // card.style.display = 'none';
            }

        });
    }
</script>
<?= $this->endSection(); ?>