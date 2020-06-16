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
        <li class="title-date" style="display:flex; justify-content:space-between; align-items: center;">
            <p class="date"><?=date('d M', strtotime($event['dateTime']));?></p>
            <a href="./#inscreva-se" style="color:#ca34f1;"><i class="fas fa-arrow-right" aria-hidden="true"></i> Inscreva-se agora!</a>
        </li>
    <?php
        }
    ?>
        <li class="title-event" style="display:flex; flex-direction:column; justify-content:space-between;">
            <div>
                <img src="<?=$slug?>" alt="<?=$event['title']?>">
                <h2 style="font-size:1.4em;"><span>às <?=date('H\hi', strtotime($event['dateTime']))?></span> <?=$event['title'];?></h2>
            </div>

            <div>
                <br>
                <?=$event['description'];?>
                <br>
                <h3 style="color:#808080;">Bate-papo com:</h3>
                <ul style="color:#808080;">
                    <?php
                    foreach($event['guests'] as $guest){
                        echo '<li>' . $guest . '</li>';
                    }
                    ?>
                </ul>
            </div>
        </li>
    <?php
        $date = $eventDay;
    }
    ?>
    
</ul>