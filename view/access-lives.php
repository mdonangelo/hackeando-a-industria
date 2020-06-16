<div class="flex-row">
                
    <div class="all-lives">

        <ul>
            <?php
            require_once "./includes/events.php";
            $date = 0;
            foreach ($events as $event) {
                $slug = './assets/images/events/'.slug_image($event['title']).'.png';
                if(!file_exists($slug)){
                    $slug = './assets/images/participantes/new-guest.png';
                }
            
            ?>

                <li>
                    <div class="text">
                        <p class="date" style="text-transform:uppercase;"><?=date('d M', strtotime($event['dateTime']))?> <span class="hour">às <?=date('H:i', strtotime($event['dateTime']))?></span></p>
                        <h3><?=$event['title'];?></h3>
                    </div>

                    <?php
                    if(empty($event['live'])){
                    ?>
                        <a class="published-video" style="text-shadow: 0px 0px 10px rgba(0,0,0,1); font-size:1.3em; margin:0 auto; background-image: url('<?=$slug;?>');">
                            <b>em breve</b>
                        </a>
                    <?php
                    }else{
                    ?>
                        <a href="<?=$event['live']?>" data-fancybox class="published-video" style="text-shadow: 0px 0px 10px rgba(0,0,0,1); font-size:1.3em; margin:0 auto; background-image: url('<?=$slug;?>');">
                            <i class="fas fa-play"></i>
                        </a>
                    <?php
                    }
                    ?>
                    
                    
                    
                </li>

            <?php
            }
            ?>

        </ul>

    </div>
</div>