const scriptURL =                       
"https://script.google.com/macros/s/AKfycbwEbx6DP327JErZcYf-YJY4lqyUL0RmotLSr6yvg4YhsnItWs6ZUUQrpUqzM_aZXzfu/exec";
const form = document.forms["submit-to-google-sheet"];
form.addEventListener("submit", (e) => {
  e.preventDefault();
  var formData = new FormData(form);

  const now = new Date();
  formData.append("submissionDate", now.toLocaleDateString());
  formData.append("submissionTime", now.toLocaleTimeString());

  fetch(scriptURL, { method: "POST", body: formData })
    .then((response) => {
      alert("Done", "Submitted Successfully.", "success");
    })
    .catch((error) => {
      alert("Error", "Something went wrong. please try again!", "error");
    });
});


const script1URL =                       
"https://script.google.com/macros/s/AKfycbyYEFtuNtL_MOT7qAwPw-W_94PGKnsZEYZlEVg37aC-H2_-dWvqKwYnNnZZT45xHvxApA/exec";
const form1 = document.forms["submit-to-google-sheet1"];
form1.addEventListener("submit", (e) => {
  e.preventDefault();
  var formData = new FormData(form1);

  const now = new Date();
  formData.append("submissionDate", now.toLocaleDateString());
  formData.append("submissionTime", now.toLocaleTimeString());
 

  fetch(script1URL, { method: "POST", body: formData })
    .then((response) => {
      alert("Done", "Submitted Successfully.", "success");
    })
    .catch((error) => {
      alert("Error", "Something went wrong. please try again!", "error");
    });
});