function validateForm() {
    var inputText = document.getElementById('inputText').value;
    var senderContact = document.getElementById('senderContact').value;
    var fileInput = document.getElementById('fileInput').value;

    if (inputText.trim() === '' && senderContact.trim() === '' && fileInput.trim() === '') {
      alert('Please enter text, sender contact, and upload a file before submitting.');
      return false;
    }
    return true;
  }