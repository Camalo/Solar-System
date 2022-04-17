
<section id="testimonials">
    <div class="container">
      <div class="title-block">
        <h2>Астероиды, сближающихся с Землей</h2>
        <p>Объекты, сближающиеся с Землей (ОСЗ), представляют собой кометы и астероиды, которые под действием гравитационного притяжения близлежащих планет выталкиваются на орбиты, позволяющие им попасть в окрестности Земли. </p>
      </div>
      <div class="row">

        <?php foreach($this->asteroids as $asteroids) {
          foreach($asteroids as $asteroid) {?>
        <div class="col-md-6">
          <div class="testimonial-box">
            <div class="row personal-info">
             
              <div class="col-md-10 col-xs-10">
            
                <h6> Объект <?php echo $asteroid->name; ?> </h6>
                <small>asteroid id <?php echo $asteroid->id; ?></small>
              </div>
            </div>
           
            <p> Абсолютная звездная величина <?php echo $asteroid->absolute_magnitude_h; ?></p>
            <p> дата приближения <?php echo $asteroid->close_approach_data[0]->close_approach_date_full;?></p>
            <p> эпоха <?php echo $asteroid->close_approach_data[0]->epoch_date_close_approach;?></p>
            <p> velocity <?php echo $asteroid->close_approach_data[0]->relative_velocity->kilometers_per_second; ?></p>
            <p> расстояние до Земли <?php echo $asteroid->close_approach_data[0]->miss_distance->astronomical;?></p>
            <p> орбита <?php echo $asteroid->close_approach_data[0]->orbiting_body;?></p>
            <p> минимальный диаметр  <?php echo $asteroid->estimated_diameter->kilometers->estimated_diameter_min; ?></p>
            <p> минимальный диаметр  <?php echo $asteroid->estimated_diameter->kilometers->estimated_diameter_max; ?></p>


            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur scelerisque, tortor nec mattis feugiat, velit purus euismod odio, quis vulputate velit urna sit amet enim. Maecenas vulputate auctor ligula sed sollicitudin.</p> -->
          </div>
        </div>
        <?php }} ?>
        
      </div>
    </div>
  </section>