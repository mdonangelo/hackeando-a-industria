<div class="global">
    <div class="principal-info">
        <h2>Líderes confirmados(as)!</h2>
        <h3>Quem estará impactando e compartilhando conhecimento nas lives</h3>
    </div>
    
    <ul class="flex-row">
        <?php
            require_once './includes/guests.php';
            usort($guests, function($a, $b) {
                return $a['name'] <=> $b['name'];
            });

            foreach($guests as $guest){   
                $slug = './assets/images/participantes/'.slug_image($guest['name']).'.png';
                if(!file_exists($slug)){
                    $slug = 'assets/images/participantes/new-guest.png';
                }
        ?>

            <li style="display:flex; flex-direction:column; justify-content:space-between;">
                <div style="flex-grow: 1;">
                    <div style="background-image: url('<?=$slug;?>'); width:90%; max-width:200px; height:150px; margin:10px auto; border-radius:5px; background-size:cover; background-repeat: no-repeat;"></div>
                    <h4><?=$guest['name'];?></h4>
                    <h5><?=$guest['job'];?></h5>
                </div>

                <a href="<?=$guest['linkedin'];?>" target="_blank"><i class="fab fa-linkedin"></i> Saiba mais</a>
            </li>

        <?php
            }
        ?>

    </ul>
</div>