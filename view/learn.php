<div class="global">
        
        <div class="principal-info">
            <h2>Como você enxerga a inovação na indústria?</h2>
        </div>

            <div class="flex-row learn-slider">
                <?php
                require_once "./includes/extra-contents.php";
                foreach ($contents as $content) {

                    $slug = './assets/images/participantes/'.slug_image($content['author']).'.png';
                    if (!file_exists($slug) || strlen($content['link']) === 0) {
                        $slug = 'assets/images/cover.png';
                    }
                ?>

                <div class="content-learn">
                    <p class="by">por <?=$content['author'];?></p>
                    <p class="job-title"><?=$content['job'];?></p>

                    <a <?=!empty($content['link']) ? 'data-fancybox href="' . $content['link'] . '"' : '';?> style="background-image: url('<?=$slug;?>'); position:relative;">
                        <?=!empty($content['link']) ? '<i class="fas fa-play"></i>' : '<b style="display:inline-block ;height:32px;">em breve</b>';?>
                    </a>
                </div>

                <?php
                }
                ?>
            </div>
        </div>

        
    </div>
