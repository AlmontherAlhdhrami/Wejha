document.addEventListener('DOMContentLoaded', () => {
    const feedbackForm = document.getElementById('feedback-form');
    
    feedbackForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission
        
        // Validation for Name
        let name = this.elements['name'].value;
        if (!name.match(/[A-Za-z ]{3,}/)) {
            window.alert('Name should only contain letters and be at least 3 characters long ok???????');
            return;
        }
        
        // Validation for Email
        let email = this.elements['email'].value;
        if (!email.match(/^\S+@\S+\.\S+$/)) {
            alert('Please enter a valid email address.');
            return;
        }
        
        // Validation for Experience Rating
        let experience = this.elements['experience'];
        let isExperienceSelected = false;
        for (let i = 0; i < experience.length; i++) {
            if (experience[i].checked) {
                isExperienceSelected = true;
                break;
            }
        }
        if (!isExperienceSelected) {
            alert('Please select your overall experience rating.');
            return;
        }

        // If all validations pass
        alert('Thank you for your feedback!');
        this.submit(); // Proceed with the form submission
    });
});
