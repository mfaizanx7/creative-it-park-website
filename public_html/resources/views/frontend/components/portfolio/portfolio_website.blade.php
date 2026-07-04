<!-- portfolio old -->
{{-- <section class="mil-p-120-120">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <h2 class="category">Websites</h2>
            @foreach ($portfolio_web as $item)

            <div class="col-xl-3 mx-3 mil-mb-60">

                <div class="portimage mil-project-cover ">
                    <a href="{{ strpos($item->link, 'http') === 0 ? $item->link : 'http://' . $item->link }}"
                        target="_blank"><img src="{{ asset('assets/uploads/portfolio/' . $item->image) }}"
                            alt="Project"></a>
                    //<a href="https://creativeitpark.org/"><img
                            src="{{ asset('assets/uploads/portfolio/' . $item->image) }}" alt="Project"></a>
                </div>
                <h5 class="project"><a
                        href="{{ strpos($item->link, 'http') === 0 ? $item->link : 'http://' . $item->link }}"
                        target="_blank">{{ $item->heading }}</a></h5>

            </div>
            @endforeach
        </div>
        <div class="row justify-content-center align-items-center">
            <h2 class="category">Web Apps</h2>
            @foreach ($portfolio_app as $app_item)

            <div class="col-xl-3 mx-3 mil-mb-60">

                <div class="mil-project-cover">
                    <a href="{{ strpos($app_item->link, 'http') === 0 ? $app_item->link : 'http://' . $app_item->link }}"
                        target="_blank"><img src="{{ asset('assets/uploads/portfolio/' . $app_item->image) }}"
                            alt="Project"></a>
                </div>
                <h5 class="project"><a
                        href="{{ strpos($app_item->link, 'http') === 0 ? $app_item->link : 'http://' . $app_item->link }}"
                        target="_blank">{{ $app_item->heading }}</a></h5>

            </div>
            @endforeach

        </div>
    </div>
</section> --}}
<!-- portfolio old end -->


<style>
    .mil-tab-list {
        margin-top: 4rem !important;

        list-style: none;
        display: flex;
        gap: 1rem;
        padding: 0;
        margin-bottom: 2rem;
        flex-wrap: wrap;
        justify-content: center;
    }

    .mil-tab {
        padding: 0.5rem 1.5rem;
        cursor: pointer;
        background: #eee;
        border-radius: 20px;
        font-weight: bold;
        transition: all 0.3s ease;
        color: #333;
    }

    .mil-tab:hover,
    .mil-tab.active {
        background: #f57c00;
        color: white;
    }

    .mil-portfolio-item {
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .mil-portfolio-item.hidden {
        display: none;
    }

    .mil-tab:focus {
        outline: none;
    }

    .hidden {
        display: none !important;
    }

    .mil-portfolio-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 2rem;
        margin-top: 4rem;
    }

    @media (max-width: 992px) {
        .mil-portfolio-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 576px) {
        .mil-portfolio-grid {
            grid-template-columns: 1fr;
            gap: 1rem;
            margin-top: 2rem;
        }
    }
</style>



