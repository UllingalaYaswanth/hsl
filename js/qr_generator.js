function generateqr(){
    console.log("generate QR code called");
    if (validateForm()) {
      console.log("Form is valid");
    var firstName = document.getElementById('firstName').value;
    var lastName = document.getElementById('lastName').value;
    var empId = document.getElementById('empId').value;
    var dept = document.getElementById('dept').value;
    var  aadhaar= document.getElementById('aadhar').value;
    var address = document.getElementById('address').value;
    // var gender = document.getElementById('gender').value;
    var dob = document.getElementById('dob').value;
    var mobile = document.getElementById('mobile').value;
    var email = document.getElementById('email').value;
    var bloodGroup = document.getElementById('bloodGroup').value;
    var image = document.getElementById('image-upload').value;

    console.log('First Name: ' + firstName);
    console.log('Last Name: ' + lastName);
    console.log('EmpId: ' + empId);
    console.log('dept: ' + dept);
    console.log('Aadhar: ' + aadhar);
    console.log('Address: ' + address);
    // console.log('Gender: ' + gender);
    console.log('Dob: ' + dob);
    console.log('Mobile Number: ' + mobile);
    console.log('Email: ' + email);
    console.log('BloodGroup: ' + bloodGroup);
    console.log('image-upload: ' + image);

    var url = "https://chart.googleapis.com/chart?cht=qr&chs=200x200&chl=First%20Name:%20" + firstName + "%0ALast%20Name:%20" + lastName + 
    "%0AEmpId:%20" + empId + "%0ADept:%20" + dept +
    "%0A%20Aadhar: %20" + aadhar + "%0Address:%20" + address +
    "%0ADob:%20" + dob + "%0AMobile Number:%20" + mobile +
    "%0AEmail:%20" + email + "%0ABlood Group :%20" + bloodGroup +
    "%0AImage:%20" + image ;
    // var ifr = `<iframe src="${url}"height="200" width="200"></iframe>`;
    // document.getElementById('qrcode').innerHTML = ifr;
    var redirectURL = 'qr.html?qrcode=' + encodeURIComponent(url);

    // Redirect to another_page.html with the QR code data as a query parameter
    window.location.href = redirectURL;
    }
    else{
      console.log("form is not valid");
    }

  }