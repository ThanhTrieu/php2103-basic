<?php
require 'covid-model.php';
$dataVirus = getDataVirusCorona();
$globalVirus = $dataVirus['Global'] ?? [];
$countriesVirus = $dataVirus['Countries'] ?? [];
require 'covid-view.php';