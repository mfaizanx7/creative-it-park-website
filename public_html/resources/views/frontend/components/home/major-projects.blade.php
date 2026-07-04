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
</style>



<!-- events -->
<section class="mil-events mil-deep-bg mil-p-120-120 white">
    <!-- <div class="mil-deco" style="top: 0; right: 20%;"></div> -->
    <div class="container w-100 mil-relative p-0">
        <div class="spacing bg-white"></div>
        <div class="container-events">
            {{-- <button class="LastCardBtn" id="LastEvent"><i class="fas fa-angle-double-right"></i></button>
        <button class="LastCardBtn FirstCardBtn" id="FirstEvent"><i class="fas fa-angle-double-left"></i></button> --}}
            <div class="column align-items-center headings">
                <div class="col-md-6 col-xl-6 headingText">
                    <span class="mil-suptitle mil-suptitle-2 mil-mb-30">We Share Our Experience</span>
                    <h2>Signature Projects</h2>
                </div>
                <div class="col-md-6 col-xl-6">

                    <div class="mil-adaptive mil-mt-60-adapt">
                        <div class="mil-slider-nav">
                            <div class="mil-slider-btn-prev mil-events-prev"><i class="fas fa-arrow-left"></i><span
                                    class="mil-h6">Prev</span></div>
                            <div class="mil-slider-btn-next mil-events-next"><span class="mil-h6">Next</span><i
                                    class="fas fa-arrow-right"></i></div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="swiper-container mil-events-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide mobile-fix"></div>
                    @foreach ($app_portfolio as $portfolio)
                        <div class="swiper-slide mil-portfolio-item" style="cursor: pointer;">
                            <a href="#!" link="{{ $portfolio->link }}" class="mil-card-2 projectlink">

                                <div class="mil-cover-frame">
                                    <img src="{{ asset('/frontend/images/images/Projects/' . $portfolio->icon) }}"
                                        alt="project" class="projectimg" loading="lazy">
                                </div>
                                <div class="mil-description">
                                    <div class="mil-card-title">
                                        <p class="mil-category mil-text-sm mil-mb-15 projecttitle"> {{ $portfolio->heading }}</p>
                                        <p class="mil-text-justify projectdesc">{{ $portfolio->description }}.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{-- <div style="width: 100vw; height: 100vh; background: rgba(0 , 0, 0, 0.8); position: fixed;" id="modalCloseWindow" onclick=""></div> --}}
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
<!-- events end -->


<script>
    document.addEventListener('DOMContentLoaded', function() {
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

            const img = item.querySelector('.projectimg').getAttribute('src');
            const title = item.querySelector('.projecttitle').textContent;
            const desc = item.querySelector('.projectdesc').textContent;
            const link = item.querySelector('.projectlink').getAttribute('link');

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
            item.addEventListener('click', function() {
                console.log(item)
                const visibleItems = getVisibleItems();
                const realIndex = visibleItems.indexOf(item);
                showModal(realIndex);
            });
        });

        // Modal controls
        modalClose.addEventListener('click', hideModal);
        modalNext.addEventListener('click', () => navigateModal('next'));
        modalPrev.addEventListener('click', () => navigateModal('prev'));

        // $("#modalCloseWindow").click(hideModal)
    });
</script>
