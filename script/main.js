let captchaToken = '';

grecaptcha.ready(() => {
  grecaptcha.execute(
    googleSiteKey,
    { action: 'homepage' }
  ).then((token) => {
    captchaToken = token;
  });
});

const getFormParams = () => {
  const message = document.querySelector('[name="message"]').value;

  const formData = new FormData();
  formData.append('message', message);
  formData.append('token', captchaToken);

  return formData;
};

const handleResponse = (data) => {
  let msg = 'Google Captcha failed verification';

  if (data['success'] === true) {
    msg = 'Google Captcha was successfully verified';
  }
  alert(msg);
};

const submitForm = async () => {
  const params = getFormParams();

  const fetchParams = {
    method: 'POST',
    body: params
  };

  const response = await fetch('form.php', fetchParams);
  const data = await response.json();

  handleResponse(data);
};
