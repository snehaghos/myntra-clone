<div>
    <p id="side_add" class="side_add  ">
        <a class="side_add_header btn " data-bs-toggle="collapse" href="#collapseExample" role="button"
            aria-expanded="false" aria-controls="collapseExample">
            FLAT 20% OFF<i class="fa fa-arrow"></i>
        </a>
    </p>

    <div class="collapse" id="collapseExample">
        <div class="card card-body">
            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the
            user activates the relevant trigger.
        </div>
    </div>
</div>




<style>
    #collapseExample {
        right: 0;
    }

    .side_add {
        position: fixed;
        right: 0;
        background: #1e1d2a;
        height: 300px;
        width: 50px;
        z-index: 1001;
    }

    .side_add>.side_add_header {

        height: 100%;
        width: 300px;
        text-align: center;
        transform: rotate(-90deg);
        color: #ddd;
        font-size: 30px;
    }
</style>
