<li class="nav-item">
    <a href="{{url('home')}}" class="nav-link ">
      <i class="nav-icon far fa-tachometer-alt"></i>
      <p>
        Beranda
      </p>
    </a>
</li>


  @if ($user->level == 1)
  <li class="nav-header">DATA MASTER</li>
  <li class="nav-item">
    <a href="{{url('kategori')}}" class="nav-link">
      <i class="nav-icon far fa-tasks"></i>
      <p>
        Kategori
      </p>
    </a>
</li>

<li class="nav-item">
    <a href="{{url('kategori')}}" class="nav-link">
      <i class="nav-icon far fa-tasks"></i>
      <p>
        Satuan
      </p>
    </a>
</li>

<li class="nav-item">
    <a href="{{url('kategori')}}" class="nav-link">
      <i class="nav-icon far fa-tasks"></i>
      <p>
        Produk
      </p>
    </a>
</li>

<li class="nav-header">TRANSAKSI</li>
<li class="nav-item">
    <a href="{{url('kategori')}}" class="nav-link">
      <i class="nav-icon far fa-tasks"></i>
      <p>
        Penjualan
      </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{url('kategori')}}" class="nav-link">
      <i class="nav-icon far fa-tasks"></i>
      <p>
        Pembelian
      </p>
    </a>
</li>
<li class="nav-header">REPORT</li>
<li class="nav-item">
    <a href="{{url('kategori')}}" class="nav-link">
      <i class="nav-icon far fa-tasks"></i>
      <p>
        Laporan
      </p>
    </a>
</li>
@elseif($user->level==2)
<li class="nav-header">TRANSAKSI</li>
<li class="nav-item">
    <a href="{{url('kategori')}}" class="nav-link">
      <i class="nav-icon far fa-tasks"></i>
      <p>
        Penjualan
      </p>
    </a>
</li>
@endif