<div class="container">
    <div class="row justify-content-center">
        $Content
    </div>
    <div class="row justify-content-center">
        <ul class="nav nav-tabs mb-2" id="about-page-tab" role="tablist">
            <li class="nav-item" role="presentation">
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
        <div class="tab-content" id="about-page-tabContent">
            <div class="tab-pane fade show active" id="about-profile" role="tabpanel" aria-labelledby="about-profile-tab">
                <h1>MY NAME</h1>
            </div>
            <div class="tab-pane fade" id="skill-profile" role="tabpanel" aria-labelledby="skill-profile-tab">
                <h1>MY SKILLS</h1>
            </div>
            <div class="tab-pane fade" id="this-profile" role="tabpanel" aria-labelledby="this-profile-tab">
                <h1>THIS WEBSITE</h1>
            </div>
        </div>
    </div>
</div>

<script type="application/javascript">
$('a[data-toggle="list"]').on('shown.bs.tab', function (e) {
    console.log('clicked tab list ' + this.id);
    console.log('clicked tab list ' + $(this).attr('aria-controls'));
    console.log('clicked tab list ' + e.relatedTarget);
    $('.tab-pane').tab('hide');
    e.target;
    e.relatedTarget;
    let targetId = $(this).attr('aria-controls')
    $('#' + targetId).tab('show');
});
</script>