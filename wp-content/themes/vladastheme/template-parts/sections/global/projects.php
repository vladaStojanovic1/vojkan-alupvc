<section class="m-projects mb-100">
    <div class="_wrapper" id="projects-container">
        <div class="_row projects mb-20">
            <?php
            $args = array(
                'post_type' => 'projects',
                'posts_per_page' => 8,
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>
                    <?php include(get_template_directory() . '/template-parts/sections/global/project.php'); ?>
                <?php endwhile;
            endif;
            wp_reset_query();
            ?>
        </div>

        <div class="_row">
            <div class="_l12 text-center">
                <button class="a-button -primary -arrowDown" id="load-more">Učitaj još
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M440-800v487L216-537l-56 57 320 320 320-320-56-57-224 224v-487h-80Z"/></svg>
                </button>
                <div class="gray-text" id="no-more" style="display: none;">
                    <p class="a-text -small">Nema više projekata</p>
                </div>

                <div id="spinner" style="display: none;" class="d-flex justify-center">
                    <span class="loader"></span>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    let currentPage = 1;
    let loading = false;
    let lastPostId = null;

    document.getElementById('load-more').addEventListener('click', function() {
        if (!loading) {
            hideLoadMoreButton();
            showLoader();
            loadMoreProjects();
        }
    });

    function showLoader() {
        document.getElementById('spinner').style.display = 'block';
    }

    function hideLoader() {
        document.getElementById('spinner').style.display = 'none';
    }

    function hideLoadMoreButton() {
        document.getElementById('load-more').style.display = 'none';
    }

    function showLoadMoreButton() {
        document.getElementById('load-more').style.display = 'inline-block';
    }

    function loadMoreProjects() {
        const xhr = new XMLHttpRequest();
        let offset = document.querySelectorAll('.project').length;

        xhr.open('GET', '<?php echo admin_url("admin-ajax.php"); ?>?action=load_more_projects&offset=' + offset);

        xhr.onload = function() {
            if (xhr.status === 200) {
                let response = JSON.parse(xhr.responseText);
                document.querySelector('#projects-container .projects').innerHTML += response.html;
                if (!response.has_more) {
                    document.getElementById('load-more').style.display = 'none';
                    document.getElementById('no-more').style.display = 'block';
                } else {
                    currentPage++;
                    showLoadMoreButton();
                }
            } else {
                console.error(xhr.statusText);
            }
            hideLoader();
        };

        xhr.onerror = function() {
            console.error('Request failed');
            hideLoader();
        };

        xhr.send();
    }

</script>
