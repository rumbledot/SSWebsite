<div class="container">
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
                    <% if First %>
                    <li data-target="#portfolioCarousel" data-slide-to="$Pos" class="active"></li>
                    <% else %>
                    <li data-target="#portfolioCarousel" data-slide-to="$Pos"></li>
                    <% end_if %>
                <% end_loop %>
            </ol>
            <div class="carousel-inner">
                <% loop $Portfolios %>
                    <% if First %>
                    <div class="carousel-item active">
                        <img src="$PortfolioPic.URL" style="width:90vw; height:auto;" alt="$Title">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>$Title</h5>
                            <p>$Description</p>
                        </div>
                    </div>
                    <% else %>
                    <div class="carousel-item">
                        <img src="$PortfolioPic.URL" style="width:90vw; height:auto;" alt="$Title">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>$Title</h5>
                            <p>$Description</p>
                        </div>
                    </div>
                <% end_if %>
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