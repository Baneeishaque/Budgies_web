<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

						

function print_header($active_tab)
{
    if($active_tab=='Home')
    {
    echo '<li class="active"><a href="index.php">Home</a></li>
						<li><a href="notification.php">Notification</a></li>
					
                                                <li><a href="about.php">About us</a></li>';

    }
    if($active_tab=='Notification')
    {
         echo '<li><a href="index.php">Home</a></li>
						<li class="active "><a href="notification.php">Notification</a></li>
					
                                                 <li><a href="about.php">About us</a></li>';
        
    }
    
     if($active_tab=='About us')
    {
         echo '<li><a href="index.php">Home</a></li>
						<li><a href="notification.php">Notification</a></li>
					
                                                 <li class="active"><a href="about.php">About us</a></li>';
        
    }
}