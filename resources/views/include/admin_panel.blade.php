<aside class="admin-sidebar d-flex flex-column p-3" id="adminSidebar">

    <!-- Sidebar Header -->

    <div class="d-flex align-items-center justify-content-between mb-4">

        <a href="#" class="text-white text-decoration-none fs-4 fw-bold">
            Admin Panel
        </a>

        <button
            type="button"
            class="btn btn-outline-light sidebar-close"
            id="sidebarClose"
            aria-label="Close navigation"
        >
            &times;
        </button>

    </div>


    <!-- Navigation -->

    <nav class="nav flex-column">

        <a href={{ route('admin.dashboard') }} class="nav-link active">
            <span class="me-2">▣</span>
            Dashboard
        </a>

        {{-- <a href="#" class="nav-link">
            <span class="me-2">👥</span>
            Users
        </a> --}}

        <a href={{ route('admin.contacts_list') }} class="nav-link">
            <span class="me-2"><i class="bi bi-person-lines-fill"></i></span>
            Contacts
        </a>

        <a href={{ route('admin.tags') }} class="nav-link">
            <span class="me-2"><i class="bi bi-bookmark"></i></span>
            Tags
        </a>

        <a href={{ route('admin.profile',1) }}  class="nav-link">
            <span class="me-2">📦</span>
            My Profile
        </a>

        <a href={{ route('admin.csv.index') }} class="nav-link">
            <span class="me-2"><i class="bi bi-file-earmark-fill"></i></span>
            Export/Import
        </a>

    </nav>


    <!-- Bottom Navigation -->

    <div class="mt-auto">

        <hr class="border-secondary">

        <a href="#" class="nav-link">
            <span class="me-2">🚪</span>
            Logout
        </a>

    </div>

</aside>