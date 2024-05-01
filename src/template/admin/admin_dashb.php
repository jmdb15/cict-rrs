<div class="flex flex-wrap justify-center lg:justify-around xl:justify-between gap-4 pt-4 sm:p-8 lg:p-20">

    <div class="card">
        <div class="card-img-cont">
            <img src="../../src/img/logo.png" class="h-auto w-full rounded" alt="">
        </div>
        <div class="card-text-cont">
            <h1 class="card-text-number"><?=$row['request_row']?></h1>
            <p class="card-text-subheader">Total of Request</p>
        </div>
    </div>
    <div class="card">
        <div class="card-img-cont">
            <img src="../../src/img/logo.png" class="h-auto w-full rounded" alt="">
        </div>
        <div class="card-text-cont">
            <h1 class="card-text-number"><?=$row['studies_row']?></h1>
            <p class="card-text-subheader">Files</p>
        </div>
    </div>
    <div class="card">
        <div class="card-img-cont">
            <img src="../../src/img/logo.png" class="h-auto w-full rounded" alt="">
        </div>
        <div class="card-text-cont">
            <h1 class="card-text-number"><?=$row['surveys_row']?></h1>
            <p class="card-text-subheader">Surveys</p>
        </div>
    </div>
    <div class="card">
        <div class="card-img-cont">
            <img src="../../src/img/logo.png" class="h-auto w-full rounded" alt="">
        </div>
        <div class="card-text-cont">
            <h1 class="card-text-number"><?=$row['user_row']?></h1>
            <p class="card-text-subheader">User Registered</p>
        </div>
    </div>
</div>

<script>
    setActiveNav('dashboard');
</script>