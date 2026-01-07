/**
 |
 | Live Gold Form
 |
 |
 */
$(function () {

    // Imports
    let BFSForm = window.__BFS.exports.BFSForm;

    // Set up the namespace
    window.__BFS = window.__BFS || {};
    window.__BFS.UI = window.__BFS.UI || {};

    let liveGoldForm = new BFSForm(".js_live_gold_form");

    /*
     | Phone number field
     */
    liveGoldForm.addField(
        "phoneNumber",
        [".js_form_input_phone_country_code", ".js_form_input_phone_number"],
        function (values) {
            let [phoneCountryCode, phoneNumberLocal] = values;
            return BFSForm.validators.phoneNumber(
                phoneCountryCode,
                phoneNumberLocal
            );
        }
    );

    /*
     | Submit handler (API + BFS flow)
     */
    liveGoldForm.submit = async function submit(data) {

        let phone = data.phoneNumber;

        // ---- EXISTING BFS / CUPID LOGIC (UNCHANGED) ----
        let person = Cupid.getCurrentPerson(phone);
        person.setSourcePoint("Live Gold Form");

        Cupid.logPersonIn(person, { trackSlug: "live-gold-form" });

        let interest = "Live Gold Rate";
        if (!person.hasInterest(interest)) {
            person.setInterests(interest);
            Cupid.savePerson(person);
            PersonLogger.registerInterest(person);
        }

        const sessionDurationLimit =
            window.__BFS.CONF.goldRates.sessionDurationLimit;

        if (
            person.sessionHasExpiredOrNotEvenBegun(
                "liveGoldRate",
                sessionDurationLimit
            )
        ) {
            person.startSession("liveGoldRate");
        }

        // ---- API CALL ----
        const formData = new FormData();
        formData.append("mobile", phone);

        const response = await fetch("/cms/wp-content/themes/braun/sell-gold-lead.php", {
            method: "POST",
            body: formData
        });

        const result = await response.json();

        if (!result.success) {
            throw new Error(result.message || "Submission failed");
        }

        // ✅ SUCCESS → allow BFS flow to continue
        return Promise.resolve();
    };

    /*
     | Form submission handler
     */
    $(document).on("submit", ".js_live_gold_form", function (event) {

        event.preventDefault();

        liveGoldForm.disable();
        liveGoldForm.giveFeedback("Sending...");

        let data;
        try {
            data = liveGoldForm.getData();
        } catch (error) {
            alert(error.message);
            console.error(error.message);
            liveGoldForm.enable();
            liveGoldForm.fields[error.fieldName].focus();
            liveGoldForm.setSubmitButtonLabel();
            return;
        }

        liveGoldForm
            .submit(data)
            .then(window.__BFS.runUserFlow)
            .catch(function (error) {
                alert(error.message);
                liveGoldForm.enable();
                liveGoldForm.setSubmitButtonLabel();
            });
    });

});
