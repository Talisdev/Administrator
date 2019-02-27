
<!-- Bar charts section start -->
<section id="chartjs-bar-charts">
    <div class="row">
        <div class="col-md-2">
            A
        </div>
        <div class="col-md-2">
            A
        </div>
        <div class="col-md-2">
            A
        </div>
        <div class="col-md-2">
            A
        </div>
        <div class="col-md-2">
            A
        </div>
        <div class="col-md-2">
            A
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="m-portlet m-portlet--full-height ">
                <?php studentDisplayClasseProfs($_GET['classe']); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="m-portlet m-portlet--full-height ">
                <?php studentDisplayClasseStudents($_GET['classe']); ?>
            </div>
        </div>
    </div>
</section>