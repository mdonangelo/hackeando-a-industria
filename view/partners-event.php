<div class="global">
        
        <div class="principal-info">
            <h2>Apoiadores</h2>
            <h3>Quem está apoiando o Hackeando a Indústria :)</h3>

            <div class="flex-row partners-event-slider" style="margin: 0 auto;">
                <?php
                require_once "./includes/partners-event.php";
                foreach ($partnersEvent as $partner) {
                    $slug = './assets/images/partners-event/'.slug_image($partner['name']).'.png';
                    if (!file_exists($slug) || strlen($partner['link']) === 0) {
                        $slug = 'assets/images/og-image.png';
                    }
                ?>
                <div class="content-learn" style="display:flex; flex-direction:column; justify-content:space-between; padding:0 20px;">
                    <div style="flex-grow: 1;">
                        <p class="by"><?=$partner['name'];?></p>
                    </div>

                    <a <?=!empty($partner['link']) ? 'href="' . $partner['link'] . '" target="_blank"' : '';?> style="background-image: url('<?=$slug;?>'); background-repeat: no-repeat; background-size: 70%;">

                    </a>
                </div>

                <?php
                }
                ?>

            </div>
        </div>

        
    </div>