<div class="znav-white znav-container sticky-top navbar-samspa p-2" id="znav-container">
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand overflow-hidden pr-3 mr-2" href="<?= base_url() ?>"><img src="<?= base_url('assets') ?>/images/SamSpa.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger hamburger--emphatic">
                <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                </div>
            </div>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav fs-0 fw-700">
                <li ><a href="free-listing.html">Free Listing</a></li>
                <li><a href="advertise.html">Advertise</a></li>
                <?php if ($this->session->userdata('user_id')) : ?>
                    <li><a href="<?= base_url('account/logout') ?>">Logout</a> </li>
                <?php else : ?>
                    <li><a href="<?= base_url('account/login') ?>">Login</a> </li>
                    <li><a class="d-block" href="<?= base_url('account/registration') ?>">Signup</a></li>
                <?php endif ; ?>
                
            </ul>
        </div>
    </nav>
</div>