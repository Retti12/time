# WildTracks Time API

## Пример запроса
```php
<?php
require_once __DIR__ . '/../config.php';

$year = 1975;  // от -13.8 млрд до 100... googolplex
$month = 3;    // от 1 до 12
$day = 13;     // от 1 до 31

$url = "https://wildtracks.pro/api/time/$token/$year/$month/$day/";

$jsonData = file_get_contents($url);
if ($jsonData === false) {
    die('Ошибка: не удалось получить данные');
}

$dataArray = json_decode($jsonData, true);
if ($dataArray === null) {
    die('Ошибка: не удалось декодировать JSON');
}

echo "<pre>";
print_r($dataArray);
echo "</pre>";
```

## Поля ответа JSON

- **year**	Entered year
- **leap year**	Weight-bearing or non-weight-bearing year. Takes the value: yes, no
- **month**	Entered month
- **day**	Entered day
- **day of the week**	Day of the week
- **Property of time**	Property of time. Can take the meaning: Past, Real ones, The Future (year, month, day, property)
- **Property of time ⇒ year**	How many years have passed in the past or in the future from the present
- **Property of time ⇒ month**	How many months have passed in the past or in the future from the present
- **Property of time ⇒ day**	How many days have passed in the past or in the future from the present
- **Property of time ⇒ property**	Past, present or future
- **Era	Takes two meanings**: BC, AD
- **Description**	Events of this date
- **Difference**	The difference between the past and the present or the future and the present
- **this year**	Events that happened this year and are not tied to a specific date
- **Periud**	A period in the history of human development (description, start, end)
- **Periud ⇒ description**	Name of the historical period
- **Periud ⇒ start**	The beginning of the historical period
- **Periud ⇒ end**	The end of the historical period
- **Space**	Stages of development of the universe (description, start, end, details)
- **Space ⇒ description**	Name of the cosmological period
- **Space ⇒ start**	The beginning of the cosmological period
- **Space ⇒ end**	The end of the cosmological period
- **Space ⇒ details**	Description of the cosmological period
- **Chronology**	Chronology of history
- **Stratigraphic** scale	Geochronological scale (stratigraphic scale) (generalgroup, eonothem, erathem, series, epoch, stage, age, start, end, details)
- **Stratigraphic scale ⇒ generalgroup**	General groups of the geological table
- **tratigraphic scale ⇒ eonothem**	In geology, a period of time in the geological history of the Earth, a long stage in the development of the lithosphere and biosphere of the Earth, during which the eonothem was formed.
- **Stratigraphic scale ⇒ erathem**	A segment of the geologic time scale, a subinterval of an eon. Most geologic eras are divided into geologic periods.
- **Stratigraphic scale ⇒ series**	A section of the geochronological scale, a subinterval of a geological era.
- **Stratigraphic scale ⇒ epoch**	The geologic time scale is used by geologists and other scientists to describe the timing and relationships between events that have occurred in Earth's history.
- **Stratigraphic scale ⇒ stage**	In chronostratigraphy, a stage is a succession of rock strata laid down in a single age on the geologic timescale, which usually represents millions of years of deposition.
- **Stratigraphic scale ⇒ age**	The geological time scale of Earth's history, used in geology and paleontology, is a kind of calendar
- **Stratigraphic scale ⇒ start**	The beginning of the geological period
- **Stratigraphic scale ⇒ end**	The end of the geological period
- **Stratigraphic scale ⇒ details**	Description of the geological period
- **Era in history**	Era in the history of human development
- **Day of the week**	Name of the day of the week
- **Name of the month**	Name of the month
