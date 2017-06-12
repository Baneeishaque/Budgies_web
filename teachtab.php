<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function print_header($active_tab) {
    if ($active_tab == 'Home') {
        echo '<div class="navi">
                    <ul class=\'main-nav\'>
                        <li class=\'active\'>
                            <a href="teachdash.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Home

                            </a>
                        </li>	

                        <li>
                            <a href="teachprofile.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Profile

                            </a>
                        </li>
                        <li >
                            <a href="chat_update.php?id=0" class=\'light\'>
                                <div class="ico"><i class=""></i></div>
                                Chat
                                
                            </a>
                        </li>

                        <li>
                            <a href="addnotif2.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Update Notification

                            </a>
                        </li>
                        <li>
                            <a href="#" class=\'light toggle-collapsed\'>
                                <div class="ico"><i class="icon-tasks icon-white"></i></div>
                                Departments
                                <img src="img/toggle-subnav-down.png" alt="">
                            </a>
                            <ul class=\'collapsed-nav closed\'>
                                <li>
                                    <a href="com.html">
                                        Computer
                                    </a>
                                </li>
                                <li>
                                    <a href="mech.html">
                                        Mechanical
                                    </a>
                                </li>
                                <li>
                                    <a href="Auto.html">
                                        Automobile
                                    </a>
                                </li>

                                <li>
                                    <a href="Elec.html">
                                        Electrical
                                    </a>
                                </li>
                                <li>
                                    <a href="Elec.html">
                                        Civil
                                    </a>
                                </li>
                                <li>
                                    <a href="Elec.html">
                                        Electronics
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="Filelist.php" class=\'light\'>
                                <div class="ico"><i class="icon-list icon-white"></i></div>
                                Download files

                            </a>
                        </li>


                        <li>
                            <a href="Uploadfile.php" class=\'light\'>
                                <div class="ico"><i class="icon-list icon-white"></i></div>
                                Upload File

                            </a>
                        </li>
                        <li>
                            <a href="teachfriendlist.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Friend List

                            </a>
                        </li>
                        
                        <li>
                            <a href="blockedlist.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                Blocked Contacts
                            </a>
                        </li>

                        <li>
                            <a href="blogaddteach.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                Share Thoughts
                            </a>
                        </li>

                         <li>
                            <a href="dfile.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                My Files
                            </a>
                        </li>

                        <li>
                            <a href="logout.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                Sign Out
                            </a>
                        </li>



                    </ul>
                </div>';
    }
    if ($active_tab == 'Profile') {
        echo '<div class="navi">
                    <ul class=\'main-nav\'>
                        <li>
                            <a href="teachdash.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Home

                            </a>
                        </li>	

                        <li class=\'active\'>
                            <a href="teachprofile.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Profile

                            </a>
                        </li>
                        <li >
                            <a href="chat_update.php?id=0" class=\'light\'>
                                <div class="ico"><i class=""></i></div>
                                Chat
                                
                            </a>
                        </li>

                        <li>
                            <a href="addnotif2.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Update Notification

                            </a>
                        </li>
                        <li>
                            <a href="#" class=\'light toggle-collapsed\'>
                                <div class="ico"><i class="icon-tasks icon-white"></i></div>
                                Departments
                                <img src="img/toggle-subnav-down.png" alt="">
                            </a>
                            <ul class=\'collapsed-nav closed\'>
                                <li>
                                    <a href="com.html">
                                        Computer
                                    </a>
                                </li>
                                <li>
                                    <a href="mech.html">
                                        Mechanical
                                    </a>
                                </li>
                                <li>
                                    <a href="Auto.html">
                                        Automobile
                                    </a>
                                </li>

                                <li>
                                    <a href="Elec.html">
                                        Electrical
                                    </a>
                                </li>
                                <li>
                                    <a href="Elec.html">
                                        Civil
                                    </a>
                                </li>
                                <li>
                                    <a href="Elec.html">
                                        Electronics
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="Filelist.php" class=\'light\'>
                                <div class="ico"><i class="icon-list icon-white"></i></div>
                                Download files

                            </a>
                        </li>


                        <li>
                            <a href="Uploadfile.php" class=\'light\'>
                                <div class="ico"><i class="icon-list icon-white"></i></div>
                                Upload File

                            </a>
                        </li>
                        <li>
                            <a href="teachfriendlist.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Friend List

                            </a>
                        </li>
                        
                        <li>
                            <a href="blockedlist.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                Blocked Contacts
                            </a>
                        </li>

                        <li>
                            <a href="blogaddteach.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                Share Thoughts
                            </a>
                        </li>

                         <li>
                            <a href="dfile.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                My Files
                            </a>
                        </li>


<li>
                            <a href="logout.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                Sign Out
                            </a>
                        </li>


                    </ul>
                </div>';
    }

    if ($active_tab == 'Chat') {
        echo '<div class="navi">
                    <ul class=\'main-nav\'>
                        <li>
                            <a href="teachdash.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Home

                            </a>
                        </li>	

                        <li>
                            <a href="teachprofile.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Profile

                            </a>
                        </li>
                        <li class=\'active\'>
                            <a href="chat_update.php?id=0" class=\'light\'>
                                <div class="ico"><i class=""></i></div>
                                Chat
                                
                            </a>
                        </li>

                        <li>
                            <a href="addnotif2.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Update Notification

                            </a>
                        </li>
                        <li>
                            <a href="#" class=\'light toggle-collapsed\'>
                                <div class="ico"><i class="icon-tasks icon-white"></i></div>
                                Departments
                                <img src="img/toggle-subnav-down.png" alt="">
                            </a>
                            <ul class=\'collapsed-nav closed\'>
                                <li>
                                    <a href="com.html">
                                        Computer
                                    </a>
                                </li>
                                <li>
                                    <a href="mech.html">
                                        Mechanical
                                    </a>
                                </li>
                                <li>
                                    <a href="Auto.html">
                                        Automobile
                                    </a>
                                </li>

                                <li>
                                    <a href="Elec.html">
                                        Electrical
                                    </a>
                                </li>
                                <li>
                                    <a href="Elec.html">
                                        Civil
                                    </a>
                                </li>
                                <li>
                                    <a href="Elec.html">
                                        Electronics
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="Filelist.php" class=\'light\'>
                                <div class="ico"><i class="icon-list icon-white"></i></div>
                                Download files

                            </a>
                        </li>


                        <li>
                            <a href="Uploadfile.php" class=\'light\'>
                                <div class="ico"><i class="icon-list icon-white"></i></div>
                                Upload File

                            </a>
                        </li>
                        <li>
                            <a href="teachfriendlist.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Friend List

                            </a>
                        </li>
                        
                        <li>
                            <a href="blockedlist.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                Blocked Contacts
                            </a>
                        </li>

                        <li>
                            <a href="blogaddteach.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                Share Thoughts
                            </a>
                        </li>

                         <li>
                            <a href="dfile.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                My Files
                            </a>
                        </li>

<li>
                            <a href="logout.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                Sign Out
                            </a>
                        </li>



                    </ul>
                </div>';
    }

    if ($active_tab == 'Update Notification') {
        echo '<div class="navi">
                    <ul class=\'main-nav\'>
                        <li>
                            <a href="teachdash.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Home

                            </a>
                        </li>	

                        <li>
                            <a href="teachprofile.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Profile

                            </a>
                        </li>
                        <li >
                            <a href="chat_update.php?id=0" class=\'light\'>
                                <div class="ico"><i class=""></i></div>
                                Chat
                                
                            </a>
                        </li>

                        <li class=\'active\'>
                            <a href="addnotif2.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Update Notification

                            </a>
                        </li>
                        <li>
                            <a href="#" class=\'light toggle-collapsed\'>
                                <div class="ico"><i class="icon-tasks icon-white"></i></div>
                                Departments
                                <img src="img/toggle-subnav-down.png" alt="">
                            </a>
                            <ul class=\'collapsed-nav closed\'>
                                <li>
                                    <a href="com.html">
                                        Computer
                                    </a>
                                </li>
                                <li>
                                    <a href="mech.html">
                                        Mechanical
                                    </a>
                                </li>
                                <li>
                                    <a href="Auto.html">
                                        Automobile
                                    </a>
                                </li>

                                <li>
                                    <a href="Elec.html">
                                        Electrical
                                    </a>
                                </li>
                                <li>
                                    <a href="Elec.html">
                                        Civil
                                    </a>
                                </li>
                                <li>
                                    <a href="Elec.html">
                                        Electronics
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="Filelist.php" class=\'light\'>
                                <div class="ico"><i class="icon-list icon-white"></i></div>
                                Download files

                            </a>
                        </li>


                        <li>
                            <a href="Uploadfile.php" class=\'light\'>
                                <div class="ico"><i class="icon-list icon-white"></i></div>
                                Upload File

                            </a>
                        </li>
                        <li>
                            <a href="teachfriendlist.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Friend List

                            </a>
                        </li>
                        
                        <li>
                            <a href="blockedlist.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                Blocked Contacts
                            </a>
                        </li>

                        <li>
                            <a href="blogaddteach.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                Share Thoughts
                            </a>
                        </li>

                         <li>
                            <a href="dfile.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                My Files
                            </a>
                        </li>


<li>
                            <a href="logout.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                Sign Out
                            </a>
                        </li>


                    </ul>
                </div>';
    }

    if ($active_tab == 'Departments') {
        echo '<div class="navi">
                    <ul class=\'main-nav\'>
                        <li>
                            <a href="teachdash.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Home

                            </a>
                        </li>	

                        <li>
                            <a href="teachprofile.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Profile

                            </a>
                        </li>
                        <li >
                            <a href="chat_update.php?id=0" class=\'light\'>
                                <div class="ico"><i class=""></i></div>
                                Chat
                                
                            </a>
                        </li>

                        <li>
                            <a href="addnotif2.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Update Notification

                            </a>
                        </li>
                        <li class=\'active\'>
                            <a class=\'light toggle-collapsed\'>
                                <div class="ico"><i class="icon-tasks icon-white"></i></div>
                                Departments
                                <img src="img/toggle-subnav-down.png" alt="">
                            </a>
                            <ul class=\'collapsed-nav closed\'>
                                <li>
                                    <a href="com.html">
                                        Computer
                                    </a>
                                </li>
                                <li>
                                    <a href="mech.html">
                                        Mechanical
                                    </a>
                                </li>
                                <li>
                                    <a href="Auto.html">
                                        Automobile
                                    </a>
                                </li>

                                <li>
                                    <a href="Elec.html">
                                        Electrical
                                    </a>
                                </li>
                                <li>
                                    <a href="Elec.html">
                                        Civil
                                    </a>
                                </li>
                                <li>
                                    <a href="Elec.html">
                                        Electronics
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="Filelist.php" class=\'light\'>
                                <div class="ico"><i class="icon-list icon-white"></i></div>
                                Download files

                            </a>
                        </li>


                        <li>
                            <a href="Uploadfile.php" class=\'light\'>
                                <div class="ico"><i class="icon-list icon-white"></i></div>
                                Upload File

                            </a>
                        </li>
                        <li>
                            <a href="teachfriendlist.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Friend List

                            </a>
                        </li>
                        
                        <li>
                            <a href="blockedlist.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                Blocked Contacts
                            </a>
                        </li>

                        <li>
                            <a href="blogaddteach.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                Share Thoughts
                            </a>
                        </li>

                         <li>
                            <a href="dfile.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                My Files
                            </a>
                        </li>



<li>
                            <a href="logout.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                Sign Out
                            </a>
                        </li>

                    </ul>
                </div>';
    }

    if ($active_tab == 'Download files') {
        echo '<div class="navi">
                    <ul class=\'main-nav\'>
                        <li >
                            <a href="teachdash.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Home

                            </a>
                        </li>	

                        <li>
                            <a href="teachprofile.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Profile

                            </a>
                        </li>
                        <li >
                            <a href="chat_update.php?id=0" class=\'light\'>
                                <div class="ico"><i class=""></i></div>
                                Chat
                                
                            </a>
                        </li>

                        <li>
                            <a href="addnotif2.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Update Notification

                            </a>
                        </li>
                        <li>
                            <a href="#" class=\'light toggle-collapsed\'>
                                <div class="ico"><i class="icon-tasks icon-white"></i></div>
                                Departments
                                <img src="img/toggle-subnav-down.png" alt="">
                            </a>
                            <ul class=\'collapsed-nav closed\'>
                                <li>
                                    <a href="com.html">
                                        Computer
                                    </a>
                                </li>
                                <li>
                                    <a href="mech.html">
                                        Mechanical
                                    </a>
                                </li>
                                <li>
                                    <a href="Auto.html">
                                        Automobile
                                    </a>
                                </li>

                                <li>
                                    <a href="Elec.html">
                                        Electrical
                                    </a>
                                </li>
                                <li>
                                    <a href="Elec.html">
                                        Civil
                                    </a>
                                </li>
                                <li>
                                    <a href="Elec.html">
                                        Electronics
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=\'active\'>
                            <a href="Filelist.php" class=\'light\'>
                                <div class="ico"><i class="icon-list icon-white"></i></div>
                                Download files

                            </a>
                        </li>


                        <li>
                            <a href="Uploadfile.php" class=\'light\'>
                                <div class="ico"><i class="icon-list icon-white"></i></div>
                                Upload File

                            </a>
                        </li>
                        <li>
                            <a href="teachfriendlist.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Friend List

                            </a>
                        </li>
                        
                        <li>
                            <a href="blockedlist.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                Blocked Contacts
                            </a>
                        </li>

                        <li>
                            <a href="blogaddteach.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                Share Thoughts
                            </a>
                        </li>

                         <li>
                            <a href="dfile.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                My Files
                            </a>
                        </li>


<li>
                            <a href="logout.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                Sign Out
                            </a>
                        </li>


                    </ul>
                </div>';
    }
    if ($active_tab == 'Upload File') {
        echo '<div class="navi">
                    <ul class=\'main-nav\'>
                        <li >
                            <a href="teachdash.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Home

                            </a>
                        </li>	

                        <li>
                            <a href="teachprofile.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Profile

                            </a>
                        </li>
                        <li >
                            <a href="chat_update.php?id=0" class=\'light\'>
                                <div class="ico"><i class=""></i></div>
                                Chat
                                
                            </a>
                        </li>

                        <li>
                            <a href="addnotif2.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Update Notification

                            </a>
                        </li>
                        <li>
                            <a href="#" class=\'light toggle-collapsed\'>
                                <div class="ico"><i class="icon-tasks icon-white"></i></div>
                                Departments
                                <img src="img/toggle-subnav-down.png" alt="">
                            </a>
                            <ul class=\'collapsed-nav closed\'>
                                <li>
                                    <a href="com.html">
                                        Computer
                                    </a>
                                </li>
                                <li>
                                    <a href="mech.html">
                                        Mechanical
                                    </a>
                                </li>
                                <li>
                                    <a href="Auto.html">
                                        Automobile
                                    </a>
                                </li>

                                <li>
                                    <a href="Elec.html">
                                        Electrical
                                    </a>
                                </li>
                                <li>
                                    <a href="Elec.html">
                                        Civil
                                    </a>
                                </li>
                                <li>
                                    <a href="Elec.html">
                                        Electronics
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="Filelist.php" class=\'light\'>
                                <div class="ico"><i class="icon-list icon-white"></i></div>
                                Download files

                            </a>
                        </li>


                        <li class=\'active\'>
                            <a href="Uploadfile.php" class=\'light\'>
                                <div class="ico"><i class="icon-list icon-white"></i></div>
                                Upload File

                            </a>
                        </li>
                        <li>
                            <a href="teachfriendlist.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Friend List

                            </a>
                        </li>
                        
                        <li>
                            <a href="blockedlist.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                Blocked Contacts
                            </a>
                        </li>

                        <li>
                            <a href="blogaddteach.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                Share Thoughts
                            </a>
                        </li>

                         <li>
                            <a href="dfile.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                My Files
                            </a>
                        </li>



<li>
                            <a href="logout.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                Sign Out
                            </a>
                        </li>

                    </ul>
                </div>';
    }
    if ($active_tab == 'Friend List') {
        echo '<div class="navi">
                    <ul class=\'main-nav\'>
                        <li >
                            <a href="teachdash.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Home

                            </a>
                        </li>	

                        <li>
                            <a href="teachprofile.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Profile

                            </a>
                        </li>
                        <li >
                            <a href="chat_update.php?id=0" class=\'light\'>
                                <div class="ico"><i class=""></i></div>
                                Chat
                                
                            </a>
                        </li>

                        <li>
                            <a href="addnotif2.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Update Notification

                            </a>
                        </li>
                        <li>
                            <a href="#" class=\'light toggle-collapsed\'>
                                <div class="ico"><i class="icon-tasks icon-white"></i></div>
                                Departments
                                <img src="img/toggle-subnav-down.png" alt="">
                            </a>
                            <ul class=\'collapsed-nav closed\'>
                                <li>
                                    <a href="com.html">
                                        Computer
                                    </a>
                                </li>
                                <li>
                                    <a href="mech.html">
                                        Mechanical
                                    </a>
                                </li>
                                <li>
                                    <a href="Auto.html">
                                        Automobile
                                    </a>
                                </li>

                                <li>
                                    <a href="Elec.html">
                                        Electrical
                                    </a>
                                </li>
                                <li>
                                    <a href="Elec.html">
                                        Civil
                                    </a>
                                </li>
                                <li>
                                    <a href="Elec.html">
                                        Electronics
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="Filelist.php" class=\'light\'>
                                <div class="ico"><i class="icon-list icon-white"></i></div>
                                Download files

                            </a>
                        </li>


                        <li>
                            <a href="Uploadfile.php" class=\'light\'>
                                <div class="ico"><i class="icon-list icon-white"></i></div>
                                Upload File

                            </a>
                        </li>
                        <li class=\'active\'>
                            <a href="teachfriendlist.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Friend List

                            </a>
                        </li>
                        
                        <li>
                            <a href="blockedlist.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                Blocked Contacts
                            </a>
                        </li>

                        <li>
                            <a href="blogaddteach.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                Share Thoughts
                            </a>
                        </li>

                         <li>
                            <a href="dfile.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                My Files
                            </a>
                        </li>


<li>
                            <a href="logout.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                Sign Out
                            </a>
                        </li>


                    </ul>
                </div>';
    }
   
    if ($active_tab == 'Blocked Contacts') {
        echo '<div class="navi">
                    <ul class=\'main-nav\'>
                        <li >
                            <a href="teachdash.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Home

                            </a>
                        </li>	

                        <li>
                            <a href="teachprofile.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Profile

                            </a>
                        </li>
                        <li >
                            <a href="chat_update.php?id=0" class=\'light\'>
                                <div class="ico"><i class=""></i></div>
                                Chat
                                
                            </a>
                        </li>

                        <li>
                            <a href="addnotif2.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Update Notification

                            </a>
                        </li>
                        <li>
                            <a href="#" class=\'light toggle-collapsed\'>
                                <div class="ico"><i class="icon-tasks icon-white"></i></div>
                                Departments
                                <img src="img/toggle-subnav-down.png" alt="">
                            </a>
                            <ul class=\'collapsed-nav closed\'>
                                <li>
                                    <a href="com.html">
                                        Computer
                                    </a>
                                </li>
                                <li>
                                    <a href="mech.html">
                                        Mechanical
                                    </a>
                                </li>
                                <li>
                                    <a href="Auto.html">
                                        Automobile
                                    </a>
                                </li>

                                <li>
                                    <a href="Elec.html">
                                        Electrical
                                    </a>
                                </li>
                                <li>
                                    <a href="Elec.html">
                                        Civil
                                    </a>
                                </li>
                                <li>
                                    <a href="Elec.html">
                                        Electronics
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="Filelist.php" class=\'light\'>
                                <div class="ico"><i class="icon-list icon-white"></i></div>
                                Download files

                            </a>
                        </li>


                        <li>
                            <a href="Uploadfile.php" class=\'light\'>
                                <div class="ico"><i class="icon-list icon-white"></i></div>
                                Upload File

                            </a>
                        </li>
                        <li>
                            <a href="teachfriendlist.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Friend List

                            </a>
                        </li>
                        
                        <li class=\'active\'>
                            <a href="blockedlist.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                Blocked Contacts
                            </a>
                        </li>

                        <li>
                            <a href="blogaddteach.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                Share Thoughts
                            </a>
                        </li>

                         <li>
                            <a href="dfile.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                My Files
                            </a>
                        </li>


<li>
                            <a href="logout.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                Sign Out
                            </a>
                        </li>


                    </ul>
                </div>';
    }

    if ($active_tab == 'Share Thoughts') {
        echo '<div class="navi">
                    <ul class=\'main-nav\'>
                        <li >
                            <a href="teachdash.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Home

                            </a>
                        </li>	

                        <li>
                            <a href="teachprofile.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Profile

                            </a>
                        </li>
                        <li >
                            <a href="chat_update.php?id=0" class=\'light\'>
                                <div class="ico"><i class=""></i></div>
                                Chat
                                
                            </a>
                        </li>

                        <li>
                            <a href="addnotif2.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Update Notification

                            </a>
                        </li>
                        <li>
                            <a href="#" class=\'light toggle-collapsed\'>
                                <div class="ico"><i class="icon-tasks icon-white"></i></div>
                                Departments
                                <img src="img/toggle-subnav-down.png" alt="">
                            </a>
                            <ul class=\'collapsed-nav closed\'>
                                <li>
                                    <a href="com.html">
                                        Computer
                                    </a>
                                </li>
                                <li>
                                    <a href="mech.html">
                                        Mechanical
                                    </a>
                                </li>
                                <li>
                                    <a href="Auto.html">
                                        Automobile
                                    </a>
                                </li>

                                <li>
                                    <a href="Elec.html">
                                        Electrical
                                    </a>
                                </li>
                                <li>
                                    <a href="Elec.html">
                                        Civil
                                    </a>
                                </li>
                                <li>
                                    <a href="Elec.html">
                                        Electronics
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="Filelist.php" class=\'light\'>
                                <div class="ico"><i class="icon-list icon-white"></i></div>
                                Download files

                            </a>
                        </li>


                        <li>
                            <a href="Uploadfile.php" class=\'light\'>
                                <div class="ico"><i class="icon-list icon-white"></i></div>
                                Upload File

                            </a>
                        </li>
                        <li>
                            <a href="teachfriendlist.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Friend List

                            </a>
                        </li>
                        
                        <li>
                            <a href="blockedlist.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                Blocked Contacts
                            </a>
                        </li>

                        <li class=\'active\'>
                            <a href="blogaddteach.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                Share Thoughts
                            </a>
                        </li>

                         <li>
                            <a href="dfile.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                My Files
                            </a>
                        </li>

<li>
                            <a href="logout.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                Sign Out
                            </a>
                        </li>



                    </ul>
                </div>';
    }

    if ($active_tab == 'My Files') {
        echo '<div class="navi">
                    <ul class=\'main-nav\'>
                        <li >
                            <a href="teachdash.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Home

                            </a>
                        </li>	

                        <li>
                            <a href="teachprofile.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Profile

                            </a>
                        </li>
                        <li >
                            <a href="chat_update.php?id=0" class=\'light\'>
                                <div class="ico"><i class=""></i></div>
                                Chat
                                
                            </a>
                        </li>

                        <li>
                            <a href="addnotif2.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Update Notification

                            </a>
                        </li>
                        <li>
                            <a href="#" class=\'light toggle-collapsed\'>
                                <div class="ico"><i class="icon-tasks icon-white"></i></div>
                                Departments
                                <img src="img/toggle-subnav-down.png" alt="">
                            </a>
                            <ul class=\'collapsed-nav closed\'>
                                <li>
                                    <a href="com.html">
                                        Computer
                                    </a>
                                </li>
                                <li>
                                    <a href="mech.html">
                                        Mechanical
                                    </a>
                                </li>
                                <li>
                                    <a href="Auto.html">
                                        Automobile
                                    </a>
                                </li>

                                <li>
                                    <a href="Elec.html">
                                        Electrical
                                    </a>
                                </li>
                                <li>
                                    <a href="Elec.html">
                                        Civil
                                    </a>
                                </li>
                                <li>
                                    <a href="Elec.html">
                                        Electronics
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="Filelist.php" class=\'light\'>
                                <div class="ico"><i class="icon-list icon-white"></i></div>
                                Download files

                            </a>
                        </li>


                        <li>
                            <a href="Uploadfile.php" class=\'light\'>
                                <div class="ico"><i class="icon-list icon-white"></i></div>
                                Upload File

                            </a>
                        </li>
                        <li>
                            <a href="teachfriendlist.php" class=\'light\'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Friend List

                            </a>
                        </li>
                        
                        <li>
                            <a href="blockedlist.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                Blocked Contacts
                            </a>
                        </li>

                        <li>
                            <a href="blogaddteach.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                Share Thoughts
                            </a>
                        </li>

                         <li  class=\'active\'>
                            <a href="dfile.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                My Files
                            </a>
                        </li>

<li>
                            <a href="logout.php" class=\'light\'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                Sign Out
                            </a>
                        </li>



                    </ul>
                </div>';
    }
}
