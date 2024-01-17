<? include 'head.php' ?>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Loading icon -->
        <? include 'loading.php' ?>
        <!-- End loading -->


        <!-- Sidebar Start -->
        <? include 'sidebar.php' ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <? include 'navbar.php' ?>
            <!-- Navbar End -->
            <? include 'App/View/View.php' ?>
            <!-- Footer Start -->
            <? include 'footer.php' ?>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <? include 'script.php' ?>
    <!-- JavaScript Libraries -->
</body>