# Pi-Radio

A small web front-end to use pifm as an internet radio transmitter.

Download pifm from http://omattos.com/pifm.tar.gz and place it in your home directory, Then place the script folder in this pifm folder.

Example of 'radio_stations' sql table below for 'piradio' sql DB.

+----+---------+-----------------------+----------------------------------------------+
| id | playing |      pretty_name      |                     url                      |
+----+---------+-----------------------+----------------------------------------------+
|  1 |       0 | Absolute Radio        | http://aacplus-ar-128.timlradio.co.uk/       |
|  2 |       0 | Classical FM          | http://media-ice.musicradio.com/ClassicFMMP3 |
|  3 |       0 | Absolute Classic Rock | http://aacplus-ac-128.timlradio.co.uk/       |
|  4 |       0 | Absolute 80s          | http://aacplus-a8-128.timlradio.co.uk/       |
|  5 |       0 | Absolute 60s          | http://aacplus-a6-128.timlradio.co.uk/       |
|  6 |       0 | Absolute 70s          | http://aacplus-a7-128.timlradio.co.uk/       |
|  7 |       0 | Absolute 90s          | http://aacplus-a9-128.timlradio.co.uk/       |
|  8 |       0 | Absolute 00s          | http://aacplus-a0-128.timlradio.co.uk/       |
+----+---------+-----------------------+----------------------------------------------+

Your 'www-data' user needs sudoer permissions for the script folder.