]
(function($){
    $(function(){
        const MIN_YEAR = 1995, MAX_YEAR = 2008;

        function clearErrors(form){
            form.find('.error-msg').remove();
            form.find('.error').removeClass('error');
        }

        function showError(el, msg){
            el.addClass('error');
            let insertAfterEl = el;
            if (el.is(':radio') || el.closest('.radio').length) {
                insertAfterEl = el.closest('.radio');
            }
            if (insertAfterEl.next('.error-msg').length === 0) {
                $('<small class="error-msg">'+msg+'</small>').insertAfter(insertAfterEl);
            }
        }

        function nameExists(name){
            if (!name) return false;
            let lower = name.trim().toLowerCase();
            let exists = false;
            $('#listPeserta .participant strong').each(function(){
                if ($(this).text().trim().toLowerCase() === lower) {
                    exists = true;
                    return false;
                }
            });
            return exists;
        }

        function escapeHtml(s){
            return String(s).replace(/[&<>"'`=\/]/g, c =>
                ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;','/':'&#x2F;','`':'&#x60;','=':'&#x3D;'}[c])
            );
        }

        $('#formPendaftaran').on('submit', function(e){
            e.preventDefault();
            const form = $(this);
            clearErrors(form);

            const nama = $.trim(form.find('[name="nama"]').val());
            const utusan = $.trim(form.find('[name="utusan"]').val());
            const tgl = form.find('[name="tgl_lahir"]').val();
            const berat = $.trim(form.find('[name="berat"]').val());
            const tinggi = $.trim(form.find('[name="tinggi"]').val());
            const jk = form.find('[name="jk"]:checked').val();
            const kategori = form.find('[name="kategori"]').val();
            const hp = $.trim(form.find('[name="hp"]').val());
            const motivasi = $.trim(form.find('[name="motivasi"]').val());

            let valid = true;

            if (!nama) { showError(form.find('[name="nama"]'), '*wajib diisi'); valid = false; }
            if (!utusan) { showError(form.find('[name="utusan"]'), '*wajib diisi'); valid = false; }
            if (!tgl) {
                showError(form.find('[name="tgl_lahir"]'), '*wajib diisi'); valid = false;
            } else {
                const year = (new Date(tgl)).getFullYear();
                if (isNaN(year) || year < MIN_YEAR || year > MAX_YEAR){
                    showError(form.find('[name="tgl_lahir"]'), `*tahun harus antara ${MIN_YEAR} dan ${MAX_YEAR}`);
                    valid = false;
                }
            }
            if (!berat) { showError(form.find('[name="berat"]'), '*wajib diisi'); valid = false; }
            if (!tinggi) { showError(form.find('[name="tinggi"]'), '*wajib diisi'); valid = false; }
            if (!kategori) { showError(form.find('[name="kategori"]'), '*wajib diisi'); valid = false; }
            if (!hp) { showError(form.find('[name="hp"]'), '*wajib diisi'); valid = false; }
            if (!motivasi) { showError(form.find('[name="motivasi"]'), '*wajib diisi'); valid = false; }

            if (nama && nameExists(nama)) {
                showError(form.find('[name="nama"]'), '*data sudah ada');
                alert('data sudah ada');
                valid = false;
            }

            if (!valid) {
                alert('silahkan lengkapi data anda');
                return;
            }

            $.post('proses.php', form.serialize(), function(res){
                if (res && res.success) {
                    alert('data anda tersimpan');
                    const p = res.peserta;
                    const kategoriText = {
                        '1':'Tanding Kelas A',
                        '2':'Seni Tunggal',
                        '3':'Seni Ganda',
                        '4':'Seni Beregu'
                    }[p.kategori] || p.kategori;

                    const $item = $(`
                        <div class="participant" style="display:none">
                            <div class="left">
                                <strong>${escapeHtml(p.nama)}</strong>
                                <div class="meta">Utusan dari: ${escapeHtml(p.utusan)}</div>
                                <div class="note">Jenis Kelamin: ${escapeHtml(p.jk)}</div>
                                <div class="note">Kategori: ${escapeHtml(kategoriText)}</div>
                            </div>
                            <div class="right">
                                <div class="motivation">${escapeHtml(p.motivasi)}</div>
                            </div>
                        </div>
                    `);

                    $('#listPeserta').append($item);

                    if ($.ui && typeof $item.effect === 'function') {
                        $item.show().effect('highlight', {color:'#dff0d8'}, 800);
                        const $mot = $item.find('.right .motivation');
                        $mot.hide();
                        if ($mot.show('slide', {direction:'right'}, 400)) {} else { $mot.fadeIn(300); }
                    } else {
                        $item.fadeIn(400);
                    }

                    form[0].reset();
                } else {
                    if (res && res.error === 'exists') {
                        showError(form.find('[name="nama"]'), '*data sudah ada');
                        alert('data sudah ada');
                        return;
                    }
                    alert('Terjadi kesalahan saat menyimpan data.');
                }
            }, 'json').fail(function(){
                alert('Gagal menghubungi server.');
            });
        });

        $('#resetBtn').on('click', function(){
            if (!confirm('Kosongkan form dan hapus daftar peserta di server?')) return;
            const form = $('#formPendaftaran');
            form[0].reset();
            clearErrors(form);
            $('#listPeserta').empty();
            $.post('clear_session.php', {}, function(res){
                if (res && res.success) {
                    alert('Semua data dihapus dari session.');
                } else {
                    alert('Gagal menghapus data di server.');
                }
            }, 'json').fail(function(){
                alert('Tidak dapat menghubungi server untuk menghapus session.');
            });
        });
    });
})(jQuery);
