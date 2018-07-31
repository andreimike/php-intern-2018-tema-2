<div class="sidebar"  style="position: static; min-height: 100%; height: 100%;">
    <ul class="nav flex-column pt-1">
        <li class="nav-item mb-1">
            <a class="nav-link active text-light" href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownCompany" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="far fa-building"></i> Company
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownCompany">
                <a class="dropdown-item" href="{{ route('view-company') }}"><i class="fas fa-list-ol"></i> View Companies</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item link" href="{{ route('create-company') }}"><i class="fas fa-plus-circle"></i> Add Company</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownEmployee" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-users"></i> Employees
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownEmployee">
                <a class="dropdown-item" href="{{ route('view-employee') }}"><i class="far fa-address-card"></i> View Employees</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('create-employee') }}"><i class="fas fa-user-plus"></i> Add new employee</a>
            </div>
        </li>
    </ul>
</div>
