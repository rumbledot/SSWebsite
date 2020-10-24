<div class="container" style="margin-top:10vh;">
    <% include Banner %>
    <% with $Category %>
    <div class="row">
        <small>Category</small>
    </div>
    <div class="row">
        <h3>$Name</h3>
    </div>
    <div class="row mb-3">
        <p>$Description</p>
    </div>
    <div class="row mb-3">
        <div id="portfolioCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <% loop $Portfolios %>
                    <li data-target="#portfolioCarousel" data-slide-to="$Pos(0)"
                        <% if First %> class="active"<% end_if %>>
                    </li>
                <% end_loop %>
            </ol>
            <div class="carousel-inner" role="listbox">
                <% loop $Portfolios %>

                    <div class="carousel-item <% if First %>active<% end_if %>">
                        <% if Link && Up.LinkSlides %><a href="$Link"><% end_if %>
                        <img src="$PortfolioPic.URL" style="width:100vw; height:auto;" alt="$Title">
                        <% if Link && Up.LinkSlides %></a><% end_if %>
                        <div class="carousel-caption">
                            <% if Title %>
                                <h4>$Title</h4>
                            <% end_if %>
                            <% if Description %>
                                <small>$Description</small>
                            <% end_if %>
                        </div>
                    </div>

                <% end_loop %>
            </div>
            <a class="carousel-control-prev" href="#portfolioCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#portfolioCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <% end_with %>
</div>