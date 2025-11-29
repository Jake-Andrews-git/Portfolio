<section id="contact" class="section-padding">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-5">
                <p class="text-uppercase text-primary fw-semibold mb-2">Contact</p>
                <h3 class="section-title">Let’s build something</h3>
                <p class="text-body-secondary fs-5">
                    I’m currently seeking software development placements and internships. Send a message with
                    what you’re working on, and I’ll get back to you as soon as I can.
                </p>
            </div>
            <div class="col-lg-7">
                <article class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <form action="/contact/submit" method="POST" novalidate>
                            <div class="mb-3">
                                <label class="form-label" for="name">Name</label>
                                <input class="form-control" type="text" id="name" name="name" placeholder="Your full name" required minlength="2">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="email">Email</label>
                                <input class="form-control" type="email" id="email" name="email" placeholder="you@example.com" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="message">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="5" placeholder="How can I help?" required minlength="10"></textarea>
                            </div>
                            <div class="d-grid d-md-flex justify-content-md-end">
                                <button class="btn btn-primary btn-lg" type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