{{-- Modal styling --}}
<style>
    .mil-modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background: rgba(0, 0, 0, 0.8);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
    }

    .mil-modal.hidden {
        display: none;
    }

    .mil-modal-content {
        background: white;
        padding: 2rem;
        padding-top: 4rem;
        border-radius: 8px;
        max-width: 700px;
        width: 90%;
        position: relative;
        /* text-align: center; */
    }

    .mil-modal-content img {
        width: 100%;
        height: auto;
        border-radius: 8px;
    }

    .modal-close {
        position: absolute;
        top: 10px;
        left: 20px;
        background: none;
        border: none;
        font-size: 2rem;
        /* color: #f57c00; */
        cursor: pointer;
    }

    .mil-modal-nav {
        position: absolute;
        top: 20px;
        right: 30px;
        display: flex;
        gap: 2rem;
    }

    .modal-nav-btn {
        background: none;
        border: none;
        font-size: 0.8rem;
        /* color: #f57c00; */
        cursor: pointer;
        transition: all 0.5s;
    }

    .modal-nav-btn:hover,
    .modal-close:hover {
        color: #f57c00;
    }

    .mil-modal-projectInfo {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        margin-top: 0.6rem;
    }

    .mil-btn {
        display: inline-block;
        /* padding: 0.75rem 1.5rem; */
        /* margin-top: 1rem; */
        /* background-color: #f57c00; */
        /* color: white; */
        transition: all 0.5s;
        border: none;
        border-radius: 6px;
        text-decoration: none;
        font-weight: bold;
    }

    .mil-btn {
        color: #f57c00;
    }

    .mil-project-cover img {
        filter: none;
        -webkit-filter: none;
    }

    .mil-project-cover:after {
        display: none;
    }

    #modalImage {
        max-height: 300px;
    }

    #modaldesc {
        color: black;
    }

    @media only screen and (max-width: 640px) {
        .mil-modal-projectInfo {
            flex-direction: column;
            align-items: flex-start;
        }
    }
</style>
{{-- Modal styling --}}



{{-- tab second style --}}

{{-- <style>
    .mil-tab-list {
        display: flex;
        flex-wrap: wrap;
        padding: 0;
        margin: 0 0 2rem 0;
        list-style: none;
        width: 100%;
    }

    .mil-tab {
        flex: 1 1 auto;
        text-align: center;
        padding: 1rem;
        /* background: #eee; */
        /* border: 1px solid #ddd; */
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
        color: #333;
        border-radius: 0;
    }

    .mil-tab:not(:last-child) {
        border-right: none;
        /* clean borders between tabs */
    }

    .mil-tab:hover,
    .mil-tab.active {
        /* background-color: #f57c00; */
        border-bottom: 1px solid #f57c00;
        color: #f57c00;
    }

    /* Optional: Rounded corners for the tab group */
    .mil-tab-list .mil-tab:first-child {
        /* border-top-left-radius: 8px; */
        /* border-bottom-left-radius: 8p   x; */
    }

    .mil-tab-list .mil-tab:last-child {
        /* border-top-right-radius: 8px; */
        /* border-bottom-right-radius: 8px; */
    }


    .hidden {
        display: none !important;
    }


    @media (max-width: 768px) {
        .mil-tab {
            flex: 100%;
        }
    }
</style> --}}



<section class="mil-p-120">
    <div class="container">
        {{-- Tabs --}}
        <ul id="portfolioTabs" class="mil-tab-list m-auto">
            <li class="mil-tab active" data-type="all">All</li>
            @foreach ($types as $type)
                <li class="mil-tab" data-type="{{ $type }}">{{ ucfirst($type) }}</li>
            @endforeach
        </ul>


        {{-- Portfolio Items --}}
        <div class="mil-portfolio-grid">
            @foreach ($portfolio as $item)
                <div class="mil-portfolio-item mil-mb-60" data-type="{{ $item->type }}">
                    <div class="portimage mil-project-cover">
                        <a link="{{ strpos($item->link, 'http') === 0 ? $item->link : 'http://' . $item->link }}"
                            target="_blank">
                            <img src="{{ asset('assets/uploads/portfolio/' . $item->image) }}" alt="Project">
                        </a>
                    </div>
                    <h5 class="project">
                        <a link="{{ strpos($item->link, 'http') === 0 ? $item->link : 'http://' . $item->link }}"
                            target="_blank">{{ $item->heading }}</a>
                    </h5>
                    <p class="hidden project-description">
                        {{ $item->description }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>



    <div id="portfolioModal" class="mil-modal hidden">
        <div class="mil-modal-content">
            <button id="modalClose" class="modal-close">&times;</button>

            <div class="mil-modal-nav">
                <button id="modalPrev" class="modal-nav-btn"><i class="fas fa-arrow-left"></i> Prev</button>
                <button id="modalNext" class="modal-nav-btn">Next <i class="fas fa-arrow-right"></i></button>
            </div>

            <img id="modalImage" src="" alt="Project Image">
            <div class="mil-modal-projectInfo">
                <h3 id="modalTitle"></h3>
                <a id="modalLink" href="#" target="_blank" class="mil-btn">View Project</a>
            </div>
            <p id="modalDesc" style="color:rgb(23, 23, 23);"></p>
        </div>
    </div>


</section>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tabs = document.querySelectorAll('.mil-tab');
        const items = document.querySelectorAll('.mil-portfolio-item');

        tabs.forEach(tab => {
            tab.addEventListener('click', function () {
                // Remove active class from all tabs
                tabs.forEach(t => t.classList.remove('active'));
                // Add active to current tab
                this.classList.add('active');

                const selectedType = this.getAttribute('data-type');

                items.forEach(item => {
                    const itemType = item.getAttribute('data-type');
                    if (selectedType === 'all' || itemType === selectedType) {
                        item.classList.remove('hidden');
                    } else {
                        item.classList.add('hidden');
                    }
                });
            });
        });
    });
