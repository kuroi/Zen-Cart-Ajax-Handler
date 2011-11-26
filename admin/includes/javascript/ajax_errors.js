function processError(response) {
  if (response.error = 'logged-out') {
    window.location.replace(response.redirect);
  }
}
