function previewForm() {
    const firstName = document.getElementById('firstName').value;
    const lastName = document.getElementById('lastName').value;
    const empId = document.getElementById('empId').value;
    const department = document.getElementById('dept').value;
    const aadhar = document.getElementById('aadhar').value;
    const address = document.getElementById('address').value;
    const gender = document.querySelector('input[name="gender"]:checked') ? document.querySelector('input[name="gender"]:checked').value : '';
    const dob = document.getElementById('dob').value;
    const mobile = document.getElementById('mobile').value;
    const email = document.getElementById('email').value;
    const bloodGroup = document.getElementById('bloodGroup').value;

    // Retrieve image data
    const imageDataUrl = document.getElementById('display-image').src;

    // Construct the URL with query parameters
    const previewURL = `preview.html?firstName=${encodeURIComponent(firstName)}&lastName=${encodeURIComponent(lastName)}&empId=${encodeURIComponent(empId)}
    &department=${encodeURIComponent(department)}&aadhar=${encodeURIComponent(aadhar)}&address=${encodeURIComponent(address)}
    &gender=${encodeURIComponent(gender)}&dob=${encodeURIComponent(dob)}&mobile=${encodeURIComponent(mobile)}&email=${encodeURIComponent(email)}
    &bloodGroup=${encodeURIComponent(bloodGroup)}&image=${encodeURIComponent(imageDataUrl)}`;
    
    window.location.href = previewURL;
}