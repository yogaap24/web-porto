<div class="col-12 col-sm-4">
    <div class="project-card shadow">
        <img class="img-project" src={{ $img }}>
        <div class="project-gradient"></div>

        <div class="project-detail">
            <h4 class="title-project text-white">{{ $title }}</h4>
            <div class="d-flex flex-wrap">
                @foreach (json_decode($stacks, true) as $stack)
                    <span class="stacks">{{ $stack }}</span>)
                @endforeach
            </div>
        </div>

        <!-- Data Detail -->
        <div class="container-data d-none">
            <p class="about-data">{{ $about }}</p>
            @foreach (json_decode($stacks, true) as $stack)
                <span class="stacks">{{ $stack }}</span>)
            @endforeach
            <p class="website-data">{{ $website }}</p>
            <p class="github-data">{{ $github }}</p>
        </div>

    </div>
</div>


<style>
    .project-card {
        border-radius: 12px;
        padding-top: 60%;
        margin-bottom: 28px;
        position: relative;
        cursor: pointer;
    }

    @media (max-width: 668px) {
        .project-card {
            margin-bottom: 16px;
        }

        .project-detail {
            opacity: 1 !important;
            transform: translateY(0%) !important;
        }

        .project-gradient {
            background: linear-gradient(rgba(0, 0, 0, 0.1) 10%, rgba(0, 0, 0, 0.78) 80%);
            opacity: 0.6;
        }
    }

    .project-gradient {
        border-radius: 12px;
        height: 100%;
        width: 100%;
        position: absolute;
        left: 0px;
        top: 0px;
    }

    .project-gradient:hover {
        background: linear-gradient(rgba(0, 0, 0, 0.1) 10%, rgba(0, 0, 0, 0.78) 80%);
        opacity: 0.6;
    }

    .project-detail {
        padding: 20px;
        position: absolute;
        bottom: 0px;
        left: 0px;
        pointer-events: none;
        opacity: 0;
        transform: translateY(10%);
        transition: opacity 300ms ease-in-out 0s, transform 300ms ease-in-out 0s;
    }

    .stacks {
        background: rgb(105, 104, 105);
        border-radius: 5px;
        text-transform: capitalize;
        font-size: 12px;
        margin-right: 6px;
        margin-top: 6px;
        color: rgb(255, 255, 255);
        font-weight: 500;
        padding: 2px 8px;
    }

    .img-project {
        position: absolute;
        object-fit: cover;
        width: 100% !important;
        height: 100% !important;
        left: 0px;
        top: 0px;
        border-radius: 12px;
    }
</style>
