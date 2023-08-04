<div class="container container-fluid my-5">
    <div class="row">
      <div class="col-lg-8"><h6>KATA DATA</h6>
        <ul id="kata-data-list">
          <li class="my-1 btn btn-danger rounded">
            <span class="kata-data-title">DBD</span>
            <span id="dbd">0</span>
          </li>
          <li class="my-1 btn btn-danger rounded">
            <span class="kata-data-title">Kematian Ibu</span>
            <span id="aki">0</span>
          </li>
          <li class="my-1 btn btn-danger rounded">
            <span class="kata-data-title">Kematian Bayi</span>
            <span id="akb">0</span>
          </li>
          <li class="my-1 btn btn-danger rounded">
            <span class="kata-data-title">Gizi Buruk</span>
            <span id="gizi-buruk">0</span>
          </li>
          <li class="my-1 btn btn-danger rounded">
            <span class="kata-data-title">HIV</span>
            <span id="hiv">0</span>
          </li>
        </ul>
      </div>
      <div class="form-inline col-lg-3" role="tabpanel" id="grafik">
        <div class="form-group my-1">
          <label for="kasus">Kasus</label>
          <select name="kasus" id="kasus" class="form-control">
            <option value="dbd">Demam Berdarah</option>
            <option value="leptospirosis">Leptospirosis</option>
            <option value="kasus_malaria">Kasus Malaria</option>
            <option value="kasus_tb_baru">Kasus TB Baru</option>
            <option value="kelahiran_hidup">Jumlah Kelahiran Hidup</option>
            <option value="kematian_ibu">Jumlah Kematian Ibu</option>
            <option value="kematian_bayi">Jumlah Kematian Bayi</option>
            <option value="gizi_buruk">Gizi Buruk</option>
            <option value="stunting">Stunting</option>
          </select>
        </div>
        <div class="form-group my-1">
          <label for="tahun">Tahun</label>
          <select name="tahun" id="tahun" class="form-control">
            <?php
              for($year= date('Y'); $year > date('Y') - 5; $year--) {
              ?>
              <option value="<?=$year?>"><?=$year?></option>
              <?php
              }  
            ?>
          </select>
        </div>
        <small><button class="btn btn-outline-success my-1" id="lihat">Lihat</button></small>
      </div>
      <div class="overflow-x-auto">
        <div id="chart-container" class=""></div>
      </div>
    </div>
  </div>