<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
    <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
        <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
    </a>
    <a href="#" class="sidebar-toggler flex-shrink-0">
        <i class="fa fa-bars"></i>
    </a>
    <form class="d-none d-md-flex ms-4" id="searchForm">
        <input id="searchInput" class="form-control bg-dark border-0" type="search" placeholder="Search">
    </form>
    <div class="navbar-nav align-items-center ms-auto">
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <span class="d-none d-lg-inline-flex"><?php echo $full_name ? $full_name : $username; ?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                <a href="?url=UserController/profile&profile_id=<?= $_SESSION['user_id'] ?>" class="dropdown-item">Tài khoản</a>
                <a href="/?url=LoginController/logout" class="dropdown-item">Đăng xuất</a>
            </div>
        </div>
    </div>
</nav>
<div id="searchResults">
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
    const searchInput = document.getElementById('searchInput');
    const searchResults = document.getElementById('searchResults');

    searchInput.addEventListener('input', function() {
        const keyword = this.value.trim();
        if (keyword.length > 0) {
            search(keyword);
        } else {
            searchResults.innerHTML = '';
        }
    });

    function search(keyword) {
        $.ajax({
            url: '?url=UserController/search',
            method: 'GET',
            data: {
                keyword: keyword
            },
            success: function(data) {
                searchResults.innerHTML = data;
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });
    }
</script>