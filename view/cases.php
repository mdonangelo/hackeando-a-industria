    <div class="global">
        
        <div class="principal-info">
            <h2>Conheça alguns cases de inovação em grandes indústrias!</h2>
            <h3>Ao lado de grandes indústrias, temos muitas histórias de inovação pra compartilhar</h3>

            <div class="flex-row cases-slider">
                <?php
                require_once "./includes/cases.php";
                foreach ($cases as $case) {
                    $slug = './assets/images/cases/'.slug_image($case['title']).'.png';
                    if (!file_exists($slug) || strlen($case['link']) === 0) {
                        $slug = 'assets/images/og-image.png';
                    }
                ?>
                <div class="content-learn" style="display:flex; flex-direction:column; justify-content:space-between; padding:0 20px;">
                    <div style="flex-grow: 1;">
                        <p class="by"><?=$case['title'];?></p>
                        <p class="job-title"><?=$case['description'];?></p>
                    </div>

                    <a <?=!empty($case['link']) ? 'data-fancybox href="' . $case['link'] . '"' : '';?> style="background-image: url('<?=$slug;?>');">
                        <i class="fas fa-play"></i>
                    </a>
                </div>

                <?php
                }
                ?>

            </div>
        </div>

        
    </div>