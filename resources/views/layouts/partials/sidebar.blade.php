<div class="deznav">
    <div class="deznav-scroll">
        <div class="dropdown header-profile">
            <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                <img src="{{ asset('images/logo.png') }}" width="20" alt="" />
                <div class="header-info">
                    <span class="font-w400 mb-0">Aplikasi<b>JUALBELI</b></span>
                    <small class="text-end font-w400">- 2023-</small>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item ai-icon">
                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                            <polyline points="16 17 21 12 16 7"></polyline>
                            <line x1="21" y1="12" x2="9" y2="12"></line>
                        </svg>
                        <span class="ms-2">Logout</span>
                    </button>

                </form>
            </div>
        </div>
        <ul class="metismenu" id="menu">
            <li>
                <a href="/" aria-expanded="false">
                    <i class="flaticon-025-dashboard"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/detail-transaksi" aria-expanded="false">
                    <i class="flaticon-041-graph"></i>
                    <span class="nav-text">Detail Transaksi</span>
                </a>
            </li>
            <li>
                <a href="/order" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-013-checkmark"></i>
                    <span class="nav-text">Order</span>
                </a>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-043-menu"></i>
                    <span class="nav-text">Table Database</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="/pelanggan">Pelanggan</a></li>
                    <li><a href="/produk">Produk</a></li>
                    <li><a href="/staff">Staff</a></li>
                    <li><a href="/diskon">Diskon</a></li>
                </ul>
            </li>
        </ul>
        <div class="copyright">
            <p>
                <strong>APLIKASI JUALBELI BY WIKA ADITYA PRADANI</strong> © 2023 - Aplikasi JUALBELI
            </p>
        </div>
    </div>
</div>
