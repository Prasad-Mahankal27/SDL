// function validateForm() {
//     const firstName = document.getElementById('firstName').value.trim();
//     const lastName = document.getElementById('lastName').value.trim();
//     const email = document.getElementById('email').value.trim();
//     const password = document.getElementById('psw').value.trim();
//     const repeatPassword = document.getElementById('psw-repeat').value.trim();
//     const dob = document.getElementById('dob').value.trim();
//     const phone = document.getElementById('phone').value.trim();
//     const country = document.getElementById('country').value.trim();
//     const state = document.getElementById('state').value.trim();
//     const city = document.getElementById('city').value.trim();
//     const pincode = document.getElementById('pincode').value.trim();

//     // Validate First Name and Last Name (only letters and spaces)
//     function isValidName(name) {
//         for (let char of name) {
//             const charCode = char.charCodeAt(0);
//             if (!(charCode >= 65 && charCode <= 90) && // A-Z
//                 !(charCode >= 97 && charCode <= 122) && // a-z
//                 charCode !== 32) { // Space
//                 return false;
//             }
//         }
//         return true;
//     }

//     if (!isValidName(firstName)) {
//         alert('First Name should contain only letters and spaces.');
//         return false;
//     }

//     if (!isValidName(lastName)) {
//         alert('Last Name should contain only letters and spaces.');
//         return false;
//     }

//     // Validate Email (basic check for @ and .)
//     if (!email.includes('@') || !email.includes('.')) {
//         alert('Please enter a valid email address.');
//         return false;
//     }

//     // Validate Password and Repeat Password
//     if (password.length < 8) {
//         alert('Password must be at least 8 characters long.');
//         return false;
//     }

//     if (password !== repeatPassword) {
//         alert('Passwords do not match.');
//         return false;
//     }

//     // Validate Date of Birth (must be a valid date)
//     if (!dob) {
//         alert('Please enter your Date of Birth.');
//         return false;
//     }

//     // Validate Phone Number (only numbers and 10 digits)
//     if (phone.length !== 10 || isNaN(phone)) {
//         alert('Phone Number must be 10 digits.');
//         return false;
//     }

//     // Validate Country, State, City, Pincode (not empty)
//     if (!country || !state || !city || !pincode) {
//         alert('Please fill in all address fields.');
//         return false;
//     }

//     // Validate Pincode (only numbers and 6 digits)
//     if (pincode.length !== 6 || isNaN(pincode)) {
//         alert('Pincode must be 6 digits.');
//         return false;
//     }

//     // If all validations pass
//     alert('Form submitted successfully!');
//     return true;
// }