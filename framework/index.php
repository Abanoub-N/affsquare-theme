<?php
 /**
 * Load all custome folder
 */

 $files = array_merge(
   glob(__DIR__.'/post-type/*.php'),

 );
 foreach ($files as $filename)
 {
   include $filename;
 }
