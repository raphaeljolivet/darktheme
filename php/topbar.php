<!-- navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark pt-3 pb-3 shadow fixed-top">
      <div class="container">
        <a class="navbar-brand fw-bolder" href="<?php echo $site->url(); ?>"><?php echo $site->title(); ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <?php foreach ($staticContent as $staticPage): ?>
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo $staticPage->permalink(); ?>"><?php echo $staticPage->title(); ?></a>
                  </li>
              <?php endforeach ?>
          </ul>
          <div class="d-flex">
              <?php foreach (Theme::socialNetworks() as $key=>$label): ?>
                  <div class="nav-item">
                      <a class="nav-link" href="<?php echo $site->{$key}(); ?>" target="_blank">
                          <i class="fa fa-<?php echo $key ;?>" title="<?php echo $label;?>">&nbsp</i>
                      </a>
                  </div>
              <?php endforeach; ?>
          </div>
          <?php if (pluginActivated('pluginSearch')): ?>
          <div class="d-flex">
            <input id="search-input" class="form-control me-2 rounded-pill border-0" type="search" placeholder="Search" aria-label="Search">
            <button onClick="searchNow()" class="btn btn-warning rounded-pill" type="submit">Go</button>
            <script>
              function searchNow() {
                var searchURL = "<?php echo Theme::siteUrl(); ?>search/";
                window.open(searchURL + document.getElementById("search-input").value, "_self");
              }
              var elem = document.getElementById('search-input');
              elem.addEventListener('keypress', function(e){
                if (e.keyCode == 13) {
                  searchNow();
                }
              });
            </script>
          </div>
          <?php endif ?>
        </div>
      </div>
    </nav>
<!--/ navigation -->