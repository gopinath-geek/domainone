<?php

if(isset($_SESSION['x_session'])){
echo "session is alive";
}else{
echo "session has expired";
}
