function validatename(input) {
    // Only allow alphabets, numbers, and spaces
    input.value = input.value.replace(/[^a-zA-Z0-9 ]/g, '');
}

function validateemail(input) {
    // Allow only A-Z, a-z, "@" and "."
    input.value = input.value.replace(/[^a-zA-Z@.]/g, '');  // Only A-Z, a-z, "@" and "." allowed, others removed
}
function validatesubject(input) {
    // Allow only A-Z, a-z, "@" and "."
    input.value = input.value.replace(/[^a-zA-Z@.]/g, '');  // Only A-Z, a-z, "@" and "." allowed, others removed
}