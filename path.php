<!-- i have used this file as a substitute for using many include files instead
i have define the root path as a constant to avoid repetition in future and make the code
managable  -->


<?php
define('ROOT_PATH', realpath(dirname(__FILE__)));
//   this reduces the need for several links for different pages and make them more flexible
// it doesn't require a person to specify many path files
define('BASE_URL',"http://localhost/BLOG");
