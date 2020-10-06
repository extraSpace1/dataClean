<?php 

/******DATA CLEANING FILES********/
/* EARLY TO LATE STAGE OF DATA CLEANING*/

/* name-syntax-formatting.php = Removing commas, apostrophe's etc...

/* proper-name-edge-cases.php = Take care of brands like M&ms > M&Ms

/* name-update.php = make names for description like Apples > Dried Apples

/* serv-size-update.php = Update the common serving size for foods

/******DATA CLEANING FILES********/
$db = mysqli_connect('localhost','xxx','yyyy','healthal_article'); 

$dbname=array('MAIN','MAINCOMMON','CMAINCOMMON');

foreach ($dbname as $dbnames) {

//Add 1 cup to cooked beets
$sqlt = "UPDATE `$dbnames` set GmWt_9=127, GmWt_Desc9='1/2 cup, cooked', 
commonserving='wt9', commondesc='1/2 cup, cooked', commonweight=127 
WHERE fdc_id='340523'"; $rows = mysqli_query($db,$sqlt);

//Change mammy apple default to 1/4 Apple
$sqlt = "UPDATE `$dbnames` set GmWt_9=212, GmWt_Desc9='1/4 fruit', 
commonserving='wt9', commondesc='1/4 fruit', commonweight=212 
WHERE fdc_id='169909'"; $rows = mysqli_query($db,$sqlt);

//Change common serving for dried thyme
$sqlt = "UPDATE `$dbnames` set commonserving='wt2', commondesc=GmWt_Desc2, commonweight=GmWt_2 
WHERE fdc_id='170938'"; $rows = mysqli_query($db,$sqlt);

//Change common serving for ground pork
$sqlt = "UPDATE `$dbnames` set GmWt_9=170, GmWt_Desc9='6oz', 
commonserving='wt9', commondesc=GmWt_Desc9, commonweight=GmWt_9 
WHERE fdc_id='167903'"; $rows = mysqli_query($db,$sqlt);

//Change common serving for lamb shoulder roast
$sqlt = "UPDATE `$dbnames` set GmWt_9=170, GmWt_Desc9='6oz', 
commonserving='wt9', commondesc=GmWt_Desc9, commonweight=GmWt_9 
WHERE fdc_id='174331'"; $rows = mysqli_query($db,$sqlt);

//Change common serving for ground beef
$sqlt = "UPDATE `$dbnames` set GmWt_9=170, GmWt_Desc9='6oz', 
commonserving='wt9', commondesc=GmWt_Desc9, commonweight=GmWt_9 
WHERE fdc_id='173112'"; $rows = mysqli_query($db,$sqlt);

//Change common serving for pork tenderloin
$sqlt = "UPDATE `$dbnames` set GmWt_9=170, GmWt_Desc9='6oz', 
commonserving='wt9', commondesc=GmWt_Desc9, commonweight=GmWt_9 
WHERE fdc_id='167904'"; $rows = mysqli_query($db,$sqlt);

//Change common serving for pork tenderloin
$sqlt = "UPDATE `$dbnames` set commonserving='oz', commondesc='1 oz', commonweight=28.4
WHERE fdc_id='169051'"; $rows = mysqli_query($db,$sqlt);


$sqlt = "UPDATE `$dbnames` set commonserving='wt2', commondesc=GmWt_Desc2, commonweight=GmWt_2
WHERE fdc_id='170434'"; $rows = mysqli_query($db,$sqlt);

$sqlt = "UPDATE `$dbnames` set commonserving='wt2', commondesc=GmWt_Desc2, commonweight=GmWt_2
WHERE fdc_id='170030'"; $rows = mysqli_query($db,$sqlt);

/***Got to change this from PHP so it works on new server */

//Change common serving for Clif Z bar
$sqlt = "UPDATE `MAIN` set GmWt_1=36, GmWt_Desc1='1 bar', 
commonserving='wt1', commondesc=GmWt_Desc1, commonweight=GmWt_1
WHERE fdc_id='173477'"; $rows = mysqli_query($db,$sqlt);

$sqlt = 'UPDATE `MAIN` set servingsizes="{\"wt1\": [36, \"1 bar\"], \"oz\": [28.35, \"1 oz\"], \"100g\": [100, \"100 grams\"], \"200cals\": [48.077, \"200 calorie serving\"]}"
WHERE fdc_id=173477'; $rows = mysqli_query($db,$sqlt);


}
?>
