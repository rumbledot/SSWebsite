<div class="container" style="margin-top:10vh;">
    <div class="row justify-content-center">
        <ul class="nav nav-tabs" id="about-page-tab" role="tablist">
            <li class="nav-item " role="presentation">
                <a class="nav-link active" id="about-profile-tab" href="#about-profile" role="tab" aria-controls="about-profile" aria-selected="true" data-toggle="list">
                    Profile
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="about-skill-tab" href="#skill-profile" role="tab" aria-controls="skill-profile" aria-selected="false" data-toggle="list">
                    Skill
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="about-this-tab" href="#this-profile" role="tab" aria-controls="this-profile" aria-selected="false" data-toggle="list">
                    This Website
                </a>
            </li>
        </ul>
    </div>
    <div class="row justify-content-center">
        <div class="tab-content bg-white border border-dark rounded-0 scrollbar scrollbar-dark" style="height:500px;min-width:66vw; overflow-x:auto;overflow-x:hidden;" id="about-page-tabContent">
            <div class="tab-pane fade show active" id="about-profile" role="tabpanel"aria-labelledby="about-profile">
                <div class="row justify-content-center m-3">
                    <div class="col-12">
                        <div class="row no-gutters row-eq-height" style="height:200px;">
                            <div class="col-4 bg-warning m-1">
                                .col-12 .col-sm-6 .col-md-8
                            </div>
                            <div class="col-4 col-sm-4 bg-info m-1">
                                .col-6 .col-md-4
                            </div>
                            <div class="d-none d-sm-block col-2 bg-light m-1">
                                .col-6 .col-md-4
                            </div>
                        </div>
                        <div class="row no-gutters row-eq-height" style="height:200px;">
                            <div class="col-3 bg-warning m-1">
                                .col-12 .col-sm-6 .col-md-8
                            </div>
                            <div class="col-4 bg-warning m-1">
                                .col-6 .col-md-4
                            </div>
                            <div class="col-3 bg-warning m-1">
                                .col-6 .col-md-4
                            </div>
                        </div>
                        <div class="row no-gutters row-eq-height" style="height:200px;">
                            <div class="col-5 bg-warning m-1">
                                .col-12 .col-sm-6 .col-md-8
                            </div>
                            <div class="col-3 bg-info m-1">
                                .col-6 .col-md-4
                            </div>
                            <div class="col-2 bg-info m-1">
                                .col-6 .col-md-4
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="skill-profile" role="tabpanel" aria-labelledby="skill-profile">
                <h1>MY SKILLS</h1>
            </div>
            <div class="tab-pane fade" id="this-profile" role="tabpanel" aria-labelledby="this-profile">
                $Content
            </div>
        </div>
    </div>
</div>
</div>

<script type="application/javascript">

$('#about-page-tab a').on('click', function (e) {
    e.preventDefault()
    $(this).tab('show')
})
</script>