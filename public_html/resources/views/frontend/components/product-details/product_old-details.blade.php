{{-- <!-- banner -->
<div class="mil-banner-sm-2 mil-deep-bg">
    <img src="{{ asset('assets/uploads/portfolio/1729626402.jpeg') }}" class="mil-background-image product_details_img"
        style="object-position: center" alt="Publication cover" />
    <div class="mil-overlay"></div>
</div>
<!-- banner end --> --}}

<!-- blog -->
<section class="mil-p-120-120">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-6 mil-mb-60">

                <div class="mil-project-cover">
                    <img src="{{ asset('assets/uploads/portfolio/dashboard2.png') }}" alt="Project">
                </div>

            </div>
            <div class="col-xl-5 mil-mb-60 mt-3">

                {{-- <span class="mil-suptitle mil-suptitle-2 mil-mb-30">The majority have suffered alteration in some form.</span> --}}
                <h3 class="mil-mb-50"><span class="mil-accent">Empowering Workspaces, </span> Simplifying Management
                </h3>
                <p class="mil-mb-50">
                    At {{ $name }}, we specialise in building robust,
                    user-friendly office management software that transforms how
                    businesses operate. Our team is dedicated to solving the
                    complexities of workspace management with innovative solutions
                    that drive productivity. Trusted by leading organisations, we
                    focus on delivering intuitive tools to help companies stay
                    organised and scale efficiently.
                </p>
                {{-- <a href="project.html" class="mil-button-with-label">
                    <div class="mil-button mil-border mil-icon-button"><span><i class="fas fa-plus"></i></span></div><span class="mil-dark">See More</span>
                </a> --}}

            </div>
        </div>
        <div class="row flex-sm-row-reverse justify-content-between">
            <div class="col-xl-6 mil-mb-60">

                <div class="mil-project-cover mil-type-2">
                    <img src="{{ asset('assets/uploads/portfolio/dashboard1.png') }}" alt="Project">
                </div>

            </div>
            <div class="col-xl-5 mil-mb-60 mt-3">

                {{-- <span class="mil-suptitle mil-suptitle-2 mil-mb-30">The majority have suffered alteration in some
                    form.</span> --}}
                <h3 class="mil-mb-50">
                    Key <span class="mil-accent">Features</span>
                </h3>
                <p class="mil-mb-30">
                    {{ $name }} is a powerful tool for managing co-working spaces.
                    It offers a wide range of features that make running these
                    spaces easier. These include tools for managing employees,
                    finances, customer interactions, bookings, invoicing, mail
                    services, and visitors.
                </p>
                <div>
                    <div class="mil-mb-30">1. Human Resource Management</div>
                    <div class="mil-mb-30">2. Customer Relationship Management</div>
                    <div class="mil-mb-30">3. Finance Management System</div>
                    <div class="mil-mb-30">4. Project Management System</div>
                </div>

            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-xl-6 mil-mb-60">

                <div class="mil-project-cover">
                    <img src="{{ asset('assets/uploads/portfolio/dashboard3.png') }}" alt="Project">
                </div>

            </div>
            <div class="col-xl-5 mil-mb-60 mt-3">

                {{-- <span class="mil-suptitle mil-suptitle-2 mil-mb-30">The majority have suffered alteration in some
                    form.</span> --}}
                <h3 class="mil-mb-50">
                    Enhanced Capabilities for <span class="mil-accent"></span>Smarter Performance</span>
                </h3>
                <p class="mil-mb-30">
                    Leverage AI-powered automation, seamless integrations, and multilingual support to enhance your
                    workflow effortlessly.
                </p>
                <div>
                    <div class="mil-mb-30">
                        1. <span class="mil-accent">25+ Payment </span> Gateways
                    </div>
                    <div class="mil-mb-30">
                        2. <span class="mil-accent">10+ Languages</span> Supported
                    </div>
                    <div class="mil-mb-30">
                        3. <span class="mil-accent"> 300+ Integrations </span> – Power Up
                        Your Workflow
                    </div>
                    <div class="mil-mb-30">
                        4. <span class="mil-accent">AI-Powered</span> Dynamic Reports
                    </div>
                    <div class="mil-mb-30">
                        5. AI <span class="mil-accent">Virtual Assistant</span>
                    </div>
                </div>
                {{-- <a href="{{ $url }}" class="mil-button-with-label">
                    <div class="mil-button mil-border mil-icon-button"><span><i class="fas fa-plus"></i></span></div>
                    <span class="mil-dark">See More</span>
                </a> --}}

            </div>
        </div>
        {{-- <div class="mil-divider mil-mb-60"></div> --}}
    </div>
