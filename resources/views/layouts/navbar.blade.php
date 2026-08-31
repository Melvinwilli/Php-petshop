<nav class="navbar">

    <div class="navbar-brand">
        PetShop
    </div>

    <div class="navbar-menu">

        <a href="{{ route('member.index') }}">
            Member
        </a>

        <a href="{{ route('category.index') }}">
            Kategori
        </a>

        <a href="{{ route('penitipan.index') }}">
            Penitipan
        </a>

        <a href="{{ route('pricelist.index') }}">
            Pricelist
        </a>

        <a href="{{ route('transaction-master.index') }}">
        Transaction
        </a>

    </div>

</nav>

<style>
    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 25px;
        margin-bottom: 25px;
        border-bottom: 1px solid #ddd;
        background: #ffffff;
    }

    .navbar-brand {
        font-size: 20px;
        font-weight: bold;
    }

    .navbar-menu {
        display: flex;
        gap: 10px;
    }

    .navbar-menu a {
        text-decoration: none;
        color: #333;
        padding: 8px 14px;
        border-radius: 5px;
    }

    .navbar-menu a:hover {
        background: #eee;
    }
</style>