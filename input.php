<div>
    <div class="widget">
        <div class="widget-header bordered-bottom bordered-blue">
            <span class="widget-caption">Form Gaji</span>
        </div>
        <div class="widget-body">
            <div>
            <form role="form" action="prosesinput.php" method="post">
                    <div class="form-group">
                        <label>Nama Karyawan</label>
                        <input type="text" class="form-control" required placeholder="Nama Karyawan" name="nama">
                    </div>
                    <div class="form-group">
                        <label>Nomor Induk Pegawai/Karyawan</label>
                        <input type="text" class="form-control" name="nip" required placeholder="Nomor" name="nip">
                    </div>
                    <div class="form-group">
                        <label>Alamat Pegawai</label>
                        <input type="text" class="form-control" name="alamat" required placeholder="Alamat" name="alamat">
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <select name="jabatan" class="form-control">
                            <option>-Pilih-</option>
                            <option value="manager" >Manager</option>
                            <option value="supervisor" >Supervisor</option>
                            <option value="staff" >Staff</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="p-3 mb-2 bg-warning text-dark">*Gaji dihitung berdasarkan jabatan</label>
                    </div>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-blue">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>