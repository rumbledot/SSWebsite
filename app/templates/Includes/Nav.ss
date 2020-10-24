<nav class="navbar navbar-expand-lg navbar-light bg-light mt-3 mb-3">
    <a class="navbar-brand" href="$AbsoluteBaseURL">Abe</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <% loop $Menu(1) %>
            <li class="nav-item">
                <a class="nav-link" href="$Link" title="Go to the $Title page">
                    <div id="nav-$MenuTitle" data-toggle="tooltip" data-placement="bottom" title="Jump to $MenuTitle">
                    <p class="nav-text">$MenuTitle</p>
                    </div>
                </a>
            </li>
        <% end_loop %>
        </ul>
    </div>
</nav>