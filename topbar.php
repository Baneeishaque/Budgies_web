<div class="topbar">
    <div class="container-fluid">
        <a class='company'>Budgies</a>

        <ul class='mini'>
            <li class='dropdown dropdown-noclose supportContainer'>
                <a href="#" class='dropdown-toggle' data-toggle="dropdown">
                    <img src="img/icons/fugue/book-question.png" alt="">
                    Alerts
                    <span class="label label-warning">5</span>
                </a>
                <ul class="dropdown-menu pull-right custom custom-dark">
                    <li class='custom'>
                        <div class="title">
                            What is the question?
                            <span>Jul 22, 2012 by <a href="#" class='pover' data-title="Hover me" data-content="User information comes here">Hover me</a></span>
                        </div>
                        <div class="action">
                            <div class="btn-group">
                                <a href="#" class='tip btn btn-mini' title="Show ticket"><img src="img/icons/fugue/magnifier.png" alt=""></a>

                            </div>
                        </div>
                    </li>
                    <li class='custom'>
                        <div class="title">
                            How can i do this and that?
                            <span>Jul 19, 2012 by <a href="#" class='pover' data-title="Username" data-content="User information comes here">Username</a></span>
                        </div>
                        <div class="action">
                            <div class="btn-group">
                                <a href="#" class='tip btn btn-mini' title="Show ticket"><img src="img/icons/fugue/magnifier.png" alt=""></a>

                            </div>
                        </div>
                    </li>
                    <li class='custom'>
                        <div class="title">
                            I want more support tickets!
                            <span>Jul 19, 2012 by <a href="#" class='pover' data-title="Lorem" data-content="User information comes here">Lorem</a></span>
                        </div>
                        <div class="action">
                            <div class="btn-group">
                                <a href="#" class='tip btn btn-mini' title="Show ticket"><img src="img/icons/fugue/magnifier.png" alt=""></a>

                            </div>
                        </div>
                    </li>
                    <li class='custom custom-hidden'>
                        <div class="title">
                            This is a great feature, BUT...
                            <span>Jul 18, 2012 by <a href="#" class='pover' data-title="Lorem" data-content="User information comes here">Ipsum</a></span>
                        </div>
                        <div class="action">
                            <div class="btn-group">
                                <a href="#" class='tip btn btn-mini' title="Show ticket"><img src="img/icons/fugue/magnifier.png" alt=""></a>

                            </div>
                        </div>
                    </li>
                    <li class='custom custom-hidden'>
                        <div class="title">
                            I want more colors! How?
                            <span>Jul 16, 2012 by <a href="#" class='pover' data-title="Lorem" data-content="User information comes here">Lorem</a></span>
                        </div>
                        <div class="action">
                            <div class="btn-group">
                                <a href="#" class='tip btn btn-mini' title="Show ticket"><img src="img/icons/fugue/magnifier.png" alt=""></a>

                            </div>
                        </div>
                    </li>

                </ul>
            </li>
            <li class='dropdown pendingContainer'>
                <a href="#" data-toggle="dropdown" class='dropdown-toggle'>
                    <img src="img/icons/fugue/document-task.png" alt="">
                    Notifications
                    <span class="label label-important">5</span>
                </a>
                <ul class="dropdown-menu pull-right custom custom-dark">
                    <li class='custom'>
                        <?php
                        include 'connection.php';
                        $sql = "SELECT * FROM notification";
                        $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()) {
                            echo '<div class="title">
							<td>';
                            echo $row["tittle"];
                            echo '</td>
							<span><td>';
                            echo $row["date"];
                            echo '</td> by <a href="#" class=\'pover\' data-title="Hover me" data-content="User information comes here">Hover me</a></span>
						</div>
						<div class="action">
							<div class="btn-group">
								<a href="#" class=\'tip btn btn-mini\' title="Show order"><img src="img/icons/fugue/magnifier.png" alt=""></a>
								
							</div>
                                                             </div>';
                        }
                        ?>
                    </li>
                </ul>
            </li>
            <li class='dropdown messageContainer'>
                <a href="#" class='dropdown-toggle' data-toggle='dropdown'>
                    <img src="img/icons/fugue/balloons-white.png" alt="">
                    Messages
                    <span class="label label-info">3</span>
                </a>
                <ul class="dropdown-menu pull-right custom custom-dark">
                    <li class='custom'>
                        <div class="title">
                            Hello, whats your name?
                            <span>Jul 22, 2012 by <a href="#" class='pover' data-title="Hover me" data-content="User information comes here">Hover me</a></span>
                        </div>
                        <div class="action">
                            <div class="btn-group">
                                <a href="#" class='tip btn btn-mini' title="Show message"><img src="img/icons/fugue/magnifier.png" alt=""></a>
                                <a href="#" class='tip btn btn-mini' title="Reply message"><img src="img/icons/fugue/mail-reply.png" alt=""></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>

            <li>
                <a href="logout.php">
                    <img src="img/icons/fugue/control-power.png" alt="">
                    Logout
                </a>
            </li>
        </ul>
    </div>
</div>