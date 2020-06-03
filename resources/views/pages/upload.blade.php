
      <form action="{{ route('upload.proses') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
                                
          <div class="form-group">
            <b>Upload Bukti Pembayaran</b><br>
            <br>
            <input type="file" name="file">
          </div>
          <button type="submit" name="submit" value="Upload" class="btn btn-fill btn-primary">Upload</button>
          <br>
        <br>
      </form>