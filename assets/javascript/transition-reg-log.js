//transition entre "create account" et le "login"
document.addEventListener('DOMContentLoaded', () => {
  const container = document.getElementById('container');
  const loginButton = document.getElementById('signIn');
  const signupButton = document.getElementById('signUp');

  function updateURL(view) {
    const baseUrl = window.location.origin;
    const newUrl = baseUrl + '/' + view;

    window.history.replaceState({ path: newUrl }, '', newUrl);
  }

  loginButton.addEventListener('click', () => {
    container.classList.remove('right-panel-active');
    updateURL('test');
  });

  signupButton.addEventListener('click', () => {
    container.classList.add('right-panel-active');
    updateURL('test1');
  });

  // Initialiser la vue en fonction de l'URL actuelle
  const currentUrl = window.location.href;
  const view = currentUrl.substring(currentUrl.lastIndexOf('/') + 1);

  if (view === 'test1') {
    container.classList.add('right-panel-active');
  } else {
    container.classList.remove('right-panel-active');
  }
});
