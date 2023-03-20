@extends ('layouts.master')

@section ('content')

    <div class="container">
            <h1>create warga</h1>
            <form action="/warga/store" method="POST">
            @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="text" name="nik"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NIK</label>
                    <input type="text" name="nik" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">No.KK</label>
                    <input type="text" name="no_kk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
        
                <select class="form-select" name="jenis_kelamin">
                    <option value="">pilih jenis kelamin</option>
                    <option value="L">laki-laki</option>
                    <option value="P">perempuan</option>
                </select> <br>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" rows="10"></textarea><br>
                <input type="submit" name="submit" class="btn btn-info" value="Save">
                
            </form>
    </div>


@endsection
