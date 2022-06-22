<?php
include('partials/header.html')
?>

<?php
include('partials/navigation.html')
?>

<!-- Main Content -->
<main>

    <section class="article">
        <!-- Body -->
        <div class="container">
            <div class="row">
                <div class="col-sm-8 left-body-content">

                    <?php
                    include('partials/article.html')
                    ?>

                </div>
                <div class="col-sm-4 pt-5 right-body">

                    <?php
                    include('partials/sidebar/share.html')
                    ?>

                    <?php
                    include('partials/sidebar/latest-comments.html')
                    ?>

                    <?php
                    include('partials/sidebar/goodreturns-tv.html')
                    ?>

                </div>
                <div class="col-12 bottom-body">
                    
                    <?php
                    include('partials/sidebar/share.html')
                    ?>
                    
                </div>
            </div>
        </div>
    </section>
</main>

<?php
include('partials/footer.html')
?>