<div id="macro-all-lives">
    <ul id="all-lives-calendar">
        <?php
        require_once "./includes/events.php";
        $date = 0;
        foreach ($events as $event) {
            $slug = './assets/images/events/'.slug_image($event['title']).'.png';
            if(!file_exists($slug)){
                $slug = 'assets/images/participantes/new-guest.png';
            }

            $eventDay = date('d', strtotime($event['dateTime']));
            if($date !== $eventDay){
        ?>
            <li class="title-date">
                <p class="date"><?=date('d M', strtotime($event['dateTime']));?></p>
            </li>
        <?php
            }
        ?>
            <li class="title-event">
                <img src="<?=$slug?>" alt="<?=$event['title']?>">
                <h2><span>às <?=date('H\hi', strtotime($event['dateTime']))?></span> <?=$event['pseudoTitle'];?></h2>
            </li>
        <?php
            $date = $eventDay;
        }
        ?>
        
    </ul>

    <a href="./saiba-mais" class="more-info-agenda">Clique e saiba mais</a>
</div>