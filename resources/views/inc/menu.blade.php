<div class="sidebar-sticky">
    <ul class="nav flex-column pt-1 pb-4">
        <li class="nav-item mb-1">
            <a class="nav-link active text-light" href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        </li>
        <li data-toggle="collapse" data-target="#companies" class="collapsed active mb-1 mt-1">
            <a class="nav-link active text-light" href="#"><i class="far fa-building"></i> Companies</a>
        </li>
        <ul class="nav sub-menu collapse" id="companies">
            <li class="nav-item ml-4 mt-1"><a class="text-light" href="{{ route('view-company') }}"><i class="fas fa-list-ol"></i> View Companies</a></li>
            <li class="nav-item ml-4 mt-1"><a class="text-light" href="{{ route('create-company') }}"><i class="fas fa-plus-circle"></i> Add Company</a></li>
        </ul>
        <li data-toggle="collapse" data-target="#employee" class="collapsed active mb-1 mt-1">
            <a class="nav-link active text-light" href="#"><i class="fas fa-users"></i> Employees</a>
        </li>
        <ul class="nav sub-menu collapse" id="employee">
            <li class="nav-item ml-4 pt-1"><a href="#" class="text-light"><i class="far fa-address-card"></i> View Employees</a></li>
            <li class="nav-item ml-4 pt-1"><a href="#" class="text-light"><i class="fas fa-user-plus"></i> Add new employee</a></li>
        </ul>
    </ul>
</div>
