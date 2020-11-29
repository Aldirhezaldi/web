<div id="sidebar-nav" class="sidebar ">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="/dashboard" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                <li><a href="/bank" class=""><i class="lnr lnr-apartment"></i> <span>Data Bank</span></a></li>
                <li><a href="/produk" class=""><i class="lnr lnr-database"></i> <span>Data Produk</span></a></li>
                <li><a href="/invoice" class=""><i class="lnr lnr-book"></i> <span>Invoice</span></a></li>
                <li><a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="lnr lnr-power-switch"></i>
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</div>