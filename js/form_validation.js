function validateForm() {
    const firstName = document.getElementById('firstName').value;
    const lastName = document.getElementById('lastName').value;
    const empId = document.getElementById('empId').value;
    const dept = document.getElementById('dept').value;
    const aadhar = document.getElementById('aadhar').value;
    const address = document.getElementById('address').value;
    const gender = document.querySelector('input[name="gender"]:checked');
    const dob = document.getElementById('dob').value;
    const mobile = document.getElementById('mobile').value;
    const email = document.getElementById('email').value;
    const bloodGroup = document.getElementById('bloodGroup').value;
  
    if (mobile.length !== 10 || isNaN(mobile)) {
      alert("Mobile number should be 10 digits.");
      return false;
    }
  
    const dobDate = new Date(dob);
    const currentDate = new Date();
  
    return true;  // If all conditions pass, the form is considered valid
  }
  
    
  function hideCameraOverlay() {
        const cameraOverlay = document.querySelector('#camera-overlay');
        const cameraFeed = document.querySelector('#camera-feed');
  
        // Hide the camera overlay and stop the video stream
        cameraOverlay.style.display = 'none';
        if (cameraFeed.srcObject) {
          const tracks = cameraFeed.srcObject.getTracks();
          tracks.forEach(track => track.stop());
          cameraFeed.srcObject = null;
        }
      }