</script>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const portfolioItems = Array.from(document.querySelectorAll('.mil-portfolio-item'));
        const tabs = document.querySelectorAll('.mil-tab');

        const modal = document.getElementById('portfolioModal');
        const modalImage = document.getElementById('modalImage');
        const modalTitle = document.getElementById('modalTitle');
        const modalDesc = document.getElementById('modalDesc');
        const modalLink = document.getElementById('modalLink');
        const modalClose = document.getElementById('modalClose');
        const modalNext = document.getElementById('modalNext');
        const modalPrev = document.getElementById('modalPrev');

        let currentIndex = 0;

        const getVisibleItems = () => portfolioItems.filter(item => !item.classList.contains('hidden'));

        function showModal(index) {
            const visibleItems = getVisibleItems();
            const item = visibleItems[index];
            if (!item) return;

            const img = item.querySelector('img').getAttribute('src');
            const title = item.querySelector('h5 a').textContent;
            const desc = item.querySelector('p').textContent;
            const link = item.querySelector('a').getAttribute('link');

            modalImage.src = img;
            modalTitle.textContent = title;
            modalDesc.textContent = desc;
            modalLink.href = link;

            // 🔁 Toggle disabled attribute
            modalPrev.disabled = index === 0;
            modalNext.disabled = index === visibleItems.length - 1;

            modal.classList.remove('hidden');
            currentIndex = index;
        }

        function hideModal() {
            modal.classList.add('hidden');
        }

        function navigateModal(direction) {
            const visibleItems = getVisibleItems();
            if (direction === 'next' && currentIndex < visibleItems.length - 1) {
                showModal(currentIndex + 1);
            } else if (direction === 'prev' && currentIndex > 0) {
                showModal(currentIndex - 1);
            }
        }

        // Bind click on portfolio items
        portfolioItems.forEach((item, index) => {
            item.addEventListener('click', function () {
                const visibleItems = getVisibleItems();
                const realIndex = visibleItems.indexOf(item);
                showModal(realIndex);
            });
        });

        // Modal controls
        modalClose.addEventListener('click', hideModal);
        modalNext.addEventListener('click', () => navigateModal('next'));
        modalPrev.addEventListener('click', () => navigateModal('prev'));

        // Existing filter logic (make sure .hidden is defined)
        tabs.forEach(tab => {
            tab.addEventListener('click', function () {
                tabs.forEach(t => t.classList.remove('active'));
                this.classList.add('active');

                const selectedType = this.getAttribute('data-type');

                portfolioItems.forEach(item => {
                    const itemType = item.getAttribute('data-type');
                    item.classList.toggle('hidden', selectedType !== 'all' &&
                        itemType !== selectedType);
                });
            });
        });
    });
</script>