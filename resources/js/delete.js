function deletePost() {
    const response = confirm("are you sure?");
    if (response == true) {

      event.preventDefault();
      document.getElementById('delete-form').submit();
    } else {
      console.log(false);
    }
  }