</section>
{{-- <section class="mil-blog mil-p-120-0">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-8 col-xl-8 mil-mb-120 w-full">

                <h3 class="mil-mb-50"><span class="mil-accent">Empowering Workspaces, </span> Simplifying Management</h3>
                <p class="mil-mb-50">
                    At {{$name}}, we specialise in building robust,
                    user-friendly office management software that transforms how
                    businesses operate. Our team is dedicated to solving the
                    complexities of workspace management with innovative solutions
                    that drive productivity. Trusted by leading organisations, we
                    focus on delivering intuitive tools to help companies stay
                    organised and scale efficiently.
                </p>

                <h3 class="mil-mb-50">
                    Key <span class="mil-accent">Features</span>
                </h3>
                <p class="mil-mb-50">
                    {{$name}} is a powerful tool for managing co-working spaces.
                    It offers a wide range of features that make running these
                    spaces easier. These include tools for managing employees,
                    finances, customer interactions, bookings, invoicing, mail
                    services, and visitors.
                </p>

                <h4 class="mil-mb-30 mil-h5">1. Human Resource Management</h4>
                <p class="mil-mb-50">
                    {{$name}} is designed to improve efficiency across multiple
                    locations, helping create a dynamic and collaborative community.
                    Whether you're an owner, manager or member, {{$name}}
                    simplifies tasks, boosts productivity, and enhances the overall
                    co-working experience.
                </p>

                <h4 class="mil-mb-30 mil-h5">2. Customer Relationship Management</h4>
                <p class="mil-mb-50">
                    {{$name}} is designed to improve efficiency across multiple
                    locations, helping create a dynamic and collaborative community.
                    Whether you're an owner, manager or member, {{$name}}
                    simplifies tasks, boosts productivity, and enhances the overall
                    co-working experience.
                </p>

                <h4 class="mil-mb-30 mil-h5">3. Finance Management System</h4>
                <p class="mil-mb-50">
                    {{$name}} is designed to improve efficiency across multiple
                    locations, helping create a dynamic and collaborative community.
                    Whether you're an owner, manager or member, {{$name}}
                    simplifies tasks, boosts productivity, and enhances the overall
                    co-working experience.
                </p>

                <h4 class="mil-mb-30 mil-h5">4. Project Management System</h4>
                <p class="mil-mb-50">
                    {{$name}} is designed to improve efficiency across multiple
                    locations, helping create a dynamic and collaborative community.
                    Whether you're an owner, manager or member, {{$name}}
                    simplifies tasks, boosts productivity, and enhances the overall
                    co-working experience.
                </p>

                <h3 class="mil-mb-30">
                    <span class="mil-accent"> 25+ Payment </span> Gateways
                </h3>

                <p class="mil-mb-30">
                    {{$name}} offers seamless integration with 25+ payment
                    gateways, ensuring secure and hassle-free transactions for
                    businesses of all sizes. Whether you prefer PayPal, Stripe,
                    Razorpay, Square, or regional payment solutions, we’ve got you
                    covered. Our diverse range of payment options allows you to
                    accept payments globally with multiple currencies, boosting your
                    customer reach and revenue.
                </p>

                <h3 class="mil-mb-30">
                    <span class="mil-accent"> 10+ Languages</span> Supported
                </h3>

                <p class="mil-mb-30">
                    {{$name}} is designed to break language barriers and help
                    you connect with users worldwide. With support for 10+
                    languages, you can deliver a localized experience to customers,
                    making navigation, communication, and transactions easier.
                </p>

                <h3 class="mil-mb-30">
                    <span class="mil-accent"> 300+ Integrations </span> – Power Up
                    Your Workflow
                </h3>

                <p class="mil-mb-30">
                    {{$name}} seamlessly connects with 300+ integrations,
                    enabling you to enhance productivity and streamline your
                    operations. Whether you need CRM tools, marketing automation,
                    project management, payment gateways, or e-commerce solutions,
                    our extensive integration library ensures that {{$name}}
                    fits perfectly into your existing ecosystem.
                </p>
                <div class="row mil-mb-30">
                    <div class="col-xl-6 mil-mb-30">
                        <img src="{{ asset('assets/uploads/portfolio/dashboard1.png') }}" alt="blog" class="mil-post-image" />
                    </div>
                    <div class="col-xl-6 mil-mb-30">
                        <img src="{{ asset('assets/uploads/portfolio/dashboard2.png') }}" alt="blog" class="mil-post-image" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
