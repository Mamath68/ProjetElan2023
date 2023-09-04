<form id="fs-frm" name="simple-contact-form" accept-charset="utf-8" action="https://formspree.io/f/maygwjny"
    method="post">
    <div class="pb-3 text-center contact">
        <fieldset id="fs-frm-inputs">
            <label for="full-name">Votre Nom</label>
            <input class="text-center" type="text" name="name" id="full-name" placeholder="Votre Nom ?" required>
            <label for="email-address">Votre Email</label>
            <input class="text-center" type="email" name="_replyto" id="email-address" placeholder="exemple@email.com"
                required>
            <label for="message">Votre Message</label>
            <textarea rows="5" class="text-center" name="message" id="message" placeholder="Votre Appréciation"
                required></textarea>
            <input type="hidden" name="_subject" id="email-subject" value="Contact Form Submission">
            <input type="submit" class="btn btn-primary rounded mt-2" value="Envoyer">
        </fieldset>
    </div>
</form>