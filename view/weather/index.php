<?php if (isset($this->geomagneticStorms)) { ?>
    <section id="GeomagneticStorms">
        <div class="container">
            <div class="title-block">
                <h4>Геомагнитные бури</h4>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <div class="col-lg-10 col-md-8 col-sm-6 col-xs-5 align-middle">

                        <img src="<?php echo URL; ?>/public/images/storm.jpg" class="img-fluid" alt="Demo image">

                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-sm-5 col-xs-5">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>

                                <th scope="col">Начало</th>
                                <th scope="col">Пик</th>
                                <th scope="col">Конец</th>
                                <th scope="col">Класс</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($this->geomagneticStorms as $geomagneticStorm) { ?>
                                <tr>

                                    <td><?php $date = new DateTime($geomagneticStorm->startTime);
                                        echo $date->format('Y F d, H:i');
                                        ?></td>
                                    <td><?php $date = new DateTime($geomagneticStorm->allKpIndex[0]->observedTime);
                                        echo $date->format('Y F d, H:i');
                                        ?></td>
                                    <td><?php echo $geomagneticStorm->allKpIndex[0]->kpIndex; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<section id="SolarFlares">
    <div class="container">
        <div class="title-block">
            <h4>Солнечные вспышки</h4>
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-4 col-sm-4 col-xs-4">
                <div class="col-lg-10 col-md-8 col-sm-6 col-xs-5 align-middle">

                    <img src="<?php echo URL; ?>/public/images/solar-flare.jpg" class="img-fluid" alt="Demo image">

                </div>
            </div>
            <div class="col-lg-6 col-md-5 col-sm-5 col-xs-5">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Начало</th>
                            <th scope="col">Наблюдаемое время</th>
                            <th scope="col">Интенсивность бури</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($this->solarFlares as $solarFlare) { ?>
                            <tr>

                                <td> <?php $date = new DateTime($solarFlare->beginTime);
                                        echo $date->format('Y F d, H:i'); ?></td>
                                <td> <?php $date = new DateTime($solarFlare->peakTime);
                                        echo $date->format('Y F d, H:i'); ?></td>
                                <td> <?php $date = new DateTime($solarFlare->endTime);
                                        echo $date->format('Y F d, H:i'); ?></td>
                                <td> <?php echo $solarFlare->classType; ?></td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
        <div>
</section>