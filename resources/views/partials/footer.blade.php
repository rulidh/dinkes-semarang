<div class="bg-dark">
  <div class="container">
    <footer class="px-3 py-3 mt-5">
      <div class="row py-3">
        <h5 class="mb-2 text-light">Dinas Kesehatan Kota Semarang</h5>
        <div class="col-md-5 mb-1">
          <ul class="nav flex-column">
            <li class="nav-item mb-2 text-light"><i class="text-white bi bi-pin-map-fill"></i> <a href="https://goo.gl/maps/jcxAobqJjTu1UdKZ9" class="link-offset-2 link-underline link-underline-opacity-0">Jl Pandanaran No. 79</a></li>
            <li class="nav-item mb-2 text-light"><i class="text-white bi bi-envelope"></i> Fax. 024-8318771</li>
            <li class="nav-item mb-2 text-light"><i class="text-white bi bi-telephone"></i> Telp. (024)8415269-8318070</li>
            <li class="nav-item mb-2 text-light"><i class="text-white bi bi-whatsapp"></i> WA Helpdesk <a href="http://wa.me/62895376860088?text=Halo saya ingin bertanya mengenai" class="link-offset-2 link-underline link-underline-opacity-0">+62 895-3768-60088</a> WA Only</li>
          </ul>
        </div>
        <div class="col-md-4 mb-1">
          <h6 class="text-light"><i class="bi bi-graph-up text-light"></i> Statistik Pengunjung</h6>
          <hr class="text-light my-2 w-75">
          <ul id="statistik-pengunjung">
            <li class="d-flex text-light mb-2">
              <span class="text-left kata-data-title">Pengunjung Online</span> 
              <span>: {{ $visitors['real_time'] }}</span>
            </li>
            <li class="d-flex text-light mb-2">
              <span class="text-left kata-data-title" >Pengunjung Hari Ini</span>
              <span>: {{ $visitors['today'] }}</span>
            </li>
            <li class="d-flex text-light mb-2">
              <span class="text-left kata-data-title" >Pengunjung Bulan Ini</span>
              <span>: {{ $visitors['month'] }}</span>
            </li>
          </ul>
        </div>
        <div class="col-md-3 mb-1">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.1884457880287!2d110.41243491468997!3d-6.987070294952519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b5ab6b34b67%3A0x4eba79d618667033!2sSemarang%20City%20Health%20Office!5e0!3m2!1sen!2sid!4v1670910386761!5m2!1sen!2sid" class="img-fluid rounded" frameborder="0"></iframe>
        </div>
      </div>
      <div class="row">
        <hr class="border border-warning border-3 opacity-75 rounded">
      </div>
      <div class="d-flex flex-column flex-sm-row justify-content-between pb-2">
        <p class="text-light">&copy; <?=date('Y')?> Dinas Kesehatan Kota Semarang</p>
        <ul class="list-unstyled d-flex">
          <li id="icon" class="ms-3"><a class="link-body-emphasis" target="_blank" href="https://www.tiktok.com/@dkksemarang"><i class="bi bi-tiktok"></i></a></li>
          <li id="icon" class="ms-3"><a class="link-body-emphasis" target="_blank" href="https://www.instagram.com/dkksemarang/"><i class="bi bi-instagram"></i></a></li>
          <li id="icon" class="ms-3"><a class="link-body-emphasis" target="_blank" href="https://www.twitter.com/dkksemarang"><i class="bi bi-twitter"></i></a></li>
          <li id="icon" class="ms-3"><a class="link-body-emphasis" target="_blank" href="https://www.facebook.com/dinkeskotasemarang/"><i class="bi bi-facebook"></i></a></li>
          <li id="icon" class="ms-3"><a class="link-body-emphasis" target="_blank" href="https://www.youtube.com/@dinaskesehatankotasemarang"><i class="bi bi-youtube"></i></a></li>
        </ul>
      </div>
    </footer>
  </div>
</div>