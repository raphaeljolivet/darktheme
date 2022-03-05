<?php Theme::plugins('pageBegin'); ?>
    <!-- full page -->
    <div class="container pb-5">

            <div >
                <h1 class="fw-bold text-white pt-4 pb-5"><?php echo $page->title(); ?></h1>
            </div>

            
            <div >
                <p class="text-secondary"><?php echo $page->content(); ?></p>
                <?php if (!empty($page->tags(true))): ?>
                <p class="pt-3">
                    <?php foreach ($page->tags(true) as $tagKey=>$tagName): ?>
                    <a href="<?php echo DOMAIN_TAGS.$tagKey ?>"><span class="badge rounded-pill bg-warning text-dark"><?php echo $tagName; ?></span></a>
                    <?php endforeach ?>
                </p>
                <?php endif; ?>
                <br>
                 <?php Theme::plugins('pageEnd'); ?>
            </div>
            
        </div>
    </div>
    <!--/ full page -->