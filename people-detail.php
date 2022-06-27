<?php 
    include('partials/header.html')
?>

<?php 
    include('partials/navigation.html')
?>

<!-- Main Content -->
<main>
<section class="people-detail">
        <!-- Body -->
        <div class="container">
            <div class="row">
                <div class="col-sm-8 left-body-content ">

                    <?php
                    include('partials/people-detail.html')
                    ?>

                </div>
                <div class="col-sm-4 pt-5 right-body">

                    <?php
                    include('partials/sidebar/slideshow.html')
                    ?>

                    <?php
                    include('partials/sidebar/job-listing.html')
                    ?>

                    <?php
                    include('partials/sidebar/diary.html')
                    ?>

                    <?php
                    include('partials/sidebar/news-bites.html')
                    ?>

                </div>
            </div>
        </div>
    </section>
</main>

<?php 
    include('partials/footer.html')
?>