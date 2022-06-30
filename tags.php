<?php
include('partials/header.html')
?>

<?php
include('partials/navigation.html')
?>

<!-- Main Content -->
<main>

    <section class="tags">
        <!-- Body -->
        <div class="container">
            <div class="row">
                <div class="col-sm-8 left-body-content">

                    <?php
                    include('partials/tags.html')
                    ?>

                </div>
                <div class="col-sm-4 right-body">

                    <?php
                    include('partials/sidebar/news-bites.html')
                    ?>

                    <?php
                    include('partials/sidebar/latest-comments.html')
                    ?>

                    <?php
                    include('partials/sidebar/goodreturns-tv.html')
                    ?>

                </div>
            </div>
        </div>
    </section>
</main>

<?php
include('partials/footer.html')
?>