<style>
    /* Styling for the header */

    /* Adjusting content position to avoid overlap */
    .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        padding-top: 20px;
        height: 100vh;
        z-index: 1;
        overflow-x: hidden;
        transition: all 0.3s;
    }

    .sidebar ul.nav.flex-column {
        padding-left: 0;
    }

    .sidebar .nav-link {
        padding: 15px 40px;
        color: white;
        text-decoration: none;
        display: block;
        transition: background-color 0.3s ease;
    }

    .sidebar .nav-link:hover {
        background-color: black;
    }

    .company-logo {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .company-logo img {
        width: 100px; /* Adjust the width of the logo */
        height: auto;
        margin-right: 10px;
    }

    .company-name {
        color: white;
        margin: 0;
    }
</style>


<div class="container-fluid">
<div class="row">
    <!-- Sidebar -->
    <nav class="col-md-3 col-lg-2 d-md-block bg-dark sidebar">
        <div class="position-sticky">
            <div class="company-logo">
                <img src="/logo.png" alt="Company Logo">
                <h5 class="company-name">Ardian Wahyu Saputra</h5>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" style="color: white;" href="{{ route('welcome') }}">About Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" style="color: white;" href="{{ route('author.index') }}">Author</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" style="color: white;" href="{{ route('kategori.index') }}">Kategori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" style="color: white;" href="{{ route('artikel.index') }}">Artikel</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
</div>
