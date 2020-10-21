<div id="nav-section">
    <div class="container">
        <div class="row h-10">
            <div class="col-4">
                <a href="$AbsoluteBaseURL" class="nav-logo"><img src="images/logo.png" alt="PegBoards" /></a>
            </div>
            <div class="col-8">
                <!-- BEGIN MAIN MENU -->
                <nav class="navbar">
                <button id="nav-mobile-btn"><i class="fa fa-bars"></i></button>
                <ul class="nav navbar-nav">
                <% loop $Menu(1) %>
                    <li><a class="$LinkingMode" href="$Link" title="Go to the $Title page">$MenuTitle</a></li>
                <% end_loop %>
                </ul>
                </nav>
                <!-- END MAIN MENU -->

            </div>
        </div>
    </div>
</div>