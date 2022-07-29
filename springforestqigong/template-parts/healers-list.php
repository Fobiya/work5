<div class="row">

  <?php 

    foreach ($users as $user){
        $user_id = $user -> ID;
        $user_first_name = $user -> first_name;
        $user_last_name = $user -> last_name;
        //$user_url = get_author_posts_url(get_the_author_meta( $user_id ));
        //$user_url = '/author/'.$user -> user_nicename;
        $user_url = '/healer/'.$user -> user_nicename;
        $ava_url = esc_url( get_avatar_url( $user->ID ) );
        $ava_default = get_template_directory_uri().'/img/no-avatar-350x350.jpg';

    ?>


    <div class="col m6 s12 l3 xl3"> 
      <a href="<?= $user_url ; ?>">
        <div class="post__">
          <div class="bloc__img">
            <img src="<?= ($ava_url) ? $ava_url :  $ava_default ?>" alt="healers__1_autor" width="100%">
          </div>
          <h3 class="title" title="<?= $user_first_name.' '.$user_last_name; ?>">
            <?php echo substr($user_first_name.' '.$user_last_name , 0, 30 ); ?></h3>
          <p class="desc">Qigong Grand Master</p>
          <a class="border_orange" href="<?= $user_url ; ?>">Read more</a>
        </div>
      </a>
    </div>

  <?php
  }

  ?>
  
</div>
<div class="row">
  <div class="col m12 s12 l12 xl12">
    <div class="paggination">
      <ul>
        <li><a class="prev" href="javascript:;"></a></li>
        <li><a href="javascript:;">1</a></li>
        <li><a href="javascript:;">2</a></li>
        <li><a class="next" href="javascript:;"></a></li>
      </ul>
    </div>
  </div>
</div>