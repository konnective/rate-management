@if(request()->getRequestUri() == '/')
<div id="filterBar" class="filter-bar d-flex align-items-center justify-content-xl-center">
    <button class="btn btn-outline"><i class="bi bi-chevron-left"></i></button>
    <button class="btn btn-outline"><i class="bi bi-chevron-right"></i></button>
    <button class="btn btn-outline">May 9, 2025 <i class="bi bi-calendar-plus ms-2"></i></button>
    <button class="btn btn-outline dropdown-toggle">YoY 5 days ago</button>
    <button class="btn btn-outline"><i class="bi bi-tags me-2"></i> Upsell</button>
    <button class="btn btn-outline"><i class="bi bi-sliders2-vertical me-2"></i> Channels</button>
    <span class=" ">1 Night</span>
    <span class="mx-3">2 Guest</span>
    <span class="me-3">Any Room</span>
    <div class="dropdown">
        <button class="btn btn-outline dropdown-toggle" data-bs-toggle="dropdown">Primary Compete</button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Primary Compete</a></li>
            <li><a class="dropdown-item" href="#">Secondary Compete</a></li>
        </ul>
    </div>
</div>

<div id="filterPlaceholder" class="placeholder-filter d-none"></div>
<!-- Offcanvas Sidebar for Mobile Menu -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="mobileMenu">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <a href="#" class="d-block mb-2">Overview</a>
        <a href="#" class="d-block mb-2">Rates</a>
    </div>
</div>
@elseif (request()->getRequestUri() == '/events')

 <div id="filterBar" class="filter-bar border-bottom">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <div>
                <button class="btn btn-outline"><i class="bi bi-chevron-left"></i></button>
                <button class="btn btn-outline"><i class="bi bi-chevron-right"></i></button>
                <button class="btn btn-outline">May 9, 2025 <i class="bi bi-calendar-plus ms-2"></i></button>
            </div>
            <div class="d-flex align-items-center justify-content-between gap-3 border p-2">
                <a href="#"><i class="bi bi-file-earmark-arrow-down text-dark fs-3"></i></a>
                <a href="#"><i class="bi bi-plus-circle text-dark fs-3"></i></a>
            </div>
        </div>
        <div class="d-flex align-items-center justify-content-between mt-3">
            <div class="d-flex align-items-center gap-3">
                <div class="dropdown">
                    <button class="btn btn-outline dropdown-toggle" data-bs-toggle="dropdown">All Categories</button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Primary Compete</a></li>
                        <li><a class="dropdown-item" href="#">Secondary Compete</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <button class="btn btn-outline dropdown-toggle" data-bs-toggle="dropdown">All Events</button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Primary Compete</a></li>
                        <li><a class="dropdown-item" href="#">Secondary Compete</a></li>
                    </ul>
                </div>
            </div>

            <button class="btn btn-outline"><i class="bi bi-search me-2"></i> Search</button>
        </div>
    </div>
</div>
@elseif (request()->getRequestUri() == '/rates')
 <div id="filterBar" class="filter-bar">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <div>
                <button class="btn btn-outline"><i class="bi bi-chevron-left"></i></button>
                <button class="btn btn-outline"><i class="bi bi-chevron-right"></i></button>
                <button class="btn btn-outline">May 9, 2025 <i class="bi bi-calendar-plus ms-2"></i></button>
            </div>
            <div class="d-flex align-items-center justify-content-between gap-3 border p-2">
                <a href="#"><i class="bi bi-journal-text text-dark fs-3"></i></a>
                <a href="#"><i class="bi bi-graph-down text-dark fs-3"></i></a>
                <a href="#"><i class="bi bi-file-spreadsheet text-dark fs-3"></i></a>
                <a href="#"><i class="bi bi-file-earmark-arrow-down text-dark fs-3"></i></a>
                <a href="#"><i class="bi bi-arrow-clockwise text-dark fs-3"></i></a>
            </div>
        </div>
        <div class="d-flex align-items-center justify-content-between mt-3">
            <button class="btn btn-outline"><i class="bi bi-tags me-2"></i> Lowest</button>
            <button class="btn btn-outline"><i class="bi bi-sliders2-vertical me-2"></i> Channels</button>
            <button class="btn btn-outline">1 Night</button>
            <button class="btn btn-outline">2 Guest</button>
            <button class="btn btn-outline">Any Room</button>
            <button class="btn btn-outline">Any Meal</button>
            <div class="dropdown">
                <button class="btn btn-outline dropdown-toggle" data-bs-toggle="dropdown">Primary Compete</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Primary Compete</a></li>
                    <li><a class="dropdown-item" href="#">Secondary Compete</a></li>
                </ul>
            </div>
            <button class="btn btn-outline">Calendar Setting</button>
            <span>Update a min ago</span>
        </div>
    </div>
</div>

@endif


