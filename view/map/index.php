<section id="Map">
    <div class="container">
        <div class="title-block">
            <h2>Карта природных явлений</h2>
        </div>
        <div id="YMapsID" style="width:100%;height:700px;"></div>

        <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU"></script>

        <script>
            let array = <?php echo $this->jsParam ?>;

            // console.log(array);


            ymaps.ready(function() {

                let map = new ymaps.Map("YMapsID", {
                    center: [55.76, 37.64],
                    zoom: 3,
                });

                for (let i = 0; i < array.length; i++) {

                    let title = array[i].title;

                    let date = array[i].geometries[0].date;

                    let latitude = array[i].geometries[0].coordinates[1];

                    let longitude = array[i].geometries[0].coordinates[0];


                    // создание маркера
                    let myPlacemark = new ymaps.Placemark([latitude, longitude], {
                        preset: "islands#icon",
                        content: 'title',
                        balloonContent: '<h5>' + title + '</h5><p>' + date + '</p>'
                    });

                    // добавление маркера на карту
                    map.geoObjects.add(myPlacemark);
                }

            });
        </script>
        <form class="form-inline marginTop" action="<?php echo URL;?>/map/show" method="post" >


            <label for="inputNumber">Показать события за</label>
            <input type="number" min="5" max="365" class="form-control" id="inputNumber" name="inputNumber" placeholder="Количество дней" style="display: inline-block; width: 300px; margin: 10px ">

            <button type="submit" class="btn btn-primary mb-2">Отправить</button>
        </form>

    </div>
</section>