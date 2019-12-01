<!-- Fungsi alert untuk menampilkan pesan sukses dalam penambahan, pengeditan maupun penghapusan -->
@if($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert"></button>
    <strong>{{ $message }}</strong>
</div>
@endif